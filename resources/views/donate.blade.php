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

        <!-- <div id="loading"></div> -->

        <!-- The Modal -->
        <div id="myModal" class="modal donate-modal">

            <!-- Modal content -->
            <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Next and previous buttons -->
                <!-- <a class="prev">&#10094;</a>
                <a class="next">&#10095;</a> -->
                <div id="modal-container">
                </div>
            </div>
            </div>

        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top photo-gallery" id="mainNav">
        <div class="container header-menu">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Meniu
            <i class="fas fa-bars"></i>
        </button>
        <a href="/"><img class="logo" src="{{ URL::asset('img/logo.png') }}" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/#misiune">Misiunea noastră</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/#portfolio">Proiecte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/#desprenoi">Cine suntem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/#team">Echipă</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/#contact">Implică-te</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/sos">SOS Samaritenii</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/doneaza">Donează</a>
                </li>
            </ul>
            </div>
            </div>
        </nav>

        <section class="mb-4 donate">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <iframe 
                            width="1280" 
                            height="720" 
                            src="https://www.youtube.com/embed/QPpCUNl2AfU" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 class="contact-information section-heading text-uppercase">Ajut-o pe Carmen să vadă</h2>
                        <a href="/doneaza-pentru-carmen">
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase donate-button" name="submit" type="submit">Donează</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 clearfix">
                        <img class="d-block w-100 float-left principal" src="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/1.jpeg') }}">
                        <p>
                            Carmen are 1 an și 8 luni , este din județul Brașov și s-a născut cu mari probleme de sănătate.
                        </p>
                        <p>
                            Are cataractă congenitală, afecțiune care o împiedică practic să vadă.
                        </p>
                        <p>
                            Deși a suferit o intervenție chirurgicală, vederea fetitei nu s-a îmbunătățit decât parțial. Acum, cu ochiul stâng nu mai vede aproape deloc.
                        </p>
                        <p>
                            Pentru remedierea acestei mari probleme,mai are nevoie de încă o operație.
                        </p>
                        <p>
                            Această operație se poate efectua la București, la spitalul de oftalmologie INFOSAN. 
                        </p>
                        <p>
                            Costul operației este de cca. 2500 euro.
                        </p>
                        <p>
                            Pentru a se dezvolta armonios, pentru o viață normală, pentru a vedea, Carmen are nevoie de această operație cât mai curând posibil. Timpul este crucial 
                            pentru a spori șansele de reușită ale operației.
                        </p>
                        <p>
                            Părinții nu au aceste posibilități. Suma necesară operației depășește cu mult veniturile familiei, venituri ce provin pentru moment doar din alocațiile de la
                            stat. Tatăl lui Carmen a lucrat dar din cauza pandemiei și a restricțiilor aferente, acest lucru nu mai este posibil. Chiar și cu un loc de muncă stabil, 
                            cuantumul operației depășește puterile financiare ale familiei, familie ce mai are încă 6 copii.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row donate-gallery-container" id="gallery-container">
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img data-image-load="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/2.jpeg') }}" class="gallery-image" 
                            src="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/2.jpeg') }}">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img data-image-load="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/1.jpeg') }}" class="gallery-image" 
                            src="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/1.jpeg') }}">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img data-image-load="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/4.jpeg') }}" class="gallery-image" 
                            src="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/4.jpeg') }}">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img data-image-load="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/5.jpeg') }}" class="gallery-image" 
                            src="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/5.jpeg') }}">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img data-image-load="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/6.jpeg') }}" class="gallery-image" 
                            src="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/6.jpeg') }}">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <img data-image-load="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/7.jpeg') }}" class="gallery-image" 
                            src="{{ URL::asset('img/donate/ajut-o-pe-carmen-sa-vada/7.jpeg') }}">
                    </div>
                </div>
            </div>                
        </section>

        <!-- Footer -->
      <footer class="page-footer font-small pt-4">
        <div class="container">
          <!-- Footer Links -->
          <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-4 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">Samaritenii Renovaţio</h5>
                <p>Preţuim pe toţi oamenii, dar mai ales pe cei aflaţi în nevoi</p>

              </div>
              <!-- Grid column -->

              <hr class="clearfix w-100 d-md-none pb-3">

              <!-- Grid column -->
              <div class="col-md-4 mb-md-0 mb-4">

                <!-- Links -->
                <!-- <h5 class="text-uppercase">Links</h5> -->

                <!-- <a class="the-confidentiality-policy-link" href="/politica-de-confidentialitate">
                    Politica de confidenţialitate
                  </a>
                </div>
                <div class="col-md-3">
                  <a class="the-confidentiality-policy-link" href="/politica-generala-privind-protectia-datelor-cu-caracter-personal">
                    Politica generala privind protectia datelor cu caracter personal
                  </a> -->

                <ul class="list-unstyled">
                  <li>
                    <a href="/politica-de-confidentialitate">Politica de confidenţialitate</a>
                  </li>
                  <li>
                    <a href="/politica-generala-privind-protectia-datelor-cu-caracter-personal">Politica generală privind protecţia datelor cu caracter personal</a>
                  </li>
                  <li>
                    <a href="/termeni-si-conditii">Termeni şi condiţii</a>
                  </li>
                </ul>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 mb-md-0 mb-4">

                <!-- Links -->
                <h5 class="text-uppercase">În parteneriat cu:</h5>

                <ul class="list-unstyled">
                  <li>
                    <a target="_blank" href="http://fvl.ro/">Fundaţia Viaţă şi Lumină</a>
                  </li>
                  <li>
                    <a target="_blank" href="https://misiunearenovatio.ro/">Misiunea Renovaţio</a>
                  </li>
                </ul>


              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
              <a href="http://samariteniirenovatio.ro/">Samaritenii Renovaţio</a>
            </div>
            <!-- Copyright -->
        </div>
      </footer>
      <!-- Footer -->

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

    </body>
</html>