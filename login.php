<?php include 'php/data.php';
    session_start();
    if(isset($_SESSION['admin'])) {
        header('location: order.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riry's COSMA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 col-sm-1 col-md-1"> </div>
            <div class="col-10 col-sm-10 col-md-10">
                <div class="fs-2 text-center my-2">Login for Admin</div>
                <div class="card my-2">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="php/login_process.php" method="post">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-label">Username</div>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-label">Password</div>
                                    <input type="password" name="password" class="form-control mb-2" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <input type="submit" value="Login" class="btn btn w-100" style="background-color: #594346; color: #F9EFF1;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        For admin only
                    </div>
                </div>
            </div>
            <div class="col-1 col-sm-1 col-md-1"> </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>