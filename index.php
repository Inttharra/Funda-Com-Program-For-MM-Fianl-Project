<?php 
    include 'php/data.php';
    session_start();

    if(isset($_GET['logout'])) {
        unset($_SESSION['admin']);
        echo "<script>alert('you have successfully logged out of the admin panel.'); window.location = 'index.php'</script>";
    }

    unset($_SESSION['discount']);
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
                <div class="row mb-3">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                            <img src="pic/1.png" class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                            <img src="pic/2.png" class="d-block w-100">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                            <img src="pic/3.png" class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="fs-2 text-center mb-2">Best Seller</div>
                    <div class="col-12 col-sm-12 col-md-4 mb-2">
                        <div class="card">
                            <img src="pic/gloss-<?= $LipGloss['0']['name']; ?>.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title fs-4">Lip gloss <?= $LipGloss['0']['name']; ?> color</div>
                                <div class="card-text mb-2">Price : <?= $LipGloss['0']['price']; ?> baht </div>
                                <a href="lipdetails.php?name=<?= $LipGloss['0']['name']; ?>&t=gloss" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 mb-2">
                        <div class="card">
                            <img src="pic/css-n<?= $Cushion['0']['color']; ?>.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title fs-4">Cushion NO. <?= $Cushion['0']['color']; ?></div>
                                <div class="card-text mb-2">Price : <?= $Cushion['0']['price']; ?> baht </div>
                                <a href="facedetails.php?name=<?= $Cushion['0']['color']; ?>&t=cushion" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 mb-2">
                        <div class="card">
                            <img src="pic/u-tint-<?= $LipTint['0']['name']; ?>.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title fs-4">Lip tint <?= $LipTint['0']['name']; ?> color</div>
                                <div class="card-text mb-2">Price : <?= $LipTint['0']['price']; ?> baht </div>
                                <a href="lipdetails.php?name=<?= $LipTint['0']['name']; ?>&t=tint" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="fs-2 text-center mb-2">Latest Arrivals</div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="card">
                            <img src="pic/<?= $Tools['1']['name']; ?>.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title fs-4"><?= $Tools['1']['name']; ?></div>
                                <div class="card-text mb-2">Price : <?= $Tools['1']['price']; ?> baht </div>
                                <a href="toolsdetails.php?name=<?= $Tools['1']['name']; ?>" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="card">
                            <img src="pic/<?= $Tools['0']['name']; ?>.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title fs-4">
                                    <?php if($Tools['0']['name'] == "lash") { echo "Eyelash curler"; }?>
                                </div>
                                <div class="card-text mb-2">Price : <?= $Tools['0']['price']; ?> baht </div>
                                <a href="toolsdetails.php?name=<?= $Tools['0']['name']; ?>" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="card">
                            <img src="pic/fdt-<?= $Foundation['2']['color'] ?>.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title fs-4">
                                    Foundation powder NO. <?= $Foundation['2']['color'] ?>
                                </div>
                                <div class="card-text mb-2">Price : <?= $Foundation['2']['price']; ?> baht </div>
                                <a href="facedetails.php?name=<?= $Foundation['2']['color']; ?>&t=powder" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="fs-2 text-center mb-2">Flash Sale</div>
                    <div class="col-12 col-sm-12 col-md-4 mb-2">
                        <div class="card">
                            <img src="pic/gloss-<?= $LipGloss['1']['name'] ?>.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title fs-4">Lip gloss <?= $LipGloss['1']['name']; ?> color</div>
                                <div class="card-text mb-2">Price : <?= number_format($LipGloss['1']['price'] - ( $LipGloss['1']['price'] * 0.2 ), 0) ?> baht ( 20% discount from <?= $LipGloss['1']['price']; ?> baht )</div>
                                <a href="lipdetails.php?name=<?= $LipGloss['1']['name']; ?>&t=gloss" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 mb-2">
                        <div class="card">
                            <img src="pic/u-tint-<?= $LipTint['1']['name'] ?>.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title fs-4">Lip tint <?= $LipTint['1']['name']; ?> color</div>
                                <div class="card-text mb-2">Price : <?= number_format($LipTint['1']['price'] - ( $LipTint['1']['price'] * 0.2 ), 0) ?> baht ( 20% discount from <?= $LipTint['1']['price']; ?> baht )</div>
                                <a href="lipdetails.php?name=<?= $LipTint['1']['name']; ?>&t=tint" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 mb-2">
                        <div class="card">
                            <img src="pic/<?= $Tools['2']['name'] ?>.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title fs-4"><?= $Tools['2']['name']; ?></div>
                                <div class="card-text mb-2">Price : <?= number_format($Tools['2']['price'] - ( $Tools['2']['price'] * 0.2 ), 0) ?> baht ( 20% discount from <?= $Tools['2']['price']; ?> baht )</div>
                                <a href="toolsdetails.php?name=<?= $Tools['2']['name']; ?>" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
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