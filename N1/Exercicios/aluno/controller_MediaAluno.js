// AJAX

$(function() {
    $("#verificar_situacao").click(function() {
        let nome = $("#nome").val();
        let nota1 = $("#nota1").val();
        let nota2 = $("#nota2").val();
        

        // Podem entrar validações aqui.

        if (nome == '' || nome == Number(nome)){
            alert ('Isira seu Nome !');
            return false;
        }

        if (nota1 > 10 || nota2 > 10){
            alert('Insira notas entre 1 e 10 !');
            return false;
        }

        if (nota1 == "" || nota2 == ""){
            alert('Digite suas notas !')
            return false;
        }



        // Final das validações.
        
        $.ajax({
            type: "POST",
            url: "controller_MediaAluno.php",
            data: `nome=${nome} &nota1=${nota1} &nota2=${nota2}`,
            success: function(msg) {
                $("#resultado").html(msg);
            },
        });

        return false;
    });
});