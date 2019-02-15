<?php
    include_once("crud.php");
    $row = consultarPessoa(); //Variável contendo os registros da consulta
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
            <table border="1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nascimento</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php                    
                    //Para os registros encontrados na base de dados, os valores são incluídos em cada linha da tabela
                    foreach($row as $tabela) { ?>
                        <tr>
                            <td><?=$tabela["nome"]?></td>
                            <td><?=$tabela["nascimento"]?></td>
                            <td><?=$tabela["telefone"]?></td>
                            <td><?=$tabela["endereco"]?></td>
                            <td>                            
                                <form name = "alterar" action="alterar.php" method="post">                
                                    <input type="hidden" name="id" value="<?=$tabela["id"]?>"><!--Aqui estará o id do contato selecionado, porém não estará visível para o usuário (o mesmo ocorre para a opção excluir)-->                
                                    <input type="submit" value="Editar" name="editar">
                                </form>
                            </td>  
                            <td>
                                <form action="consultar.php" method="post">
                                    <input type="hidden" name="deletar" value="<?=$tabela["id"]?>">
                                    <input type="submit" value="Excluir" name="excluir">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>                    
                </tbody>
            </table>
        </center>
    </body>
</html>