<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create User</title>
  </head>
  <body>
    <h1>Register</h1>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Add User
                    <a href="login.php" class="btn btn-danger float-end"> BACK</a>
                    </h4>
                </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <lable>Username</lable>
                                <input type="text" name = "name" class="form-conrol">
                            </div>
                        
                        <div class ="mb-3">
                        <lable>E-Mail</lable>
                        <input type="email" name = "email" class="form-conrol">
                        </div>
                        
                        <div class = "mb-3">
                        <lable>State</lable>
                        <input type="state" name = "state" class="form-conrol">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>