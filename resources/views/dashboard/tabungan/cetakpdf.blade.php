<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laporan Tabungan</title>
	<style>
		table.static {
			position: relative;
			border: 1px solid #543535;
		}
	</style>
</head>
<body>
	<div class="form-group">
		<p align="center"><b>LAPORAN TABUNGAN</b></p>
		{{-- @foreach($datas as $data)
		<div class="row">
			<div class="col">nama		:</div>
			<div class="col">{{$data->name}}</div>
		</div>
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
		</div>
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
		</div>
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
		</div>
		@endforeach --}}
		@foreach($datas as $data)
		<table class="static " align="center" rules="all" border="none" style="width:90%;">
			<tr>
				<td>nama		</td>
				<td>:	{{$data->name}}</td>
			</tr>
			<tr>
				<td>NIS		</td>
				<td>:	{{$data->nis}}</td>
			</tr>
			<tr>
				<td>Kelas		</td>
				<td>:	{{$data->kelas}}</td>
			</tr>
			<tr>
				<td>Email		</td>
				<td>:	{{$data->email}}</td>
			</tr>
		</table>
		<br>
		@endforeach
		<table class="static" align="center" rules="all" border="1px" style="width:95%;">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Setoran</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($setoran as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->created_at}}</td>
					@if($s->kredit==NULL)
            <td>+Rp{{$s->debit}}</td>
          @elseif($s->debit==NULL)
            <td>-Rp{{$s->kredit}}</td>
          @endif
					<td>Rp{{$s->saldo_akhir}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>	
	</div>
	<script type="text/javascript">
	window.print();
	</script>
</body>
</html>