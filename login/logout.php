<?php 

if(!isset($_SESSION)){
    session_start();//aqui se a sessão não existir ele cria, o simbolo  de "!" e para dizer não e o nome "isset" e Existe.
}

session_destroy();//ele vai destruir quando eu clicar em sair da pagina

header("Location:index.php");

?>