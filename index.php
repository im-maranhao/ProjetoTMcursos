<!--
Instituição: UNINOVE
Curso: Ciencia da  Computação 
Disciplina: Insfraestrutura Computacional
Professor: Antônio Sérgio  
Alunas: Miriam Maranhão, Thais Napolitano
Objetivo: Tela de Login
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Entrar | IRTVM</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="shortcut icon" href="imagem/favicon.ico" type="image/x-icon">
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body style="background-color: rgba(5, 5, 29, 0.233);"> 
<header> 
            <img  src="imagem/logo1.png" alt="IRTVM" width="110" height="100" >
            <nav> 
                <a href="index.html">Voltar ao site</a>
            
            </nav>
    </header>

    <br>
<main" > <!-- Conteúdo --> 
<center>
    <br/>
                     <?php
session_start();
?>
                    <?php
if (isset($_SESSION['nao_autenticado'])):
?>
                    <div class="alert alert-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    
                    <?php
endif;
unset($_SESSION['nao_autenticado']);
?>
                    <div class="card" style="width: 25rem;" color="blue">
                        <form action="login.php" method="POST">
                            <br/>
                        <h3 class="title has-text-black">LOGIN</h3>
                        <center>       
<br/> 
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Professor</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Aluno</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Administrador</label>
</div>
<br/>
<br/>
                            <div class="form-floating mb-3">
                                <div class="control">                  
                                    <input name="usuario" name="text" class="input is-large"     placeholder="Usuário" autofocus="">
                                </div>
                            </div>
                            <div class="form-floating mb-4">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Entrar</button>
                        </form>
                        <br/>
                        <br/>
                        <a href="logout.php">Esqueceu a Senha?</a>
                    </div>
                    <br/>
</center>
</main>

</body>
</html>