<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5 max-w-3xl mx-auto">
        <div class="border-b py-3 px-5 w-min whitespace-nowrap">
            <p class="text-xl font-bold">Tambah Bahan</p> 
        </div>
        <form action="{{ route('bahan.store') }}" method="POST">
            @csrf
            @method('POST')
        <div class="space-y-3">
            <div class="flex flex-col gap-1">
                <label for="nama_bahan">Nama Bahan</label>
                <input required type="text" id="nama_bahan" name="nama_bahan" class="rounded-lg" placeholder="Masukkan Nama Bahan">
            </div>
            <div class="flex flex-col gap-1">
                <label for="harga">Harga Jual</label>
                <input required type="number" id="harga" name="harga" class="rounded-lg" placeholder="Masukkan Harga / Meter">
            </div>
            <button type="submit" class=" rounded-lg px-5 py-2 bg-gray-800 text-white"> Simpan</button>
        </div>
        </form>
    </div>
</x-app-layout>