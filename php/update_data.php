<?php
    session_start();
        $updatedDate = $_POST['data'];
        foreach ($updatedDate as $key => $data) {
            $_SESSION['orderData'][$key] = $data;
        }
        echo "<script>alert('The data has been successfully updated!!'); window.location = '../order.php'</script>";
        exit();
?>