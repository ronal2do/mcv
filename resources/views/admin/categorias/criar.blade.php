@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Categorias</div>

                <div class="panel-body">
                  @include('includes.catform')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
