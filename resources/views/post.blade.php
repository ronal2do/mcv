@extends('layouts.template')

@section('content')

    
<section id="fundo2" class="amarela">

<div class="container text-center">

  <br>
  <br>  <br>
  <br>

<h4>{{$post->titulo}}</h4>
<div class="row">
  <div class="col-sm-6"><p style="padding-top: 150px;">{{$post->texto}}</p></div>
  <div class="col-sm-6"><img src="/imgs/destaques/{{$post->foto}}" alt="" style="padding-top: 50px;"></div>
</div>


</div>

</section>
@endsection