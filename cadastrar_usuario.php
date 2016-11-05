<?php
include("conexao.php");
$sql = "INSERT INTO usuario (nome, senha) VALUES ('".$_POST["txtUsuario"]."', '".$_POST["txtSenha"]."')";

if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>