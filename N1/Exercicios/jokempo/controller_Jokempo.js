$(function(){
    $(".jogada").click(function(){
        var minhajogada = $("input[name='jogada']:checked").val();
        
        $.ajax({
            type:"POST",
            url:"controller_Jokempo.php",
            data:"minhajogada="+minhajogada,
            success:function(msg){
                $("#msg_jokempo").html(msg)
            },
        });
    });
});