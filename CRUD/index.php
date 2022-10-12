<?php

session_start();
require 'conection.php';

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

	<div class="container mt-3">

		<?php include('alertas.php'); ?>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header p-3">
						<h4 class="text-center">SISTEMAS DE INFORMAÇÃO - FASE 4
							<a href="create.php" class="btn btn-primary float-end">Adicionar Filmes</a>
						</h4>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Codigo</th>
									<th>Nome  </th>
									<th>Resumo</th>
									<th>Ano</th>
									<th>Imagem</th>
									<th>Complementos</th>
								</tr>
							</thead>
							<tbody>

								<?php 
								$oQuery     = "SELECT * FROM filmes";
								$oQuery_run = mysqli_query($oConexao, $oQuery);

								foreach($oQuery_run as $filme) {
									?>
									<tr>
										<td><?= $filme['codigo'      ]; ?></td>
										<td><?= $filme['nome'        ]; ?></td>
										<td><?= $filme['resumo'      ]; ?></td>
										<td><?= $filme['ano'         ]; ?></td>
										<td><?= $filme['imagem'      ]; ?></td>
										<td><?= $filme['complementos']; ?></td>
										<td>
											<a href="edit.php?codigo=<?= $filme['codigo']; ?>" class="btn btn-success btn-sm">Editar</a>
											<form action="acoes.php" method="POST" class="d-inline">
												<button type="submit" name="delete_filme" value="<?=$filme['codigo'];?>" class="btn btn-danger btn-sm mt-2">Deletar</button>
											</form>
										</td>
									</tr>
									<?php
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS Aqui -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
