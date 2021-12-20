<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	
  <title>HUMANIZE - Home Office</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<style>

</style>
</head>

<body>
 
  	
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="assets/img/logo_topo.png" alt="" width="215" height="70">
    </a>
  </div>
</nav>
	
	
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <h5><ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projeto.html">Sobre o Projeto</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="ambiente.html">Ambiente</a>
        </li>  
		<li class="nav-item">
          <a class="nav-link" href="saude_fisica.html">Saúde Física</a>
        </li>  
		<li class="nav-item">
          <a class="nav-link" href="saude_mental.html">Saúde Mental</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Links
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://bebaagua.com.br/aplicativo-beba-agua/">Beba Água</a>
            <a class="dropdown-item" href="https://www.youtube.com/watch?v=UfcAVejslrU">Música Relaxante</a>
			<a class="dropdown-item" href="https://mapasaudemental.com.br/para-o-publico-geral/">Mapa Saúde Mental</a>  
			<a class="dropdown-item" href="https://www.cvv.org.br/">Centro de Valorização da Vida</a>
		  </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
      </ul></h5>
    </div>
</nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/cr_amb_01.jpg" class="d-block w-100" alt="Saúde Mental">
      </div>
      <div class="carousel-item">
        <img src="assets/img/cr_amb_02.jpg" class="d-block w-100" alt="Ambiente de Trabalho">
      </div>
      <div class="carousel-item">
        <img src="assets/img/cr_amb_03.jpg" class="d-block w-100" alt="Saúde Física">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>

<br>	
	

<div id="form_container" class="container shadow p-3 mb-5 bg-white rounded col-lg-6 offset-lg-3">
  <div class="row">
    <?php
//recebendo a $_SESSION e verificando se NAO esta vazia 
  if(isset($_SESSION['preenchaFormulario'])){
    echo '
        <div class="container"> 
            <div class="alert alert-danger" role="alert">
                ' . $_SESSION['preenchaFormulario'] . '
            </div>
        </div>';
    
    // aguardando 3 segundo pra atualizar a pagina//
    echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=contato.php'>";
    
    //destruido a variavel que esta na $_SESSION//
    unset($_SESSION['preenchaFormulario']);
}
//recebendo a $_SESSION e verificando se NAO esta vazia//
  if(isset($_SESSION['formularioPreenchido'])){
    echo '
        <div class="container"> 
            <div class="alert alert-success" role="alert">
                ' . $_SESSION['formularioPreenchido'] . '
            </div>
        </div>';
    
    // aguardando 4 segundo pra atualizar a pagina//
    echo "<meta HTTP-EQUIV='refresh' CONTENT='4;URL=contato.php'>";

    //destruido a variavel que esta na $_SESSION//
    unset($_SESSION['formularioPreenchido']);
}
//recebendo a $_SESSION e verificando se NAO esta vazia//
  if(isset($_SESSION['erro'])){
      echo '
          <div class="container"> 
              <div class="alert alert-danger" role="alert">
                  ' . $_SESSION['erro'] . '
              </div>
          </div>';
      
          // aguardando 4 segundo pra atualizar a pagina// 
      echo "<meta HTTP-EQUIV='refresh' CONTENT='4;URL=contato.php'>";

       //destruido a variavel que esta na $_SESSION//
      unset($_SESSION['erro']);

}else (empty($_SESSION)) //recebendo a $_SESSION e verificando se esta VAZIA//
    

  
  ?>
    <div class="col-12">
      <h3>Formulário de Contato</h3>
      <hr>
      <form action="Received.php" method="POST"  >
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" id="nome">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="curso">Como conheceu nosso site?</label>
          <select name="curso" class="form-control" id="curso">
            <option value="" selected>Escolha</option>
            <option value="Sou professor da Etec">Sou professor da Etec</option>
            <option value="Sou aluno da Etec">Sou aluno da Etec</option>
            <option value="Sou profissional de Home Office">Sou profissional de Home Office</option>
            <option value="Nenhum dos anteriores">Nenhum dos anteriores</option>
          </select>
        </div>
        <button type="reset" class="btn btn-danger">Cancelar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
    
      </form>
    </div>
  </div>
</div>
<br>
	



    <div class="alert alert-primary" role="alert">
<em><strong>Para que o mal triunfe basta que os bons fiquem de braços cruzados.</strong></em> <strong>- Edmund Burke </strong></div>


<br>
<br>

    <nav class="navbar fixed-bottom navbar-light bg-light">
        <a class="navbar-brand" href="#">Humanize Home Office - Um site para melhorar sua saúde no trabalho remoto</a>
</nav>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
</body>

</html>