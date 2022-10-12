<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD</title>

	<!-- CSS Aqui -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	
    <div class="container mt-5">

        <?php include('alertas.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Filme
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="acoes.php" method="POST">

                            <div class="mb-3">
                                <label>Nome *</label>
                                <input required type="text" name="nome" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Resumo *</label>
                                <input required type="text" name="resumo" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ano *</label>
                                <input required type="number" name="ano" class="form-control">
                            </div>
 	                        <div class="mb-3">
                                <label>Imagem</label>
                                <input type="image" name="imagem" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Complementos</label>
                                <input type="text" name="complementos" class="form-control">
                            </div>  
                            <div class="mb-3">
                                <button type="submit" name="salvar_filme" class="btn btn-primary">Salvar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- JS Aqui -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>