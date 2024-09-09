$(function () {
    $("#botao_calcular").click(function () {

        var valor1 = $("#valor1").val();
        var valor2 = $("#valor2").val();
        var operador = $(".op:checked").val();

        // alert(`Valor1 = ${valor1}, Valor2 = ${valor2}, Operador = ${operador}`)

        // console.log(`${valor1}, ${valor2}, ${operador}`)
        // return false;
        
        // Validação

        // function isNumber(num){
        //     if (isNaN(num)){
        //         alert('Um dos valores digitados não é um Número !')
        //     }
        //     return false;
        // }

        
        if(isNaN(valor1) || isNaN(valor2)){ // isNaN -> Validação Numérica
            alert('Digite apenas Números !');
            return false;
        }

        if (valor1 == ""){
            alert('Digite o Primeiro Valor !')
            return false;
        }

        if (valor2 == ""){
            alert('Digite o Segundo Valor !')
            return false;
        }

        if (operador == undefined){
            alert('Escolha a Operação !')
            return false;
        }


        // RECEITA DO BOLO
        $.ajax({
            type: "POST", // METHOD
            url: "controller_Calculadora.php", // ACTION
            data:/* "valor1="+valor1+"&valor2="+valor2+"&operacao="+operador, */  `valor1=${valor1} &valor2=${valor2} &operacao=${operador}`,
            success: function (msg) {
                $("#resultado").html(msg);
            },
        });

        return false;

    });

});