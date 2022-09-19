<?php

include('./index.php');

if(isset($_POST['cadastrar'])) {
	try{
		$stmt = $conexao->prepare("INSERT INTO filmes (nome, resumo, ano, complementos, imagem) VALUES (:nome,  :resumo, :ano, :complementos, :imagem);");
		$stmt->bindParam(':nome'        , $_POST['nome'        ]);
		$stmt->bindParam(':resumo'      , $_POST['resumo'      ]);
		$stmt->bindParam(':ano'         , $_POST['ano'         ]);
		$stmt->bindParam(':complementos', $_POST['complementos']);
		$stmt->bindParam(':imagem'      , $_POST['imagem'      ]);
		$stmt->execute();
		header('Location: index.php?page=filmes');
	} catch (PDOException $e) {
		echo "<h2 class='danger'> Falha ao tentar cadastrar! Tente novamente. </h2>";
	}
}

?>

<div class="container mb-2">
	<div class="row">
		<h2 class="text-center">Cadastrar Filme:</h2>
		<form method="POST" action="index.php?page=filmes">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label>Nome:</label>
						<input required type="text" class="form-control" name="nome" id="nome"/>
					</div>
					<div class="form-group">
						<label>Resumo:</label>
						<input required type="text" class="form-control" name="resumo" id="resumo"/>
					</div>
					<div class="form-group">
						<label>Ano:</label>
						<input required type="number" class="form-control" name="ano" id="ano"/>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label>Imagem:</label>
						<input required type="text" class="form-control" name="imagem" id="imagem"/>
					</div>
					<div class="form-group">
						<label>Complementos:</label>
						<input type="text" class="form-control" name="complementos" id="complementos"/>
					</div>
				</div>
				<div class="d-grid mt-3">
					<button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
