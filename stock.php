<?php 
    include 'php/data_admin.php';
    session_start();

    if(isset($_GET['logout'])) {
        session_destroy();
        echo "<script>alert('logout successed'); window.location = 'index.php'</script>";
    }

    if(!isset($_SESSION['admin'])) {
        header('location: login.php');
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
    <?php   include 'php/navbar.php';
            include 'php/data_admin.php'
    ?>
    <div class="container-fluid">
        <div class="row my-1">
            <div class="fs-2 text-center">Stock Management</div>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Add / Subtract</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="php/stock_data.php" method="post">
                    <?php foreach($stock as $item => $quatity) { ?>
                        <tr>
                            <td><?= $item ?></td>
                            <td><?= $quatity ?></td>
                            <td>
                                <input type="number" name="quantity[<?= $item ?>]" value="0" class="form-control">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success" name="action" value="add_<?= $item ?>">Add</button>
                                <button type="submit" class="btn btn-danger" name="action" value="subtract_<?= $item ?>">Subtract</button>
                            </td>
                        </tr>
                    <?php } ?>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>