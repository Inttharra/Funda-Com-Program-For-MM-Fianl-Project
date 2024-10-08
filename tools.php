<?php include 'php/data.php'; 
        session_start();
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
                <div class="row my-4">
                    <div class="fs-3 text-center">Tools</div>
                </div>
                <div class="row">
                    <?php foreach($Tools as $Tools) { ?>
                        <div class="col-12 col-sm-12 col-md-4 mt-2">
                            <div class="card mb-2">
                                <img src="pic/<?= $Tools['name']; ?>.jpg" alt="">
                                <div class="card-body">
                                    <div class="card-title fs-5"><?php if($Tools['name'] == "lash") { echo "eyelash curler"; } else { echo $Tools['name']; }?></div>
                                    <div class="card-text mb-2">price : <?php if($Tools['name'] == "brush") { echo number_format($Tools['price']-($Tools['price']*0.2), 0); } else { echo $Tools['price']; } ?> Baht <?php if($Tools['name'] == "brush") { echo "( 20% discount from" . $Tools['price'] . " baht )"; } ?></div>
                                    <a href="toolsdetails.php?name=<?= $Tools['name']; ?>" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-1 col-sm-1 col-md-1"> </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>