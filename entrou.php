<?php
    include('teste.php');
    include('protect.php')
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Pagina inicial do Twitter / Twitter</title>
</head>
<body>

    <div class="twitter">
        <header>

            <div class="tt"><img src="assets/icons8-twitter.svg"> <h2>Twitter</h2></div>
            <div class="bem-vindo"><span>Bem vindo ao Twitter,</span> <h4><?php echo $_SESSION['user']; ?></h4></div>

            <div class="opcoes">
                <div class="barras"><img src="assets/casa.png" alt=""><span>Página Inicial</span></div>
                <div class="barras"><img src="assets/hashtag.png" alt=""> <span>Explorar</span></div>
                <div class="barras"><img src="assets/notificacao (1).png" alt=""><span>Notificações</span></div>
                <div class="barras"><img src="assets/aplicativo-de-caixa-de-entrada-de-correio.png" alt=""><span>Mensagens</span></div>
                <div class="barras"><img src="assets/salvar-instagram.png" alt=""><span>Itens salvos</span></div>
                <div class="barras"><img src="assets/perfil.png" alt=""><span>Perfil</span></div>
                <div class="barras"><img src="assets/elipse-de-tres-pontos.png" alt=""><span>Mais</span></div>

                <button>Tweetar</button>
            </div>



            <a href="sair.php">Sair</a>

        </header>

        <div class="centro">
        
            <div class="pagina"><h2>Página Inicial</h2></div>

            <div class="tweetar"> 
                <span>O que está acontecendo?</span>

                <div></div>

                <button>Tweetar</button>
            </div>


            
        </div>
        
        <div class="crossbar">
            
            <input type="search" name="pesquisa" id="pesquisa" placeholder="Buscar no Twitter">

            <div>
                <span>O que está acontecendo</span>
            </div>

        </div>

    </div>




</body>
</html>