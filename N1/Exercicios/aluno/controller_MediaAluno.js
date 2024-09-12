$(function() {
    $("#verificar_situacao").click(function() {
        let nome = $("#nome").val();
        let nota1 = $("#nota1").val();
        let nota2 = $("#nota2").val();
        

        // Podem entrar validações aqui
        console.log(nome);
        
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