@extends('templates.master')

@section('title')
    Agrofértil | Produtos Agrícolas e Assistência Técnica
@endsection

@section('seo')
    <meta name="title" content="Agrofértil | Produtos Agrícolas e Assistência Técnica" />
    <meta name="description"
        content="Há 30 anos chegamos no mercado agrícola com o objetivo de suportar o produtor com assistência técnica diferenciada, produtos de qualidade e atualização tecnológica. Com unidades em Adamantina, Tupã, Guaraçaí, Araçatuba, Santo Anastácio e Bady Bassitt, nos tornamos referência para os produtores de todo o Oeste Paulista. 'Demonstramos o nosso comprometimento com o crescimento e a evolução sustentável da agricultura.'" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />
    <meta property="og:title" content="Agrofértil | Produtos Agrícolas e Assistência Técnica" />
    <meta property="og:description"
        content="Há 30 anos chegamos no mercado agrícola com o objetivo de suportar o produtor com assistência técnica diferenciada, produtos de qualidade e atualização tecnológica. Com unidades em Adamantina, Tupã, Guaraçaí, Araçatuba, Santo Anastácio e Bady Bassitt, nos tornamos referência para os produtores de todo o Oeste Paulista. 'Demonstramos o nosso comprometimento com o crescimento e a evolução sustentável da agricultura.'" />
    <meta property="og:image" content="/assets/images/meta-tags.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="/" />
    <meta property="twitter:title" content="Agrofértil | Produtos Agrícolas e Assistência Técnica" />
    <meta property="twitter:description"
        content="Há 30 anos chegamos no mercado agrícola com o objetivo de suportar o produtor com assistência técnica diferenciada, produtos de qualidade e atualização tecnológica. Com unidades em Adamantina, Tupã, Guaraçaí, Araçatuba, Santo Anastácio e Bady Bassitt, nos tornamos referência para os produtores de todo o Oeste Paulista. 'Demonstramos o nosso comprometimento com o crescimento e a evolução sustentável da agricultura.'" />
    <meta property="twitter:image" content="/assets/images/meta-tags.png" />
@endsection

@section('js-header')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')
    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "autoplay": true, "autoplaySpeed": 3000, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h bg-overlay bg-overlay-2">
                <div class="bg-img"><img src="/assets/images/banner3.png" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="slide__body slide-one">
                                <h2 class="slide__title slide__title-top">
                                    Nos comprometemos com o<br><span>crescimento e
                                        a evolução<span></h2>
                                <h2 class="slide__title slide__title-medium">
                                    Susten<br>tável</h2>
                                <h2 class="slide__title slide__title-bottom">
                                    da agricultura</h2>
                            </div><!-- /.slide__body -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay bg-overlay-2">
                <div class="bg-img"><img src="/assets/images/banner2.webp" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="slide__body slide-two">
                                <h2 class="slide__title "><img style="display: inline;"
                                        src="/assets/images/logo-agrofertil.png" alt=""></h2>
                                <h2 class="slide__title slide__title-medium">
                                    Sempre à sua<br>disposição</h2>
                                <h2 class="slide__title slide__title-bottom">
                                </h2>
                            </div><!-- /.slide__body -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ======================
                fancybox Layout 1
            ========================= -->
    <section class="fancybox-layout1 py-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="cta__banner h-100">
                        <h3 class="cta__title color-white" style="font-weight: 700">Sustentabilidade: </h3>
                        <p class="cta__desc font-weight-bold color-white mb-0" style="font-weight: 400 !important">Atuamos
                            em prol da sustentabilidade no setor agrícola. Contribuimos para o progresso de forma que não
                            agrida o meio ambiente.</p>
                    </div><!-- /.cta__banner -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="row row-no-gutter fancybox-wrapper">
                        <!-- fancybox item #1 -->
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="fancybox-item h-100">
                                <div class="fancybox__panel">
                                    <div class="fancybox__body">
                                        <h4 class="fancybox__title" style="font-weight: 700">Missão:</h4>
                                        <p class="fancybox__desc">Desenvolvimento sustentável do Agronegócio,
                                            fornecendo assistência técnica diferenciada, produtos de qualidade e atualização
                                            tecnológica.</p>
                                    </div>
                                </div><!-- /.fancybox-panel -->
                            </div><!-- /. fancybox-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Feature item #2 -->
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="fancybox-item h-100">
                                <div class="fancybox__panel">
                                    <div class="fancybox__body">
                                        <h4 class="fancybox__title" style="font-weight: 700">Visão:</h4>
                                        <p class="fancybox__desc">Ser a empresa referência em qualidade e agilidade na
                                            comercialização e suporte técnico ao produtor rural.
                                        </p>

                                    </div>
                                </div><!-- /.fancybox-panel -->
                            </div><!-- /. fancybox-item -->
                        </div><!-- /.col-lg-4 -->
                        <!-- Feature item #3 -->
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="fancybox-item h-100">
                                <div class="fancybox__panel">
                                    <div class="fancybox__body">
                                        <h4 class="fancybox__title" style="font-weight: 700">Valores:</h4>
                                        <p class="fancybox__desc">
                                        <ul style="padding-inline-start: 20px;">
                                            <li>Respeito</li>
                                            <li>Integridade</li>
                                            <li>Ética</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div><!-- /.fancybox-panel -->
                            </div><!-- /. fancybox-item -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div id="sobre-nos-link"></div>
    </section><!-- /.fancybox Layout 1 -->


    <section class="banner-layout5" id="sobre-nos">
        <div class="container">
            {{-- <img class="img-design1" src="/assets/images/icons/planta.png" alt="design"> --}}
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="heading-layout2" style="text-align: center">
                        <h3 class="about-us sub_title">Sobre nós:</h3>
                        <h2 class="heading__title historia">Uma história de</h2>
                        <h2 class="heading__title conquistas">Conquistas!</h2>
                    </div>
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
            <div class="row text-about-us">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="img-block2">
                        <div class="video__wrapper2 d-flex align-items-center">
                            <span class="video__btn-title p-0 mr-20">Confira nosso vídeo institucional!</span>
                            <span class="video__btn-divider"></span>
                            <a class="video__btn popup-video" target="_blank" aria-label="Vídeo Institucional"
                                href="https://www.youtube.com/watch?v=UGFu6pPJiTg">
                                <div class="video__player">
                                    <i class="fa fa-play"></i>
                                </div>
                            </a>
                        </div>
                        <img src="/assets/images/banners/about-us-image2.webp" alt="Sobre a Agrofértil"
                            style="height:595px; object-fit:cover; border-radius:15px;">
                    </div><!-- /.img-block -->
                    <div class="text-block">
                        <div class="banner__text">
                            <p>Há <b>30</b> anos chegamos no mercado agrícola com o objetivo de suportar o produtor com
                                <b>assistência
                                    técnica diferenciada</b>,
                                produtos de qualidade e atualização tecnológica. Com unidades em <b>Adamantina</b>,
                                <b>Tupã</b>, <b>Guaraçaí</b>,
                                <b>Araçatuba,</b> <b>Santo Anastácio</b> e <b>Baddy Bassitt</b>,
                                nos tornamos <b>referência</b> para os produtores de todo o <b>Oeste Paulista</b>.
                            </p>
                            <cite>"Demonstramos o nosso comprometimento com o crescimento e a evolução sustentável da
                                agricultura."
                            </cite>
                        </div><!-- /.banner__text -->
                    </div><!-- /.text-block -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
            {{-- <img class="img-design2" src="/assets/images/icons/planta.png" alt="design"> --}}
        </div><!-- /.container -->
    </section><!-- /.Banner Layout 5 -->



    <!--Timeline carousel-->
    <section class="timeline-carousel">
        <div class="timeline-carousel__item-wrapper" style="padding-top: 20px">
            <section class="splide" id="splide-1">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/loja-agrofertil-adamantina.jpg"
                                            alt="Imagem da fachada da Agrofértil em Adamantina">
                                    </div>
                                    <span class="year">1995</span>
                                    <span class="month">Fundação da Matriz da Agrofértil</span>
                                    <p>Em 1995 fundamos a matriz da Agrofértil na cidade de Adamantina/SP.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/loja-agrofertil-tupa.jpg"
                                            alt="Imagem da fachada em Tupã - SP">
                                    </div>
                                    <span class="year">2010</span>
                                    <span class="month">Filial em Tupã</span>
                                    <p>Inauguramos nossa filial em Tupã/SP.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide"><!--Timeline item-->
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/loja-agrofertil-guaracai.jpg"
                                            alt="Imagem da fachada da filial em Guaraçaí - SP">
                                    </div>
                                    <span class="year">2011</span>
                                    <span class="month">Filial Guaraçaí</span>
                                    <p>Em 2011 fundamos a nossa filial na cidade de Guaraçaí/SP.</p>
                                </div>
                            </div>
                            <!--/Timeline item-->
                        </li>
                        <li class="splide__slide">
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/ctec.jpg" alt="Logo C-TEC Tecnologia Agrícola LTDA">
                                    </div>
                                    <span class="year">2015</span>
                                    <span class="month">C-TEC Tecnologia Agrícola LTDA</span>
                                    <p>Em 2015, fundamos a C-TEC Tecnologia</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/loja-agrofertil-aracatuba.jpg"
                                            alt="Imagem da fachada da filial em Araçatuba - SP">
                                    </div>
                                    <span class="year">2019</span>
                                    <span class="month">Filial em Araçatuba</span>
                                    <p>Em 2019, inauguramos nossa filial na cidade de Araçatuba/SP.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide"><!--Timeline item-->
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/loja-agrofertil-sto-anastacio1.jpg"
                                            alt="Foto da fachada em Santo Anastácio - SP">
                                    </div>
                                    <span class="year">2020</span>
                                    <span class="month">Filial Santo Anastácio</span>
                                    <p>Inauguramos nossa filial em Santo Anastácio.</p>
                                </div>
                            </div>
                            <!--/Timeline item-->
                        </li>
                        <li class="splide__slide">
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/goplan2.png" alt="Logo Goplan">
                                    </div>
                                    <span class="year">2020</span>
                                    <span class="month">Goplan</span>
                                    <p>Em 2020, passamos a fazer parte da franquia Goplan.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/crt2.png" alt="Logo CRT Peanuts">
                                    </div>
                                    <span class="year">2021</span>
                                    <span class="month">CRT Peanuts</span>
                                    <p>Em 2021, fundamos a CRT Peanuts.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/loja-agrofertil-bady-bassit.jpg" alt="">
                                    </div>
                                    <span class="year">2024</span>
                                    <span class="month">Filial Bady Bassitt</span>
                                    <p>Em 2019, inauguramos nossa filial na cidade de São José do Rio Preto/SP.</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="timeline-carousel__item">
                                <div class="timeline-carousel__item-inner">
                                    <div class="timeline-carousel__image">
                                        <img src="/assets/images/centro-de-distribuicao.jpg"
                                            alt="Centro de Distribuição Agrofértil">
                                    </div>
                                    <span class="year">2025</span>
                                    <span class="month">NOVO CD (Adamantina)</span>
                                    <p>Inauguramos nosso novo centro de distribuição em Adamantina</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section>


    <section class="social-media" id="social-media">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-layout2" style="text-align: center; margin-bottom: 0px;">
                        <h3 class="about-us sub_title">Novidades:</h3>
                        <h2 class="heading__title historia">Notícias e </h2>
                        <h2 class="heading__title conquistas">Eventos!</h2>
                    </div>
                </div>
            </div>
            <div class="embedsocial-hashtag" data-ref="44cfbe3641e800568677443f3e6d0b14c19918bc"> <a
                    class="feed-powered-by-es feed-powered-by-es-feed-img es-widget-branding"
                    href="https://embedsocial.com/social-media-aggregator/" target="_blank" title="Instagram widget">
                    <img src="https://embedsocial.com/cdn/icon/embedsocial-logo.webp" alt="EmbedSocial">
                    <div class="es-widget-branding-text">Instagram widget</div>
                </a> </div>
            <script>
                (function(d, s, id) {
                    var js;
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "https://embedsocial.com/cdn/ht.js";
                    d.getElementsByTagName("head")[0].appendChild(js);
                }(document, "script", "EmbedSocialHashtagScript"));
            </script>
        </div>
    </section>


    <section class="banner-layout2 pt-130 pb-130 backs" style="border-top: #008139 5px solid;">
        <div class="bg-img">
            <img src="/assets/images/banners/banner-teste.jpg" alt="B">
        </div>
        <div class="container">
            <div class="row row-goplan ">
                <div class="col-sm-7 col-md-6 col-lg-6 col-xl-6">

                    <div class="text-block" style="background-color: transparent;">
                        <div class="heading heading-layout2">
                            <img src="/assets/images/goplan3.png" class="agro-goplan" alt="Agro Goplan">
                            <p class="heading__desc phrase " style="color: #fff;text-align: justify">Descubra o poder
                                da parceria
                                entre a <b>Agrofértil</b> e a
                                <b>GOPLAN
                                    Agronegócio</b>! Somos uma franquia agrícola comprometida em fornecer soluções
                                inovadoras
                                para impulsionar o seu negócio no campo. <b>Juntos, cultivamos resultados excepcionais
                                    para o seu empreendimento</b>.
                            </p>
                        </div>
                    </div><!-- /.text-block -->
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>


    <section class="features-layout6" style="padding-top: 200px; padding-bottom: 100px;">

        <div class="container">
            <div class="row no-md-gutters box-section">
                <div class="col-12">
                    <div class="heading-title">
                        <h2><span>Somos</span> especialistas em:</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="cultura-item">
                        <div class="box-image">
                            <img src="/assets/images/cultura/2.png" alt="Amendoim">
                        </div>
                        <div class="box-title-content">
                            <h3>Amedoim</h3>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="cultura-item">
                        <div class="box-image">
                            <img src="/assets/images/cultura/4.png" alt="Amendoim">
                        </div>
                        <div class="box-title-content">
                            <h3>Cana de Açucar</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="cultura-item">
                        <div class="box-image">
                            <img src="/assets/images/cultura/3.png" alt="Amendoim">
                        </div>
                        <div class="box-title-content">
                            <h3>Soja</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="cultura-item">
                        <div class="box-image">
                            <img src="/assets/images/cultura/5.png" alt="Amendoim">
                        </div>
                        <div class="box-title-content">
                            <h3>Citrus</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="cultura-item">
                        <div class="box-image">
                            <img src="/assets/images/cultura/1.png" alt="Amendoim">
                        </div>
                        <div class="box-title-content">
                            <h3>Sorgo</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="cultura-item">
                        <div class="box-image">
                            <img src="/assets/images/cultura/6.png" alt="Amendoim">
                        </div>
                        <div class="box-title-content">
                            <h3>Hotaliças</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="features-layout5 pb-0">
        <div class="container pb-40">
            <div class="header-func">
                <h3 class="empresas">EMPRESAS QUE FORMAM A</h3>
                <h2 class="big-agro">AGROFÉRTIL</h2>
                <h4 class="conheca">CONHEÇA O GRUPO</h4>
            </div>
        </div>

        <div class="container">
            <div class="row no-md-gutters">

                <div class="col-6 col-md-6 col-lg-3 coll-1 crt">
                    <a href="https://www.instagram.com/crtpeanuts/" target="_blank" title="CRT Peanuts">
                        <img src="/assets/images/logo/2.png" alt="CRT Peanuts" style="filter:brightness(0) invert(1)">
                    </a>
                </div>

                <div class="col-6 col-md-6 col-lg-3 coll-1 ctec">
                    <a href="https://ctecagro.com.br/" target="_blank" title="C.TEC - Tecnologia Agrícola">
                        <img src="/assets/images/logo/4.png" alt="CTEC Agro">
                    </a>
                </div>

                <div class="col-6 offset-3 offset-lg-0 col-md-6 col-lg-3 coll-1 crt">
                    <a href="https://www.instagram.com/crtpeanuts/" target="_blank" title="CRT Sementes">
                        <img src="/assets/images/logo/3.png" alt="CRT Sementes">
                    </a>
                </div>
            </div>
        </div>
    </section>



    {{-- <section class="features-layout5 pb-0">
        <div class="container">

            <div class="features-wrapper">
                <div class="slick-carousel"
                    data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 5000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                    <!-- Feature item #1 -->

                    <div class="feature-item">
                        <div class="feature__icon custom-icon">
                            <img src="/assets/images/products/1.webp" alt="">
                        </div>
                        <h4 class="feature__title" style="text-transform:none; font-weight:500">Soja
                        </h4>

                    </div><!-- /.feature-item -->

                    <div class="feature-item">
                        <div class="feature__icon custom-icon">
                            <img src="/assets/images/products/2.webp" alt="">
                        </div>
                        <h4 class="feature__title" style="text-transform:none; font-weight:500">Amendoim</h4>

                    </div><!-- /.feature-item -->
                    <!-- Feature item #3 -->

                    <div class="feature-item">
                        <div class="feature__icon custom-icon">
                            <img src="/assets/images/products/3.webp" alt="">
                        </div>
                        <h4 class="feature__title" style="text-transform:none; font-weight:500">Milho/Sorgo/Milheto</h4>

                    </div><!-- /.feature-item -->
                    <!-- Feature item #4 -->

                    <div class="feature-item">
                        <div class="feature__icon custom-icon">
                            <img src="/assets/images/products/4.webp" alt="">
                        </div>
                        <h4 class="feature__title" style="text-transform:none; font-weight:500">Cana de Açucar</h4>

                    </div><!-- /.feature-item -->
                    <div class="feature-item">
                        <div class="feature__icon custom-icon">
                            <img src="/assets/images/products/5.webp" alt="">
                        </div>
                        <h4 class="feature__title" style="text-transform:none; font-weight:500">Citrus</h4>

                    </div><!-- /.feature-item -->
                    <div class="feature-item">
                        <div class="feature__icon custom-icon">
                            <img src="/assets/images/products/6.webp" alt="">
                        </div>
                        <h4 class="feature__title" style="text-transform:none; font-weight:500">Hortifruti</h4>

                    </div><!-- /.feature-item -->
                </div>
            </div>
        </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features Layout 5 --> --}}


    <section class="slider" style="border-bottom: 5px solid #004318; margin-top: 120px;">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": false, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h bg-overlay bg-overlay-2">
                <div class="bg-img"><img src="/assets/images/banners/banner-pessoa.webp" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="slide__body slide-tree">
                                <h2 class="slide__title slide__title-top">
                                    Onde a produtividade</h2>
                                <h2 class="slide__title slide__title-medium">
                                    Encontra a<br><span>qualidade</span></h2>
                                <h2 class="slide__title slide__title-bottom">
                                    agrofértil, sua parceira <br>no agronegócio!</h2>
                            </div><!-- /.slide__body -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <section class="clients py-0">
        <div class="container-fluid">
            <div class="row" style="">
                <div class="col-sm-12 col-12 background-clients">
                    <div class="content">
                        <h3 class="heading__title">PARCEIROS</h3>

                        <h4 class="sub_title">
                            parceiros</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <section class="splide" id="splide-2" style="padding-bottom: 0px; padding-top: 0px;">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.agrichem.com.br/" target="_blank"><img
                                                src="assets/images/clients/1.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.adama.com/brasil/pt" target="_blank"><img
                                                src="assets/images/clients/7.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.cerradodecima.com.br/site/" target="_blank"><img
                                                src="assets/images/clients/12.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.lagoabonita.com.br/" target="_blank"><img
                                                src="assets/images/clients/20.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.corteva.com.br/" target="_blank"><img
                                                src="assets/images/clients/5.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://attosementes.com.br/" target="_blank"><img
                                                src="assets/images/clients/18.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://ourofinoagro.com.br/" target="_blank"><img
                                                src="assets/images/clients/14.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.lallemand.com/en/" target="_blank"><img
                                                src="assets/images/clients/23.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.brevant.com.br/" target="_blank"><img
                                                src="assets/images/clients/26.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://sementesbiomatrix.com.br/" target="_blank"><img
                                                src="assets/images/clients/27.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.dekalb.pt/" target="_blank"><img
                                                src="assets/images/clients/3.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://westfertilizantes.com/" target="_blank"><img
                                                src="assets/images/clients/28.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.lifeagro.com.br/" target="_blank"><img
                                                src="assets/images/clients/24.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://goplan.com.br/" target="_blank"><img
                                                src="assets/images/clients/16.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.fmcagricola.com.br/" target="_blank"><img
                                                src="assets/images/clients/17.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="http://www.redifertilizantes.com.br/" target="_blank"><img
                                                src="assets/images/clients/c-tec.webp.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.sipcamnichino.com.br/" target="_blank"><img
                                                src="assets/images/clients/6.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.pollifertilizantes.com.br/" target="_blank"><img
                                                src="assets/images/clients/8.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.heringer.com.br/" target="_blank"><img
                                                src="assets/images/clients/31.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.helmdobrasil.com.br/pt/" target="_blank"><img
                                                src="assets/images/clients/32.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://fertipar.com.br/" target="_blank"><img
                                                src="assets/images/clients/33.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                                <li class="splide__slide">
                                    <div class="client">
                                        <a href="https://www.sakata.com.br/" target="_blank"><img
                                                src="assets/images/clients/34.png" alt="client"></a>
                                    </div><!-- /.client -->
                                </li>
                            </ul>
                        </div>
                    </section>
                </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.clients -->
    <!-- ===========================
                                                                                                                                                                                                                                  Banner layout 4
                                                                                                                                                                                                                                ============================= -->
    <section class="banner-layout4 py-10">
        <div class="container-fluid px-0">
            <div class="row" id="agro-nao-para">
                <div class="col-sm-12 col-12">
                    <div class="content">
                        <h4 class="sub_title" style="padding: 15px; border-radius:15px">
                            REGIÕES DE ATUAÇÃO</h4>
                        {{-- <div class="header-func">
                                <h4 class="conheca" style="z-index: 9">CONHEÇA O GRUPO</h4>
                            </div> --}}
                    </div>
                </div>
            </div>
            <div class="row row-no-gutter" style="margin-top: -55px;">
                <div class="col-sm-12 col-md-12 col-lg-6 background-banner" id="map">
                    <div class="img-map"><img src="/assets/images/map4.png" alt="banner"></div>
                    <img class="img-design3" src="/assets/images/icons/planta.png" alt="design">
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="soultions-carousel inner-padding d-none d-xl-block">
                    </div><!-- /.soultions-carousel -->
                    <div class="inner-padding bg-primary" style="border-bottom-left-radius: 16px;">
                        <div class="heading-layout2 heading-light mb-50" style="max-width: 500px;">
                            {{-- <h3 class="heading__title" style="text-transform: none; margin-bottom:15px; font-weight:900">
                                CONHEÇA NOSSAS<br>REGIÕES DE ATUAÇÃO</h3> --}}
                            <p class="heading__desc">Temos unidades em <strong>Adamantina</strong>, <strong>Tupã</strong>,
                                <strong>Guaraçaí</strong>,
                                <strong>Araçatuba</strong>, <strong>Santo Anastácio</strong> e <strong>Baddy Bassitt</strong>.
                                Fique à vontade para nos visitar e conhecer <strong>nossas soluções</strong> e ficar por
                                dentro de
                                como funciona nosso processo de <strong>assistência técnica</strong>!
                            </p>
                        </div><!-- /.heading -->
                        <a href="/contato" class="btn btn__white btn__white-style2 mt-20">
                            <i class="icon-arrow-right"></i>
                            <span style="text-transform: none">Entre em Contato!</span>
                        </a>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner layout 4 -->
@endsection
