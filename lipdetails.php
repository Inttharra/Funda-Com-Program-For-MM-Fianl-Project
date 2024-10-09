<?php
    session_start();
    include 'php/data.php';
    $NameOfProduct = $_GET['name'];
    $TypeOfLip = $_GET['t'];

    $NameOfProductResult = PicLocation($NameOfProduct);

    function PicLocation($name) {
        if(in_array($name, array("pink", "orange", "red"))){
            $picname = "gloss-$name.jpg";
        }
        else {
            $picname = "tint-$name.jpg";
        }
        return $picname;
    }

    function discount($name, $array) {
        if(in_array($name, array("orange", "burgundy"))){
            $total = number_format($array - ( $array * 0.2 ), 0);
        } else {
            $total = $array;
        }
        return $total;
    }

    function findProduct($product_name, $product_array) {
        foreach ($product_array as $product) {
            if ($product['name'] == $product_name) {
                return $product;
            }
        }
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
        <?php if(!isset($_GET['name'])) { echo "<script>alert('Can not find the product what you want to order please try again'); window.location = 'lip.php'</script>"; } ?>
        <div class="row">
            <div class="col-1 col-sm-1 col-md-1"> </div>
            <div class="col-10 col-sm-10 col-md-10">
                <div class="card my-5">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <img src="pic/<?= $NameOfProductResult; ?>" alt="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <?php   if($TypeOfLip == "gloss") { $productDetail = findProduct($NameOfProduct, $LipGloss); } 
                                    else if ($TypeOfLip == 'tint') { $productDetail = findProduct($NameOfProduct, $LipTint); } 
                            ?>
                            <div class="card-body">
                                <div class="card-title fs-4"><?php if($TypeOfLip == "gloss") { echo "Lip gloss"; } else { echo "Lip tint"; } ?> <?= $productDetail['name']?> color</div>
                                <div class="card-text mb-1"><?= $productDetail['details']; ?></div>
                                <div class="card-text fs-5 mb-3">Price : <?php $discount = discount($NameOfProduct, $productDetail['price']); echo $discount; ?> Baht
                                </div>
                                <form action="overall.php" method="post">
                                <input type="hidden" name="price" value="<?php $discount = discount($NameOfProduct, $productDetail['price']); echo $discount; ?>">
                                <input type="hidden" name="name" value="<?php if($TypeOfLip == "gloss") { echo "Lip gloss"; } else { echo "Lip tint"; } ?> <?= $productDetail['name']?> color">
                                    <div class="row mb-2">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="form-label">Firstname</div>
                                            <input type="text" name="firstname" class="form-control" required>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="form-label">Lastname</div>
                                            <input type="text" name="lastname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="form-label">Address</div>
                                            <textarea name="address" class="form-control" rows="2" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <span class="form-label">Phone Number</span>
                                            <div class="input-group mt-2">
                                                <div class="input-group-text">+66</div>
                                                <input type="text" name="tel" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="form-label">Email</div>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="form-label">Quatity</div>
                                            <input type="number" name="quatity" class="form-control mb-2" min="1" required>
                                            <div class="form-text">If you order more than or equal 3 pieces, you will get a 5 percent discount and free shipping in standard and expedited option.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="form-label">Shipping Option</div>
                                            <div class="form-check form-check-inline mb-1">
                                                <input type="radio" name="shipping" value="standard"> <label class="form-check-label">Standard ( 50 baht )</label>
                                            </div>
                                            <div class="form-check form-check-inline mb-1">
                                                <input type="radio" name="shipping" value="expedited"> <label class="form-check-label">Expedited ( 100 baht )</label>
                                            </div>
                                            <div class="form-check form-check-inline mb-1">
                                                <input type="radio" name="shipping" value="overnight"> <label class="form-check-label">Overnight ( 200 baht )</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="form-label">Payment Method</div>
                                            <div class="form-check form-check-inline mb-1">
                                                <input type="radio" name="payment" value="credit"> <label class="form-check-label">Credit/debit card</label>
                                            </div>
                                            <div class="form-check form-check-inline mb-1">
                                                <input type="radio" name="payment" value="qr"> <label class="form-check-label">QR code payment</label>
                                            </div>
                                            <div class="form-check form-check-inline mb-1">
                                                <input type="radio" name="payment" value="cash"> <label class="form-check-label">Cash on delivery</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 mb-2">
                                            <input type="submit" value="Buy now" class="btn btn w-100" style="background-color: #594346; color: #F9EFF1;">
                                        </div>
                                    </div>
                                </form>
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