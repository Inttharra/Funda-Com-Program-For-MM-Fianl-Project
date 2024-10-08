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
                    <div class="fs-3 text-center">Lipstick</div>
                </div>
                <div class="row">
                    <div class="fs-5 mb-2">Lip Gloss</div>
                    <?php foreach($LipGloss as $LipGloss) { ?>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="card mb-2">
                                <img src="pic/gloss-<?= $LipGloss['name']; ?>.jpg" alt="">
                                <div class="card-body">
                                    <div class="card-title fs-5"><?= $LipGloss['name']; ?> color</div>
                                    <div class="card-text mb-2">price : <?php if($LipGloss['name'] == 'orange') { echo number_format($LipGloss['price'] - ( $LipGloss['price'] * 0.2 ), 0); } else { echo $LipGloss['price']; } ?> Baht <?php if($LipGloss['name'] == 'orange') { echo "( 20% discount from " . $LipGloss['price'] . " baht )"; } ?></div>
                                    <a href="lipdetails.php?name=<?= $LipGloss['name']; ?>&t=gloss" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="fs-5 mb-2">Lip Tint</div>
                    <?php foreach($LipTint as $LipTint) { ?>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="card mb-2">
                                <img src="pic/u-tint-<?= $LipTint['name']; ?>.jpg" alt="">
                                <div class="card-body">
                                    <div class="card-title fs-5"><?= $LipTint['name']; ?> color</div>
                                    <div class="card-text mb-2">price : <?php if($LipTint['name'] == 'burgundy') { echo number_format($LipTint['price'] - ( $LipTint['price'] * 0.2 ), 0); } else { echo $LipTint['price']; } ?> Baht <?php if($LipTint['name'] == 'burgundy') { echo "( 20% discount from" . $LipTint['price'] . " baht )"; } ?></div>
                                    <a href="lipdetails.php?name=<?= $LipTint['name']; ?>&t=tint" style="background-color: #594346; color: #F9EFF1;" class="btn btn">Shop now</a>
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