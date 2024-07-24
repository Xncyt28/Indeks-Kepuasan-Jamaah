<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Indeks Kepuasan Jamaah Haji dan Umrah</title>
		<style>
			.chart-container {
				text-align: center;
			}

			.chart-img {
				max-width: 50%;
				margin: 0 auto;
				display: block;
			}

			table {
				font-size: .8rem;
			}

			table td, table th {
				text-align: left;
			}

			.title {
				text-align: center;
				margin: 20px 0;
			}

			.text-md {
				font-size: 1.1rem;
			}
		</style>
	</head>

	<body>
		<div>
			<table style="border-bottom: 1px solid black; width: 100%; text-align: center;">
				<tr>
					<td style="vertical-align: middle; width: 15%;">
						<img src="{{ public_path('assets/logozafa.png') }}" alt="Logo">
					</td>
					<td style="vertical-align: middle; line-height: 1.5;">
						<div style="text-align: center;">
							<h4 style="font-size: 1.2rem; margin: 0;">PT. ZAFA MULIA MANDIRI</h4>
							<div style="margin: 5px 0;">KANTOR ZAFA TOUR</div>
							<div>Jl. Ampibi B No.D1, 20 Ilir D II, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30127</div>
						</div>
					</td>
					<td style="width: 15%;"></td>
				</tr>
			</table>
			<div class="title">
				<span class="text-md">LAPORAN RESPONDEN <br>
					INDEKS KEPUASAN JAMAAH HAJI DAN UMRAH KANTOR ZAFA TOUR <br>
					KOTA PALEMBANG
				</span>
			</div>
			<table style="width: 100%;">
				<tr>
					<td>
						<table>
							<tr>
								<th>Tanggal Mulai</th>
								<td>:</td>
								<td>{{ request('start_date') }}</td>
							</tr>
							<tr>
								<th>Tanggal Selesai</th>
								<td>:</td>
								<td>{{ request('end_date') }}</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<th>Jenis Kelamin</th>
								<td>:</td>
								<td>{{ request('gender') ?? 'Semua' }}</td>
							</tr>
							<tr>
								<th>Umur</th>
								<td>:</td>
								<td>{{ request('age') ?? 'Semua' }}</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<th>Pencarian</th>
								<td>:</td>
								<td>{{ request('search') }}</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div class="chart-container">
			<h5>Responden Menurut Jenis Kelamin</h5>
			<img src="{{ 'https://quickchart.io/chart?c=' . urlencode($chartJKConfig) }}" alt="Chart" class="chart-img" />
		</div>
		<div class="chart-container">
			<h5>Responden Menurut Umur</h5>
			<img src="{{ 'https://quickchart.io/chart?c=' . urlencode($chartUmurConfig) }}" alt="Chart" class="chart-img" />
		</div>
		<table style="margin-top: 50px; width: 100%;">
			<tr>
				<td></td>
				<td style="text-align: center; width: 40%;">
					<div>Kantor Zafa Tour, {{ now()->format('d/m/Y') }}</div>
					<div style="margin-bottom: 50px;">Wakil Direktur Zafa Tour</div>
					<div>Duwi Hartati</div>
					<div>Nip. 12345678910</div>
				</td>
			</tr>
		</table>
	</body>

</html>
