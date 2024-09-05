$(function() {
    $("#botao_obter_horario").click(function() {
        var cidade = $("#cidade").val();

        // console.log(cidade);

        $.ajax({
            type: "POST",
            url: "controller_FusoHorario.php",
            data: "cidade=" + cidade,
            success: function(msg) {
                $("#resultado").html(msg);
            },
        });

        return false;
    });
});