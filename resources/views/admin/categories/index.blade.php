@extends('adminlte::page')
@extends('layouts.app')
@section('title', 'Sistema Administrativo | Categorias')

@section('content_header')
    <h1>Categorias de Post</h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.index')}}">Dashboard</a></li> &nbsp; > &nbsp;
      <li><a href="{{ route('categories.index')}}">Categorias</a></li>
  </ol>
@stop

@section('content')
@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {!! \Session::get('success') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<br>
<p>Todas as Categorias de Posts cadastradas no sistema:</p>
<a href="{{url()->current()}}/criar"><button class="btn btn-primary">Cadastrar novo</button></a>

<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID:</th>
      <th scope="col">Categoria:</th>
      <th scope="col">Atualizado em:</th>
      <th scope="col">Alterar:</th>
  

    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->category}}</td>
      <td>{{$category->updated_at->format('d/m/Y - h:i:s')}} </td>
      <td style="display: flex;"><a href="{{url()->current()}}/{{$category->id}}/editar" style="right:10px; position: relative;"><button class="btn btn-outline-warning">Editar</button></a>
        <form method="post" action="{{route('categories.destroy', $category->id)}}">
          @csrf
        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Você tem certeza que deseja excluir a publicação: {{$category->category}}');">Excluir</button></a>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop