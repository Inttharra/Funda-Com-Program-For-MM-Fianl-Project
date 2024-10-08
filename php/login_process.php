<?php
    session_start();

    $admin['annie'] = "123456";

    $user = $_POST['username'];
    $password = $_POST['password'];

    foreach ($admin as $username => $pass) {
        if($user == $username && $password == $pass) {
            $_SESSION['admin'] = $user;
            echo "<script>alert('Welcome back'); window.location = '../order.php'</script>";
        } else {
            echo "<script>alert('Your username or password is incorrect please try again'); window.location = '../login.php'</script>";
        } 
    }
?>