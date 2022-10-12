<?php

session_start();
require 'conection.php';

if(isset($_POST['delete_filme'])) {

    $filme_id  = mysqli_real_escape_string($oConexao, $_POST['delete_filme']);
    $oQuery     = "DELETE FROM filmes WHERE codigo ='$filme_id' ";
    $oQuery_run = mysqli_query($oConexao, $oQuery);

    if($oQuery_run) {
        $_SESSION['alertas'] = "Filme deletado com sucesso";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['alertas'] = "Erro ao deletar o filme";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST['update_filme'])) {

    $filme_id     = mysqli_real_escape_string($oConexao, $_POST['filme_id'    ]);
    $nome         = mysqli_real_escape_string($oConexao, $_POST['nome'        ]);
    $resumo       = mysqli_real_escape_string($oConexao, $_POST['resumo'      ]);
    $ano          = mysqli_real_escape_string($oConexao, $_POST['ano'         ]);
    $imagem       = mysqli_real_escape_string($oConexao, $_POST['imagem'      ]);
    $complementos = mysqli_real_escape_string($oConexao, $_POST['complementos']);

    $oQuery = "UPDATE filmes SET nome='$nome', resumo='$resumo', ano='$ano', imagem='$imagem', complementos='$complementos' WHERE codigo ='$filme_id' ";
    $oQuery_run = mysqli_query($oConexao, $oQuery);

    if($oQuery_run) {
        $_SESSION['alertas'] = "Filme alterado com sucesso";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['alertas'] = "Erro ao deletar o filme";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST['salvar_filme'])) {

    $nome         = mysqli_real_escape_string($oConexao, $_POST['nome'        ]);
    $resumo       = mysqli_real_escape_string($oConexao, $_POST['resumo'      ]);
    $ano          = mysqli_real_escape_string($oConexao, $_POST['ano'         ]);
    $imagem       = mysqli_real_escape_string($oConexao, $_POST['imagem'      ]);
    $complementos = mysqli_real_escape_string($oConexao, $_POST['complementos']);

    $oQuery = "INSERT INTO filmes (nome, resumo, ano, imagem, complementos) VALUES ('$nome', '$resumo', '$ano', '$imagem', '$complementos')";
    $oQuery_run = mysqli_query($oConexao, $oQuery);

    if($oQuery_run) {
        $_SESSION['alertas'] = "Filme adicionado com sucesso";
        header("Location: create.php");
        exit(0);
    } else {
        $_SESSION['alertas'] = "Erro ao adicionar o filme";
        header("Location: create.php");
        exit(0);
    }

}

?>