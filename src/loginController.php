<?php 
    //print_r($_REQUEST);
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){

        include_once('../serve/config.php');

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM  users    WHERE email = '$email' and password = '$password'";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['password'] );
            header('Location: login.php');
        }else {

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: system.php');
        }

    }else{
        header('Location: login.php');
    }
?>