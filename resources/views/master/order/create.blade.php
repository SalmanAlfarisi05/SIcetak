<x-app-layout>
        <div class="bg-white rounded-lg p-5 shadow border space-y-5 col-span-2">
            <div class="border-b py-3 px-5 w-min whitespace-nowrap">
                <p class="text-xl font-bold">Tambah Order</p> 
            </div>
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                @method('POST')
            <div class="space-y-3">
                <div class="flex flex-col gap-1">
                    <label for="nama">Nama Pemesan</label>
                    <input type="text" id="nama" name="nama" class="rounded-lg" placeholder="Masukkan Nama Pemesan" required>
                </div>
                <div class="flex justify-between gap-3 items-center">
                    <div class="flex flex-col gap-1 w-full">
                        <label class="text-center" for="panjang">Panjang</label>
                        <input type="number" id="panjang" name="panjang" class="rounded-lg" required>
                    </div>
                    <p>X</p>
                    <div class="flex flex-col gap-1 w-full">
                        <label class="text-center" for="lebar">Lebar</label>
                        <input type="number" id="lebar" name="lebar" class="rounded-lg" required>
                    </div>
                </div>
                <div class="flex flex-col gap-1 w-full">
                    <label for="tanggal">Tanggal Order</label>
                    <input type="date" id="tanggal" name="tanggal" class="rounded-lg" required>
                </div>
                <div class="flex flex-col gap-1 w-full">
                    <label for="estimasi">Estimasi</label>
                    <input type="number" id="estimasi" name="estimasi" class="rounded-lg" required>
                </div>
                <div class="flex flex-col gap-1 w-full">
                    <label for="bahan_id">Bahan</label>
                    <select name="bahan_id" id="bahan_id" class="rounded-lg" required>
                        <option value="" disabled selected> Pilih Bahan</option>
                        @foreach ($bahan as $item)
                            <option value="{{$item->id}}">{{$item->nama_bahan}}</option>                        
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-1 w-full">
                    <label for="laminasi_id">Laminasi</label>
                    <select name="laminasi_id" id="laminasi_id" class="rounded-lg">
                        <option value="" disabled selected> Pilih Nama Laminasi</option>
                        @foreach ($laminasi as $item)
                            <option value="{{$item->id}}">{{$item->nama_laminasi}}</option>                        
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-1 w-full">
                    <label for="cutting_id">Cutting</label>
                    <select name="cutting_id" id="cutting_id" class="rounded-lg">
                        <option value="" disabled selected> Pilih Nama Cutting</option>
                        @foreach ($cutting as $item)
                            <option value="{{$item->id}}">{{$item->nama_cutting}}</option>                        
                        @endforeach
                    </select>
                </div>
    
                <button type="submit" class=" rounded-lg px-5 py-2 bg-gray-800 text-white"> Simpan</button>
            </div>
            </form>
        </div>
</x-app-layout>