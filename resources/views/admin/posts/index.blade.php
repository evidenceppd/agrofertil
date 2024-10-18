@extends('adminlte::page')
@extends('layouts.app')
@section('title', 'Sistema Administrativo | Publicações')

@section('content_header')
    <h1>Publicações</h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.index')}}">Dashboard</a></li> &nbsp; > &nbsp;
      <li><a href="{{ route('posts.index')}}">Publicações</a></li>
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
<p>Todos as publicações cadastradas no sistema:</p>
<a href="{{url()->current()}}/criar"><button class="btn btn-primary">Cadastrar novo</button></a>

<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID:</th>
      <th scope="col">Título:</th>
      <th scope="col">Status:</th>
      <th scope="col">Atualizado em:</th>
      <th scope="col">Alterar:</th>
  

    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>@if($post->published == 1) Publicado @else Privado @endif</td>
      <td>{{$post->updated_at->format('d/m/Y - h:i:s')}} </td>
      <td style="display: flex;"><a href="{{url()->current()}}/{{$post->id}}/editar" style="right:10px; position: relative;"><button class="btn btn-outline-warning">Editar</button></a>
        <form method="post" action="{{route('posts.destroy', $post->id)}}">
          @csrf
        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Você tem certeza que deseja excluir a publicação: {{$post->title}}');">Excluir</button></a>
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