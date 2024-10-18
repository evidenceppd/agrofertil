@extends('templates.master')

@section('title')
    Agrofértil | Trabalhe Conosco
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

@section('content')

    <!-- ===========================
          contact layout 2
        ============================= -->
    <section id="contact" class="contact-layout2 pt-130 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <div class="heading mb-40 pb-30 border-bottom">
                        <h2 class="heading__subtitle" style="text-transform: none">Gostaria de trabalhar com a gente?</h2>
                        <h3 class="heading__title" style="text-transform: none">Basta preencher o formulário!</h3>
                        <p class="heading__desc">
                            Está interessado em fazer parte da nossa equipe em uma das nossas unidades da Agrofértil?
                            Preencha o formulário
                            que entraremos em contato com você assim que tivermos novidades!
                        </p>
                    </div><!-- /.heading -->

                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-1">
                    <div class="contact-panel mb-0">
                        <form class="contact-panel__form" method="post" action="/trabalhe-conosco"
                            enctype="multipart/form-data" novalidate="novalidate">
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
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <h4 class="contact-panel__title">Trabalhe conosco</h4>
                                </div> <!-- /.col-lg-12 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nome completo*"
                                            id="" name="nome" required>
                                    </div>
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail*" id=""
                                            name="email" required>
                                    </div>
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telefone*" id=""
                                            name="telefone">
                                    </div>
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Cidade/Estado*"
                                            id="" name="local" required>
                                    </div>
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Endereço*" id=""
                                            name="endereco" required>
                                    </div>
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Área de Atuação*"
                                            id="" name="area" required>
                                    </div>
                                </div><!-- /.col-sm-6 -->

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Sua mensagem... (Opcional)" id="" name="mensagem"></textarea>
                                    </div>
                                </div><!-- /.col-sm-6 -->

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <p>Envie seu currículo em formato .PDF:</p>
                                        <input type="file" class="form-control"
                                            placeholder="Sua mensagem... (Opcional)" id="files" name="curriculo"
                                            data-buttonText="Your label here." required>
                                    </div>
                                </div><!-- /.col-sm-6 -->

                                <div class="col-12">
                                    <button type="submit" class="btn btn__primary btn__block">
                                        <i class="icon-arrow-right"></i> <span>Enviar</span>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->
@endsection
