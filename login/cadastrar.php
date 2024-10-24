<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
   
   include('conexao.php');


   if ($_SERVER["REQUEST_METHOD"] == "POST") {    

    $nomeErro = $emailErro = $senhaErro = $n_senhaErro = '';
    if (strlen($_POST['nome']) == 0) {
        $nomeErro = "Preencha seu nome"; // Erro de nome
    } elseif (strlen($_POST['email']) == 0) {
        $emailErro = "Preencha seu email"; // Erro de email
    }
    elseif (strlen($_POST['senha']) == 0) {
        $senhaErro = "Preencha sua senha"; // Erro de senha
    }
    elseif (strlen($_POST['n_senhaConf']) == 0) {
        $n_senhaErro = "Preencha sua senha de confirmação"; // Erro de senha
    }
    else{
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_inser = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        if ($conn->query($sql_inser) === TRUE) {
            echo "Novo usuário cadastrado com sucesso!";
        }  
        else {
            echo "Erro: " . $sql_inser . "<br>" . $conn->error;
        }
    }
                        
   }
?>

 <h1>tela de cadastro</h1>
<form action="" method="post">

<input type="text" name="nome" id="" placeholder=" Nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>">
<!-- Exibe erro do nome -->
<?php if (!empty($nomeErro)) { echo "<div class='erro'>$nomeErro</div>"; } ?>

<input type="text" name="email" placeholder=" Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
<!-- Exibe erro de email -->
<?php if (!empty($emailErro)) { echo "<div class='erro'>$emailErro</div>"; } ?>

<input type="password" name="senha" placeholder=" Senha" value="<?php if(isset($_POST['senha'])) echo $_POST['senha']; ?>">
<!-- Exibe erro da senha -->
<?php if (!empty($senhaErro)) { echo "<div class='erro'>$senhaErro</div>"; } ?>

<input type="password" name="n_senhaConf" id="" placeholder=" Confirma senha">
<!-- Exibe erro da Confirmação da senha -->
<?php if (!empty($n_senhaErro)) { echo "<div class='erro'>$n_senhaErro</div>"; } ?>

<button type="submit">Cadastre-se</button>


</form>

</body>
</html>