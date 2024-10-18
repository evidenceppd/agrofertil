@extends('adminlte::page')
@extends('layouts.app')
@section('title')
@if(isset($user)) Sistema | Editar Usuário: {{$user->name}} @else Sistema | Criar novo Usuário @endif
@endsection

@section('content_header')
    <h1>@if(isset($user)) Editar Usuário: <q style="color:#007bff">{{$user->name}}</q> @else Cadastrar novo Usuário @endif</h1>
    <ol class="breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.index')}}">Dashboard</a></li> &nbsp; > &nbsp;
            <li><a href="{{ route('users.index')}}">Usuários</a></li>
            @if(isset($user))
            &nbsp; > &nbsp;
            <li><a href="">{{$user->name}}</a></li>
            @else
            &nbsp; > &nbsp;
            <li><a href="">Novo Usuário</a></li>
            @endif
        </ol>
@stop

@section('content')
<hr>

<form enctype="multipart/form-data" role="form" method="post" action="@if(isset($user->id)) {{ route('user.update',$user->id) }} @else {{route('user.store')}} @endif">
@csrf
@if(isset($user->id))
<input type="hidden" name="id" value="{{$user->id}}">
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

<div class="form-group">
    <label for="name">Nome de Usuário:</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Insira o nome de usuário" name="name"  
    value="@if(isset($user->name)){{$user->name}}@endif" required
    >
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Insira o e-mail" name="email" 
    value="@if(isset($user->email)){{$user->email}}@endif" required
    >
  </div>

  <div class="form-group">
    <label for="email">Senha:</label>
    <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="@if(isset($user)) Insira a nova senha @else Insira a senha @endif" name="password" @if(!isset($user)) required @endif>
  </div>

  <div class="form-group">
    <div class="form-check">
    <input class="form-check-input" name="pole" type="checkbox" @if(isset($user) && $user->role == 2) checked @endif id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Incluir administrador
    </label>
    </div>
  </div>

  <div class="form-group">
    @if(isset($user))
    <button type="submit" class="btn btn-success">Atualizar</button>
    @else
    <button type="submit" class="btn btn-success">Enviar</button>
    @endif
  <a href="{{route('users.index')}}"><button type="button" class="btn btn-outline-success">Voltar</button></a>
  </div>

</form>
   

@stop

@section('css')

@stop

@section('js')
@stop