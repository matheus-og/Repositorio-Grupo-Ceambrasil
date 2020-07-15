<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- Meta tags Obrigatórias -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!--FONT ICONES-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
      <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
      <link rel="stylesheet" type="text/css" href="css/outros_estilos.css">
      <title>Contato</title>
   </head>
   <body id="body">
            <!--HEADER-->
      <header class="sticky-top shadow bg-white rounded">
         <!-- MENU--> 
         <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
               <!--inicio container-->
               <a class="navbar-brand" href="index.html"><img style="width: 142px;" src="images/LogoJPG.jpg"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
               <span class="navbar-toggler-icon"></span>
               </button>
               <!--MENU-->
               <div class="collapse navbar-collapse font-weight-bold" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active text-uppercase">
                        <a class="nav-link azul-escuro " href="index.html">Home </a>
                     </li>
                     <li class="nav-item text-uppercase">
                        <a class="nav-link azul-escuro " href="institucional.html">Institucional</a>
                     </li>
                     <li class="nav-item text-uppercase">
                        <a class="nav-link azul-escuro" href="informativo.html">Informativo</a>
                     </li>
                     <li class="nav-item text-uppercase">
                        <a class="nav-link azul-escuro" href="planos.php">Planos</a>
                     </li>
                     <li class="nav-item text-uppercase">
                        <a class="nav-link azul-escuro" href="contato.php">Contato</a>
                     </li>
                      <li class="nav-item text-uppercase">
                        <a class="nav-link text-primary" href="trabalhe_conosco.php"><span class="sr-only">(Página atual)</span>Trabalhe Conosco</a>
                     </li>
                     
                  </ul>
               </div>
            </div>
            <!--fim container--> 
         </nav>
         
      </header>
      <!--HEADER-->

      <!--TEXTO ANIMADO-->      
      <section class="bg-primary mb-5">
         <div class="container">
            <div class="row py-5">
               <div id="banner-animado" href="" class="col h5 typewrite bg-primary ml-5 text-white altura-banner" data-period="2000" data-type='[ "Trabalhe Conosco.", "CeamBrasil.", "Escolha o Destino e Deixe as Preocupações Conosco." ]'> </div>
            </div>
         </div>
      </section>
      <!--/TEXTO ANIMADO--> 
      <section class="container ">
         <div class="row">
            <!-- formulario de contato -->
            <div class="col-6 col-md-6">            
               <form class="text-center border border-light mb-5 " action="processa_envio_curriculum.php" method="post">
                  <p class="h4 mb-4 text-primary">Envie seu Curriculum</p>
                  <!-- Nome -->
                  <input type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Nome completo">
                  <!-- Email -->
                  <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
                  <!-- celular -->
                  <input type="text" id="celular" name="celular" class="form-control mb-4" placeholder="Celular">
                  
                  <!-- celular -->
                  <div class="form-group">
                     <select class="browser-default custom-select mb-4 form-control" id="area_atuacao" name="area_atuacao">
                       <option value="" disabled selected>Selecione sua área de atuação</option>
                       <option value="Administrativo">Administrativo</option>
                       <option value="2">Recepção</option>
                       <option value="3">Enfermagem</option>
                       <option value="4">Serviços Gerais</option>
                       <option value="5">Médicos</option>
                       <option value="6">Radiologia</option>
                       <option value="7">Outros</option>
                     </select>
                  </div>
 
                  <!-- Mensagem -->
                  <div class="form-group">
                     <textarea class="form-control rounded-0" id="apresentacao" name="apresentacao" rows="3" placeholder="Mensagem"></textarea>
                  </div>

                  <!--input type="file" id="curriculum" name="curriculum" accept=".pdf"-->

               
                  <!-- Botão Enviar -->
                  <button class="btn btn-primary btn-block" type="submit">Enviar</button>
               </form><!-- Default form contact -->
            </div>
            <!--detalhes para contato-->
            <div class="col-6 col-md-6">
               <p class="text-uppercase font-weight-bold mt-5 ml-5 text-primary">Telefone</p>
               <p class="text-uppercase text-secondary font-weight-bold mt-1 ml-5">35 3629 8000</p>

               <p class="text-uppercase font-weight-bold mt-4 ml-5 text-primary">e-mail</p>
               <p class="text-secondary font-weight-bold mt-1 ml-5">contato@ceambrasil.com</p>
            </div> 
         </div>
      </section>

      <footer class="bg-dark text-white">
         <div class="container">
            <div class="row borda-bottom-branca py-3 ">
               <div class="col-12 col-md-6">
                  <h1 class="text-center">Ceam Brasil</h1>
               </div>
               <div class="col-12 col-md-2 ">          
               </div>
               <div class="col-12 col-md-4 text-center">
                  <a href="" class="text-white"><i class="h3 fab fa-instagram mr-3"></i></a>
                  <a href="" class="text-white"><i class="h3 fab fa-facebook-f"></i> </a>         
               </div>
            </div>
            <div class="row ">
               <div class="col-12 col-md-4 bg-preto-secundario pt-1 pb-4  ">
                  <span class="h5 font-weight-bold text-white text-uppercase">Endereço</span>
                  <p class="text-white  pt-2 mb-3">
                     <i class="fas fa-map-marker-alt mr-2 "></i>
                     Praça Doutor Carlos Victor, n° 01 <br>
                     Bairro: Varginha Itajubá - MG <br>
                     CEP: 37501-155
                  </p>
                  <p class="text-white">
                     <i class="fas fa-phone-alt mr-2 mb-3" ></i>
                     (35) 3629-8000
                  </p>
                  <span class="h5 font-weight-bold text-white text-uppercase">Sites</span><br>
                  <a href="" class="text-white mt-3">
                  <i class="fas fa-globe mr-2 mb-3"></i>
                  www.linkclinica.com.br
                  </a><br>  
                  <a href="" class="text-white mt-3">
                  <i class="fas fa-globe mr-2"></i>
                  www.linkgrupo.com.br
                  </a>   
               </div>
               <div class="col-12 col-md-4  pt-1 pb-4">
                  <span class="h5 font-weight-bold text-white text-uppercase">Menu</span>
                  <div class=" ">
                     <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                           <a class="nav-link text-white" href="index.html">Home</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link text-white" href="institucional.html">Institucional</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link text-white" href="#">Informativo</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link text-white" href="#">Planos</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link text-white" href="#">Contato</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-12 col-md-4 pt-1 pb-4 bg-preto-secundario">
                  <span class="h5 font-weight-bold text-white text-uppercase">Contatos</span>
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active ">
                        <a class="nav-link text-white" href="#">Trabalhe conosco</a>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link text-white" href="#">Enviar mensagem</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <footer class="bg-preto text-white">
         <div class="container">
            <div class="row">
               <div class="col-12 col-md-4 mb-2 d-flex justify-content-center flex-wrap">
                  <div class="flex-item">
                     <a href="http://www.ans.gov.br" target="_blank"><img src="images/ans.png" class="img w-75 pt-2 "></a>
                  </div>
                  <div class=" py-1 flex-item">
                     <span class="font-weight-bold text-white border">ANS - N° 311472</span>
                  </div>
               </div>
               <div class="col-6 col-md-4  d-flex justify-content-center ">
                  <div class="flex-item mt-4 ">
                     <br>
                     <p class="text-white">CNPJ 0000.000000.0000.000</p>
                  </div>
               </div>
               <div class="col-6 col-md-4 d-flex justify-content-center">
                  <div class="flex-item mt-4">
                     <a href="https://ptechti.com.br" target="_blank"><img src="images/PTECH.png" class="img-fluid w-50 "></a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- The scroll to top feature -->
      <a class="scroll-top-wrapper bg-primary text-white" href="#body">
      <span class="scroll-top-inner">
      <i class="fa fa-2x fa-arrow-circle-up"></i>
      </span>
      </a>
      <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <!--SOBRE EMPRESA-->
      <script src="owl-carousel/owl.carousel.min.js"></script>
      <script src="js/main.js"></script>
      <script src="js/main2.js"></script>
      <script src="js/top.js"></script>
   </body>
</html>