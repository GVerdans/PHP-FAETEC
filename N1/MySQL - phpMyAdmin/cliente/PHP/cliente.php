<?php

include 'Conexao.php';

class Cliente{
    public function listarClientes(){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();

        $consulta = 'select * from cliente order by NomeDaEmpresa'; // comandos em MySQL
        $resultado = mysqli_query($con, $consulta) // Envia uma consulta MySQL
        or die ('Falha na execução da consulta !');

        $tabela ='';

        while($linha = mysqli_fetch_assoc($resultado)){ // Obtém uma linha do resultado como um array associativo
            $CodigoDoCliente = $linha['CodigoDoCliente'];
            $NomeDaEmpresa = $linha['NomeDaEmpresa'];
            $NomeDoContato = $linha['NomeDoContato'];
            $Cidade = $linha['Cidade'];
            $email = $linha['email'];
            $Telefone = $linha['telefone'];
            $idCliente = $linha['idCliente'];

            $tabela .="<tr>";
            $tabela .="<td>$CodigoDoCliente</td>";
            $tabela .="<td>$NomeDaEmpresa</td>";
            $tabela .="<td>$NomeDoContato</td>";
            $tabela .="<td>$Cidade</td>";
            $tabela .="<td>$email</td>";
            $tabela .="<td>$Telefone</td>";

            $tabela .= "<td><button type='button' id='$idCliente' class='btn btn-success editar_cliente'>Editar</button>
                        <button type='button' id='$idCliente' class='btn btn-danger excluir_cliente'>Excluir</buton> </td>";
            $tabela .= '</tr>';

        }

        return $tabela;
    } // OK

    public function inserirCliente($CodigoDoCliente, $NomeDaEmpresa, $NomeDoContato, $Cidade, $email, $Telefone){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();


        // $CodigoDoCliente = $_POST;
        // $NomeDaEmpresa = 'Lanches do Gui';
        // $NomeDoContato = 'Guilherme';
        // $Cidade = 'Rio Grande do Sul';
        
        $consultarVerificacao = "SELECT * FROM cliente WHERE CodigoDoCliente = '$CodigoDoCliente'";
        $resultadoVerificacao = mysqli_query($con, $consultarVerificacao);

        if(mysqli_num_rows($resultadoVerificacao) > 0){
            $msg = "Código do Cliente $CodigoDoCliente, já existe !";

        } else {
            
            $consulta = "insert into cliente
            (CodigoDoCliente, NomeDaEmpresa, NomeDoContato, Cidade, email, Telefone)
            values
            ('$CodigoDoCliente', '$NomeDaEmpresa', '$NomeDoContato', '$Cidade', '$email', '$Telefone')";
            
            mysqli_query($con, $consulta)
            or die ('Falha na inserção de Dados na tabela cliente');
            
            $msg = "Dados da empresa $NomeDaEmpresa Adicionados com Sucesso <3 !";
        }
            
            return $msg;
    }

    public function alterarCliente($idCliente, $CodigoDoCliente, $NomeDaEmpresa, $NomeDoContato, $Cidade, $email, $telefone){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();

        $consulta = "UPDATE cliente SET 
        CodigoDoCliente = '$CodigoDoCliente',
        NomeDaEmpresa = '$NomeDaEmpresa',
        NomeDoContato = '$NomeDoContato',
        Cidade = '$Cidade',
        email = '$email',
        telefone = '$telefone'
        WHERE idCliente = $idCliente";
        
        $resultado = mysqli_query($con, $consulta)
        or die ($consulta);
        
        echo ('Dados Alterados com Sucesso !');
    }
    
    public function excluirCliente($idCliente){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();
        
        // $CodigoDoCliente = 'RS01';

        $consulta = "DELETE FROM cliente WHERE idCliente = '$idCliente'";
        
        $resultado = mysqli_query($con, $consulta)
        or die ("Falha na Exclusão !");
        
        $msg = "Exclusão do Registro ($idCliente) Realizada com Sucesso ! ='(";

        return $msg;
    }

    public function selecionarUmCliente($idcliente){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();

        $consulta = "SELECT * FROM cliente WHERE idCliente = '$idcliente'";
        $resultado = mysqli_query($con, $consulta);


        $tabela = "";

            while($linha = mysqli_fetch_assoc($resultado)){
                $tabela .= "<p><input type='hidden' name='idcliente' id ='IdCliente' value ='" . $linha['idCliente'] . "'></p>";

                $tabela .= "<p> <label for='codcliente'><b>Codigo Do Cliente:<br></b>
                <input type='text' name='codcliente' id ='CodigoDoCliente' value ='" . $linha['CodigoDoCliente'] . "'>
                </label></p>";

                $tabela .= "<p> <label for='nomedaempresa'><b>Nome da Empresa:<br></b> 
                <input type='text' id ='NomeDaEmpresa' name='nomedaempresa' value ='" . $linha['NomeDaEmpresa'] . "'> 
                </label></p>";

                $tabela .= "<p><label for='nomedocontato'><b>Nome do Contato:<br></b>
                <input type='text' id ='NomeDoContato' name='nomedocontato' value ='" . $linha['NomeDoContato'] . "'>
                </label></p>";
                
                $tabela .= "<p><label for=''nomedacidade><b>Nome da Cidade:<br></b>
                <input type='text' id ='NomeDaCidade' name='nomedacidade' value ='" . $linha['Cidade'] . "'>
                </label></p>";
                
                $tabela .= "<p><label for='email'><b>Digite o E-mail da Empresa/Contato:<br></b>
                <input type='text' id ='Email' value ='" . $linha['email'] . "'>
                </label></p>";

                $tabela .= "<p><label for='telefone'><b>Digite o Telefone da Empresa/Contato:<br></b>
                <input type='text' id ='Telefone' value ='" . $linha['telefone'] . "'>
                </label></p>";
            }
            
        return $tabela;


    }

}

?>