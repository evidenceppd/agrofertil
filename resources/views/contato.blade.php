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

@section('content')
    <section class="google-map py-0">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1BHcQ9QshQn6LtcZWpk47UlDHmPyH2bs&ehbc=2E312F&noprof=1"
            width="100%" height="500"></iframe>
    </section><!-- /.GoogleMap -->

    <!-- ==========================
                  contact layout 1
              =========================== -->
    <section class="contact-layout1 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel p-0 box-shadow-none">
                        <div class="contact__panel-info mb-30">
                            <div class="contact-info-box">
                                <h4 class="contact__info-box-title">Nossos telefones:</h4>
                                <ul class="contact__info-list list-unstyled">
                                    <li><i class="icon-phone"></i> <b>Adamantina/SP | Matriz:</b> (18) 3522-5400</li>
                                    <li><i class="icon-phone"></i> <b>Araçatuba/SP:</b> (18) 3621-2606</li>
                                    <li><i class="icon-phone"></i> <b>Tupã/SP:</b> (14) 3491-3938</li>
                                    <li><i class="icon-phone"></i> <b>Guaraçaí/SP:</b> (18) 3705-1917</li>
                                    <li><i class="icon-phone"></i> <b>Santo Anastácio/SP:</b> (18) 3263-1310</li>
                                    <li><i class="icon-phone"></i> <b>Bady Bassitt/SP:</b> (18) 3263-1310</li>
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
                                    <li>Bady Bassitt</li>
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
                                    <h4 class="contact__panel-title" style="text-transform: none">Entre em Contato!</h4>
                                    <p class="contact__panel-desc mb-40">Gostaria de tirar alguma dúvida, ou apenas enviar
                                        uma mensagem para nós? Utilize o formulário abaixo, retornaremos assim que
                                        possível!</p>
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
