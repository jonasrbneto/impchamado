<?php 
require_once("cabecalho.php");

require_once("dataSource/conecta.php");
require_once("questionarios/questionario/banco-questionario.php");
require_once("tipoSistema/banco-tiposistema.php");



?>
<div style="position: absolute; width: 100%; height: 200px; top: 50%; left: 0%; ">
    <div style="position: relative; width: 50%; height: 200px; top: -100px; left:25%;">
        <div class="container text-center" style="position: relative; width: 100%;">
			<form action="validacao.php" method="post" class="form-inline" role="form" name="formLogin">
				<fieldset>
					<legend>Dados de Login</legend>
					<div class="form-group">
						<label for="txUsuario">Usu&aacute;rio:</label>
						<input type="text" name="usuario" class="form-control" id="txUsuario" maxlength="25">
					</div>
					&nbsp;&nbsp;&nbsp;
					<div class="form-group">
						<label for="txSenha">Senha:</label>
						<input type="password" name="senha" class="form-control" id="txSenha" maxlength="25">
					</div>
					<br/><br/>
					<button type="submit" class="btn btn-primary">Entrar</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<?php require_once("rodape.php");?>