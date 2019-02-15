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
            <form action="crud.php" method="post">
                <table border="1">
                    <tbody>
                    <tr>
                        <td>Nome: </td>
                        <td><input type="text" name="nome" id=""></td>
                    </tr>
                    <tr>
                        <td>Nascimento: </td>
                        <td><input type="date" name="nascimento" id=""></td>
                    </tr>
                    <tr>
                        <td>Telefone: </td>
                        <td><input type="number" name="telefone" id=""></td>
                    </tr>
                    <tr>
                        <td>Endereço: </td>
                        <td><input type="text" name="endereco" id=""></td>
                    </tr>                  
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Cadastrar" name="cadastrar">
                                <input type="submit" value="Consultar" name="consultar">
                            </td>
                        </tr>
                    </tfoot>                                
                </table>
            </form>
        </center>
    </body>
</html>