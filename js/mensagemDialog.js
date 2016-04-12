function mostraMsgErro(idTablePosition,MSG){

	$("#mensagemErro").html(MSG);
	$("#divMensagemErro").dialog({
		modal:true,
		position: { my: "top", at: "top center", of: $("#"+idTablePosition) }
	});

} 


