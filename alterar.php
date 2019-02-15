<?php
    include_once("crud.php");
    $pessoa = consultarIdPessoa($_POST["id"]); //Variável contendo o id do contato
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">    
        <title>PHP</title>
    </head>
    <body>
        <center>
            <h2>Agenda Pessoal</h2>
            <p><a href="index.php">Voltar</a></p>        
            <form action="crud.php" method="post">
                <table border="1">
                    <!--Cada campo do formulário será preenchido com o valor cadastrado na base de dados-->
                    <tbody>
                    <tr>
                        <td>Nome: </td>
                        <td><input type="text" name="nome" id="" value="<?=$pessoa["nome"]?>"></td>
                    </tr>
                    <tr>
                        <td>Nascimento: </td>
                        <td><input type="date" name="nascimento" id="" value="<?=$pessoa["nascimento"]?>"></td>
                    </tr>
                    <tr>
                        <td>Telefone: </td>
                        <td><input type="number" name="telefone" id="" value="<?=$pessoa["telefone"]?>"></td>
                    </tr>
                    <tr>
                        <td>Endereço: </td>
                        <td><input type="text" name="endereco" id="" value="<?=$pessoa["endereco"]?>"></td>
                    </tr>                  
                    </tbody>
                    <tfoot>
                        <tr>                         
                            <td colspan="2"> 
                                <input type="hidden" name="modificar" value="<?=$pessoa["id"]?>">
                                <input type="submit" value="Atualizar" name="atualizar">                            
                            </td>
                        </tr>
                    </tfoot>                                
                </table>
            </form>         
        </center>
    </body>
</html>