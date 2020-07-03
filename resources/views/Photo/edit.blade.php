@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Edit Data Photo</h3>
	<form action="{{ url('/photo/' . $row->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<tr>
			<td>POST ID</td>
			<td><input type="text" name="pho_post_id" value="{{ $row->pho_post_id}}"></td>
		</tr>

		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="pho_date" value="{{ $row->pho_date}}"></td>
		</tr>

		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="pho_tittle" value="{{ $row->pho_tittle}}"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="pho_text" value="{{ $row->pho_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><button type="submit" class="btn btn-danger">UPDATE</button></td>
		</tr>
	</table>
	</form>
</div>
@endsection