$(function(){
  // Quando o formulário é enviado
  $(".frutas").click(function(){

    var selecionadas = [];
    $('input[name="frutas[]"]:checked').each(function() {
      selecionadas.push($(this).val());
    });

    // Verifique se há elementos selecionados antes de enviar via AJAX
    if (selecionadas.length > 0) {
      // Envie as frutas selecionadas para o modelo usando AJAX
      $.ajax({
        url: 'controller_Frutas.php',
        type: 'POST',
        data: {frutasSelecionadas: selecionadas},
        success: function(data) {
          // Aqui, você pode fazer algo com a resposta do modelo
          $("#msg_frutas").html(data);
        }
      });
    } else {
      // Lidere com o caso em que nenhum item está selecionado
      alert("Por favor, selecione pelo menos uma fruta.");
      // Você pode optar por exibir uma mensagem de erro ou tomar outra ação apropriada aqui.
    }
  });
});
