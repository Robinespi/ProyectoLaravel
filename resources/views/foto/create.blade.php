@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md-8 col-md-offset-2">
<legend>Nueva Foto</legend>



{!!Form::open(['route'=> 'foto.store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}



<div class="form-group"> 
{!!form::label('Album')!!}
<input type="text" name="album" value="{{$idAlbum}}">
</div>

<div class="form-group"> 
{!!form::label('Nombre')!!}
{!!form::text('name', null,['id'=>'name','class'=>'form-control','placeholder'=>'Nombre'])!!}
</div>

<div class="form-group"> 
<label control-label">Imagen max: 20MB</label>
<input type="file" class="form-control" name="foto" required="">
</div>

{!!form::submit('Crear',['id'=>'crear','name'=>'crear','content'=>'Crear','class'=>'btn btn-warning'])!!}
</div>
</div>
{!!Form::close()!!}


@endsection