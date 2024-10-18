<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Solatec - Solar and Renewable Energy Template">
    <link href="/assets/images/icone.png" rel="icon">
    <title>@yield('title')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css?v=2">
    <link rel="stylesheet" href="/assets/css/libraries.css?v=2">
    <link rel="stylesheet" href="/assets/css/style.css?v=2">
    <link rel="stylesheet" href="/assets/css/custom_style.css?v=2">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/cookie-consent/css/cookie-consent.css?v=2') }}">
    <script src="https://unpkg.com/scrollreveal"></script>
    @yield('js-header')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css?v=2">
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5.2.2/dist/photoswipe.css?v=2">

    <style>
        .header {
            background: unset !important;
        }

        .navbar .navbar-brand img {
            filter: unset;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div><!-- /.preloader -->
        <a href="https://api.whatsapp.com/send/?phone=551835225400&text&type=phone_number&app_absent=0" class="float"
            target="_blank">
            <i class="fab fa-whatsapp my-float"></i>
        </a>

        <!-- =========================
        Header
    =========================== -->
        <header class="header header-layout1">
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/" style="padding: 0px; line-height:0px">
                        <img src="/assets/images/logo-agrofertil.png" style="width: 70%" class="logo"
                            alt="Agrofértil">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto" id="color-2">
                            <li class="nav__item">
                                <a href="/" class="nav__item-link">Home</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="/#sobre-nos-link" class="nav__item-link">Sobre Nós</a>
                            </li><!-- /.nav-item -->


                            <li class="nav__item">
                                <a href="/galeria" class="nav__item-link">Galeria</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="https://grupoagrofertil.enlizt.me/" target="_blank"
                                    class="nav__item-link">Trabalhe Conosco</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="/ouvidoria" class="nav__item-link">Ouvidoria</a>
                            </li><!-- /.nav-item -->

                            {{-- <li class="nav__item has-dropdown">
                                <a href="#acesse" class="nav__item-link">Acesse</a>
                                <button class="dropdown-toggle" data-toggle="dropdown"></button>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="#" class="nav__item-link">Portal do Cliente</a>
                                    </li><!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="https://ciclloagro.com.br/" class="nav__item-link">Seguro Agrícola</a>
                                    </li><!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="#" class="nav__item-link">Portal da Transparência</a>
                                    </li><!-- /.nav-item -->
                                </ul><!-- /.dropdown-menu -->
                            </li><!-- /.nav-item --> --}}
                        </ul><!-- /.navbar-nav -->
                        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
                    </div><!-- /.navbar-collapse -->
                    <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                        <li>
                            <a href="/contato" class="btn btn__primary">
                                <span>Contato</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul><!-- /.navbar-actions -->
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->

        @yield('content')

        <footer class="footer">
            <div class="footer-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 footer-widget footer-widget-contact">
                            <a href="/">
                                <img src="/assets/images/logo-agrofertil.png" class="mb-20">
                            </a>
                            <div class="footer-widget-content">
                                <p class="mb-20">
                                    Demonstramos o nosso comprometimento com o crescimento e a evolução sustentável da
                                    agricultura.
                                </p>

                                <p class="mb-10">
                                    <a href="#" class="btn__location">
                                        <i class="icon-location"></i> Matriz:
                                        <span style="font-weight: 100">Av. Marechal Castelo Branco, 403
                                            Adamantina/SP</span>
                                    </a>
                                </p>

                                <p class="mb-10">
                                    <a href="tel:1835225400" target="_blank" class="btn__location">
                                        <i class="icon-phone"></i>
                                        <span style="font-weight: 100"> (18) 3522-5400</span>
                                    </a>
                                </p>

                                <p class="mb-10">
                                    <a href="mailto:agrofertil@grupoagrofertil.com.br" target="_blank"
                                        class="btn__location">
                                        <i class="fa fa-envelope"></i>
                                        <span
                                            style="font-weight: 100; font-size:14px">agrofertil@grupoagrofertil.com.br</span>
                                    </a>
                                </p>

                                <ul class="social-icons list-unstyled">
                                    <li><a href="https://www.facebook.com/agrofertil.crialt" target="_blank"><i
                                                class="fab fa-facebook-f" style="color: white"></i></a></li>
                                    <li><a href="https://www.instagram.com/grupoagrofertil/" target="_blank"><i
                                                class="fab fa-instagram" style="color:white"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCOls91wDJ9G26ib2fRWSE1g/featured"
                                            target="_blank"><i class="fab fa-youtube" style="color: white"></i></a>
                                    </li>
                                </ul><!-- /.social-icons -->


                                <div id="tag-cookies" class="tag-desktop">
                                    <h5>Cookies</h5>
                                    <p>Ao utilizar esse site você concorda com nossa política de cookies. <a
                                            target="_blank" href="/politica-de-privacidade">Como assim?</a>
                                    </p>
                                </div>


                            </div><!-- /.footer-widget-content -->
                        </div><!-- /.col-xl-3 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 footer-widget footer-widget-nav"
                            style="display: flex; justify-content:center">

                            <div class="sss">
                                <h6 class="footer-widget-title">Links Úteis:</h6>
                                <div class="footer-widget-content">
                                    <nav>
                                        <ul class="list-unstyled">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/#sobre-nos-link">Sobre Nós</a></li>
                                            <li><a href="/comunicacao">Comunicação</a></li>
                                            <li><a href="/galeria">Galeria</a></li>
                                            <li><a href="/trabalhe-conosco">Trabalhe Conosco</a></li>
                                            <li><a href="/contato" target="_blank">Contato</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- /.footer-widget-content -->
                            </div>
                        </div><!-- /.col-xl-2 -->

                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 footer-widget footer-widget-nav"
                            style="display: flex; justify-content:center">

                            <div class="sss">
                                <h6 class="footer-widget-title">Externos:</h6>
                                <div class="footer-widget-content">
                                    <nav>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Portal do Cliente</a></li>
                                            <li><a href="https://ciclloagro.com.br/" target="_blank">Seguro
                                                    Agrícola</a></li>
                                            <li><a href="#">Portal da Transparência</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- /.footer-widget-content -->
                            </div>
                        </div><!-- /.col-xl-2 -->

                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 footer-widget footer-widget-nav"
                            style="display: flex; justify-content:center">
                            <div class="sss">
                                <h6 class="footer-widget-title">Nossas sedes:</h6>
                                <div class="footer-widget-content">
                                    <nav>
                                        <p class="mb-20">
                                            <a href="https://maps.app.goo.gl/ksQUWsLeN7KtXv8A6" target="_blank"
                                                class="btn__location">
                                                <i class="icon-location"></i> Araçatuba:
                                                <span style="font-weight: 300">Av. Waldemar Alves, 3070 - Parque
                                                    Industrial | Araçatuba - SP, 16075-235 <br>
                                                </span>
                                            </a>
                                            <a href="tel:1836212606" target="_blank" class="btn__location">
                                                <i class="icon-phone"></i>
                                                <span style="font-weight: 100"> (18) 3621-2606</span>
                                            </a>
                                        </p>

                                        <p class="mb-20">
                                            <a href="https://maps.app.goo.gl/SsxjFJ33KPsdpEpr9" target="_blank"
                                                class="btn__location">
                                                <i class="icon-location"></i> Tupã:
                                                <span style="font-weight: 300">Rod. Cmte. João Ribeiro de Barros, KM
                                                    529 |
                                                    Zona Rural |
                                                    Tupã – SP, 17605-253
                                                    <br>

                                                </span>

                                            </a>
                                            <a href="tel:1434913938" target="_blank" class="btn__location">
                                                <i class="icon-phone"></i>
                                                <span style="font-weight: 100"> (14) 3491-3938</span>
                                            </a>
                                        </p>

                                        <p class="mb-20">
                                            <a href="https://maps.app.goo.gl/Trw1cEvEyiHhAA2o7" target="_blank"
                                                class="btn__location">
                                                <i class="icon-location"></i> Guaraçaí:
                                                <span style="font-weight: 300">Rua João Machado, 303, Centro |
                                                    Guaraçaí – SP, 16980-000
                                                    <br>

                                                </span>
                                            </a>
                                            <a href="tel:1837051917" target="_blank" class="btn__location">
                                                <i class="icon-phone"></i>
                                                <span style="font-weight: 100"> (18) 3705-1917</span>
                                            </a>
                                        </p>

                                        <p class="mb-20">
                                            <a href="https://maps.app.goo.gl/rGAeMRw9g1xnJAjs6" target="_blank"
                                                class="btn__location">
                                                <i class="icon-location"></i> Santo Anastácio:
                                                <span style="font-weight: 300">Avenida Bartolomeu Ortiz de Oliver, 1395
                                                    - Jardim Ipiranga | Santo Anastácio - SP, 19360-000
                                                    <br>

                                                </span>
                                            </a>
                                            <a href="tel:1832631310" target="_blank" class="btn__location">
                                                <i class="icon-phone"></i>
                                                <span style="font-weight: 100"> (18) 3263-1310</span>
                                            </a>
                                        </p>
                                        <div id="tag-cookies" class="tag-mobile">
                                            <h5>Cookies</h5>
                                            <p>Ao utilizar esse site você concorda com nossa política de cookies. <a
                                                    target="_blank" href="/politica-de-privacidade">Como assim?</a>
                                            </p>
                                        </div>
                                    </nav>
                                </div><!-- /.footer-widget-content -->
                            </div>
                        </div><!-- /.col-xl-2 -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-primary -->
            <div class="footer-copyrights">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 text-sm-center d-flex justify-content-between">
                            <nav>
                                <ul class="copyright__nav d-flex flex-wrap list-unstyled mb-0">
                                    <li><a href="/termos-de-uso">Termos de Uso</a></li>
                                    <li><a href="/politica-de-privacidade">Política de Privacidade</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-12 col-md-6 text-center">
                            <p class="mb-0">
                                <span class="color-gray">&copy; {{ Date('Y') }} Agrofértil | Desenvolvido com
                                    &hearts; por <a href="https://agenciaevidence.com.br" target="_blank">Agência
                                        Evidence</a></span>
                            </p>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-copyrights-->
        </footer><!-- /.Footer -->
        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
        <div class="search-popup">
            <button class="search-popup__close"><i class="fas fa-times"></i></button>
            <form class="search-popup__form">
                <input type="text" class="search-popup__input" placeholder="Type Words Then Enter">
                <button class="search-popup__btn"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /. search-popup -->
    </div><!-- /.wrapper -->

    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/animations.js"></script>
    <script src="/assets/js/anime.min.js"></script>
    <script src="https://kit.fontawesome.com/e3b409a117.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="/assets/css/animations.css?v=2"></script>

    <script>
        $.js = function(el) {
            return $('[data-js=' + el + ']')
        };

        function carousel() {
            $.js('timeline-carousel').slick({
                infinite: false,
                arrows: true,
                dots: false,
                autoplay: false,
                speed: 1100,
                slidesToShow: 3,
                slidesToScroll: 2,
                swipeToSlide: true,
                draggable: true,
                responsive: [{
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }]
            });
        }

        carousel();

        if (window.location.pathname != "/") {
            $('#color-2 li a').addClass('color-dark-nav')
            $('.header .navbar .navbar-toggler .menu-lines').addClass('color-dark-nav-menu')
        }
    </script>

    @yield('js')

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
</body>

</html>
