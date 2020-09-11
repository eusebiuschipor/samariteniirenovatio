@include('includes.header')
        <div class="row align-items-center noMargin" id="sosdiv">
          <div class="col-lg-6 col-md-12">
            <img class="logo-sos mobile" src="{{ URL::asset('img/sigla-sos-negru.png') }}" alt="">
            <p class="sos-title-first">DISTRIBUIM</p>
            <p><span class="sos-subtitle-red-background low-margin-top">GRATUIT ALIMENTE</span></p>
            <p class="sos-title-first low-margin-top">PERSOANELOR</p>
            <p class="sos-small-title low-margin-top-2">AFLATE IN SITUATII CRITICE</p>
            <p><span class="sos-subtitle-red-background high-margin-top">Ai nevoie de ajutor?</span></p>
            <p class="sos-small-subtitle">Cunosti persoane</p>
            <p class="sos-small-subtitle low-margin-top-3">ce ar avea nevoie de ajutor?</p>
          </div>
          <div class="col-lg-6 col-md-12">
                <div class="right-content">
                    <img class="logo-sos desktop" src="{{ URL::asset('img/sigla-sos-negru.png') }}" alt="">
                    <p class="sos-form-title">COMPLETEAZĂ FORMULARUL</p>
                    <p class="sos-form-subtitle">şi te vom contacta în cel mai scurt timp</p>
                    <form action="sendSosEmail" method="POST" class="sos-form">
                        {{ csrf_field() }}
                        <div class="row noMargin">
                            <div class="col-sm-6">
                                <label class="labelTextSos" for="name">NUME:</label>
                                <input class="inputTextSos" type="text" id="name" 
                                    oninvalid="this.setCustomValidity('Te rugăm să introduci numele')" oninput="setCustomValidity('')" name="name" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="labelTextSos" for="phone">TELEFON:</label>
                                <input class="inputTextSos" type="text" id="phone" 
                                    name="phone" oninvalid="this.setCustomValidity('Te rugăm să introduci numărul de telefon')" oninput="setCustomValidity('')" required><br>
                            </div>
                        </div>
                        <div class="row description">
                            <div class="col-sm-12">
                                <label class="labelTextSos" for="description">DESCRIERE CAZ:</label>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="textareaSos" name="description" 
                                    oninvalid="this.setCustomValidity('Te rugăm să introduci descrierea')" oninput="setCustomValidity('')"
                                    id="description" rows="2" required></textarea>
                            </div>
                        </div>
                        <div class="row noMargin">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                    oninvalid="this.setCustomValidity('Pentru a trimite formularul trebuie să fii de acord ca datele tale să fie colectate')" 
                                    oninput="setCustomValidity('')" required>
                                <label class="form-check-label" for="exampleCheck1">Sunt de acord ca datele mele să fie colectate</label>
                            </div>
                        </div>
                        <div class="row submit">
                            <input id="submit" type="submit" value="SEMNALEAZĂ CAZUL" class="send-case-button">
                        </div>
                    </form>
                    </div><div>
                </div>
            </div>
        </div>

        <section class="projects bg-texture sos-desription-section" id="portfolio">
            <div class="container">
                <div class="row row-sos-description">
                <div class="col-lg-12 text-center">
                    <h1>CREDINȚĂ | UNITATE | SOLIDARITATE</h1>
                    <h2 class="section-heading text-uppercase red">Cum ajutăm?</h2>
                </div>
                </div>
                <div class="row boxes-content-row">
                    <!-- <div class="col-lg-12"> -->
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="box-text-content">
                            <h4 class="title red">1. Alimente neperisabile</h4>
                            <div class="content">
                                Distribuim gratuit pachete alimentare neperisabile ( făină, ulei, mălai, paste, pastă de tomate, etc. ) persoanelor în vârstă, văduvelor, familiilor cu 
                                mulți copii, orfanilor, persoanlor aflate în izolare la domiciliu sau în carantină.
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="box-text-content">
                            <h4 class="title red">2. Kituri de protecție</h4>
                            <div class="content">
                                Distribuim gratuit kituri de protecție menite să limiteze și să oprească răspândirea virusului. Kitul este compus dintr-un set de mănusi și o mască. De 
                                asemenea, alături de acestea veți primi o Biblie - Noul Testament dar și un pliant informativ. Acestea sunt valabile pentru toate categoriile de vârstă. 
                                Momentan, stocul kiturilor de protecție este limitat. Prin urmare nu putem livra decât un singur kit / adresă.
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="box-text-content">
                            <h4 class="title red">3. Hrană caldă</h4>
                            <div class="content">
                                Distribuim gratuit hrană caldă și proaspătă persoanelor imobilizate, invalide sau cu grad mare de handicap , incapabile fizic în a-și găti personal. 
                                ( meniuri complete: felul 1 + felul 2 ).  Avem la dispoziție 40 bucătării organizate în fiecare sector al Bucureștiului și în județul Ilfov. 
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
                </div>
                <div class="row boxes-content-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="box-text-content">
                    <h4 class="title red">4. Alimente perisabile</h4>
                    <div class="content">
                        Distribuim gratuit pachete alimentare perisabile ( lactate, carne, legume, fructi, ouă, etc. ) persoanelor în vârstă, văduvelor, familiilor cu mulți copii, 
                        orfanilor, persoanlor aflate în izolare la domiciliu sau în carantină. 
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="box-text-content">
                    <h4 class="title red">5. Kituri de dezinfectare</h4>
                    <div class="content">
                        Distribuim gratuit kituri dezinfectante persoanelor în nevoie. Kitul dezinfectant este format din: pulverizator cu spirt de 100 ml, un pachet de șervețele
                        umede antibacteriene, un săpun și un set de batiste nazale.
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <footer class="page-footer font-small pt-4 footer-sos">
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

    </body>
</html>