$(function() {
    $("#btn").click(function() {
        let peso = $("#").val();
        let altura = $("#").val();

        // Podem entrar validações aqui

        $.ajax({
            type: "POST",
            url: "controller_IMC.php",
            data: `peso = ${peso} &altura = ${altura}`,
            success: function(msg) {
                $("#resultado").html(msg);
            },
        });

        return false;
    });
});