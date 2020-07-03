@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Data Post</h3>

	<table class="table">
		<thead class="table table-striped table-danger">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">KATEGORI ID</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">SLUG</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->post_cat_id }}</td>
			<td>{{ $row->post_date }}</td>
			<td>{{ $row->post_slug }}</td>
			<td>{{ $row->post_tittle }}</td>
			<td>{{ $row->post_text }}</td>
			<td>
				<a href="{{ url('post/' . $row->id . '/edit')}}" class="badge badge-primary">EDIT</a></button>
				
				<form action="{{ url('post/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<button type="button" class="btn btn-danger"><a href="{{ url('post/create') }}">Tambah Data</a></button>
</div>

@endsection