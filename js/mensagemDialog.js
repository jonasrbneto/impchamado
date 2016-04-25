function mostraMsgErro(idTablePosition,MSG){

	$("#mensagemErro").html(MSG);
	$("#divMensagemErro").dialog({
		modal:true,
		position: { my: "top", at: "top center", of: $("#"+idTablePosition) }
	});

} 

function mostraMsgConfirm(idTablePosition,MSG,url){

	$("#mensagemConfirma").html(MSG).css("color", "black");
	$( "#divMensagemConfirma" ).dialog({
      modal:true,
      width:440,
      title:"Confirm",
      position: { my: "top", at: "top center", of: $("#"+idTablePosition)},
      buttons: {
        "Sim": function() {
          window.location.href = url;;
        },
        Cancel: function() {
          $( this ).dialog( "close" );
          
        }
      }
    });
} 


