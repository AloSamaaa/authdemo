<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
     crossorigin="anonymous">
    <title>Auth demo</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-5">
                <h1 class="fw-bold">Register</h1>
                <p>Create our account</p>
                <?php
                    if(isset($_SESSION['error'])){
                        echo '<div class="alert alert-danger" role="alert">
                                '.$_SESSION['error'].'
                              </div>';
                              unset($_SESSION['error']);
                    }
                ?>
                <div class="card p-3">
                    <div class="cardbody">
                        <form action="config/reguser.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">                           
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="conpass" name="conpass">
                        </div>                    
                        <button type="submit" class="btn btn-primary">Create Account</button><br>
                        &nbsp <p><a href='index.php'>Already have account? login here!</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>