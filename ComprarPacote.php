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

    <title>GoTour</title>
</head>
<body>
     <!-- Código do MATERIALIZE NAVBAR estilizado -->
<nav class="nav-extended #283593 indigo darken-3 left">
   
   <ul id="nav-mobile" class="right">
           <li><a href="carrinho.php">Carrinho</a></li>
           <li><a href="http://localhost/gotour/view/CadastrarPacote.php">Cadastrar</a></li>
         </ul>
       </div>
       <div class="nav-wrapper">
           <div class="nav-header center">
           <h1>GoTour</h1>
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
              
            <span class="card-title">Comprar Pacote</span>
              <p><div class="row">
                  <div class="input-field col s12">
                      <input id="titulo" type="text" class="validate" require>
                      <label for="titulo">Digite seu nome completo.</label>
                  </div>
                </div>
              </p>
               
                <div class="row">
                  <div class="input-field col s12">
                      <input id="titulo" type="text" class="validate" require>
                      <label for="titulo">Digite seu CPF.</label>
                  </div>
                </div>
               
                <div class="row">
                  <div class="input-field col s12">
                      <input id="titulo" type="text" class="validate" require>
                      <label for="titulo">Quantidade de passagens?.</label>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="card-action">
                <a class="btn #bf360c deep-orange darken-4" href="http://localhost/gotour/">Cancelar</a>
                <a class="btn #76ff03 light-green accent-3" href="">Comprar</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>