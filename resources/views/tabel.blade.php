@extends('templates.master')
@section('konten')

<table class="table table-bordered"><tr>
	<th>
		nama
	</th>
	<th>
		tokoh
	</th>
	<th>
		tempat lahir
	</th>
	<th>
		tanggal lahir
	</th>
</tr>
@foreach($pramuka as $data)
<tr>
	<th>
		{{$data->nama}}
	</th>
	<th>
		{{$data->tempat_lahir}}
	</th>
	<th>
		{{$data->tanggal_lahir}}
	</th>
	<th>
		{{$data->tokoh}}
	</th>
</tr>
@endforeach
</table>

@endsection