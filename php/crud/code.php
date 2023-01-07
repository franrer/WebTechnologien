<?php
session_start();
require 'dbConn.php';

if(isset($_POST['save']))
{
    $conn_1 = new mysqli($servername,$username,$state,$dbname);
    $name = mysqli_real_escape_string($conn_1, $_POST['name']);
    $email = mysqli_real_escape_string($conn_1, $_POST['email']);
    $state = mysqli_real_escape_string($conn_1, $_POST['state']);

    $query="INSERT INTO user (username,email,state) VALUES ('$name', '$email', '$state')";
    $query_run= mysqli_query($conn_1, $query);
    if($query_run){
        $_SESSION['message']="User created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else{
        $_SESSION['message']=("User creating failed");

        header("Location: create.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $conn_1 = new mysqli($servername,$username,$state,$dbname);
    $user_id = mysqli_real_escape_string($conn_1, $_POST['user_id']);

    $name = mysqli_real_escape_string($conn_1, $_POST['username']);
    $email = mysqli_real_escape_string($conn_1, $_POST['email']);
    $state = mysqli_real_escape_string($conn_1, $_POST['state']);

    $query = "UPDATE user SET name='$username', email='$email', state='$state', WHERE id='$user_id' ";
    $query_run = mysqli_query($conn_1, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: edit.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: edit.php");
        exit(0);
    }

}

if(isset($_POST['delete']))
{
    $conn_1 = new mysqli($servername,$username,$state,$dbname);
    $user_id = mysqli_real_escape_string($conn_1, $_POST['delete']);

    $query = "DELETE FROM students WHERE id='$user_id' ";
    $query_run = mysqli_query($conn_1, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: crud.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: crud.php");
        exit(0);
    }
}
?>