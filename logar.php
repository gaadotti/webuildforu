<?php 
include("conexao.php");

session_start();
$login = $_POST['txtUsuario'];
$senha = $_POST['txtSenha'];

$result = mysqli_query($conn, "SELECT * FROM usuario WHERE nome = '$login' AND senha= '".md5($senha)."'");
echo "SELECT * FROM usuario WHERE nome = '$login' AND senha= '".md5($senha)."'";
if(mysqli_num_rows($result) > 0 ){
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	while($row = mysqli_fetch_array($result)){
		$_SESSION['funcao'] = $row['funcao'];
	}
	header('location:inicio.php');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	unset ($_SESSION['funcao']);
	header('location:index.php');
}

?>