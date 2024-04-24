<?php
include ("./dbConfig.php");

switch ($_REQUEST["acao"]) {

    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES ('$nome', '$email', '$usuario', '$senha')";

        $res = $conn->query($sql);

        if ($res === TRUE) {
            echo "<script>alert('Usuário cadastrado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar o usuário');</script>";
            echo "<script>location.href='index.php';</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]); // Evite usar md5 para senhas, considere usar password_hash

        $id = $_REQUEST['id']; // Certifique-se de validar e filtrar a entrada do ID

        $sql = "UPDATE usuarios SET 
                nome = '$nome',
                email = '$email',
                senha = '$senha'
                WHERE id = $id";

        $res = $conn->query($sql);

        if ($res === TRUE) {
            echo "<script>alert('Usuário editado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível editar o usuário');</script>";
            echo "<script>location.href='index.php';</script>";
        }
        break;

    case 'deletar':
        $id = $_REQUEST['id']; // Certifique-se de validar e filtrar a entrada do ID

        $sql = "DELETE FROM usuarios WHERE id = $id";

        $res = $conn->query($sql);

        if ($res === TRUE) {
            echo "<script>alert('Usuário excluído com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível excluir o usuário');</script>";
            echo "<script>location.href='index.php';</script>";
        }
        break;


    
};

$conn->close();
