<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Cadastro de aluno</title>
</head>
<body>
     <!-- Código do MATERIALIZE NAVBAR estilizado -->
<form action="controller/ctCadastrarPacote.php" method='GET'>

<nav class="nav-extended #283593 indigo darken-3 left">
   
   <ul id="nav-mobile" class="right">
           <li><a href="carrinho.php">Carrinho</a></li>
           <li><a href="http://localhost/gotour/view/CadastrarPacote.php">Cadastrar</a></li>
         </ul>
       </div>
       <div class="nav-wrapper">
           <div class="nav-header center">
           <h1>Cadastro de aluno</h1>
       </div>
       <div class="nav-content">
         <ul class="tabs tabs-transparent #3f51b5 indigo">
           <li class="tab"><a href="http://localhost/gotour/">Início</a></li>
           <li class="tab"><a href="active">Promoções</a></li>
           <li class="tab"><a class="active" href="#test2">Internacional</a></li>
           <li class="tab"><a href="active">Nacional</a></li>
         </ul>
       </div>
     </nav>
<div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content">
              
            <span class="card-title">Cadastrar pacote</span>

            <!-- input nome -->
              <div class="row">
                  <div class="input-field col s12">
                      <input id="nome" name="nome" type="text" class="validate">
                      <label for="titulo">Digite seu nome completo.</label>
                  </div>
                </div>
            
                <!-- input cpf -->
                <div class="row">
                  <div class="input-field col s12">
                      <input id="cpf" name="cpf" type="text" class="validate"> <!-- bota somente numeros -->
                      <label for="titulo">Digite seu CPF.</label>
                  </div>
                </div>
                <!-- input quantidade de passagens -->
                <div class="row">
                  <div class="input-field col s12">
                      <input id="qtdPassagem" name="qtdPassagem" type="text" class="validate">
                      <label for="titulo">Quantidade de passagens?.</label>
                  </div>
                </div>
                <!-- input parcelas -->
              <div class="row">
                <div class="input-field col s4">
                  <input id="qtdParcela" name="qtdParcela" type="number" class="validade" require>
                  <label for="nota">Número de parcelas</label>
                </div>
              </div>

              </div>
            </div>

             <!-- butões cancelar e comprar -->
            <div class="card-action">
                <a class="btn #bf360c deep-orange darken-4" href="http://localhost/gotour/">Cancelar</a>
                <input type="submit" text="funciona pfv"> <!-- botao compra na tela cadastro? -->
            </div>
        </div>
    </div>
</div>

</form>

</body>
</html>