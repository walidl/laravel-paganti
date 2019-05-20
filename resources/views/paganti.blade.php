@extends('layout.paganti-layout')

@section ('title')
<h1>Paganti</h1>
@stop

@section ('rows')

@foreach ($paganti as $pagante)
<div class="row">
  <div class="id">

    <a href="/paganti/{{$pagante -> id}}">{{$pagante -> id}}</a>

  </div>
  <div class="name">
    {{$pagante -> name}}

  </div>
  <div class="lastname">
    {{$pagante -> lastname}}

  </div>

</div>

@endforeach

@stop
