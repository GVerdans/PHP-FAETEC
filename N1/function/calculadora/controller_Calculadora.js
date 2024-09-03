$(function(){
    $("#botao_calcular").click(function(){
        
        var valor1 = $("#valor1").val();
        var valor2 = $("#valor2").val();
        var operador = $(".op:checked").val();

          // RECEITA DO BOLO
        $.ajax({
            type:"POST", // METHOD
            url:"controller_Calculadora.php", // ACTION
            data:/* "valor1="+valor1+"&valor2="+valor2+"&operacao="+operador, */  `valor1=${valor1} &valor2=${valor2} &operacao=${operador}`, 
            success:function(msg){
                $("#resultado").html(msg);
            },
        });

	return false;

    });
   
});