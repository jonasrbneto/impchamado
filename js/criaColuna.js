function iniciaColuna(nomeTable, descricaoLinha, camposMarcados){

	tabela = $("#"+nomeTable).append("<tr></tr>");
	tabela = 	$("#"+nomeTable+" tr");
	tabela.append("<th>"+descricaoLinha+"</th>");
	for(i = 0; i < camposMarcados.length; i++){
		tabela.append("<th>"+camposMarcados[i]+"</th>");
	}
}



function criaColuna(nomeTable, nomeColuna, descricaoLinha, camposMarcados){

	tabela = $("#"+nomeTable).append("<tr id='"+nomeColuna+"'></tr>");
	tabela = 	$("#"+nomeColuna);
	tabela.append("<td>"+descricaoLinha+"</td>");
	for(i = 0; i < camposMarcados.length; i++){
		tabela.append("<td><input type='checkbox'name='"+camposMarcados[i]+nomeColuna+"' id='"+camposMarcados[i]+nomeColuna+"' value='"+camposMarcados[i]+nomeColuna+"'></input></td>");
	}	

}

function criaColunaSemCampoMarcado(nomeTable, nomeColuna, complementoColuna, descricaoLinha){

	var nomeTr = nomeColuna + complementoColuna;
	tabela = $("#"+nomeTable).append("<tr id='"+nomeTr+"'></tr>");
	tabela = 	$("#"+nomeTr);
	tabela.append("<td>"+descricaoLinha+"</td>");	
	tabela.append("<td><input type='checkbox' id='"+nomeColuna+"' value='"+nomeColuna+"' name='"+nomeColuna+"'></input></td>");
}	


