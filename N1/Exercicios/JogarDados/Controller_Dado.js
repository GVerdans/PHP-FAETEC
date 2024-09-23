$(function(){
	
	function mostrarDado(numero)
	{
		return "<img src='images/dado"+numero+".gif' width='100' height='100'>";
	}
	
	//$("#dado1").hide();
	//$("#dado2").hide();

	$("#jogador1").click(function(){
	
		$.ajax({
				type:"POST",
				url:"Controller_Dado.php",	
				data:"acao=jogarDado",						
					success: function(msg)
					{		
								
						$("#dado1").val(msg);	
						$("#jogo1").html(mostrarDado(msg));
					}
				});	
				
	});


	$("#jogador2").click(function(){		
		$.ajax({
				type:"POST",
				url:"Controller_Dado.php",
				data:"acao=jogarDado",
					success: function(msg)
					{						
						$("#dado2").val(msg);
						$("#jogo2").html(mostrarDado(msg));

						var dado1 = $("#dado1").val();
						var dado2 = $("#dado2").val();

						$.ajax({
							type:"POST",
							url:"Controller_Dado.php",
							data:"acao=mostrarResultadoJogoDado&dado1="+dado1+" &dado2="+dado2,							
								success: function(msg)
								{						
									$("#instrucoes").html("<h2>"+msg+"</h2>");				
								}
							});	
						
							
					}
				});	
				
	});
});

