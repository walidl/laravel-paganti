@extends('layout.paganti-layout')

@section ('title')
<h1>Pagante  {{$pagante[0]-> id}} </h1>

@stop

@section('otherColumns')

<div class="address">
  ADDRESS
</div>
@stop

@section ('rows')


<div class="row">
  <div class="id">
    {{$pagante[0] -> id}}
  </div>
  <div class="name">
    {{$pagante[0] -> name}}

  </div>
  <div class="lastname">
    {{$pagante[0] -> lastname}}

  </div>
  <div class="address">
    {{$pagante[0] -> address}}
  </div>

</div>



@stop
