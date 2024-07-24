<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Indeks Kepuasan Jamaah Haji dan Umrah</title>
		<style>
			.container {
				width: 100%;
				text-align: center;
				margin: 0 auto;
			}

			.center-horizontal {
				margin-left: auto;
				margin-right: auto;
				width: 80%;
			}

			.table {
				width: 100%;
				border-collapse: collapse;
			}

			.table tr>th,
			.table tr>td {
				border: 1px solid black;
				/* padding: 0px; */
				text-align: center;
			}

			.borderless tr>td {
				text-align: left;
				border: 0;
				padding: 0;
			}

			.text-lg {
				font-size: 2rem;
				font-weight: 500;
			}

			.text-md {
				font-size: 1.1rem;
			}

			.w-50persen {
				width: 50%;
			}

			.text-left {
				text-align: left !important;
				padding-left: 5px;
			}

			.title {
				text-align: center;
				margin: 20px 0;
			}
		</style>
	</head>

	<body>
		<table style="border-bottom: 1px solid black; width: 100%; text-align: center;">
			<tr>
				<td style="vertical-align: middle; width: 15%;">
					<img src="{{ public_path('assets/logozafa.png') }}" alt="Logo">
				</td>
				<td style="vertical-align: middle; line-height: 1.5;">
					<div>
						<h4 style="font-size: 1.2rem; margin: 0;">PT. ZAFA MULIA MANDIRI</h4>
						<div style="margin: 5px 0;">KANTOR ZAFA TOUR </div>
						<div>Jl. Ampibi B No.D1, 20 Ilir D II, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30127</div>
					</div>
				</td>
				<td style="width: 15%;"></td>
			</tr>
		</table>
		<div class="title">
			<span class="text-md">LAPORAN HASIL SURVEI KEPUASAN JAMAAH HAJI DAN UMRAH <br>
				KANTOR ZAFA TOUR <br>
				KOTA PALEMBANG</span>
		</div>
		<div class="center-horizontal">
			<table class="table">
				<tr>
					<th colspan="2" class="w-50persen">MUTU PELAYANAN</th>
					<th class="w-50persen">KINERJA UNIT PELAYANAN</th>
				</tr>
				<tr>
					<td colspan="2" class="text-lg">{{ $ikm['mutu'] }}</td>
					<td class="text-lg">{{ $ikm['kinerja'] }}</td>
				</tr>
				<tr>
					<th>UNSUR SURVEY</th>
					<th>NILAI</th>
					<th>NILAI IKJ</th>
				</tr>
				@foreach ($unsurSurvey as $key => $item)
					<tr>
						<td class="text-left">{{ $key }}</td>
						<td>{{ number_format($item['average'], 2) }}</td>
						@if ($loop->iteration == 1)
							<td rowspan="{{ count($unsurSurvey)+1 }}" class="text-lg">{{ $ikm['ikmUnit'] }}</td>
						@endif
					</tr>
				@endforeach
				<tr>
					<th>NRR IKJ</th>
					<th>{{ $ikm['nilaiIkmTertimbang'] }}</th>
				</tr>
				<tr>
					<th colspan="2">DATA RESPONDEN</th>
					<th>PERIODE SURVEI</th>
				</tr>
				<tr>
					<td colspan="2">
						<table class="borderless">
							<tr>
								<td>Jumlah Responden: </td>
								<td>{{ $ikm['responden']->jumlah }}</td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:Laki-laki = {{ $ikm['responden']->laki }}</td>
							</tr>
							<tr>
								<td></td>
								<td>:Perempuan = {{ $ikm['responden']->perempuan }}</td>
							</tr>
						</table>
					</td>
					<td>
						{{ \Carbon\Carbon::createFromFormat('Y-m-d', request('start_date'))->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}
						-
						{{ \Carbon\Carbon::createFromFormat('Y-m-d', request('end_date'))->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}
				</td>
				
				</tr>
			</table>
			<table style="margin-top: 50px; width: 100%;">
				<tr>
					<td></td>
					<td style="text-align: center; width: 40%;">
						<div>Kantor Zafa Tour, {{ now()->format('d/m/Y') }}</div>
						<div style="margin-bottom: 50px;">HRD Zafa Tour</div>
						<div>Duwi Hartati</div>
						<div>Nip. 12345678910</div>
					</td>
				</tr>
			</table>
		</div>
	</body>

</html>
