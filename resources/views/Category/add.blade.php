@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Input Data Kategori</h3>
	<form method="post" action="{{url('/category')}}">
	@csrf
		<table>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="cat_name" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="cat_text" class="form-control"></td>
			</tr>
			

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-danger">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

@endsection