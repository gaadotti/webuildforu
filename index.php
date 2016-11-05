<!DOCTYPE html>
<html>
	<head>
		<title>lolBuild</title>

		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/velocity.min.js"></script>
		<script type="text/javascript" src="js/funcoes.js"></script>
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="img/png" href="img/favicon.png">
		
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection"/>
		
		<link href="css/icon.css" rel="stylesheet">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" href="css/estilo.css">
		<script type="text/javascript">
			$( document ).ready(function(){
				$(".button-collapse").sideNav();
			})
		</script>
	</head>
	
	<body>
		<div id="home">
			
			<ul id="slide-out" class="side-nav">
				<li>
					<div class="userView">
						<div class="background" style="background-color: #047bbc">
						</div>
						<a href="#!user"><img class="circle" src="img/yuna.jpg"></a>
						<a href="#!name"><span class="white-text name">John Doe</span></a>
						<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
					</div>
				</li>
				<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
				<li><a href="#!">Second Link</a></li>
				<li><div class="divider"></div></li>
				<li><a class="subheader">Subheader</a></li>
				<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
			</ul>
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons small white-text text-darken-4">menu</i></a>
		</div>
		
		<div id="banner">
		<center><img src="img/Banner.png"></center>
		</div>
		
		<div id="forms">
			<form action="logar.php" method="post" id="logar">
				<center>Login</center>
				<input type="text" name="txtUsuario" placeholder="Usuario"><br>
				<input type="password" name="txtSenha" placeholder="Senha"><br>
				<input type="submit" value="Entrar">
				<div id="linkCadastrar" onclick="mostrarCadastro();">Registar conta</div>
			</form>

			<form action="cadastrar_usuario.php" method="post" id="cadastrar">
				<center>Cadastrar</center>
				<input type="text" name="txtUsuario" placeholder="Usuario"><br>
				<input type="password" name="txtSenha" placeholder="Senha"><br>
				<input type="submit" value="Cadastrar">
			</form>
		</div>
	</body>
</html>