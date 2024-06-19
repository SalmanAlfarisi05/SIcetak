<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5">
        <a href="{{ route('order.create') }}" class="bg-gray-800 text-white px-5 py-2 rounded-lg hover:bg-gray-700">Tambah
            Order</a>
        <div class="relative">
            <div class="rounded-lg overflow-hidden border">
                <table id="DataTable" class="w-full">
                    <thead class="bg-gray-800 text-white text-center">
                        <tr>
                            <td class="px-6 py-2">No.</td>
                            <td class="px-6 py-2">Kode Pesanan</td>
                            <td class="px-6 py-2">Nama Pemesan</td>
                            <td class="px-6 py-2">Ukuran</td>
                            <td class="px-6 py-2">Tanggal</td>
                            <td class="px-6 py-2">Harga</td>
                            <td class="px-6 py-2">Action</td>

                        </tr>
                    </thead>
                    <tbody>

                            @foreach ($order as $item)
                                <tr>
                                    <td class="px-6 py-2">
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td class="px-6 py-2">
                                        <button class="text-blue-500 hover:underline" data-modal-target="show-order-{{$item->id}}" data-modal-toggle="show-order-{{$item->id}}">
                                            {{ $item->kode_pemesanan }}
                                        </button>
                                        <x-modal.show-order :order="$item"></x-modal.show-order>
                                    </td>
                                    <td class="px-6 py-2 capitalize">
                                        {{ $item->nama }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{ $item->panjang }} X {{$item->lebar}}
                                    </td>
                                    <td class="px-6 py-2">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                    </td>
                                    <td class="px-6 py-2">Rp. {{number_format($item->total,0,',','.')}}</td>
                                    <td class="px-6 py-2 flex justify-center gap-3">
                                        <form method="POST" action="{{ route('order.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit">
                                            Delete
                                        </button>
                                        </form>
                                    </td>
                                    
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<script>

    $(document).ready(function(){
       
        $("#DataTable").DataTable({
            info:false,
            lengthChange:false,paging:false
        });
    });
</script>