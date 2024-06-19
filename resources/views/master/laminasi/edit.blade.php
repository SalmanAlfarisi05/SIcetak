<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5 max-w-3xl mx-auto">
        <div class="border-b py-3 px-5 w-min whitespace-nowrap">
            <p class="text-xl font-bold">Tambah Laminasi</p> 
        </div>
        <form action="{{ route('laminasi.update', $laminasi->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="space-y-3">
            <div class="flex flex-col gap-1">
                <label for="nama_laminasi">Nama Laminasi</label>
                <input required type="text" id="nama_laminasi" name="nama_laminasi" class="rounded-lg" placeholder="Masukkan Nama laminasi" value="{{$laminasi->nama_laminasi}}">
            </div>
            <div class="flex flex-col gap-1">
                <label for="harga">Harga</label>
                <input required type="number" id="harga" name="harga" class="rounded-lg" placeholder="Masukkan Harga / Meter" value="{{$laminasi->harga}}">
            </div>
            <button type="submit" class=" rounded-lg px-5 py-2 bg-gray-800 text-white"> Simpan</button>
        </div>
        </form>
    </div>
</x-app-layout>