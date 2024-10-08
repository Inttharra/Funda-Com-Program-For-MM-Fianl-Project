<?php
    include 'data_admin.php';

    foreach ($_POST['quantity'] as $item => $quantity) {
        $quantiy = intval($quantity);
        $action = $_POST['action'];

        if(strpos($action, 'add_') === 0){
            $stock[$item] += $quantity;
        } elseif(strpos($action, 'subtract_') === 0) {
            $stock[$item] -= $quantity;
            if($stock[$item] < 0){
                $stock[$item] = 0;
            }
        }
    }

    $stockData = "<?php" . PHP_EOL . "\$stock = " . var_export($stock, true) . ";" . PHP_EOL . "?>";
    file_put_contents('data_admin.php', $stockData);
    echo "<script>alert('the data has been successfully updated'); window.location = '../stock.php'</script>";

?>