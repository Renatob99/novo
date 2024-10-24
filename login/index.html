<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <img src="image.png" alt="">
    <h1>Login de usuario</h1>
    
    <?php 
        include('conexao.php'); // Eu estou chando o arquivo conexao.php para eu utilizar ele aqui nesse codígo.

        $emailErro = $senhaErro = $loginErro = ''; // Variáveis para armazenar erros
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (strlen($_POST['email']) == 0) {
                $emailErro = "Preencha seu email"; // Erro de email
            } elseif (strlen($_POST['senha']) == 0) {
                $senhaErro = "Preencha sua senha"; // Erro de senha
            } else {
                $email = $_POST['email']; //variavei para que armazena dados do input do formulario.
                $senha = $_POST['senha'];//variavei para que armazena dados do input do formulario.

                $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";//Estou verificando para saber se esses dados são iguais no banco.

                $sql_query = $conn->query($sql_code) or die("Falha na conexão do código SQL ".$conn->error); //Aqui me dar o erro se houver falha no codigo acima.
                
                $quantidade = $sql_query->num_rows;// aqui uma class que estou usando para contar a quantidade de dados que esta vindo como resposta do meu banco que no caso vai ser 1. Essa seta "->" e para acessar classes e os metodos dentro delas.
                if ($quantidade == 1) {
                    $usuario = $sql_query->fetch_assoc();

                    if (!isset($_SESSION)) {// Essa sessão e feita para apenas quem tiverr uma conta podera acessar a pagina se tentar acessar por http não vai pegar.
                        session_start();
                    }

                    $_SESSION['id'] = $usuario['id'];//id do usuario para acessar a pagina
                    $_SESSION['nome'] = $usuario['nome'];// nome do usuario para acessar a pagina

                    header("Location: entrar.php"); //aqui vai me direcionar para pagina entrar.php se tudo estiver ok.
                    
                } else {
                    $loginErro = "Falha ao logar, e-mail ou senha incorretos";//Aqui me dar o erro se houver conta no banco de dados.
                }
            }
        }
    ?>

    <form action="" method="post" id="form">
        <input type="text" name="email" class="caixa" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><!--Esse codigo value, porque toda vez que clicava em entrar sem colocar o email a senha no formulario era apagado mas agora o criei uma variavel para isso.-->
        <!-- Exibe erro de email -->
        <?php if (!empty($emailErro)) { echo "<div class='erro'>$emailErro</div>"; } ?>
        
        <input type="password" name="senha" class="caixa" placeholder="Senha" value="<?php if(isset($_POST['senha'])) echo $_POST['senha']; ?>"> <!--Esse codigo value, porque toda vez que clicava em entrar sem colocar a senha o email no formulario era apagado mas agora o criei uma variavel para isso.-->

        <!-- Exibe erro de senha -->
        <?php if (!empty($senhaErro)) { echo "<div class='erro'>$senhaErro</div>"; } ?>
        
        <button id="bnt" type="submit">Entrar</button>
        
        <!-- Exibe erro de login geral (e-mail ou senha incorretos) -->
        <?php if (!empty($loginErro)) { echo "<div class='erro'>$loginErro</div>"; } ?>
        
        <hr><!-- Isso e uma linha la na tela para dividir a tela-->
        <a  href="cadastrar.php">Criar nova conta</a>
    </form>
</body>
</html>
