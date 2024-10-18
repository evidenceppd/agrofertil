@extends('adminlte::page')
@extends('layouts.app')
@section('title')
@if(isset($category)) Sistema | Editar Categoria: {{$category->category}} @else Sistema | Criar nova Categoria @endif
@endsection

@section('content_header')
    <h1>@if(isset($category)) Editar Categoria: <q style="color:#007bff">{{$category->category}}</q> @else Cadastrar nova Categoria @endif</h1>
    <ol class="breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.index')}}">Dashboard</a></li> &nbsp; > &nbsp;
            <li><a href="{{ route('categories.index')}}">Categorias</a></li>
            @if(isset($post))
            &nbsp; > &nbsp;
            <li><a href="">{{$post->title}}</a></li>
            @else
            &nbsp; > &nbsp;
            <li><a href="">Nova Categoria</a></li>
            @endif
        </ol>
@stop

@section('content')
<hr>

<form enctype="multipart/form-data" role="form" method="post" action="@if(isset($category->id)) {{ route('categories.update',$category->id) }} @else {{route('categories.store')}} @endif">
@csrf
@if(isset($category->id))
<input type="hidden" name="id" id="publication_id" value="{{$category->id}}">
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
    <label for="title">Categoria:</label>
    <input type="text" class="form-control" id="category" aria-describedby="category" placeholder="Insira o nome da Categoria" name="category"  
    value="@if(isset($category->category)){{$category->category}}@endif" required
    >
  </div>
  
  <div class="form-group">
    <label for="title">Descrição:</label>
    <input type="text" class="form-control" id="description" aria-describedby="description" placeholder="Insira a descrição da Categoria" name="description"  
    value="@if(isset($category->description)){{$category->description}}@endif">
    <h6 style="font-size: 13px"><cite style="color:#28a745">Obs.: Este campo não foi utilizado neste projeto.</cite></h6>
  </div>

  <div class="form-group">
    <a class="btn btn-success" data-toggle="collapse" href="#collapseMainImage" role="button" aria-expanded="false" aria-controls="collapseMainImage">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg>
        <i class="bi bi-plus"></i>Inserir foto destaque:
      </a>
      <div class="collapse @if(isset($category->main_image)) show @endif" id="collapseMainImage">
        <div class="mb-3" style="padding-top:15px">
            <input class="form-control" type="file" id="main_image" name="main_image">
            @if(isset($category->main_image))
            <img src="/images/uploads/category/{{$category->url}}/{{$category->main_image}}" style="width:25%" alt="{{$category->category}}" id="img-previa" class="img-thumbnail">

            <a style="color:#dc3545; cursor: pointer;" onclick="return confirm('Você realmente que remover a imagem destaque desta categoria?')" id="img-remove"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg> Remover imagem </a>
            @endif
          </div>
      </div>
  </div>


  <div class="form-group">
    <label for="tags">Tags:</label>
    <input type="text" class="form-control" id="tags" aria-describedby="tags" placeholder="Insira as Tags da Categoria:" name="tags"  
    value="@if(isset($category->tags)){{$category->tags}}@endif"
    >
    <h6 style="font-size: 13px"><cite style="color:#28a745">Obs.: Há um limite de 255 caracteres neste campo, as tags devem ser separadas por vírgula, ex.: Tecnologia, Desenvolvimento, etc.</cite></h6>
  </div>

  

  <div class="form-group">
    @if(isset($category))
    <button type="submit" class="btn btn-success">Atualizar</button>
    @else
    <button type="submit" class="btn btn-success">Enviar</button>
    @endif
  <a href="{{route('categories.index')}}"><button type="button" class="btn btn-outline-success">Voltar</button></a>
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
@if(isset($category))
$(document).ready(function() {
      // Manipulador de evento para o clique no botão
      $('#img-remove').click(function() {
        // Obtém os dados do formulário
        var formData = {
          _token: "{!! csrf_token() !!}",
          campo1: $('#publication_id').val(), 
        };


        // Faz a solicitação POST usando Ajax
        $.ajax({
          type: 'POST',
          url: '{{route("categories.update_remove_image",$category->id)}}',
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
      });
    });
@endif
</script>
@if(isset($category))
<form method="POST" class="form-remove-imagem" action="{{ route('categories.update_remove_image',$category->id) }}" style="display: none">
  @csrf
  <input type="submit" value="Enviar" style="display: none">
@endif


@stop