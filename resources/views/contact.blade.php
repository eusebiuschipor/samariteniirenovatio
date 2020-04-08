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
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <!-- Next and previous buttons -->
            <a class="prev">&#10094;</a>
            <a class="next">&#10095;</a>
            <div id="modal-container">
            </div>
        </div>
        </div>

        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top photo-gallery" id="mainNav">
        <div class="container">
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
            </ul>
            </div>
            </div>
        </nav>

        <!--Section: Contact v.2-->
        <section class="mb-4 contact">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contacteaza-ne</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">
                Ai vreo intrebare? Nu ezita sa ne contactezi. Echipa noastra iti va raspunde in cel mai scurt timp.
            </p>

            <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form action="/insert" method="POST">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Nume</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subiect</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Mesaj</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                    <div class="text-center text-md-left">
                        <input type = 'submit' class="btn btn-primary send-button" value = "Trimite mesaj"/>
                    </div>
                    <div class="status"></div>
                    </div>
                <!--Grid column-->

                </form>

                
                

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Bucuresti, Romania</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+40 766 893 416</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>samariteniirenovatio@gmail.com</p>
                        </li>

                        <li>
                            <a href="https://www.facebook.com/samariteniirenovatio" target="_blank">
                                <i class="fab fa-facebook-f mt-4 fa-2x"></i>
                                <p>Samaritenii Renovatio</p>
                            </a>
                        </li>

                        <li>
                            <a href="http://www.instagram.com/samariteniirenovatio" target="_blank">
                                <i class="fab fa-instagram mt-4 fa-2x"></i>
                                <p>Samaritenii Renovatio</p>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.facebook.com/misiunearenovatio" target="_blank">
                                <i class="fab fa-facebook-f mt-4 fa-2x"></i>
                                <p>Misiunea Renovatio</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->

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