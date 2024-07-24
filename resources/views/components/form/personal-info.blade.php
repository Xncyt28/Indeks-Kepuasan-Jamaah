<div class="flex basis-full flex-col rounded-lg border border-gray-200 bg-white px-5 py-5 shadow dark:border-gray-700 dark:bg-gray-800">
	<h6 class="font-bold mb-3">Petunjuk</h6>
	<p>Harap isi informasi pribadi Anda dengan lengkap. Setelah selesai, silakan lanjutkan dengan menekan tombol "Selanjutnya."</p>
</div>
<div class="flex basis-full flex-col space-y-5 rounded-lg border border-gray-200 bg-white px-5 py-5 shadow dark:border-gray-700 dark:bg-gray-800">
	<h5 class="mb-5 text-center text-2xl font-medium tracking-tight text-gray-900 dark:text-white">
		Data Diri
	</h5>
	<form action="{{ route('kuesioner') }}" method="GET">
		<input type="hidden" name="step" value="2">
		<input type="hidden" name="question" value="1">
		<div class="mb-5">
			<label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
			<input type="text" id="name" name="name" value="{{ old('name') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('name')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="genders" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
			<select id="genders" name="gender" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
				<option value="" hidden>-Pilih-</option>
				@foreach ($genders as $item)
					<option value="{{ $item->value }}" {{ old('gender') == $item->value ? 'selected' : '' }}>{{ $item->label }}</option>
				@endforeach
			</select>
			@error('gender')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="age" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Umur</label>
			<input type="text" id="age" name="age" value="{{ old('age') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('age')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="tempat_tinggal" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tempat Tinggal</label>
			<input type="text" id="tempat_tinggal" name="tempat_tinggal" value="{{ old('tempat_tinggal') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('tempat_tinggal')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="tempat_mendaftar" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tempat Mendaftar</label>
			<input type="text" id="tempat_mendaftar" name="tempat_mendaftar" value="{{ old('tempat_mendaftar') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('tempat_mendaftar')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="tanggal_keberangkatan" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tanggal Keberangkatan</label>
			<input type="date" id="tanggal_keberangkatan" name="tanggal_keberangkatan" value="{{ old('tanggal_keberangkatan') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('tanggal_keberangkatan')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="paket_dilih" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Paket Dipilih</label>
			<input type="text" id="paket_dilih" name="paket_dilih" value="{{ old('paket_dilih') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('paket_dipilih')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="nama_tl" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Team Leader(TL)</label>
			<input type="text" id="nama_tl" name="nama_tl" value="{{ old('nama_tl') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('nama_tl')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="mutowif" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Mutowif</label>
			<input type="text" id="mutowif" name="mutowif" value="{{ old('mutowif') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('mutowif')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5 text-right">
			<x-button.submit text="Selanjutnya" id="submit-personal-info" />
		</div>
	</form>
</div>
