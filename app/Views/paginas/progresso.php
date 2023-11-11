<div class="container my-3">

    <div class="card">
        <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/style.css">

        <div class="card-body">
            <h1 class="my-3 text-center"><?= $dados['titulo'] ?></h1>

            <ul class="list-group list-group-flush">
            <li class="list-group-item">
            
        <!-- Adicione as caixas aqui -->
        <div class="progresso">
        <div class="caixa"> 
          <strong>ENCAMINHADA</strong>     
            <div class="caixa-menor"> <strong>EM ANDAMENTO</strong></div>
        </div>
        <div class="caixa"> 
            <strong>ENCAMINHADA</strong>   
            <div class="caixa-menor"> <strong>EM ANDAMENTO</strong></div>
        </div>
        <div class="caixa" > 
            <strong>FINALIZADA</strong>    
            <div class="caixa-menor" style="background-color: green;"> <strong>CONCLUÍDO</strong></div>
        </div>
</div>
      </li>
            </ul>
        </div>
    </div>

</div>
