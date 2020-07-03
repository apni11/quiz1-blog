@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Input Data Photo</h3>
	<form method="post" action="{{url('/photo')}}">
	@csrf
		<table>
			<tr>
				<td>POST ID</td>
				<td><input type="text" name="pho_post_id" class="form-control"></td>
			</tr>
			<tr>
				<td>TANGGAL</td>
				<td><input type="date" name="pho_date" class="form-control"></td>
			</tr>
			<tr>
				<td>JUDUL</td>
				<td><input type="text" name="pho_tittle" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="pho_text" class="form-control"></td>
			</tr>

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-danger">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

@endsection