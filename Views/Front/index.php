<?PHP

require_once ("C:/xampp/htdocs/pp/Controller/servicec.php");
require_once ("C:/xampp/htdocs/pp/connection.php");


$produitc=new servic();
$prod=$produitc->afficherservice();

session_start();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Brain</em> Bloom</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
   
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
          <img src="assets/images/cover.png" alt=""/>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>We're Creating Recycling Solutions</h6>
              <h2><em>For</em> You</h2>
              <div class="main-button">
                  <a href="../../sign-up.php">Discover more</a>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>La collecte des déchets</h4>
              </div>
              <div class="content-hide">
               <p>La gestion des déchets regroupe l'ensemble du processus de traitement d'un déchet. Elle répond à la stratégie dite des 3 R : Réduire ; Réutiliser ; Recycler. Le taux de réussite du principe des 3R est encore insuffisant en Tunisie, faute de bonne volonté, de moyens et de nouvelles technologies. L'objectif reste de réduire de façon significative les déchets : stockés ou enfouis : stagnation ; incinérés : méthode polluante.</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>La valorisation des déchets</h4>
              </div>
              <div class="content-hide">
              <p>c’est le réemploi, le recyclage ou toute autre action visant à obtenir, à partir des déchets, des matériaux réutilisables ou de l’énergie En Tunisie, chaque citoyen produit en moyenne 0,815 kg de déchets par jour en milieu urbain, selon le rapport de la GIZ sur la Gestion des Déchets Solides en Tunisie publié en 2014. Tandis qu’au niveau national, le pays produit annuellement 6.943.000 tonnes de déchets, parmi lesquels 157.000 tonnes sont classés dangereux (7.000 provenant d’activité de soins et 150.000 provenant de l’activité Industrielle), le reliquat pourrait donc être valorisable.</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Le recyclage et L'incinération de déchets</h4>
              </div>
              <div class="content-hide">
               <p>Ménagers, végétaux, industriels, toxiques, on distingue 4 grandes catégories de déchets, soit des objets abandonnés, qui peuvent être réutilisés ou pas en l'état ou après modification. Pour comprendre ce qu’est le recyclage, il faut connaître tout le processus de gestion de ces déchets : collecte, traitement, valorisation, incinération</p>
           
           <p>L’incinération avec récupération d’énergie consiste à transformer en vapeur sous pression la chaleur dégagée par la combustion des déchets, vapeur qui est ensuite détendue dans un turbo alternateur produisant de l’électricité et, lorsque cela est possible, utilisée pour alimenter un réseau de chaleur urbain ou des industriels avoisinants.</p>   </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Qui Sommes Nous?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
           <hr>   <li><a href='#tabs-1'>Ingénierie et Marketing Digitale</a></li>
      <hr>        <li><a href='#tabs-2'>Stratégie et Développement</a></li>
       <hr>       <li><a href='#tabs-3'>Recherches et Exploitations</a></li>
           <hr>   <li><a href='#tabs-4'> Supérvisation sur terrains              </a></li>
          <hr>    <li><a href='#tabs-5'> Solution recyclage             </a></li>
<hr>
              <li><a href='#tabs-6'>       Chargé d'études            </a></li>
           <br>   <li><a href='#tabs-7'>      RH     </a></li>

            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/in.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Inconnu 1</h4>
                    <p>Ingénierie et Marketing Digitale</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/in.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Inconnu 2</h4>
                 <p>Stratégie et Développement</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/in.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Inconnu 3</h4>
                 <p>Recherches et Exploitations</p> </div>
                </div>
              </article>
            </article>
            <article id='tabs-4'>
              <div class="row">
                <div class="col-md-6">
                  <img src="assets/images/in.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Inconnu 4</h4>
               <p>Supérvisation sur terrains</p> </div>
              </div>
            </article>
          </article>
          <article id='tabs-5'>
            <div class="row">
              <div class="col-md-6">
                <img src="assets/images/in.jpg" alt="">
              </div>
              <div class="col-md-6">
                <h4>Inconnu 5</h4>
             <p>Solution recyclage</p> </div>
            </div>
          </article>
        </article>
        <article id='tabs-6'>
          <div class="row">
            <div class="col-md-6">
              <img src="assets/images/in.PNG" alt="">
            </div>
            <div class="col-md-6">
              <h4>Inconnu 6</h4>
           <p>Chargé d'études</p> </div>
          </div>
        </article>
        <article id='tabs-7'>
          <div class="row">
            <div class="col-md-6">
              <img src="assets/images/in.jpg" alt="">
            </div>
            <div class="col-md-6">
              <h4>Inconnu 7</h4>
           <p>RH</p> </div>
          </div>
        </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>




        
        <!-- Do you need a working HTML contact-form script?
                	
                    Please visit https://templatemo.com/contact page -->
                    
 

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School  
          
           | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a><br>
           Distributed By: <a href="https://themewagon.com" rel="sponsored" target="_blank">ThemeWagon</a>
          
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>