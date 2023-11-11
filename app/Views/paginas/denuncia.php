<div class="container my-3">

    <div class="card">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/pagina.css">

        <div class="card-body">
            <h1 class="my-3 text-center"><?= $dados['titulo'] ?></h1>


            <ul class="list-group list-group-flush">
            
                <li class="list-group-item">
            
                    <div class="card-body">
                        <form id="denunciaForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="tipo_denuncia" class="form-label">Tipo de Denúncia</label>
                                <select class="form-select" id="tipo_denuncia" name="tipo_denuncia" required>
                                    <option value="fauna">Crime contra fauna</option>
                                    <option value="flora">Crime contra flora</option>
                                    <option value="flora">Degradação/Poluição</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="texto_denuncia" class="form-label">Denúncia</label>
                                <textarea class="form-control" id="texto_denuncia" name="texto_denuncia" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="imagem" class="form-label">Enviar Imagem</label>
                                <input class="form-control" type="file" id="imagem" name="imagem">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Enviar Denúncia</button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>