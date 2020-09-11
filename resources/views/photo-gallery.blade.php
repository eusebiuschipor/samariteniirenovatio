@include('includes.header')
      <div id="container-loading">
        <div id="loading"></div>
      </div>

      <div class="gallery-container" id="gallery-container">
        @foreach($images as $image)
          <img src="{{ URL::asset('img/projects-gallery/'.$galleryName.'/thumbs/thumb_'.$image) }}"
               class="img-rounded gallery-image"
               data-image-load="{{ URL::asset('img/projects-gallery/'.$galleryName.'/'.$image) }}">
        @endforeach
      </div>

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

      <!-- <a href="#policy" onclick="showlightbox()">Manage Cookies</a> -->

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
      <!-- <script src="{{ URL::asset('js/jquery.mobile-1.4.5.js') }}"></script> -->
      <!-- <script src="{{ URL::asset('js/swipe.js') }}"></script> -->

      <script>
        function hideLoader() {
          $('#container-loading').hide();
          $('.gallery-container').show();
        }

        $(window).on("load", function() {
          hideLoader();
        });
      </script>

    </body>
</html>
