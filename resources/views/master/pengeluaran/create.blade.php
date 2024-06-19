<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5 max-w-3xl mx-auto">
        <div class="border-b py-3 px-5 w-min whitespace-nowrap">
            <p class="text-xl font-bold">Tambah Pengeluaran</p>
        </div>
        <form action="{{ route('pengeluaran.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="space-y-3">
                <div class="flex flex-col gap-1 w-full">
                    <label for="tanggal">Tanggal Order</label>
                    <input required type="date" id="tanggal" name="tanggal" class="rounded-lg" value="{{ date('Y-m-d') }}">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="keterangan">Keterangan</label>
                    <select name="keterangan" id="keterangan" class="rounded-lg" required>
                        <option value="" disabled selected> Pilih Keterangan Pengeluaran</option>
                        <optgroup label="Bahan">
                            <option value="Bahan">Bahan</option>
                            <option value="Tinta">Tinta</option>
                            <option value="Makloon">Makloon</option>
                        </optgroup>
                        <optgroup label="Biaya Opersional">
                            <option value="Cicilan Mesin">Cicilan Mesin</option>
                            <option value="Gaji Karyawan">Gaji Karyawan</option>
                            <option value="Gaji Pkl">Gaji Pkl</option>
                            <option value="Listrik">Listrik</option>
                            <option value="Telpon">Telpon</option>
                            <option value="Kas">Kas</option>
                            <option value="Operasional">Operasional</option>
                            <option value="Lembur">Lembur</option>
                        </optgroup>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="nominal">Nominal</label>
                    <input required type="number" id="nominal" name="nominal" class="rounded-lg"
                        placeholder="Masukkan Nominal">
                </div>
                <button type="submit" class=" rounded-lg px-5 py-2 bg-gray-800 text-white"> Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
