<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Samaritenii Renovatio</title>

      <!-- Sovy Cookie Consent Manager header code -->
      <script type="text/javascript">var per = [],func = [], adv = [];</script>

      <!-- Bootstrap core CSS -->
      <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

      <!-- Custom fonts for this template -->
      <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
       <!-- Sovy Cookie Consent Manager footer code -->
       <link rel="stylesheet" id="sovystyle-consentManager" href="https://cdn.sovy.com/consents/52e6e9a5-512e-451b-b9b9-4d500ebf7d72/consentmanager.min.css" type="text/css" media="all"><script type="text/javascript" id="sovyscript-consentManager" async defer src="https://cdn.sovy.com/consents/52e6e9a5-512e-451b-b9b9-4d500ebf7d72/consentmanager.min.js"></script>

      <!-- Custom styles for this template -->
      <link href="{{ URL::asset('css/agency.css') }}" rel="stylesheet">
    </head>
    <body id="page-top">

      <div class="se-pre-con">
        <div id="loading"></div>
      </div>

      <!-- The Modal -->
      <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
          </div>
          <div class="modal-body">
            <div id="modal-container">
            </div>
          </div>
        </div>

      </div>

      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Meniu
            <i class="fas fa-bars"></i>
          </button>
          <a href="/"><img class="logo" src="{{ URL::asset('img/logo.png') }}" alt=""></a>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#misiune">Misiunea noastră</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Proiecte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#desprenoi">Cine suntem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#team">Echipă</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Implică-te</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php $index = 0; ?>
          @foreach ($homeCarousel as $slide)
            <?php 
              $carouselClass = "";

              if ($index == 0) {
                $carouselClass = "active";
              }
            ?>

            <li data-target="#home-carousel" data-slide-to="{{ $index++ }}" class="{{ $carouselClass }}"></li>
          @endforeach
        </ol>
        <div class="carousel-inner">
          <?php $index = 0; ?>
          @foreach ($homeCarousel as $slide)
            <?php 
              $class = "";

              if ($index == 0) {
                $class = "active";
              }

              $index++;
            ?>

            <div class="carousel-item {{ $class }}">
              <img class="d-block w-100" src="{{ URL::asset('img/home-carousel/' . $slide->image) }}" alt="First slide">
            </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

      <!-- Services -->
      <section id="misiune">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Misiunea noastră</h2>
              <h3 class="section-subheading text-muted motto">Preţuim pe semenii noştri, dar mai ales pe cei aflaţi in nevoi!</h3>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-3">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-hamburger fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Hrănim</h4>
              <p class="text-muted">Nicio persoană, fie copil sau bătrân nu ar trebui să meargă la culcare flămând. Oferim regulat o masă caldă celor care nu au posibilitatea să o câștige, și alimente prin diferite acțiuni.</p>
            </div>
            <div class="col-md-3">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-home fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Construim</h4>
              <p class="text-muted">Ne implicăm în lucrări de construcție în funcție de resursele de care dispunem pentru cei care au neaparăt nevoie de un adapost decent. Construim o casă care să devină ACASĂ.</p>
            </div>
            <div class="col-md-3">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-hands-helping fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Ajutăm</h4>
              <p class="text-muted">Ne implicăm în diferite proiecte de ajutorare lunar, Contribuim cu idei, muncă, sau logistică acolo unde e o deosebită nevoie.</p>
            </div>
            <div class="col-md-3">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-bible fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Misionam</h4>
              <p class="text-muted">Și sufletul are nevoie de hrană, dăruim mai mult decât o pâine. Dăruim Pâinea Vieții. Iisus i-a zis: „Este scris: ‘Omul nu trăieşte numai cu pâine, ci cu orice cuvânt care iese din gura lui Dumnezeu.” (Matei 4:4)</p>
            </div>
          </div>
        </div>
      </section>
      
      <section class="bg-texture" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
             <h1>PROIECT ÎN DERULARE</h1>
              <h2 class="section-heading text-uppercase">SOS SAMARITENII</h2>
            </div>
          </div>

          <div class="row project">
            <div class="col-lg-12 col-md-12 col-sm-12 portfolio-item">
              <a class="portfolio-link" href="/photo-gallery/sos-samaritenii">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-hand-holding-heart fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid next-project-image" src="{{ URL::asset('img/projects/sos-samaritenii.png') }}" alt="">
              </a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <p>
                Țara noastră este greu încercată în perioadă această dificilă prin care trecem, avem în mijlocul nostru multe persoane care nu sunt pregătite să poata depăși 
                singure momente ca acestea. Prin campania <strong>SOS SAMARITENII</strong> ne-am propus să sprijinim în limita puterilor și a resurselor noastre o parte din nevoile acestei 
                situații de criză prin care trecem. Suntem peste 100 de tineri pregătiți aproape în toate zonele Bucureștiului, gata să intervenim în proximitate pentru orice nevoie.
                Dacă dorești să intri în posesia unui astfel de kit, te rugăm să alegi în funcție de nevoia ta unul din pachetele puse la dispoziția dumneavaostră gratuit.
                Din cauza stocului limitat, nu putem livra la o adresă doar un singur kit.
                Dumnezeu să păzească țara noastră și să binecuvânteze orice casă cu protecție Divină.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 order-sm-1 portfolio-item">
              <a href="https://forms.gle/DziwF591zWcnyJxq7">
                <img class="img-fluid" src="{{ URL::asset('img/projects/sos/1.png') }}"alt="">
              </a>
              <div class="col-lg-6 video">
              <iframe src="https://www.youtube.com/embed/oDBHAfwbL08"></iframe>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 order-sm-1 portfolio-item">
              <a href="https://forms.gle/Xa98QUv2k6eQKBpy8">
                <img class="img-fluid" src="{{ URL::asset('img/projects/sos/2.png') }}"alt="">
              </a>
              <div class="col-lg-6 video">
              <iframe src="https://www.youtube.com/embed/L7z3hE_T71s"></iframe>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 order-sm-1 portfolio-item">
            <a href="https://forms.gle/QaJD2SJtHfqZ54797">
            <img class="img-fluid" src="{{ URL::asset('img/projects/sos/3.png') }}"alt="">
            </a>                          
              <div class="col-lg-6 video">
              <iframe src="https://www.youtube.com/embed/dA4zCJjxqtM"></iframe>
            </div>
            </div>
          </div>
        </div>
        <hr>
      </section>
      
      <!-- Portfolio Grid -->
      <section class="projects bg-texture" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
             <h1>PROIECTE DESFĂȘURATE</h1>
            </div>

            <!-- Main container -->
          <div class="page-container">
            <?php $projectIndex = 0; ?>
            @foreach ($projects as $project)
              <?php 
                $classDescription = "";
                $classImage = "";
                $classH4 = "mg-md text-lg-right";
                $classP = "mg-md text-lg-right";
                $classButton = "float-lg-right";

                if ($projectIndex %2 == 0) {
                  $classDescription = "order-sm-12";
                  $classImage = "order-sm-1";
                  $classH4 = "";
                  $classP = "";
                  $classButton = "";
                }

                $projectIndex++;
              ?>

              <div class="row project">
                <div class="col-lg-8 col-md-6 col-sm-12 align-self-center {{ $classDescription }}">
                  <h4 class="{{ $classH4 }}">{{ $project->title }}</h4>
                  <p class="{{ $classP }}">{{ $project->description }}</p>
                  <?php
                    if ($project->video != "") {
                  ?>
                      <input type="button" class="align-self-center btn btn-primary show-video {{ $classButton }}" 
                             onclick="location.href='{{ $project->video }}';" value="Vizionează videoclip" />
                  <?php
                    }
                  ?>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item {{ $classImage }}">
                  <a class="portfolio-link" href="/photo-gallery/{{ $project->gallery }}">
                    <div class="portfolio-hover">
                      <div class="portfolio-hover-content">
                        <i class="fas fa-hand-holding-heart fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src="{{ URL::asset('img/projects/' . $project->image) }}" alt="">
                  </a>
                </div>
              </div>
              <hr>
            @endforeach
          </div>
      </section>

      <!-- About -->
      <section class="bg-texture" id="desprenoi">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Cine suntem?</h2>
              <h3 class="section-subheading text-muted">
                Suntem <b>SAMARITENII</b>, un proiect al Bisericii Renovatio prin care ne dorim să ajutăm NECONDIŢIONAT cât mai mulţi semeni de-ai noştri.
                Motto-ul implicării noastre este pilda Samariteanului
                milostiv din Biblie, Evanghelia după Luca capitolul 10:37 - "Du-te de fă şi tu la fel", i-a zis Iisus.
              </h3>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <ul class="timeline">
                <li>
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ URL::asset('img/about/1.jpg') }}" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>Motivaţia implicării?</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">
                        Noi credem şi promovăm valorile creştine, valori care de peste 2000 de ani au impactat şi schimbat multe vieţi! A îmbogăţit şi echilibrat mentalitatea multor oameni.
                        Indiferent de denominaţiunea religioasă. Au fost un etalon folosit pentru legile morale şi conduita sănătoasă unei familii sau a unei societăţi, folosite de multe ori şi in justiţie,
                        atât timp cât s-au respectat aceste principii şi valori creştine.
                      </p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ URL::asset('img/about/2.jpg') }}" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>Pentru cât timp?</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">
                        Ne propunem să putem fi o mână întinsă constant acestor persoane care vieţuiesc alături de noi, indiferent de resursele financiare, noi întotdeauna putem găsi o inimă care
                        are nevoie de căldură sufletească, şi întotdeauna vom găsi o mână care să fie apucată şi ridicată!
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ URL::asset('img/about/3.jpg') }}" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>Cu ce resurse?</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">
                        Fiecare în parte ne-am unit forţele şi resursele proprii pentru ca proiectele să poată fi realizate, dar suntem conştienţi că mai sunt multe inimi de SAMARITEAN care simt la fel
                        şi se pot uni împreună cu noi şi astfel susţinerea noastră poate ajunge la mai mulţi semeni în nevoi.
                      </p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ URL::asset('img/about/4.jpg') }}" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>Care este beneficiul?</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">
                        Numai cei care s-au aplecat să simtă cu aceşti oameni într-o formă sau alta pot înţelege beneficiul prin împlinirea, bucuria şi emoţiile trăite din această implicare.
                        Este mult mai ferice să dai decât să primeşti. Eclesiastul 11:1: "Aruncă-ţi pâinea pe ape şi, după multă vreme, o vei găsi iarăşi! Orice lucru pe care tu îl faci mai devreme sau mai târziu
                        te va ajunge, fie bine fie rău!"
                      </p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <h4>Fii parte
                      <br>a misiunii
                      <br>noastre!</h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="team"></section>

      <section class="mobile-team">
        <img src="{{ URL::asset('img/team.jpeg') }}" />
      </section>

      <!-- Contact -->
      <section id="contact">
        <div class="container">
          <div class="row">
              <div class="col-lg-12 send-message text-center">
                <div id="success"></div>
                <a href="/contact">
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" name="submit" type="submit">Implică-te</button>
                </a>
              </div>
              <h3 class="contact-footer">Un gest mic poate face o mare diferenţă!</h3>
          </div>
        </div>
      </section>

      <?php
      if(isset($_POST['submit'])){
          //$to = "samaritenii@misiunearenovatio.ro"; // this is your Email address
          $to = "traian.bucur@yahoo.co.uk";
          $from = $_POST['email']; // this is the sender's Email address
          $name = $_POST['name'];
          $subject = "Form submission";
          $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
          $headers = "From:" . $from;
          $headers2 = "From:" . $to;
          mail($to,$subject,$message,$headers);
          }
      ?>

      <!-- Footer -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <span class="copyright">Copyright &copy; 2020 | Samaritenii Renovatio</span>
            </div>
            <div class="col-md-4">
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/samariteniirenovatio">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="http://www.instagram.com/samariteniirenovatio">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

        <!-- <a href="#policy" onclick="showlightbox()">Manage Cookies</a> -->

      </div>

      <!-- Bootstrap core JavaScript -->
      <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

      <!-- Plugin JavaScript -->
      <script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

      <!-- Contact form JavaScript -->
      <script src="{{ URL::asset('js/jqBootstrapValidation') }}"></script>
      <!-- <script src="{{ URL::asset('js/contact_me.js') }}"></script> -->

      <!-- Custom scripts for this template -->
      <script src="{{ URL::asset('js/agency.min.js') }}"></script>
      <script src="{{ URL::asset('js/photo-gallery.js') }}"></script>

      <script>
        var loader = true;

        function hideLoader() {
          loader = false;
          $('.se-pre-con').hide();
        }

        setTimeout(function() {
          if (loader) {
            hideLoader();
          }
        }, 5000);

        $(window).on("load", function() {
          hideLoader();
        });
      </script>

    </body>
</html>