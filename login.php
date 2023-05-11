<?php
    include('teste.php');
    

    if(!isset($_SESSION)){
        session_start();
       
      if(isset ($_POST['senha'])){

        if(strlen($_POST ['senha']) == 0){
            echo "Preencha sua senha";
        }
        else{
            $email = mysqli_real_escape_string($conexao, $_SESSION['user']);
            $senha = mysqli_real_escape_string($conexao, $_POST ['senha']);
            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";

            //* ta pegando tudo da tabela, ou seja, as colunas

            $sql_query = mysqli_query($conexao, $sql_code) or die('Falha na execução');

            $quantidade = $sql_query->num_rows;
            //$quantidade = $email->num_rows;

            if($quantidade == 1){

                $usuario = $sql_query->fetch_assoc();

                $_SESSION['user'] = $usuario['email'];


                header('Location: entrou.php');
            }
            else{
                echo "Falha ao logar, email e ou senha incorretos";
            }
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
    <link rel="stylesheet" href="style2.css">
    <title>Entrar no Twitter / Twitter</title>
</head>
<body>
    <div class="twitter">
       

        <div class="title">
            <span>X</span>
            <div><img src="assets/icons8-twitter.svg" class="tt"></div>
            
            <h1>Digite sua senha</h1>
        </div>

        <div class="depois">

            <form action="" method="POST">
                <input type="text" name="email" id="email" autocapitalize="sentences" autocomplete="on" spellcheck="true" value="<?php echo $_SESSION['user']; ?>" disabled> 
                <input type="password" name="senha" id="email" placeholder="Senha">
                    <div class="buttons">
                        <button id="avancar">Avançar</button>
                        <a href="#" class="esqueceu">Esqueceu sua senha?</a>

            </form>

                    <span class="final">Não tem uma conta? <a href="#">Inscreva-se</a></span>
                </div>
        </div>  
    </div>
</body>
</html>