@extends('layouts.app')

@section('content')

<div class="row">
       <div class="col-lg-8 col-md-8 col-xs-12">
       	<h3>Listado de albums <a href="album/create"><button class="btn btn-success">Nuevo</button></a></h3>
       </div>
   </div>

<table class="table table-bordered">

<thead>
<th>Nombre
</th>
</thead>

<tbody>
@foreach($albums as $album)
	<tr>
	<td><a href="foto?idAlbum={{$album->id}}">{{$album->name}}</a></td>
	</tr>

@endforeach
</tbody>

</table>
@endsection