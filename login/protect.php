<?php 

if(!isset($_SESSION)) {//aqui se a sessão não existir ele cria, o simbolo  de "!" e para dizer não e o nome "isset" e Existe.
    session_start();
}
if(!isset($_SESSION['id'])) {// para ter uma conta tem que ter um id ne, dai isso se refere a conta, pois se voce acessar pela barra de navegação vai dar essa resposta abaixo.
     die(" Opa! você não pode acessar essa pagina porque não esta logado.<p><a href=\"index.php\">Entrar</a></p>");
}

?>