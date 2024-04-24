<?php

session_start();

if(empty($_POST) or (empty($_POST["usuario"]) or(empty($_POST["senha"])))){
   
    print "<script> location.href='index.php';  </script>";

}
include('./dbConfig.php');


$usuario = $_POST["usuario"];
$senha = $_POST["senha"] ;
$hashed_senha = password_hash($senha , PASSWORD_DEFAULT);


$sql = "SELECT * FROM usuarios
        WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

$res =  $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;


if($qtd > 0){
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->nome;
   
    print "<script> location.href='./app/view/dash/dashboard.php'; </script>";
}else{
    print "<script>alert('Usuário e/ou senha incorretos') </script>";
    print "<script> location.href='index.php'; </script>";
}