<?php
include('teste.php');
//verifica se existe o email
if(isset($_POST ['email'])){
    
    if(strlen($_POST ['email']) == 0){
        echo "Preencha seu email";
    }

    else{
        //Função pra evitar erros de segurança do php
        //$email = $mysqli->real_escape_string($_POST ['email']);
        $email = mysqli_real_escape_string($conexao, $_POST ['email']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' "; //seleciona tudo do banco de dados
        //* ta pegando tudo da tabela, ou seja, as colunas

        //$sql_query = $mysqli->query($sql_code) or die('Falha na execução');
        $sql_query = mysqli_query($conexao, $sql_code) or die('Falha na execução');

        $quantidade = $sql_query->num_rows; //pega a quantidade
        //$quantidade = $email->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            //guardar o email da sessão do usuario
            $_SESSION['user'] = $usuario['email'];


            header('Location: login.php');
        }
        else{
            echo "Falha ao logar";
        }
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="iconmonstr-twitter-1.svg">
    <title>Entrar no Twitter / Twitter</title>
</head>
<body>
    <div class="twitter">
        
        <div class="title">
            <span>X</span>
            <div><img src="assets/icons8-twitter.svg" class="tt"></div>
            
            <h1>Entrar no Twitter</h1>
        </div>

        
            <div class="buttons">
                
                <button><img src="assets/icons8-google-logo.svg"> Fazer login com o Google</button>
                <button class="fim"><img src="assets/icons8-mac-os.svg">Entrar com Apple</button>
                
                <div class="linhas"><span class="a">aaaaaaaaaaaa</span><span>ou</span><span class="a">aaaaaaaaaaaa</span></div>
            
            </div>
        

            <div class="depois">

                <form action="" method="POST">
                    <input type="text" name="email" id="email" placeholder="Celular, e-mail ou nome de usuário"> 
                        <div class="buttons">
                            <button id="avancar">Avançar</button>
                            <button class="esqueceu">Esqueceu sua senha?</button>

                </form>

                        <span class="final">Não tem uma conta? <a href="#">Inscreva-se</a></span>
                    </div>
            </div>   

            


    </div>


</body>
</html>