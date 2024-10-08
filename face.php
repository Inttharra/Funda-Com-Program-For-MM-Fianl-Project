<?php include 'php/data.php'; session_start();?>
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
                    <div class="fs-3 text-center">Face</div>
                </div>
                <div class="row">
                    <div class="fs-5 mb-2">Cushion</div>
                    <?php foreach($Cushion as $cushion) { ?>
                        <div class="col-12 col-sm-12 col-md-3">
                            <div class="card mb-2">
                                <img src="pic/css-n<?= $cushion['color']; ?>.jpg" alt="">
                                <div class="card-body">
                                    <div class="card-title fs-5">No. <?= $cushion['color']; ?></div>
                                    <div class="card-text mb-2">price : <?php echo $cushion['price']; ?> Baht</div>
                                    <a href="facedetails.php?name=<?= $cushion['color']; ?>&t=cushion" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="fs-5 mb-2">Foundation Powder</div>
                    <?php foreach($Foundation as $powder) { ?>
                        <div class="col-12 col-sm-12 col-md-3">
                            <div class="card mb-2">
                                <img src="pic/fdt-<?= $powder['color']; ?>.jpg" alt="">
                                <div class="card-body">
                                    <div class="card-title fs-5">No. <?= $powder['color']; ?></div>
                                    <div class="card-text mb-2">price : <?php echo $powder['price']; ?> Baht</div>
                                    <a href="facedetails.php?name=<?= $powder['color']; ?>&t=powder" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
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