@extends('templates.master')

@section('title')
    Agrofértil | Galeria
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
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center"
        style="padding-top: 100px; padding-bottom:100px">
        <div class="bg-img"><img src="/assets/images/gallery_parallax.jpg" alt="Galeria"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading mb-0">{{$galeria->title}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/galeria">Galeria</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$galeria->title}}</li>
                        </ol>
                    </nav>
                    <a href="#gallery" class="scroll-down">
                        <i class="icon-arrow-down"></i>
                    </a>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
                                                                            Gallery
                                                                           ========================= -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row">
                <div class="pswp-gallery" id="my-gallery" style="width: 100%">
                    <div class='row no-gutters'>
                        @foreach ($photosGallery as $photoItem)
                            </a><a href='/images/uploads/galeria/{{$galeria->url}}/{{ $photoItem->img }}'
                                style="background-image: url('/images/uploads/galeria/{{$galeria->url}}/{{ $photoItem->img }}'); background-size: cover; min-height: 175px;"
                                class='col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 white-box' data-cropped="true" target="_blank">
                                {{-- <img src='/images/uploads/galeria/{{$galeria->url}}/{{ $photoItem->img }}'> --}}
                            </a>
                        @endforeach
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </section><!-- /.Gallery -->
@endsection



@section('js')
    <script type="module">
        import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe/dist/photoswipe-lightbox.esm.js';

        const lightbox = new PhotoSwipeLightbox({
            gallery: '#my-gallery',
            children: 'a',
            pswpModule: () => import('https://unpkg.com/photoswipe')
        });
        lightbox.init();
    </script>
@endsection
