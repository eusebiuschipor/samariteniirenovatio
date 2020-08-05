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
      <link href="{{ URL::asset('css/jquery.mobile-1.4.5.css') }}" rel="stylesheet">
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

      <section class="confidentiality-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">POLITICA GENERALĂ PRIVIND PROTECŢIA DATELOR CU CARACTER PERSONAL</h2>
            </div>
          </div>
          <div class="row">
            <p>
                Asociația Creștină RENOVAȚIO trebuie să își desfășoare activitatea cu respectarea cerințelor în domeniul protecției datelor, inclusiv cele prevăzute de 
                Regulamentul General privind Protectia Datelor 2016/679/UE referitor la protecția persoanelor fizice în ceea ce privește prelucrarea datelor cu caracter 
                personal și libera circulație a acestor date ("<strong>Regulamentul</strong>"), ce este aplicabil de pe 25 mai 2018.
            </p>
            <p>
                Cerințele din acest document se aplică prelucrărilor de date cu caracter personal privind <strong>persoanele fizice</strong>, iar nu și cu privire la datele 
                referitoare la societăți sau la alte entități juridice.
            </p>
            <p>
                Notă: Se pot deține date cu caracter personal chiar dacă societatea are încheiate contracte de prestări servicii etc. numai cu persoane juridice. De ex., 
                în aceste cazuri se pot deține date despre reprezentanți legali, persoane de contact etc. ale acestor persoane juridice (de ex., adrese de email de afaceri 
                cu formatul "prenume.nume@societate.eu" sau numere de telefon).
            </p>
            <p>
                Asociația își ia angajamentul față de orice persoane care îi furnizează date cu caracter personal că asigură confidențialitatea și securitatea datelor cu 
                caracter personal în concordanță cu dispozițiile legale aplicabile în acest domeniu.
            </p>
            <p>
                În îndeplinirea atribuțiilor de zi cu zi, atunci când este necesar, angajații și voluntarii Asociației Creștine RENOVAȚIO prelucrează date aparținând 
                reprezentanților legali ai membrilor persoane juridice și ai prestatorilor de servicii/utilități cu care Asociația Creștină RENOVAȚIO a încheiat relații 
                contractuale, acționarilor persoane fizice, beneficiarilor reali, împuterniciților etc.
            </p>
            <p>
                În vederea asigurării celor mai înalte standarde de protecție, angajații și / sau voluntarii Asociației Creștine RENOVAȚIO care prelucrează date cu caracter 
                personal în vederea îndeplinirii atribuțiilor de serviciu trebuie să respecte cel puțin principiile și obligațiile principale listate în prezenta Politică.
            </p>
            <p><strong>1. Definiții</strong></p>
            <p>
                <strong>Datele cu caracter personal</strong> reprezintă informațiile care <strong>identifică o persoană fizică</strong> sau care o fac <strong>cel puțin 
                identificabilă</strong>. Datele cu caracter personal sunt împărțite în date generale (nume, prenume, telefon, adresă etc.) și date sensibile (serie și 
                număr buletin / pașaport, cod numeric personal, date privind starea de sănătate, date privind apartenența sindicală etc.).
            </p>
            <p>
                <strong>Prelucrarea</strong> reprezintă orice operațiune sau set de operațiuni efectuate asupra datelor cu caracter personal sau asupra seturilor de date cu 
                caracter personal, cu sau fără utilizarea de mijloace automatizate, cum ar fi colectarea, înregistrarea, organizarea, structurarea, stocarea, adaptarea sau 
                modificarea, extragerea, consultarea (simpla vizualizare/accesare), utilizarea, divulgarea prin transmitere, diseminarea sau punerea la dispoziție în orice 
                alt mod, alinierea sau combinarea, restricționarea, ștergerea sau distrugerea.
            </p>
            <p>
                <strong>Persoana vizată</strong> reprezintă orice persoană fizică ale cărei date cu caracter personal sunt prelucrate de către sau pe seama Asociației 
                Creștine RENOVAȚIO.
            </p>
            <p><strong>2. Principii privind prelucrarea datelor cu caracter personal</strong></p>
            <p><strong>2.1. Datele cu caracter personal trebuie să fie prelucrate în mod legal, echitabil și transparent față de persoana vizată</strong></p>
            <p>
                Persoana vizată reprezintă persoana fizică ale cărei date cu caracter personal sunt prelucrate.
            </p>
            <p>
                În vederea respectării principiului anterior enunțat, pentru a prelucra datele cu caracter personal, angajații și / sau voluntarii trebuie să se asigure că:
            </p>
            <ul>
                <li>există o bază legală pe care se întemeiază prelucrarea;</li>
                <li>prelucrarea nu aduce atingere drepturilor și libertăților fundamentale ale persoanelor vizate;</li>
                <li>persoanelor vizate le-a fost furnizat conținutul minim de informații privind activitățile de prelucrare.</li>
            </ul>
            <p>
                Verificările punctuale cu privire la respectarea cerințelor de mai sus vor fi făcute de către angajații și / sau voluntarii care iau decizia finală privind 
                necesitatea și modalitatea de realizare a prelucrării prin raportare la scopul avut în vedere.
            </p>
            <p>
                <strong>2.2. Datele cu caracter personal sunt colectate în scopuri determinate, explicite și legitime și nu sunt prelucrate ulterior într-un mod 
                    incompatibil cu aceste scopuri</strong>
            </p>
            <p>
                Angajații și / sau voluntarii Asociației Creștine RENOVAȚIO trebuie să aibă în vedere colectarea datelor pentru scopuri specific determinate (de ex., în 
                vederea încheierii contractului de muncă, în vederea îndeplinirii obligațiilor legale derivând din legislația fiscală etc.) și să se asigure că scopurile de 
                prelucrare nu contravin normelor legale incidente, respectiv că scopurile prelucrării sunt legale.
            </p>
            <p>
                Datele personale pot fi prelucrate numai în situațiile următoare:
            </p>
            <ul>
                <li>când utilizarea datelor este necesară pentru negocierea în vederea încheierii sau pentru executarea unui <strong>contract</strong> cu persoana vizată;</li>
                <li>pentru a respecta o <strong>obligație legală;</strong></li>
                <li>
                    când prelucrarea este necesară pentru îndeplinirea unei sarcini care servește unui <strong>interes public</strong>, prevăzut în legislația UE sau în 
                    legislația națională;
                </li>
                <li>pentru a proteja <strong>interesele vitale</strong> ale unei persoane fizice;</li>
                <li>
                    în scopul intereselor legitime ale Asociației Creștine RENOVAȚIO, cu excepția cazului în care prevalează interesele sau drepturile și libertățile 
                    fundamentale ale persoanei vizate, care necesită protejarea datelor cu caracter personal, în special atunci când persoana vizată este un copil;
                </li>
                <li>cu consimțământul persoanelor fizice în cauză.</li>
            </ul>
            <p>
                Ca să fie valabil, consimțământul trebuie să fie o manifestare de voință liberă, specifică, informată și lipsită de ambiguitate a persoanei vizate, prin 
                care aceasta acceptă, printr-o declarație sau printr-o acțiune fără echivoc, ca datele cu caracter personal care o privesc să fie prelucrate.
            </p>
            <p>
                Consimțământul trebuie exprimat pentru fiecare scop de prelucrare și impune identificarea adecvată a persoanei care a consimțit la prelucrare.
            </p>
            <p>
                <strong>2.3. Datele cu caracter personal prelucrate sunt adecvate, relevante și limitate la ceea ce este necesar în raport cu scopurile în care sunt 
                    prelucrate</strong>
            </p>
            <p>
                Datele colectate trebuie să fie într-adevăr necesare pentru prestarea serviciilor de către Asociația Creștină RENOVAȚIO și pentru îndeplinirea atribuțiilor
                angajaților și / sau voluntarilor Asociației Creștine RENOVAȚIO, fiind interzisă prelucrarea unor date care nu se subsumează unei necesități reale de 
                prelucrare, spre exemplu:
            </p>
            <ul>
                <li>
                    colectarea unor date personale cu caracter sensibil, cum ar fi date de sănătate, pentru desfășurarea campaniilor de marketing, în lipsa unei cerințe 
                    legale exprese în acest sens;
                </li>
                <li>
                    generarea unor rapoarte (de ex., liste în Excel) în care sunt incluse mai multe categorii de date decât cele strict necesare pentru realizarea scopului 
                    urmărit prin generarea raportului.
                </li>
            </ul>
            <p>
                De asemenea, datele colectate nu vor fi supuse altor activități de prelucrare suplimentare față de cele stabilite inițial. În măsura în care se vizează o 
                prelucrare suplimentară, persoana vizată va fi informată în legătură cu noua activitate vizată de prelucrare, cu o perioadă de timp rezonabilă înainte de 
                începerea propriu-zisă a prelucrării vizate.
            </p>
            <p>
                <strong>2.4. Datele cu caracter personal prelucrate sunt exacte și, în cazul în care este necesar, sunt actualizate</strong>
            </p>
            <p>
                Trebuie luate toate măsurile necesare pentru a se asigura că datele cu caracter personal care sunt inexacte, având în vedere scopurile pentru care sunt 
                prelucrate, sunt șterse sau rectificate fără întârziere.
            </p>
            <p>
                În acest sens angajații trebuie să evite stocarea documentelor ce conțin date cu caracter personal pe stațiile personale și să folosească datele stocate în 
                aplicațiile centralizate pentru a evita riscul utilizării unor date inexacte.
            </p>
            <p>
                <strong>2.5. Datele cu caracter personal trebuie păstrate într-o formă care permite identificarea persoanelor vizate pe o perioadă care nu depășește 
                    perioada necesară îndeplinirii scopurilor în care sunt prelucrate datele</strong>
            </p>
            <p>
                În desfășurarea activităților de prelucrare, angajații și / sau voluntarii Asociației Creștine RENOVAȚIO trebuie să se asigure că respectă cerințele de 
                stocare a datelor pe durata strict necesară scopului de prelucrare, inclusiv prin raportare la cerințele de arhivare impuse prin legislația specifică.
            </p>
            <p>
                <strong>
                    2.6. Datele cu caracter personal trebuie prelucrate într-un mod care asigură securitatea adecvată, inclusiv protecția împotriva prelucrării 
                    neautorizate sau ilegale și împotriva pierderii, a distrugerii sau a deteriorării accidentale, prin luarea de măsuri tehnice sau organizatorice 
                    corespunzătoare
                </strong>
            </p>
            <p>
                În activitatea de prelucrare a datelor, angajații și / sau voluntarii Asociației Creștine RENOVAȚIO trebuie să respecte cerințele de securitate impuse la
                nivelul Asociației Creștine RENOVAȚIO prin intermediul prezentei politici.
            </p>
            <p>
                <strong>3. Drepturile persoanelor vizate</strong>
            </p>
            <p>
                Regulamentul recunoaște mai multe drepturi persoanelor vizate. Aceste drepturi trebuie respectate și orice solicitare primită de angajații și / sau 
                voluntarii Asociației Creștine RENOVAȚIO în temeiul acestor drepturi trebuie gestionată conform cerințelor prezentei Politici.
            </p>
            <p>
                <strong>Dreptul la informare și dreptul de acces</strong> se referă la dreptul persoanelor vizate de a obține:
            </p>
            <ul>
                <li>o confirmare din partea Asociației Creștine RENOVAȚIO că sunt prelucrate sau nu datele cu caracter personal ce o privesc și, în caz afirmativ;</li>
                <li>
                    acces la datele respective și la informații privind modalitatea în care sunt prelucrate datele, scopul în care se face prelucrarea, destinatarii sau 
                    categoriile de destinatari ai datelor etc.
                </li>
            </ul>
            <p>
                <strong>Dreptul la portabilitatea datelor</strong> se referă la dreptul de a primi datele personale într-un format structurat, utilizat în mod curent și 
                care poate fi citit automat și la dreptul ca aceste date să fie transmise direct altui operator, dacă sunt îndeplinite cerințele legale și dacă această 
                transmitere este fezabilă din punct de vedere tehnic.
            </p>
            <p><strong>Dreptul la opoziție</strong> – orice persoană vizată are dreptul de a se opune:</p>
            <ul>
                <li>
                    în orice moment, din motive legate de situația sa particulară – ca datele care o vizează să fie prelucrate în interesul legitim al Asociației Creștine 
                    RENOVAȚIO, cu excepția cazurilor în care există dispoziții legale contrare;
                </li>
                <li>
                    în orice moment, în mod gratuit și fără nici o justificare, ca datele care o vizează să fie prelucrate în scop de marketing direct.
                </li>
            </ul>
            <p>
                <strong>Dreptul la rectificare</strong> se referă la corectarea fără întârzieri nejustificate a datelor cu caracter personal inexacte. Rectificarea va fi 
                comunicată fiecărui destinatar la care au fost transmise datele, cu excepția cazului în care acest lucru se dovedește imposibil sau presupune eforturi 
                disproporționate.
            </p>
            <p>
                <strong>Dreptul la ștergerea datelor ("dreptul de a fi uitat")</strong> se referă la dreptul de a solicita ștergerea datelor cu caracter personal, fără 
                întârzieri nejustificate, în cazul în care se aplică unul dintre următoarele motive:
            </p>
            <ul>
                <li>acestea nu mai sunt necesare pentru îndeplinirea scopurilor pentru care au fost colectate sau prelucrate;</li>
                <li>în cazul în care este retras consimțământul și nu există un alt temei juridic pentru prelucrare;</li>
                <li>în cazul în care persoana vizată se opune prelucrării și nu există motive legitime care să prevaleze;</li>
                <li>în cazul în care datele cu caracter personal au fost prelucrate ilegal;</li>
                <li>în cazul în care datele cu caracter personal trebuie șterse pentru respectarea unei obligații legale.</li>
            </ul>
            <p>
                <strong>Dreptul la restricționarea prelucrării</strong> poate fi exercitat în cazul în care persoana contestă exactitatea datelor, pe o perioadă care 
                permite Asociației Creștine RENOVAȚIO verificarea corectitudinii datelor.
            </p>
            <p>
                <strong>Dreptul de a nu fi supus unei decizii individuale</strong> - orice persoană are dreptul de a nu face obiectul unei decizii bazate exclusiv pe 
                prelucrarea automată, inclusiv crearea de profiluri, care produce efecte juridice care privesc persoana vizată sau o afectează în mod similar într-o măsură 
                semnificativă, cu excepția cazului în care această prelucrare:
            </p>
            <ul>
                <li>este necesară pentru încheierea sau executarea unui contract între persoana vizată și Asociației Creștine RENOVAȚIO;</li>
                <li>
                    este autorizată prin dreptul Uniunii sau dreptul intern care se aplică operatorului și care prevede, de asemenea, măsuri corespunzătoare pentru protejarea
                    drepturilor, libertăților și intereselor legitime ale persoanei vizate sau
                </li>
                <li>are la bază consimțământul explicit al persoanei vizate.</li>
            </ul>
            <p>
                Persoana vizată poate solicita reconsiderarea deciziei luate în cele 3 cazuri de mai sus.
            </p>
            <p>
                Toate aceste drepturi pot fi exercitate de către persoanele vizate printr-o cerere transmisă la sediul Asociației Creștine RENOVAȚIO sau la adresa de 
                e-mail: contact@samariteniirenovatio.ro.
            </p>
            <p>
                Asociația Creștină RENOVAȚIO trebuie să răspundă oricărei solicitări de exercitare a drepturilor persoanelor vizate în termen de cel mult o lună 
                (de regulă), respectând conținutul minim stabilit de Regulament.
            </p>
            <p><strong>4. Încălcarea securității datelor</strong></p>
            <p>
                O încălcare a securității datelor se produce atunci când datele pentru care Asociația Creștină RENOVAȚIO este responsabilă suferă un incident de securitate 
                care duce, în mod accidental sau ilegal, la compromiterea confidențialității, a disponibilității sau a integrității datelor cu caracter personal (de ex., 
                distrugerea, pierderea, modificarea sau divulgarea neautorizate a datelor cu caracter personal).
            </p>
            <p>
                Incidente de securitate pot surveni, de ex., în urma unor atacuri cibernetice, dar și atunci când este pierdut un echipament (de ex., telefon laptop, etc.) 
                pe care sunt salvate date cu caracter personal sau când este trimis din greșeală un e-mail în care sunt incluse date cu caracter personal unei alte persoane 
                decât destinatarului intenționat.
            </p>
            <p>
                Orice angajat și / sau voluntar care ia cunoștință de un incident de securitate ce poate conduce la afectarea datelor cu caracter personal trebuie să anunțe 
                de îndată conducerea Asociației Creștine RENOVAȚIO.
            </p>
            <p>
                Conducerea Asociației Creștine RENOVAȚIO, împreună cu responsabilul de IT, analizează incidentul, apoi stabilește și implementează măsurile necesare 
                eliminării consecințelor respectivului incident.
            </p>
            <p>
                Dacă există probabilitatea ca încălcarea să prezinte un risc pentru drepturile și libertățile persoanelor fizice, Asociația Creștină RENOVAȚIO are obligația
                să înștiințeze Autoritatea Națională de Supraveghere a Prelucrării Datelor cu Caracter Personal în termen de cel mult 72 de ore de la momentul la care a luat 
                cunoștință de încălcare.
            </p>
            <p>
                Dacă încălcarea securității datelor prezintă un risc ridicat pentru persoanele fizice afectate, atunci trebuie să fie informate și toate aceste persoane 
                (cu excepția cazului în care s-au aplicat măsuri de protecție tehnice și organizatorice eficace sau alte măsuri care asigură faptul că riscul nu mai este 
                susceptibil să se materializeze).
            </p>
            <p>
                Asociația Creștină RENOVAȚIO ține un registru privind incidentele de securitate a datelor cu caracter personal, inclusiv a măsurilor stabilite și luate 
                pentru remedierea consecințelor acestor incidente.
            </p>
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
