<?php 
    include_once('../serve/config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];
        $sex = $_POST['sex'];
        $date = $_POST['date'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $address = $_POST['address'];

        $sqlUpdate = "UPDATE users SET name = '$name', email = '$email', fone = '$fone', sex = '$sex', date = '$date', city = '$city', state = '$state', address = '$address' WHERE id = '$id'";

        $result = $conn->query($sqlUpdate);
    }
    header('Location: system.php');
?>