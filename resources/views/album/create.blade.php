@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md-8 col-md-offset-2">
<legend>Nuevo Album</legend>



{!!Form::open(['route'=> 'album.store', 'method'=>'POST'])!!}

<div class="form-group"> 
{!!form::label('Usuario')!!}
{!!form::text('user', Auth::user()->id ,['id'=>'user','class'=>'form-control'])!!}
</div>

<div class="form-group"> 
{!!form::label('Nombre')!!}
{!!form::text('name', null,['id'=>'name','class'=>'form-control','placeholder'=>'Nombre'])!!}
</div>


{!!form::submit('Crear',['id'=>'crear','name'=>'crear','content'=>'Crear','class'=>'btn btn-warning'])!!}
</div>
</div>
{!!Form::close()!!}


@endsection