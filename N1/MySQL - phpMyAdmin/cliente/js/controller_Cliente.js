$(function(){

	$("#incluir").click(function(){
						
		$(".modal-body").css('background-color','cadetblue');		
		$("#modal-inclusao").modal("show");
	});
	

	$("#inserir_cliente").click(function(){
		var acao = 'inserir';
		var codigo = $("#codigo").val();
		var empresa = $("#empresa").val();
		var contato = $("#contato").val();
		var cidade = $("#cidade").val(); 
						
		$.ajax({
			type:"POST",
			url:"../Controller_Clientes.php",
			data:"acao="+acao+"&codigo="+codigo
			+"&empresa="+empresa+"&contato="+contato+
			"&cidade="+cidade,
			success: function(msg){
				alert(msg);
				$("#modal-inclusao").modal('hide');
				window.location.reload();}
			});		
		});


		$(".excluir_cliente").click(function(){				
			var acao = 'excluir'
			var IdCliente = $(this).attr("id");		
			if(confirm("Confirma a Exclusão ?"))
			{
				$.ajax({
				type:"GET",
				url:"../Controller_Clientes.php",
				data:"acao="+acao+"&IdCliente="+IdCliente,
				success: function(msg){
					alert(msg);
					window.location.reload();					
					}
				});				
			}
			});
			
			
			

			$("#alterar_cliente").click(function(){
				var acao = 'alterar';
				var idcliente = $("#IdCliente").val();
				var codigo = $("#CodigoDoCliente").val();
				var empresa = $("#NomeDaEmpresa").val();
				var contato = $("#NomeDoContato").val();
				var cidade = $("#NomeDaCidade").val(); 
			
				$.ajax({
					type:"POST",
					url:"../Controller_Clientes.php",
					data:"acao="+acao+"&idcliente="+idcliente+"&codigo="+codigo
					+"&empresa="+empresa+"&contato="+contato+"&cidade="+cidade,
					success: function(msg){
						alert(msg);						
						window.location.reload();
						}
					});							
				});


				$(".editar_cliente").click(function(){			
					var acao = 'editar';			
					var IdCliente = $(this).attr("id");			
						$.ajax({
						type:"GET",
						url:"../Controller_Clientes.php",
						data:"acao="+acao+"&IdCliente="+IdCliente,
						success: function(msg){
							$("#modal-edicao").modal('show');
							$("#modal-corpo-edicao").html(msg);
							}
						});	
					});
					
	
});
