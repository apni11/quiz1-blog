@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Data Photo</h3>

	<table class="table">
		<thead class="table table-striped table-danger">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">POST ID</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->pho_post_id }}</td>
			<td>{{ $row->pho_date }}</td>
			<td>{{ $row->pho_tittle }}</td>
			<td>{{ $row->pho_text }}</td>
			<td>
				<a href="{{ url('photo/' . $row->id . '/edit')}}" class="badge badge-primary">EDIT</a>
				
				<form action="{{ url('photo/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<button type="button" class="btn btn-danger"><a href="{{ url('photo/create') }}">Tambah Data</a></button>
</div>

@endsection