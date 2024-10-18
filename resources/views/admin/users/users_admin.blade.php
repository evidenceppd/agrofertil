@extends('adminlte::page')
@extends('layouts.app')
@section('title', 'Sistema Administrativo | Usuários')

@section('content_header')
    <h1>Usuários</h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.index')}}">Dashboard</a></li> &nbsp; > &nbsp;
      <li><a href="{{ route('users.index')}}">Usuários</a></li>
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
<p>Todos os usuários cadastrados no sistema:</p>
<a href="{{url()->current()}}/criar"><button class="btn btn-primary">Cadastrar novo</button></a>

<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Função</th>
      <th scope="col">Atualizado em:</th>
      <th scope="col">Alterar:</th>
  

    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    @if($user->id !== 1 && $user->role !== 2 && $user->id !== Auth::user()->id)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>@if($user->role == 1) Usuário @else Administrador @endif</td>
      <td>{{$user->updated_at->format('d/m/Y - h:i:s')}} </td>
      <td style="display: flex;"><a href="{{url()->current()}}/{{$user->id}}/editar" style="right:10px; position: relative;"><button class="btn btn-outline-warning">Editar</button></a>
        <form method="post" action="{{route('users.delete', $user->id)}}">
          @csrf
        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Você tem certeza que deseja excluir o usuário: {{$user->name}}');">Excluir</button></a>
        </form>
      </td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop