<?php

    if(isset($_POST['submit']))
    {
        include_once('../serve/config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fone = $_POST['fone'];
        $sex = $_POST['gender'];
        $date = $_POST['date'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $address = $_POST['address'];

        $sql = "INSERT INTO users(name, email, password, fone, sex, date, city, state, address) VALUES ('$name', '$email','$password', '$fone', '$sex', '$date', '$city', '$state', '$address')";
        $resul = $conn ->query($sql);

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | HR</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            min-width:500px ;
            max-width:800px ;
        }
        .space{
            padding-bottom: 24px;
            padding-top: 16px;
        }

        .space2{
            padding-bottom: 24px;
            padding-top: 0px;
        }

        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -16px;
            font-size: 12px;
            color: dodgerblue;
        }
        #date{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="?page=save" method="POST">
            <fieldset>
                <legend><strong>Formulario de Clientes</strong></legend>
            <br></br>
                <div class="inputBox space">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="name" class="labelInput">Nome Completo</label>
                </div>
                <div class="inputBox space">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <div class="inputBox space">
                    <input type="password" name="password" id="password" class="inputUser" required>
                    <label for="password" class="labelInput">Senha</label>
                </div>
                <div class="inputBox space">
                    <input type="tel" name="fone" id="fone" class="inputUser" required>
                    <label for="fone" class="labelInput">Telefone</label>
                </div>
                <div class="space2"> 
                    <p>Sexo:</p>
                    <input type="radio" name="gender" id="feminine" value="feminine" required>
                    <label for="feminine">Feminino</label>     
                    <input type="radio" name="gender" id="masculine" value="masculine" required>
                    <label for="masculine">Masculino</label>     
                    <input type="radio" name="gender" id="other" value="other" required>
                    <label for="other">Outro</label>
                </div>
                <div class="space2">
                    <label for="date"><strong>Data de nascimento:</strong></label>
                    <input type="date" name="date" id="date"  required>
                </div>
                <div class="inputBox space">
                    <input type="text" name="city" id="city" class="inputUser" required>
                    <label for="city" class="labelInput">Cidade</label>
                </div>
                <div class="inputBox space">
                    <input type="text" name="state" id="state" class="inputUser" required>
                    <label for="state" class="labelInput">Estado</label>
                </div>
                <div class="inputBox space">
                    <input type="text" name="address" id="address" class="inputUser" required>
                    <label for="address" class="labelInput">Endereço</label>
                </div>
                <input type="submit" name="submit" id="submit" >
            </fieldset>
        </form>
    </div>
</body>
</html>