@extends('layouts.app')

@section('content')

<div class="row">
       <div class="col-lg-8 col-md-8 col-xs-12">
       	<h3>Fotos del Album <a href="/foto/create?idAlbum={{$idAlbum}}"><button class="btn btn-success">Nueva Foto</button></a></h3>
       </div>
   </div>

<table class="table table-bordered">

<thead>
<th>Nombre
</th>
</thead>

<tbody>
@foreach($fotos as $foto)
	<tr>
	<td>{{$foto->name}}</td>
	<td><img src="{{$foto->ruta}}" width="400" height="400"></td>
	</tr>

@endforeach
</tbody>

</table>
@endsection