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
            <?php
                //De acordo com a opção selecionada no formulário, um método é executado (inserir,consultar,atualizar ou excluir)        
                if(isset($_POST["cadastrar"])) {
                    inserirPessoa();
                } elseif(isset($_POST["consultar"])) {
                    consultarPessoa();
                    header("Location:consultar.php");
                } elseif(isset($_POST["atualizar"])) {
                    atualizarPessoa();    
                } elseif(isset($_POST["excluir"])) {
                    apagarPessoa();
                }
                
                //Função responsável por fazer a conexão com a base de dados
                function bd_open() {
                    $conn = new mysqli("localhost","root","","agenda");                
                    return $conn;
                }

                //Método responsável por inserir um contato
                function inserirPessoa() {
                    $banco = bd_open();
                    mysqli_set_charset($banco,"utf8");
                    $sql = "INSERT INTO pessoa (nome,nascimento,endereco,telefone) VALUES('{$_POST["nome"]}','{$_POST["nascimento"]}','{$_POST["endereco"]}','{$_POST["telefone"]}')";
                    $banco->query($sql);                             
                    $banco->close();
                    header("Location:index.php");
                }
                
                //Método responsável por realizar uma consulta
                function consultarPessoa() {
                    $banco = bd_open();
                    mysqli_set_charset($banco,"utf8");                
                    $sql = "SELECT * FROM pessoa ORDER BY nome";
                    $resultado = $banco->query($sql);
                    $banco->close();                
                    while($row = mysqli_fetch_array($resultado)) {
                        $tabela[] = $row;
                    }
                    return $tabela;
                }

                //Método responsável por realizar uma consulta através de um identificador único
                function consultarIdPessoa($id) {
                    $banco = bd_open();
                    mysqli_set_charset($banco,"utf8");                
                    $sql = "SELECT * FROM pessoa WHERE id = ".$id;
                    $resultado = $banco->query($sql);                
                    $banco->close();
                    $row = mysqli_fetch_assoc($resultado);    
                    return $row;
                }

                //Método responsável por atualizar um contato
                function atualizarPessoa() {
                    $banco = bd_open();
                    mysqli_set_charset($banco,"utf8");
                    $sql = "UPDATE pessoa SET nome = '{$_POST["nome"]}', nascimento = '{$_POST["nascimento"]}', endereco = '{$_POST["endereco"]}', telefone = '{$_POST["telefone"]}' WHERE id = '{$_POST["modificar"]}'";
                    $banco->query($sql);                             
                    $banco->close();                
                    header("Location:index.php");
                }

                //Método responsável por excluir um contato
                function apagarPessoa() {
                    $banco = bd_open();
                    mysqli_set_charset($banco,"utf8");
                    $sql = "DELETE FROM pessoa WHERE id = '{$_POST["deletar"]}'";
                    $banco->query($sql);
                    $banco->close();           
                }
            ?>
        </center>
    </body>
</html>