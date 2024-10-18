@extends('adminlte::page')
@extends('layouts.app')
@section('title')
@if(isset($post)) Sistema | Editar Post: {{$post->title}} @else Sistema | Criar novo Post @endif
@endsection

@section('content_header')
    <h1>@if(isset($post)) Editar Post: <q style="color:#007bff">{{$post->title}}</q> @else Cadastrar novo Post @endif</h1>
    <ol class="breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.index')}}">Dashboard</a></li> &nbsp; > &nbsp;
            <li><a href="{{ route('posts.index')}}">Publicações</a></li>
            @if(isset($post))
            &nbsp; > &nbsp;
            <li><a href="">{{$post->title}}</a></li>
            @else
            &nbsp; > &nbsp;
            <li><a href="">Novo Post</a></li>
            @endif
        </ol>
@stop

@section('content')
<hr>

<form enctype="multipart/form-data" role="form" id="form_principal" method="post" action="@if(isset($post->id)) {{ route('posts.update',$post->id) }} @else {{route('posts.store')}} @endif">
@csrf
@if(isset($post->id))
<input type="hidden" name="id" id="publication_id" value="{{$post->id}}">
{{-- {{ method_field('PATCH') }} --}}
@endif
@if (\Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {!! \Session::get('error') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif

@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {!! \Session::get('success') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif

<div class="form-group">
    <div class="form-check">
    <input class="form-check-input" style="border: 1px solid #28a745" name="published" type="checkbox" @if(isset($post) && $post->published == 1) checked @endif id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Publicar
    </label>
    </div>
  </div>

<div class="form-group">
    <label for="title">Título:</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Insira o título do Post" name="title"  
    value="@if(isset($post->title)){{$post->title}}@endif" required
    >
  </div>
  
  <div class="form-group">
    <label for="content">Conteúdo:</label>
  <textarea id="editor" name="content"></textarea>
  </div>

  <div class="form-group">
    <a class="btn btn-success" data-toggle="collapse" href="#collapseMainImage" role="button" aria-expanded="false" aria-controls="collapseMainImage">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg>
        <i class="bi bi-plus"></i>Inserir foto destaque:
      </a>
      <div class="collapse @if(isset($post->main_image)) show @endif" id="collapseMainImage">
        <div class="mb-3" style="padding-top:15px">
            <input class="form-control" type="file" id="main_image" name="main_image">
            @if(isset($post->main_image))
            <img src="/images/uploads/blog/{{$post->url}}/{{$post->main_image}}" style="width:25%" alt="{{$post->title}}" id="img-previa" class="img-thumbnail">
            <a style="color:#dc3545; cursor: pointer;" id="img-remove"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg> Remover imagem </a>
            @endif
          </div>
      </div>
  </div>
  
  <div id="contain"> 
    <label>Imagens</label> <br>
    <div style="padding-top: 5px">
    <input type="file" form="form_principal" name='img[]'>
    <button type="button" class="addService btn btn-success">+ Imagem</button>
    </div>
  </div>

  <div class="container" style="padding-bottom:30px">
    <div class="row">
        @if(isset($post))
        @foreach ($images as $image)
        <div class="col-2" style="padding-top: 15px">
            <img style="width: 100%; object-fit:cover" src="/images/uploads/galeria/{{Str::slug($post->title)}}/{{$image->img}}" class="img-responsive image">
            <div class="row">

                <div class="col-6">
            <form action="{{url()->current()}}/imgremove/{{$image->id}}" id="form_remove_{{$image->id}}" method="post">
                  @csrf
                    <button class="btn btn-secondary" form="form_remove_{{$image->id}}" style="width:100%" title="Remover Imagem" type="submit">❎</button> 
              </form>
                </div>
        </div>
        </div>
        @endforeach
        @endif
    </div>
  </div>

  @if(count($categories) > 0)
  <div class="form-group">
    <label>Categorias</label>
    <div class="form-check">
        @foreach($categories as $category)
        <input class="form-check-input" style="border: 1px solid #28a745" name="category_id[]" type="checkbox" 
        @if(isset($post))
        @foreach($postsverifica as $verifica)
        @if($verifica->posts_id == $post->id && $verifica->post_categories_id == $category->id)
        checked @endif @endforeach @endif id="{{$category->id}}" value="{{$category->id}}">
        <label class="form-check-label" for="{{$category->id}}">
          {{$category->category}}
        </label>
        <br>
        @endforeach
  </div>
  </div>
  @endif

  <div class="form-group">
    <label for="author">Autor:</label>
    <input type="text" class="form-control" id="author" aria-describedby="author" placeholder="Insira o autor do Post" name="author"  
    value="@if(isset($post->author)){{$post->author}}@endif"
    >
    <h6 style="font-size: 13px"><cite style="color:#28a745">Obs.: se deixado em branco, será puxado a atual conta administrativa conectada como autor.</cite></h6>
  </div>

  <div class="form-group">
    <label for="tags">Tags:</label>
    <input type="text" class="form-control" id="tags" aria-describedby="tags" placeholder="Insira as Tags do Post:" name="tags"  
    value="@if(isset($post->tags)){{$post->tags}}@endif"
    >
    <h6 style="font-size: 13px"><cite style="color:#28a745">Obs.: Há um limite de 255 caracteres neste campo, as tags devem ser separadas por vírgula, ex.: Tecnologia, Desenvolvimento, etc.</cite></h6>
  </div>

  

  <div class="form-group">
    @if(isset($post))
    <button type="submit" form="form_principal" class="btn btn-success">Atualizar</button>
    @else
    <button type="submit" form="form_principal" class="btn btn-success">Enviar</button>
    @endif
  <a href="{{route('posts.index')}}"><button type="button" class="btn btn-outline-success">Voltar</button></a>
  </div>

</form>
   

@stop

@section('css')
   <style>
.form-check-input:checked {
    background-color: #28a745
}
    </style>
@stop

@section('js')

<link type="text/css" rel="stylesheet" href="/build/assets/jodit/es2015/jodit.min.css" />
<script type="text/javascript" src="/build/assets/jodit/es2015/jodit.min.js"></script>
<script>

$(document).on('click', '.addService', function(){
      var html = '<div style="padding-top:5px"><input type="file" name="img[]"> <button type="button" class="addService btn btn-success">+ Imagem</button></div>';
    $(this).parent().append(html);
  });

    $('textarea').each(function () {
    const editor = Jodit.make(this, {
        language: 'pt_br'

    });
@if(isset($post->content))
editor.value = '{!! str_replace(array("\r","\n"),"",$post->content) !!}';
@endif
});
@if(isset($post))
$(document).ready(function() {
      // Manipulador de evento para o clique no botão
      $('#img-remove').click(function() {
        var conf_message = "Tem certeza de que deseja excluir a imagem? A página será recarregada em seguida.";

        if(confirm(conf_message)) {
        // Obtém os dados do formulário
        var formData = {
          _token: "{!! csrf_token() !!}",
          campo1: $('#publication_id').val(), 
        };


        // Faz a solicitação POST usando Ajax
        $.ajax({
          type: 'POST',
          url: '{{route("posts.update_remove_image",$post->id)}}',
          data:  formData,
          success: function(response) {
            const form = $(".form-remove-imagem");
            form.submit();
            // Manipula a resposta do servidor em caso de sucesso
            console.log(response);
            // Faça algo com a resposta aqui, se necessário
          },
          error: function(xhr, status, error) {
     
            // Manipula os erros em caso de falha na solicitação
            console.log(xhr.responseText);
          }
        });
      }

       else {
        console.log('Cancelado')
       }

      });
    });
@endif
</script>
@if(isset($post))
<form method="POST" class="form-remove-imagem" action="{{ route('posts.update_remove_image',$post->id) }}" style="display: none">
  @csrf
  <input type="submit" value="Enviar" style="display: none">
@endif


@stop