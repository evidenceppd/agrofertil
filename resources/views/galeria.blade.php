 @extends('templates.master')

 @section('title')
    Galeria de Fotos | Agrofértil
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
                     <h1 class="pagetitle__heading mb-0">Galeria de Fotos</h1>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="/">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Galeria</li>
                         </ol>
                     </nav>
                     <a href="#gallery" class="scroll-down">
                         <i class="icon-arrow-down"></i>
                     </a>
                 </div>
             </div>
         </div>
     </section>

     <!-- ======================
            Gallery
        ========================= -->
     <section id="gallery" class="gallery">
         <div class="container">
             <h3 style="font-size: 24px; border-bottom: #009240 2px solid;">Destaques</h3>
             <div class="row">
                 <div class="col-md-6">
                     @foreach ($leftGallery as $itemLeft)
                         <div style="background-image: url(/images/uploads/blog/{{ $itemLeft->url }}/{{ $itemLeft->main_image }}); height: calc(40vh + 20px); width: 100%; background-size: cover; background-position: center center;"
                             class="div-image-main">
                             <div class="text-overlay-details">
                                 <div>
                                     <h5>{{ $itemLeft->title }}</h5>
                                     <div class="divisor"></div>
                                     <a href="/galeria/{{ $itemLeft->url }}"> Ver mais</a>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
                 <div class="col-md-6">
                     <div class="row" style="margin-bottom: 20px">
                         @foreach ($rightSupGallery as $itemGallerySup)
                             <div class="col-md-6">
                                 <div style="background-image: url(/images/uploads/blog/{{ $itemGallerySup->url }}/{{ $itemGallerySup->main_image }});"
                                     class="div-image-main">
                                     <div class="text-overlay-details">
                                         <div>
                                             <h5>{{ $itemGallerySup->title }}</h5>
                                             <div class="divisor"></div>
                                             <a href="/galeria/{{ $itemGallerySup->url }}"> Ver mais</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                     <div class="row">
                         @foreach ($rightInfGallery as $itemGalleryInf)
                             <div class="col-md-6">
                                 <div style="background-image: url(/images/uploads/blog/{{ $itemGalleryInf->url }}/{{ $itemGalleryInf->main_image }});"
                                     class="div-image-main">
                                     <div class="text-overlay-details">
                                         <div>
                                             <h5>{{ $itemGalleryInf->title }}</h5>
                                             <div class="divisor"></div>
                                             <a href="/galeria/{{ $itemGalleryInf->url }}"> Ver mais</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section id="gallery" class="gallery" style="padding-top: 0px">
         <div class="container">
             <h3 style="font-size: 24px; border-bottom: #009240 2px solid;">Outras Galerias</h3>
             <div class="row">
                 @foreach ($allGallerys as $item)
                     <div class="col-md-3" style="margin-bottom: 20px">
                         <div style="background-image: url(/images/uploads/blog/{{ $item->url }}/{{ $item->main_image }});"
                             class="div-image-main">
                             <div class="text-overlay-details">
                                 <div>
                                     <h5>{{ $item->title }}</h5>
                                     <div class="divisor"></div>
                                     <a href="/galeria/{{ $item->url }}"> Ver mais</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section>
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
