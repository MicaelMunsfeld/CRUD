<?php

$oConexao = mysqli_connect
    (
      "127.0.0.1",
      "root"     ,
      ""         ,
      "aula"
    );

    if(!$oConexao){
        exit('Falha de conexão'. mysqli_connect_error());
    }

?>
