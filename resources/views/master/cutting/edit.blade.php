<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5 max-w-3xl mx-auto">
        <div class="border-b py-3 px-5 w-min whitespace-nowrap">
            <p class="text-xl font-bold">Tambah cutting</p> 
        </div>
        <form action="{{ route('cutting.update', $cutting->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="space-y-3">
            <div class="flex flex-col gap-1">
                <label for="nama_cutting">Nama cutting</label>
                <input required type="text" id="nama_cutting" name="nama_cutting" class="rounded-lg" placeholder="Masukkan Nama cutting" value="{{$cutting->nama_cutting}}">
            </div>
            <div class="flex flex-col gap-1">
                <label for="harga">Harga</label>
                <input required type="number" id="harga" name="harga" class="rounded-lg" placeholder="Masukkan Harga / Meter" value="{{$cutting->harga}}">
            </div>
            <div class="flex flex-col gap-1">
            </div>
            <button type="submit" class=" rounded-lg px-5 py-2 bg-gray-800 text-white"> Simpan</button>
        </div>
        </form>
    </div>
</x-app-layout>