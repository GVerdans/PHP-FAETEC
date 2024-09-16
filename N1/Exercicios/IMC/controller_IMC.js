$(function() {
    $("#btn_calcular").click(function() {
        let nome = $("#nome").val();
        let peso = $("#peso").val();
        let altura = $("#altura").val();

        // Podem entrar validações aqui
        // console.log(nome, peso, altura)

        if(nome == ""){
            alert('Insira seu nome !');
            return false;
        } else if (peso == ""){
            alert('Insira seu Peso !');
            return false;
        } else if (altura == ""){
            alert('Insira sua Altura !')
            return false;
        }

        if (peso < 0 || altura < 0){
            alert('Insira valores acima de 0 !')
            return false;
        }

        $.ajax({
            type: "POST",
            url: "controller_IMC.php",
            data: `nome=${nome}&peso=${peso} &altura=${altura}`,
            success: function(msg) {
                $("#resultado").html(msg);
            },
        });

        return false;
    });
});