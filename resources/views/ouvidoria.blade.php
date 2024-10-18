@extends('templates.master')

@section('title')
    Agrofértil | Entre em Contato
@endsection

@section('seo')
@endsection

@section('css')
    <style>
        .header {
            background: unset !important;
        }

        .navbar .navbar-brand:hover img {
            filter: unset;
            transform: scale(1.05);
            transition: 0.4s;
        }

        .navbar .navbar-brand img {
            filter: unset;
            transition: 0.4s;
        }
    </style>
@endsection

@section('content')<section class="page-title page-title-layout2 bg-overlay bg-overlay-2"
        style="background-position: 75% 54%;">
        <div class="bg-img"><img src="/assets/images/termos.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h1 class="pagetitle__heading mb-0" style="font-size: 45px">Ouvidoria</h1>


                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="breadcrumb-wrapper bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ouvidoria</li>
                            </ol>
                        </nav>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.breadcrumb-wrapper -->
    </section><!-- /.page-title -->

    <!-- ==========================
                      contact layout 1
                  =========================== -->
    <section class="contact-layout1 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel p-0 box-shadow-none">

                        <div class="contact__panel-info mb-30" style="padding: 30px;">
                            <img src="/assets/images/ouvidoria.jpg" style="margin-bottom: 30px; border-radius: 8px;"
                                alt="Ouvidoria">
                            <div class="contact-info-box">
                                <h4 class="contact__info-box-title">Nossos telefones:</h4>
                                <ul class="contact__info-list list-unstyled">
                                    <li><i class="icon-phone"></i> <b>Adamantina/SP | Matriz:</b> (18) 3522-5400</li>
                                </ul>
                                <!-- /.contact__info-list -->
                            </div><!-- /.contact-info-box -->
                            <div class="contact-info-box">
                                <h4 class="contact__info-box-title">Nossas Sedes:</h4>
                                <ul class="contact__info-list list-unstyled">
                                    <li>Adamantina</li>
                                    <li>Araçatuba</li>
                                    <li>Santo Anastácio</li>
                                    <li>Guaraçaí</li>
                                    <li>Tupã</li>
                                </ul><!-- /.contact__info-list -->
                            </div><!-- /.contact-info-box -->

                        </div><!-- /.contact__panel-info -->
                        <form method="post" action="/contato" method="post" class="contact__panel-form mb-30">
                            @if (count($errors) > 0)
                                <div class="alert alert-warning alert-dismissible show" role="alert">
                                    <style>
                                        .alert-warning {
                                            width: 100%;
                                        }

                                        button {
                                            padding: 5px;
                                            color: black
                                        }
                                    </style>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                        class="color: black; backgorund-color: black;">&times;</button>
                                    <strong>Cuidado!</strong> Preencha os dados corretamente! <br>
                                    Preencha todos os dados requeridos que estão em vermelho:
                                    <ul>
                                        {{-- @foreach ($errors->all() as $error)
                                            <li> <p>{{ $error }}</p></li>
                                        @endforeach --}}
                                    </ul>
                                </div>
                            @endif

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible show" role="alert">

                                    <style>
                                        .alert-success {
                                            width: 100%
                                        }

                                        div#obrigatorio {
                                            display: none;
                                        }

                                        button {
                                            padding: 5px;
                                            color: black
                                        }

                                        /* button.btn-close {
                              background-color: black;
                              float: right; */
                                    </style>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close">&times;</button>
                                    <strong>Obrigado!</strong> {{ $message }}
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                    </ul>

                                </div>
                            @endif

                            @if ($message = Session::get('error'))
                                <div class="alert alert-success alert-dismissible show" role="alert">
                                    <strong>Opps!</strong> {{ $message }}
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact__panel-title" style="text-transform: none">Ouvidoria</h4>
                                    <p class="contact__panel-desc mb-40">Nosso compromisso é melhorar continuamente nossos
                                        serviços e produtos, proporcionando a melhor experiência para você. Cada feedback é
                                        uma oportunidade de aprimoramento e aprendizado.
                                        <br><br>
                                        Preencha o formulário abaixo ou entre em contato conosco através dos nossos canais
                                        de atendimento. Estamos prontos para ouvir você!

                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nome completo*"
                                            id="" name="nome" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail*" id=""
                                            name="email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telefone*" id=""
                                            name="telefone" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Assunto*" id=""
                                            name="assunto" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Sua mensagem...*" placeholder="Message" id="" name="mensagem"
                                            required></textarea>
                                    </div>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="g-recaptcha" data-sitekey="6LcZvBoqAAAAAJcQOG1uWSL1yzJA1DgyHZrpIs0w"
                                        data-callback='onSubmit' data-action='submit' style="margin-bottom: 15px">Submit
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn__secondary" onclick="return validar()">
                                        <i class="icon-arrow-right"></i><span>Enviar</span>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.contact__panel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->
@endsection

@section('js')
    <script>
        function validar() {
            if (grecaptcha.getResponse() == "") {
                alert("Você precisa marcar a validação");
                return false;
            }
        }
    </script>
@endsection
