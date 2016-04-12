<?php 
function listaTipoChamados($conexao){

	$categorias = array();
	$query = "select * from tipoChamado";
	$resultado = mysqli_query($conexao, $query);
	while ($categoria = mysqli_fetch_assoc($resultado)) {
		array_push($categorias, $categoria);
	}

	return $categorias;
}



?>