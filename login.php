<?php 
require_once("cabecalho.php");

require_once("dataSource/conecta.php");
require_once("questionarios/questionario/banco-questionario.php");
require_once("tipoSistema/banco-tiposistema.php");



?>
<form action="controller/login/regrasLogin.php" method="post">
	<table class="table">
		<tr>
			<td>Login:</td>
			<td><input class="form-control" name="login" id="login"></input></td>
		</tr>
		<tr>
			<td>Senha:</td>
			<td><input name="senha" class="form-control" type="password"></input></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-primary">Login</input></td>
		</tr>
	</table>
</form>

<?php require_once("rodape.php");?>