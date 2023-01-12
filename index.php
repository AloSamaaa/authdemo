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
                <h1 class="fw-bold">Login</h1>
                <p>Login to your account</p>
                <?php
                    if(isset($_SESSION['success'])){
                        echo '<div class="alert alert-success" role="alert">
                                '.$_SESSION['success'].'
                              </div>';
                              unset($_SESSION['success']);
                    }
                ?>
                <div class="card p-3">
                    <div class="cardbody">
                        <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>          
                        <button type="submit" class="btn btn-primary">Submit</button>
                         &nbsp <span><a href='register.php'>No account? register here!</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>