<?php
    $servidor = "127.0.0.1";
    $user = "root";
    $senha = "";
    $bd = "teste";

    $con = mysqli_connect($servidor,$user,$senha,$bd);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["cadastrar"])){
            $username = $_POST["username"];
            $senha = $_POST["senha"];
            $email = $_POST["email"];

            $sql = "INSERT INTO usuarios (username, senha, email) VALUES ('$username','$senha','$email')";
          
            if(mysqli_query($con,$sql)){
                echo "Cadastro Efetuado";
            } 
            else{
                echo "Erro".mysqli_error( $con );
            }
        }
    }
?>

