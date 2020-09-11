@include('includes.header')
        <!--Section: Contact v.2-->
        <section class="mb-4 contact">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Ajut-o pe Carmen să vadă!</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">
                Un gest mic poate face o mare diferenţă!
            </p>

            <div class="text-center w-responsive mx-auto mb-5 iban-section">
                <span class="contact-line">Asociatia Creştină Renovaţio, Str. Izbiceni nr. 5, sector 1, Bucureşti, Cod fiscal 38766448</span>
                <span class="contact-line"><strong>Conturi:</strong></span>
                <span class="contact-line">RO60RNCB0065157528730001 - valută RON</span>
                <span class="contact-line">RO33RNCB0065157528730002 - valută EUR</span>
                <span class="contact-line">RO06RNCB0065157528730003 - valută USD</span>
                <span class="contact-line red"><strong>Va rugam sa treceti la detalii plata: "Pentru Carmen"</strong></span>
                <span class="contact-line">Sucursala Bucureştii Noi, Bucureşti B-dul Bucureştii Noi nr. 170, Sector 1, cod poştal 012369, Bucureşti Cod Swift RNCBROBU</span>
            </div>

            <div class="text-center donate-with-card-button">
                <a href="https://pay.galantom.ro/donation_forms/view?id=3" target="_blank" class="donate-with-card-button">
                    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase donate-button" name="submit" type="submit">Donează cu cardul</button>
                </a>
            </div>

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contactează-ne</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">
                Ai vreo intrebare? Nu ezita să ne contactezi. Echipa noastră iţi va raspunde în cel mai scurt timp.
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
                            <p>București, Romania</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+40 761 067 822</p>
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