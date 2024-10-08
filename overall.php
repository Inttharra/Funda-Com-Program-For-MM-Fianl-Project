<?php
    session_start();

    $price = $_POST['price'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $quatity = $_POST['quatity'];
    $shippingOption = $_POST['shipping'];
    $payment = $_POST['payment'];
    $name = $_POST['name'];

    $total = CalculatePrice($shippingOption, $price, $quatity);

    function CalculatePrice($option, $price, $quatity) {
        if ($quatity >= 3) {
            if($option == "overnight") {
                $total = $quatity * $price - ($quatity * $price * 0.05) + 200;
            } else {
                $total = $quatity * $price - ($quatity * $price * 0.05);
            }
        } else {
            if($option == "standard") {
                $total = $quatity * $price + 50;
            } elseif ($option == "expedited") {
                $total = $quatity * $price + 100;
            } else {
                $total = $quatity * $price + 200;
            }
        }
        return $total;
    }
?>

<?php include 'php/data.php'; ?>
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
                <div class="row my-3">
                    <div class="fs-2 text-center" style="color: #402A1E;">Thank you for your order</div>
                </div>
                    <div class="card">
                        <div class="card-header">
                            Order summary
                        </div>
                        <div class="card-body">
                            <div class="card-text mb-1" style="color: #594346;">First Name : <?= $firstname ?></div>
                            <div class="card-text mb-1" style="color: #594346;">Last Name : <?= $lastname ?></div>
                            <div class="card-text mb-1" style="color: #594346;">Address : <?= $address ?></div>
                            <div class="card-text mb-1" style="color: #594346;">Phone Number : +66 <?= $tel ?></div>
                            <div class="card-text mb-1" style="color: #594346;">Email : <?= $email ?></div>
                            <div class="card-text mb-1" style="color: #594346;">Product details : <?= $name ?> </div>
                            <div class="card-text mb-1" style="color: #594346;">Quantity : <?= $quatity ?> unit</div>
                            <div class="card-text mb-1" style="color: #594346;">Price per unit : <?= $price ?> baht</div>
                            <div class="card-text mb-1" style="color: #594346;">Shipping Option : 
                                <?php if($shippingOption == "standard") { echo "Standard Shipping"; } 
                                        elseif ($shippingOption == "expedited") { echo "Expedited Shipping"; }
                                        else { echo "Overnight Shipping"; }
                                ?>
                            </div>
                            <div class="card-text mb-1" style="color: #594346;">Payment Method : 
                                <?php if($payment == "credit") { echo "Credit/debit card ( Fee 7% ) "; }
                                        elseif($payment == "qr") { echo "QR code payment"; }
                                        else { echo "Cash on delivery"; }
                                ?>
                            </div>
                            <div class="card-text fs-4 mb-1" style="color: #A63C4F;">
                                Total price : 
                                <?php   if ($payment == "credit") { 
                                                if(isset($_SESSION['discount'])) {
                                                $discount = $_SESSION['discount'];
                                                $total = $total + ($total * 0.07) - ($total * $discount); echo number_format($total, 2);
                                            } else { 
                                                $total = $total + ($total * 0.07) ; echo number_format($total, 2); 
                                            } 
                                        } else { 
                                            if(isset($_SESSION['discount'])) {
                                                $discount = $_SESSION['discount'];
                                                $total = $total - ($total * $discount);
                                                echo number_format($total, 2);
                                            } else {
                                                echo number_format($total, 2); 
                                            }
                                        }

                                        $orderData = array (
                                            "first_name" => $firstname,
                                            "last_name" => $lastname,
                                            "address" => $address,
                                            "phone_number" => $tel,
                                            "email" => $email,
                                            "quantity" => $quatity,
                                            "product_name" => $name,
                                            "total" => $total,
                                            "status" => "Mark as Not Delivery"
                                        );

                                        $_SESSION['orderData'][] = $orderData;
                                ?>
                                 baht
                            </div>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <a href="index.php" class="btn btn w-100" style="background-color: #594346; color: #F9EFF1;">Back to main page</a>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <a href="guessing_number.php" class="btn btn w-100" style="background-color: #F9EFF1; color: #594346;">play a random number game</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-1 col-sm-1 col-md-1"> </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>