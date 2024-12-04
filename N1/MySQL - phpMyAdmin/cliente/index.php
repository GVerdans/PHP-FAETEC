
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
   <input type="button" value="Novo Cliente" class="btn btn-primary" id="incluir">
  <br> <br>
 </div>


   <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Código do Cliente</th>
        <th scope="col">Nome da Empresa</th>
        <th scope="col">Nome do Contato</th>
        <th scope="col">Cidade</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Telefone</th>
      </tr>
    </thead>
 
      <?php
      include '.\PHP\cliente.php';
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


          <label for="codigo"><b>Insira o Código do Cliente:</b>
            <p><input type="text" placeholder="Código do Cliente" 
            name="codigo" id="codigo"></p>
          </label>
          <br>

          <label for="empresa"><b>Insira o Nome da Empresa:</b>
            <p><input type="text" placeholder="Nome da Empresa" 
            name="empresa" id="empresa"></p>
          </label>
          <br>

          <label for="contato"><b>Insira o Nome do Contanto:</b>
            <p><input type="text" placeholder="Nome do Contato"
            name="contato" id="contato"></p>
          </label>
          <br>

            <label for="cidade"><b>Insira o Nome da Cidade:</b>
              <p><input type="text" placeholder="Cidade" 
              name="cidade" id="cidade"></p>                
            </label>
            <br>

            <label for="email"><b>Insira o E-mail da empresa/contato</b>
              <p><input type="text" placeholder="E-mail" 
              name="email" id="email"></p>                
            </label>
            <br>
          
            <label for="telefone"><b>Insira o Telefone da Empresa/Contato</b>
              <p><input type="text" placeholder="Telefone" 
              name="telefone" id="telefone"></p>                
            </label>
            <br>
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
       <h2 class="modal-title" id="modal-titulo-edicao">Editar Cliente </h2>
      
       <div class="modal-body" id="modal-corpo-edicao" style="background-color: #f8af8c;">

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default"  data-dismiss="modal" name="alterar_cliente"  id="alterar_cliente">Alterar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" id="fechar_alt">Fechar</button>
     </div>
  </div>
</div>
</div>


  
</body>
</html>



