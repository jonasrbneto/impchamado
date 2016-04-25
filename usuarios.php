<?php 
	require_once("validaAcesso.php");
	require_once("cabecalho.php");
	require_once("util/mostra-alerta.php");
	require_once("dataSource/conecta.php");
	require_once("usuario/banco-usuario.php");

	// Só concede acesso a essa página para usuários com nível de acesso igual e 2 ou mais
	verificaUsuario(1);

	$usuarios = listaUsuarios($conexao);
?>

<script language="javascript" type="text/javascript">
    function f_apagar(id) {
    	var apagar = mostraMsgConfirm("divBuscarQuest","Deseja realmente excluir o(a) usuário(a)?", 'apagar_usuario.php?id='+id);
    }
</script>



<form action="novoUsuario.php" method="POST" >
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
        	<div class="page-header text-left">
	            <h2>Usu&aacute;rios</h2>
	        </div>

	        <div id="divBuscarQuest">
			  	<!-- Table -->
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nome</th>
							<th>Login</th>
							<th>E-mail</th>
							<th>Perfil</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($usuarios as $key => $value) {
								if($value['perfil']==1)
									$nivel = 'Administrador';
								else if($value['perfil']==2)
									$nivel = 'Analista';
								else
									$nivel = 'PE';

								echo"<tr>
									<th scope='row'>" .$value['idLogin']. "</th>
									<td>" .$value['nome']. "</td>
									<td>" .$value['login']. "</td>
									<td>" .$value['email']. "</td>
									<td>" .$nivel. "</td>
									<td>
										<a href='#' onclick=f_apagar('".$value['idLogin']."')>
											<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
										</a>
									</td>
								</tr>";
							}
						?>
					</tbody>
				</table>
			</div>

			<br/>

			<button  type="submit" id="botaoNovoUsuario" name="botaoNovoUsuario" class="btn btn-primary">Novo Usu&aacute;rio</button>
		</div>
	</div>
</form>

<?php require_once("rodape.php");?>