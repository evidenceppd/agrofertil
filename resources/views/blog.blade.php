  
@extends('templates.master')

@section('title')
Agrofértil | Comunicação
@endsection

@section('seo')

@endsection

@section('content')
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center" style="padding-top:100px; padding-bottom:100px">
      <div class="bg-img"><img src="/assets/images/blog_parallax.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Comunicação</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading mb-0">Comunicação</h1>
            <a href="#careers" class="scroll-down">
              <i class="icon-arrow-down"></i>
            </a>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="post-grid">
      <div class="container">
        <div class="row">
          <!-- Post Item #1 -->
		  @foreach($posts as $post)
		  <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex">
			  <div class="post-item">
				  <div class="post__img">
					  <a href="/comunicacao/{{$post->url}}">
						  <img src="/images/uploads/blog/{{$post->url}}/{{$post->main_image}}" alt="post image" loading="lazy">
					  </a>
					  <span class="post__date">{{$post->created_at->format('d')}} {{substr($post->created_at->formatLocalized('%B'), 0, 3)}}, {{$post->created_at->format('Y')}}</span>
				  </div><!-- /.post-img -->
				  <div class="post__body">
					  <div class="post__meta d-flex align-items-center">
						  <div class="post__cat">
							  <a href="/comunicacao/{{$post->url}}">Agrofértil</a>
						  </div><!-- /.post-meta-cat -->
					  </div><!-- /.post-meta -->
					  <h4 class="post__title"><a href="/comunicacao/{{$post->url}}" style="text-transform:none">{{$post->title}}
						  </a></h4>
					  <p class="post__desc">
						  Confira todas as fotos e vídeos da Agrofértil durante a(o) {{$post->title}}.
					  </p>
					  <a href="/comunicacao/{{$post->url}}" class="btn btn__secondary btn__outlined btn__custom">
						  <i class="icon-arrow-right"></i>
						  <span style="text-transform:none">Veja mais!</span>
					  </a>
				  </div><!-- /.post-content -->
			  </div><!-- /.post-item -->
		  </div><!-- /.col-lg-4 -->
		  @endforeach

        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
			{{$posts->links()}}
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

@endsection