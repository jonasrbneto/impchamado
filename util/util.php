<?php 

function retornaValorCheckBox($nomeCampo){
	$usado = null;
	if(array_key_exists($nomeCampo, $_POST)){
		$usado = 1;
	}else{
		$usado = 0;
	}

	return $usado;
}



?>