<!DOCTYPE html>
<html lang="pl">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Formacja Tańca towarzyskiego Gamza</title>
        <!-- Favicon-->
        <link rel="icon" href="<?php echo e(asset('img/icon.ico')); ?>">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <script src="<?php echo e(asset('js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/smoothScrolling.js')); ?>"></script>
        <script src="<?php echo e(asset('js/storage.js')); ?>"></script>


        <!-- Google fonts-->


        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" />    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="<?php echo e(asset('img/header.jpg')); ?>" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Co oferujemy</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Nasze zdjęcia</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">O nas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Zarząd</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Zaloguj</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>">Zarejestruj sie</a></li>             
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">FORMACJA TAŃCA TOWARZYSKIEGO GAMZA</div>
                <div class="masthead-heading text-uppercase">Dołącz do nas </div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Dowiedz się wiecej</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Co oferujemy</h2>
                    <h3 class="section-subheading text-muted">Kilka rzeczy jakie możemy zagwarantować </h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">

                        <h4 class="my-3">Profesjonalne szkolenie taneczne</h4>
                    <p class="text-muted">
                            Formacja Tańca Towarzyskiego Politechniki Lubelskiej oferuje
                             szkolenie taneczne prowadzone przez doświadczonych
                            instruktorów. Członkowie formacji mają możliwość rozwijania swoich
                            umiejętności tanecznych w różnych stylach tańca, takich jak walc
                            angielski, tango, foxtrot, cha-cha czy jive.
                        </p>
                    </div>
                    <div class="col-md-4">

                        <h4 class="my-3">Wydarzenia i pokazy taneczne</h4>
                        <p class="text-muted">

                            Formacja regularnie organizuje różnego rodzaju wydarzenia
                            i pokazy taneczne. Członkowie formacji mają możliwość
                            prezentowania swoich umiejętności publicznie podczas
                            koncertów, festiwali, imprez uczelnianych i innych ważnych
                            okazji. Udział w takich wydarzeniach daje
                            szansę na rozwijanie umiejętności scenicznego występowania,
                            zdobywanie pewności siebie i kształtowanie swojego własnego
                            stylu tanecznego. </p>
                    </div>
                    <div class="col-md-4">

                        <h4 class="my-3">Prosta Przyjemność</h4>
                        <p class="text-muted">
                            Formacja Tańca Towarzyskiego Politechniki Lubelskiej
                            oferuje nie tylko szanse na naukę i rozwój taneczny,
                            ale także stwarza atmosferę współpracy, pasji i
                            przyjaźni. To miejsce, w którym studenci mogą
                            spełniać swoje taneczne marzenia, zdobywać nowe
                            doświadczenia i czerpać radość z tańca.

                     </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nasze zdjęcia</h2>
                    <h3 class="section-subheading text-muted">Chwile które warto pamiętać</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
            <img class="img-fluid" src="<?php echo e(asset('img/1.jpg')); ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Występ</div>
                                <div class="portfolio-caption-subheading text-muted">Zdjęcie Pamiątkowe</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo e(asset('img/2.jpg')); ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Grafiki </div>
                                <div class="portfolio-caption-subheading text-muted">Grafiki promujące wydarzenia</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo e(asset('img/3.jpg')); ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Charytatywnie</div>
                                <div class="portfolio-caption-subheading text-muted">Akcje charytatywne </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo e(asset('img/4.jpg')); ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pamiątkowe</div>
                                <div class="portfolio-caption-subheading text-muted">Zdjęcia pamiątkowe</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo e(asset('img/5.jpg')); ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Zapisy</div>
                                <div class="portfolio-caption-subheading text-muted">Zapisy do gamzy</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Wakacje</div>
                                <div class="portfolio-caption-subheading text-muted">Wyjazdy integracyjne</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">O nas</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo e(asset('/about/1.jpg')); ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1970</h4>
                                <h4 class="subheading">Gamza została założona </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                                Gamza została założona w 1970 roku przez dwóch studentów Politechniki Lubelskiej: Wiktora Życzyńskiego i Krystynę Majdan.

                            </p></div>
                        </div>

                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo e(asset('/about/2 2.jpg')); ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Maj 2022</h4>
                                <h4 class="subheading">Rozpoczęcie przygody z reprezentacją </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo e(asset('/about/3.jpg')); ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Czarnogóra 2022</h4>
                                <h4 class="subheading">Pierwszy występ</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">

                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Sunt ut voluptatum eius sapiente, totam reiciendis
                                temporibus qui quibusdam, recusandae sit vero unde, sed,
                                incidunt et ea quo dolore laudantium consectetur!

                            </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo e(asset('/about/4.jpg')); ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>28 LUTY 2023</h4>
                                <h4 class="subheading">GAMZA IN MOVIES</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Bądź
                                <br />
Częścią                                <br />
                                GAMZY!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ZARZĄD</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" id="myImage" src=" <?php echo e(asset('/team/1.jpg')); ?>" alt="Moje zdjęcie">
                            <h4>Piotr Mochol</h4>                                  
                            <p class="text-muted">Trener Tańca Sportowego, Dyrektor Artystyczny, Choreograf w: Politechnika Lubelska
                            </p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                       
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo e(asset('/team/2.jpg')); ?>" alt="..." />
                            <h4>Tomasz Lizak</h4>
                            <p class="text-muted">Trener Tańca Sportowego</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo e(asset('/team/3.jpg')); ?>" alt="..." />
                            <h4>Krzysztof Dobosz</h4>
                            <p class="text-muted">Prezes Formacji</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/krzysztofdobosz2001/" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/krzysztofdobosz2001/" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/krzysztofdobosz2001/" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src=" <?php echo e(asset('/logos/google.svg')); ?>" alt="..." aria-label="Google Logo" /></a>
                    </div>                                                                             
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src=" <?php echo e(asset('/logos/facebook.svg')); ?>" alt="..." aria-label="Facebook Logo" /></a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Contact-->
        

            </div>
                    </div>

            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
        
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo e(asset('img/close-icon.svg')); ?>" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"> GAMZA IN MOVIES </h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('img/1.jpg')); ?>" alt="..." />
                                    <p>
                                        GAMZA IN MOVIES - XXXII Charytatywny Koncert Noworoczno–Karnawałowy
                                    </p>

                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       




        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo e(asset('img/close-icon.svg')); ?>" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Grafika Promująca Koncert</h2>
                                    <p class="item-intro text-muted">Grafiki wykonywane są przez członków formacji tanecznej.</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('img/2.jpg')); ?>" alt="..." />
                                    <p>


                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Autor</strong>
                                            Kasia Gryzka wiceprezes Gamzy
                                        </li>

                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo e(asset('img/close-icon.svg')); ?>" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Akcje Charytatwyne</h2>
                                    <p class="item-intro text-muted">Akcja charytatywana: podaruj pluszaka.</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('img/3.jpg')); ?>" alt="..." />
                                    <p>
                                        Formacja bierze udział nie tylko w koncertach ale też w różnych akcjach charytatywnych.

                                    </p>
                                    <ul class="list-inline">

                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo e(asset('img/close-icon.svg')); ?>" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Zdjęcia Pamiątkowe</h2>
                                    <p class="item-intro text-muted">
                                        Zdjęcie Pamiątkowe po koncercie.
                                    </p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('img/4.jpg')); ?>" alt="..." />
                                    <p>
                                    Po każdym koncercie , gdy już emocje opadną robimy pamiątkowe zdjęcia :D
                                    </p>
                                    <ul class="list-inline">

                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo e(asset('img/close-icon.svg')); ?>" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Zapisy na zajjęcia</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('img/5.jpg')); ?>" alt="..." />
                                    <p>
                                        Na zajęcia może zapisać się każdy! nie ważne czy student czy nie.
                                        Opłata za zajęcia to tylko 75 zł dla studentów politechniki lubelskiej, oraz
                                        100 zł dla pozostałych.
                                        CENA JEST WYMAGANA JEDNORAZOWO ZA SEMESTR!

                                    </p>

                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo e(asset('img/close-icon.svg')); ?>" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Wyjazdy</h2>
                                    <p class="item-intro text-muted">
                                        Wyjazdy zagraniczne
                                    </p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo e(asset('img/6.jpg')); ?>" alt="..." />
                                    <p>
                                        Dla najbardziej zaangażowanych członków rezprezentacji organizowane są integracyjne
                                        wyjazdy zagraniczne.
                                    </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Wyjazd lato 2022</strong>
                                            Czarnogóra
                                        </li>

                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Zamknij
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <h2 class="section-heading text-uppercase" style="display: flex; justify-content: center; align-items: center;">Znajdź nas</h2>
        <div id="map-container">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1249.0750842702469!2d22.5474557!3d51.2347292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47225777401c2e79%3A0x2a262283a85726fa!2sFormacja%20Ta%C5%84ca%20Towarzyskiego%20Politechniki%20Lubelskiej%20GAMZA!5e0!3m2!1spl!2spl!4v1685984616875!5m2!1spl!2spl"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>




        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>');</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                    function () {
                        (b[l].q = b[l].q || []).push(arguments);
                    });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r);
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projekt\projp\resources\views/index.blade.php ENDPATH**/ ?>