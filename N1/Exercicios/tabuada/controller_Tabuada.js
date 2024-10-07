$(function(){

        let opcoes = '<option value =""></option>';
        for(i = 1 ; i<=10; i++){
            opcoes +=`<option value="${i}"> ${i} </option>`;
        }
        $("#num").html(opcoes);
  

    $("#num").change(function(){
        var num = $(this).val();
        
        // alert(num);

        $.ajax({
            type:"POST",
            url:"controller_Tabuada.php",
            data:`num=${num}`,
            success:function(msg){
                $("#msg_tabuada").html(msg);
            },
        });

    });
});