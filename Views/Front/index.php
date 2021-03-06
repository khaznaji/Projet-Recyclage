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
                <h4><i class="fa fa-pencil"></i>La collecte des d??chets</h4>
              </div>
              <div class="content-hide">
               <p>La gestion des d??chets regroupe l'ensemble du processus de traitement d'un d??chet. Elle r??pond ?? la strat??gie dite des 3 R : R??duire ; R??utiliser ; Recycler. Le taux de r??ussite du principe des 3R est encore insuffisant en Tunisie, faute de bonne volont??, de moyens et de nouvelles technologies. L'objectif reste de r??duire de fa??on significative les d??chets : stock??s ou enfouis : stagnation ; incin??r??s : m??thode polluante.</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>La valorisation des d??chets</h4>
              </div>
              <div class="content-hide">
              <p>c???est le r??emploi, le recyclage ou toute autre action visant ?? obtenir, ?? partir des d??chets, des mat??riaux r??utilisables ou de l?????nergie En Tunisie, chaque citoyen produit en moyenne 0,815 kg de d??chets par jour en milieu urbain, selon le rapport de la GIZ sur la Gestion des D??chets Solides en Tunisie publi?? en 2014. Tandis qu???au niveau national, le pays produit annuellement 6.943.000 tonnes de d??chets, parmi lesquels 157.000 tonnes sont class??s dangereux (7.000 provenant d???activit?? de soins et 150.000 provenant de l???activit?? Industrielle), le reliquat pourrait donc ??tre valorisable.</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Le recyclage et L'incin??ration de d??chets</h4>
              </div>
              <div class="content-hide">
               <p>M??nagers, v??g??taux, industriels, toxiques, on distingue 4 grandes cat??gories de d??chets, soit des objets abandonn??s, qui peuvent ??tre r??utilis??s ou pas en l'??tat ou apr??s modification. Pour comprendre ce qu???est le recyclage, il faut conna??tre tout le processus de gestion de ces d??chets : collecte, traitement, valorisation, incin??ration</p>
           
           <p>L???incin??ration avec r??cup??ration d?????nergie consiste ?? transformer en vapeur sous pression la chaleur d??gag??e par la combustion des d??chets, vapeur qui est ensuite d??tendue dans un turbo alternateur produisant de l?????lectricit?? et, lorsque cela est possible, utilis??e pour alimenter un r??seau de chaleur urbain ou des industriels avoisinants.</p>   </div>
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
           <hr>   <li><a href='#tabs-1'>Ing??nierie et Marketing Digitale</a></li>
      <hr>        <li><a href='#tabs-2'>Strat??gie et D??veloppement</a></li>
       <hr>       <li><a href='#tabs-3'>Recherches et Exploitations</a></li>
           <hr>   <li><a href='#tabs-4'> Sup??rvisation sur terrains              </a></li>
          <hr>    <li><a href='#tabs-5'> Solution recyclage             </a></li>
<hr>
              <li><a href='#tabs-6'>       Charg?? d'??tudes            </a></li>
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
                    <p>Ing??nierie et Marketing Digitale</p>
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
                 <p>Strat??gie et D??veloppement</p>
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
               <p>Sup??rvisation sur terrains</p> </div>
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
           <p>Charg?? d'??tudes</p> </div>
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