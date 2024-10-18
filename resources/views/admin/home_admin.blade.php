@extends('adminlte::page')
@extends('layouts.app')
@section('title', 'Sistema Administrativo')

@section('content_header')
@if (\Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {!! \Session::get('error') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif
    <h1>Bem-vindo, {{Auth::user()->name}}!</h1>
@stop

@section('content')
    <p>{{ucfirst(now()->formatLocalized('%A'))}}, {{now()->format('d')}} de {{now()->formatLocalized('%B')}}.<br>
         <span id="span"></span></p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
var span = document.getElementById('span');

function time() {
  var d = new Date();
  var s = d.getSeconds();
  var m = d.getMinutes();
  var h = d.getHours();
  span.textContent = 
    ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
}

setInterval(time, 1000);
</script>
@stop