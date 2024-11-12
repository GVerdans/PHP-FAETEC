
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery-3.6.0.js"></script>
  <script src="js/controller_Cliente.js"></script>
  <script src="js/bootstrap.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
  
  <link rel="stylesheet" type="text/css" href="css/Clientes.css">
  <title>Cadastro de Clientes</title>
</head>
<body>


<main role="main" class="container">

<div class="starter-template">
  <h1>CVT Quintino - Aulas de php</h1>
  <p class="lead">Projeto PHP com banco de dados
     - Orientado a objetos</p>


 <div id="inclusao">
   <input 
   type="button" 
   value="Novo Cliente" 
   class="btn btn-primary"          
   id="incluir">
  <br> <br>
 </div>


   <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Código do Cliente</th>
        <th scope="col">Nome da Empresa</th>
        <th scope="col">Nome do Contato</th>
        <th scope="col">Cidade</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
 
      <?php
      include '.\PHP\Cliente.php';
      $cliente = new Cliente();
      $listar = $cliente -> listarClientes();
      echo $listar;
      ?>



</table>

  </div>

</div>
</main>

<div class="modal fade" id="modal-inclusao">
 <div class="modal-dialog">
  <div class="modal-content">           
       <h2 class="modal-title">Incluir Cliente</h2>
      <div class="modal-body">

          <p><input type="text" placeholder="Código do Cliente" 
          name="codigo" id="codigo"></p>
          <p><input type="text" placeholder="Nome da Empresa" 
          name="empresa" id="empresa"></p>
          <p><input type="text" placeholder="Nome do Contato"
           name="contato" id="contato"></p>
          <p><input type="text" placeholder="Cidade" 
          name="cidade" id="cidade"></p>                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" 
        data-dismiss="modal" name="inserir_cliente"
         id="inserir_cliente">Inserir</button>              
         <button type="button" class="btn btn-danger" 
         data-dismiss="modal">Fechar</button>
     </div>
  </div>
</div>
</div>

<div class="modal fade" id="modal-edicao">
 <div class="modal-dialog">
  <div class="modal-content">           
       <h2 class="modal-title" 
       id="modal-titulo-edicao">Editar Cliente </h2>
      <div class="modal-body" id="modal-corpo-edicao" style="background-color: cadetblue;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" 
        data-dismiss="modal" name="alterar_cliente" 
        id="alterar_cliente">Alterar</button>
          <button type="button" class="btn btn-default" 
          data-dismiss="modal">Fechar</button>
     </div>
  </div>
</div>
</div>


  
</body>
</html>



