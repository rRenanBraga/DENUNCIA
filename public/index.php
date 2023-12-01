<?php
include './../app/configuracao.php';
include './../app/Libraries/Rota.php';
include './../app/Libraries/Controller.php';
include './../app/Libraries/Database.php';


$db = new Database;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOME ?> </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    
    
    <link rel="stylesheet" href="<?=URL?>/public/css/pagina.css">   
    <link rel="stylesheet" href="<?=URL?>/public/css/nav.css">   
    <link rel="stylesheet" href="<?=URL?>/public/css/style.css">   
    <link rel="stylesheet" href="<?=URL?>/public/css/artigo.css">   


   
</head>

<body>
    <?php
    include '../app/views/nav.php';
    $rotas = new Rota();
    include '../app/views/footer.php';
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script  src="<?=URL?>/public/js/jquery.funcoes.js"></script>

<script  src="<?=URL?>/public/js/carrosel.js"></script>


</body>
</html>