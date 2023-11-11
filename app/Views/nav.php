<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Lotus</title>
</head>
<body>
    <header id="header" >
        <div class="container">
            <div class="flex">

                <a href="#">LOTUS</a>

                <nav>
                    <ul>
                        <li> <a href="<?=URL?>/app/Views/paginas/home">HOME</a></li>
                        <li> <a href="<?=URL?>/paginas/sobre" data-tooltip="tooltip" title="Sobre O SITE">SOBRE</a></li>
                        <li> <a href="<?=URL?>/paginas/denuncia" data-tooltip="tooltip" title="Sobre O SITE">DENÚNCIA</a></li>
                        </ul>
                </nav>

                <div class="btn-cadastro"> 
                <a href="<?=URL?>/usuarios/cadastro"><button>CADASTRO</button></a>
                </div>

                <div class="mobile-menu mr-30">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        
        <ul class="nav-list">
          <li><a href="<?=URL?>/paginas/norma" data-tooltip="tooltip" title="norma">NORMA AMBIENTAL</a></li>
          <li><a href="<?=URL?>/paginas/progresso" data-tooltip="tooltip" title="progresso">PROGRESSO</a></li>
          <li><a href="<?=URL?>/paginas/orgao" data-tooltip="tooltip" title="orgao">ÓRGÃO</a></li>

        </lu>  


            </div> <!---->
 
        </div> <!--container-->
        
    </header>

    <section class="banner">
        <h1>LOGO</h1> 
        
        <div class="text_banner">
            <h2> Conheça o lugar que você está visitando </h2>
        </div>
    </section>



    <script src="menu.js"></script>
</body>
</html>