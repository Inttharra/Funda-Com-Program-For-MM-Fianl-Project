<?php
    session_start();
    if(!isset($_GET['order'])) {
        header('location: order.php');
    }

    if(isset($_GET['delete'])) {
        $key = $_GET['delete'];
        unset($_SESSION['orderData'][$key]);
        echo "<script>alert('Success! The selected data has been deleted'); window.location = 'order.php'</script>";
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
            <div class="col-1"> </div>
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header">Edit Data</div>
                    <div class="card-body">
                        <form action="php/update_data.php" method="post">
                            <?php $data = $_SESSION['orderData']; $id = $_GET['order']; ?>
                            <input type="hidden" name="data[<?= $id ?>][quantity]" value="<?= $data[$id]['quantity']; ?>">
                            <input type="hidden" name="data[<?= $id ?>][product_name]" value="<?= $data[$id]['product_name']; ?>">
                            <input type="hidden" name="data[<?= $id ?>][total]" value="<?= $data[$id]['total']; ?>">
                            <div class="row mb-2">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-label ms-1">First Name</div>
                                    <input type="text" name="data[<?= $id ?>][first_name]" class="form-control" value="<?= $data[$id]['first_name']; ?>">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-label ms-1">Last Name</div>
                                    <input type="text" name="data[<?= $id ?>][last_name]" class="form-control" value="<?= $data[$id]['last_name']; ?>">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-label ms-1">Address</div>
                                    <input type="text" name="data[<?= $id ?>][address]" class="form-control" value="<?= $data[$id]['address']; ?>">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-label ms-1">Phone Number</div>
                                    <div class="input-group mt-2">
                                        <div class="input-group-text">+66</div>
                                        <input type="text" name="data[<?= $id ?>][phone_number]" class="form-control" value="<?= $data[$id]['phone_number']; ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-label ms-1">Email</div>
                                    <input type="email" name="data[<?= $id ?>][email]" value="<?= $data[$id]['email']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="form-label ms-1">Quantity</div>
                                    <input type="text" class="form-control" value="<?= $data[$id]['quantity']; ?>" disabled>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="form-label ms-1">Product Name</div>
                                    <input type="text" class="form-control" value="<?= $data[$id]['product_name']; ?>" disabled>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="form-label ms-1">Total Price ( baht )</div>
                                    <input type="text" class="form-control" value="<?= number_format($data[$id]['total'], 2); ?>" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="form-label ms-1">Status</div>
                                        <select name="data[<?= $id ?>][status]" class="form-select">
                                            <?php if($data[$id]['status'] == "Mark as Delivered") { ?>
                                                <option value="<?= $data[$id]['status'] ?>"><?= $data[$id]['status'] ?></option>
                                                <option value="Mark as Not Delivery">Mark as Not Delivery</option>
                                            <?php } else { ?>
                                                <option value="<?= $data[$id]['status'] ?>"><?= $data[$id]['status'] ?></option>
                                                <option value="Mark as Delivered">Mark as Delivered</option>
                                            <?php } ?>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" value="Submit" class="btn btn w-100" style="background-color: #594346; color: #F9EFF1;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        product name, quatity and total price can not change!!
                    </div>
                </div>
            </div>
            <div class="col-1"> </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>

<!-- <option value="Mark as Delivered">Mark as Delivered</option>
                                            <option value="Mark as Not Delivery">Mark as Not Delivery</option> -->