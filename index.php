<?php
	if (isset ($_POST['btn-enviar'])){
		include_once("controller/LoginController.class.php");
		$controle = new LoginController();
		
		$msg = $controle->logar($_POST);
		echo "<h1>$msg</h1>";
	 }
?>

<!DOCTYPE html>

<html>
	<head>
	<meta charset="UTF-8">
		<title> SALUDYBLO </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/estilo.css" />
	</head>
	<font face="BatangChe">
	<body>
		<div class="container">
			<h1 class="texto-centralizado"> SALUDYBLO</h1>


			<button class="pull-right meu-btn" data-toggle="modal" data-target="#myModal">Cadastre-se </button>
			
			<div class="formulario-login">
				<form method="POST">
					<div class="form-group">
						<label for="login">Login</label>
						<input type="text" name="login" id="login" placeholder="Digite o seu login" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" name="senha" id="senha" placeholder="Digite a sua senha" class="form-control"/>
					</div>
					<input type="submit" name="btn-enviar" id="btn-enviar" value="Logar" 
					class="btn btn-block btn-login">
					
				</form>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"> Cadastre-se </h4>
					</div>
					<form action="cadastro-usuario.php" method="post"> 
						<div class="modal-body">					
							<div class="form-group">
								<label for="nome">Nome</label>
								<input type="text" name="nome" id="nome" placeholder="nome" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="nome">Sobrenome</label>
								<input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" class="form-control"/>
							</div>	
							<div class="form-group">
								<label for="nome">Email</label>
								<input type="text" name="e-mail" id="E-mail" placeholder="E-mail" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="nome">Confirmar E-mail</label>
								<input type="text" name="conf" id="conf" placeholder="Confirmar E-mail" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="nome">Senha</label>
								<input type="password" name="senha" id="senha" placeholder="Senha" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="nome">Confirmar Senha</label>
								<input type="password" name="confsenha" id="confsenha" placeholder="confirmar Senha" class="form-control"/>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-default">Cadastrar</button>
							<button type="reset" class="btn btn-danger" data-dismiss="modal">Fechar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
	</body>
</html>






