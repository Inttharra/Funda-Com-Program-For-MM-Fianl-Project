<?php 
    include 'php/data.php';
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
    <?php include 'php/navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="fs-2 text-center my-1">Order Management</div>
        </div>
        <div class="row">
                <?php if(!isset($_SESSION['orderData'])) { ?>
                    <div class="fs-4 text-center my-1">Currently have no order at the moment. Please check back later.</div>
                <?php } else { ?>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>first name</th>
                        <th>last name</th>
                        <th>product order</th>
                        <th>total price ( baht )</th>
                        <th>status</th>
                        <th></th>
                    </tr>
                </thead>
                    <tbody>
                        <?php foreach($_SESSION['orderData'] as $i => $order) { ?>
                        <tr>
                            <td><?= $order['first_name']; ?></td>
                            <td><?= $order['last_name']; ?></td>
                            <td><?= $order['product_name']; ?></td>
                            <td><?= number_format($order['total'], 2) ?></td>
                            <td><?php if($order['status'] == "Mark as Not Delivery") { ?> <div class="text-danger"><?= $order['status']; ?></div> <?php } else { ?> <div class="text-success"><?= $order['status']; ?></div> <?php } ?></td>
                            <td>
                                <a href="edit_status.php?order=<?= $i; ?>" class="btn btn-warning">edit</a>
                                <a href="edit_status.php?delete=<?= $i ?>" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                        <?php } }?>
                    </tbody>
                </table>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>