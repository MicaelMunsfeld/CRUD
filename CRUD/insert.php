<?php 

include('./index.php');

    $sql_insert_filme = "
        INSERT into filmes
        (nome,resumo,ano,complementos)
        values
        (:nome,:resumo,:ano,:complementos)
    ";
    $sql_insert_filme = $conexao->prepare($sql_insert_filme);

    $dados = ([
    	$nome        = $_POST['nome'],
    	$resumo      = $_POST['resumo'],
    	$ano         = $_POST['ano'],
    	$complemento = $_POST['complemento']
    ])


    $sql_insert_filme->execute([
    	$dados
    ]);

?>

<div class="container p-5">
	<form action="" method="POST">
		<div class="row">
			<div class="col-6">
				<div class="col-12">
					<label>Nome</label>
					<input type="text" name="nome" class="form-control">
				</div>
				<div class="col-12">
					<label>Resumo</label>
					<input type="text" name="resumo" class="form-control">
				</div>
			</div>
			<div class="col-6">
				<div class="col-12">
					<label>Ano</label>
					<input type="number" name="ano" class="form-control">
				</div>
				<div class="col-12">
					<label>Complemento</label>
					<textarea class="form-control" name="complemento" rows="4" cols="80"></textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
		</div>
	</form>
</div>