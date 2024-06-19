<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5">
        <a href="{{ route('bahan.create') }}" class="bg-gray-800 text-white px-5 py-2 rounded-lg hover:bg-gray-700">Tambah
            Bahan</a>
        <div class="relative">
            <div class="rounded-lg overflow-hidden border">
                <table class="w-full">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <td class="px-6 py-2">No.</td>
                            <td class="px-6 py-2">Nama Bahan</td>
                            <td class="px-6 py-2">Harga</td>
                            <td class="px-6 py-2">Action</td>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($bahan->count() > 0)
                            @foreach ($bahan as $item)
                                <tr>
                                    <td class="px-6 py-2">
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{ $item->nama_bahan }}
                                    </td>
                                    <td class="px-6 py-2">
                                        Rp. {{ number_format($item->harga,0,',','.') }}
                                    </td>
                                    <td class="px-6 py-2 flex justify-center gap-3">
                                        <a href="{{ route('bahan.edit', $item->id) }}">Edit</a>
                                        <form method="POST" action="{{ route('bahan.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit">
                                            Delete
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center px-6 py-2">Tidak Ada Data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
