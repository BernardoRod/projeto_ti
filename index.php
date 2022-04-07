<?php

$credentials = [
    [
        "username"  => "admin",
        "password" => "password"
    ],
    [
        "username" => "user",
        "password" => "password"
    ]
];

session_start();

if(isset($_POST['txtUser']) && isset($_POST['txtPassword']) && trim($_POST['txtUser']) && trim($_POST['txtPassword'])){
    foreach($credentials as $c){
        if($_POST['txtUser'] == $c['username'] && $_POST['txtPassword'] == $c['password']){
            $_SESSION["nome_utilizador"] = $_POST['txtUser'];
            header('Location: dashboard.php');
        }
    }
    echo("O utilizador nao existe!");
}

// if(isset($_POST['txtUser']) == $username && isset($_POST['txtPassword']) == $password){
//     //echo("O utilizador foi autenticado com sucesso");
//     $_SESSION["nome_utilizador"] = $_POST['txtUser'];
//     header('Location: dashboard.php');
// }
// else{
//     echo("O utilizador nao existe!");
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Estilos/estilos.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col-md-4">

                <form class="form mt-5" method="POST" action="index.php">
                    <a href="index.php"><img src="img/estg.png" alt="sasd"></a>

                    <div class="form-group">
                        <label for="txtUser" class="form-label">Username:</label>
                        <input type="text" name="txtUser" class="form-control" id="txtUser" required placeholder="Escreva o username">
                    </div>

                    <div class="form-group">
                        <label for="txtPassword" class="form-label">Password:</label>
                        <input type="password" name="txtPassword" class="form-control" required id="txtPassword" placeholder="Escreva a password">
                    </div>

                    <button type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-primary mt-3">Submeter</button>
                </form>

            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>