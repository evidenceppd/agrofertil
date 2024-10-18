 @extends('templates.master')

 @section('title')
     Agrofértil | {{ $post->title }}
 @endsection

 @section('seo')
 @endsection

 @section('content')

     <style>
         .post__desc iframe {
             width: 100% !important;
             height: 380px !important;
         }
     </style>

     <section class="page-title pt-30 pb-30">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-sm-12 col-md-12 col-lg-12">
                     <nav>
                         <ol class="breadcrumb justify-content-center mb-20">
                             <li class="breadcrumb-item"><a href="/">Home</a></li>
                             <li class="breadcrumb-item"><a href="/comunicacao">Comunicacao</a></li>
                             <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                         </ol>
                     </nav>
                 </div><!-- /.col-xl-6 -->
             </div><!-- /.row -->
         </div><!-- /.container -->
     </section><!-- /.page-title -->

     <!-- ======================
          Blog Single
        ========================= -->
     <section class="blog blog-single pt-0 pb-40">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 col-md-12 col-lg-8">
                     <div class="post-item mb-0">
                         <div class="post__img">
                             <a href="#">
                                 <img src="/images/uploads/blog/{{ $post->url }}/{{ $post->main_image }}"
                                     style="width:100%" alt="{{ $post->title }}">
                             </a>
                         </div><!-- /.entry-img -->
                         <div class="post__body">
                             <div class="post__meta d-flex align-items-center">
                                 <div class="post__cat">
                                     <a href="#autor">Agrofértil</a>
                                 </div><!-- /.post-meta-cat -->
                                 <span class="post__date">{{ $post->created_at->format('d') }}
                                     {{ ucfirst(substr($post->created_at->formatLocalized('%B'), 0, 3)) }},
                                     {{ $post->created_at->format('Y') }}</span>
                             </div><!-- /.post-meta -->
                             <h1 class="post__title">{{ $post->title }}</h1>

                             @if (count($galeria) > 0)
                                 <div class="pt-40">
                                     <div class="slick-carousel carousel-arrows-light"
                                         data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

                                         @foreach ($galeria as $pics)
                                             <a class="popup-gallery-item"
                                                 href="/images/uploads/galeria/{{ $post->url }}/{{ $pics->img }}">
                                                 <img title="{{ $post->title }}"
                                                     style="height:229px; width:100%; object-fit:cover"
                                                     src="/images/uploads/galeria/{{ $post->url }}/{{ $pics->img }}"
                                                     alt="gallery img">
                                             </a>
                                         @endforeach
                                     </div><!-- /.gallery-images-wrapper -->
                                 </div>
                                 <cite class="d-block mt-30" style="text-align: center">Clique sobre a imagem para
                                     expandir...</cite>
                             @endif

                             <div class="post__desc pt-40">
                                 {!! $post->content !!}
                             </div><!-- /.post-desc -->

                         </div><!-- /.entry-content -->
                     </div><!-- /.post-item -->
                     <div class="blog-share d-flex flex-wrap align-items-center justify-content-between mb-30">
                         <strong class="mr-20 color-heading">Compartilhe esse artigo!</strong>
                         <ul class="list-unstyled social-icons d-flex mb-0">
                             <li><a target="_blank"
                                     href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"><i
                                         class="fab fa-facebook-f"></i></a></li>
                             <li><a target="_blank" href="https://twitter.com/share?url={{ url()->current() }}"><i
                                         class="fa-brands fa-x-twitter"></i></a></li>
                             <li><a target="_blank" href="https://wa.me/?text={{ url()->current() }}"><i
                                         class="fab fa-whatsapp"></i></a></li>
                         </ul>
                     </div><!-- /.blog-share -->

                     <div class="widget-nav d-flex justify-content-between mb-40 pt-30 pb-30 border-top border-bottom">
                         @if ($previous)
                             <a href="/comunicacao/{{ $previous->url }}" class="widget-nav__prev d-flex flex-wrap">
                                 <div class="widget-nav__img">
                                     <img src="/images/uploads/blog/{{ $previous->url }}/{{ $previous->main_image }}"
                                         alt="{{ $previous->title }}">
                                 </div>
                                 <div class="widget-nav__content">
                                     <span>Post anterior</span>
                                     <h5 class="widget-nav__ttile mb-0">{{ $previous->title }}</h5>
                                 </div>
                             </a><!-- /.widget-prev  -->
                         @endif

                         @if ($next)
                             <a href="/comunicacao/{{ $next->url }}" class="widget-nav__next d-flex flex-wrap">
                                 <div class="widget-nav__img">
                                     <img src="/images/uploads/blog/{{ $next->url }}/{{ $next->main_image }}"
                                         alt="{{ $next->title }}">
                                 </div>
                                 <div class="widget-nav__content">
                                     <span>Próximo Post</span>
                                     <h5 class="widget-nav__ttile mb-0">{{ $next->title }}</h5>
                                 </div>
                             </a><!-- /.widget-next  -->
                         @endif
                     </div>
                     <div class="widget blog-author d-flex flex-wrap mb-70">
                         <div class="blog-author__content">
                             <img src="/assets/images/logo-agrofertil.png" class="pb-20" style="width:40%">
                             <p class="blog-author__bio">Há 30 anos chegamos no mercado agrícola com o objetivo de suportar
                                 o produtor com assistência técnica diferenciada, produtos de qualidade e atualização
                                 tecnológica. Com unidades em Adamantina, Tupã, Guaraçaí, Araçatuba e Santo Anastácio, nos
                                 tornamos referência para os produtores de todo o Oeste Paulista.</p>
                             <ul class="social-icons list-unstyled mb-0">
                                 <li><a href="https://www.facebook.com/agrofertil.crialt" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="https://www.instagram.com/grupoagrofertil/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                 <li><a href="https://www.youtube.com/channel/UCOls91wDJ9G26ib2fRWSE1g/featured" target="_blank"><i class="fab fa-youtube"></i></a> </li>
                             </ul>
                         </div><!-- /.author-content  -->
                     </div><!-- /.blog-author  -->

                 </div><!-- /.col-lg-8 -->
                 <div class="col-sm-12 col-md-12 col-lg-4">
                     <aside class="sidebar">
                         <div class="widget widget-search">
                             <h5 class="widget__title">Buscar publicações</h5>
                             <div class="widget__content">
                                 <form class="widget__form-search" method="get" action="/comunicacao-busca">
                                     <input type="text" name="campo" class="form-control" placeholder="Pesquise...">
                                     <button class="btn" type="submit"><i class="icon-search"></i></button>
                                 </form>
                             </div><!-- /.widget-content -->
                         </div><!-- /.widget-search -->
                         
                         <div class="widget widget-posts">
                             <h5 class="widget__title">Posts recentes</h5>
                             <div class="widget__content">
                                 <!-- post item #1 -->
                                 @foreach($recentposts as $recent)
                                 <div class="widget-post-item d-flex align-items-center">
                                     <div class="widget-post__img">
                                         <a href="/comunicacao/{{$recent->url}}"><img src="/images/uploads/blog/{{$recent->url}}/{{$recent->main_image}}" alt="{{$recent->title}}"></a>
                                     </div><!-- /.widget-post-img -->
                                     <div class="widget-post__content">
                                         <span class="widget-post__date">{{ $recent->created_at->format('d') }}
                                            {{ ucfirst(substr($recent->created_at->formatLocalized('%B'), 0, 3)) }},
                                            {{ $recent->created_at->format('Y') }}</span>
                                         <h4 class="widget-post__title"><a href="/comunicacao/{{$recent->url}}">{{$recent->title}}</a>
                                         </h4>
                                     </div><!-- /.widget-post-content -->
                                 </div><!-- /.widget-post-item -->
                                 @endforeach

                             </div><!-- /.widget-content -->
                         </div><!-- /.widget-posts -->
           
                     </aside><!-- /.sidebar -->
                 </div><!-- /.col-lg-4 -->
             </div><!-- /.row -->
         </div><!-- /.container -->
     </section><!-- /.blog Single -->

 @endsection
