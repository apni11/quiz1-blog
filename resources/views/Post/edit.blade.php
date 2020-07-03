@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Edit Data Post</h3>
	<form action="{{ url('/post/' . $row->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<tr>
			<td>KATEGORI ID</td>
			<td><input type="text" name="post_cat_id" value="{{ $row->post_cat_id}}"></td>
		</tr>

		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="post_date" value="{{ $row->post_date}}"></td>
		</tr>

		<tr>
			<td>SLUG</td>
			<td><input type="text" name="post_slug" value="{{ $row->post_slug}}"></td>
		</tr>

		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="post_tittle" value="{{ $row->post_tittle}}"></td>
		</tr>


		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="post_text" value="{{ $row->post_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><button type="submit" class="btn btn-danger">UPDATE</button></td>
		</tr>
	</table>
	</form>
</div>
@endsection