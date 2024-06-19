<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5">
        <a href="{{ route('pengeluaran.create') }}" class="bg-gray-800 text-white px-5 py-2 rounded-lg hover:bg-gray-700">Tambah
            Pengeluaran</a>
        <div class="relative">
            <div class="rounded-lg overflow-hidden border">
                <table class="w-full">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <td class="px-6 py-2">No.</td>
                            <td class="px-6 py-2">Tanggal</td>
                            <td class="px-6 py-2">Keterangan</td>
                            <td class="px-6 py-2">Nominal</td>
                            <td class="px-6 py-2">Action</td>
            
                        </tr>
                    </thead>
                    <tbody>

                        @if ($pengeluaran->count() > 0)
                            @foreach ($pengeluaran as $item)
                                <tr>
                                    <td class="px-6 py-2">
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td class="px-6 py-2">{{ $item->tanggal }}</td>
                                    <td class="px-6 py-2">
                                        {{ $item->keterangan }}
                                    </td>
                                    <td class="px-6 py-2">
                                        Rp. {{ number_format($item->nominal,0,',','.') }}
                                    </td>
                                    <td class="px-6 py-2 flex justify-center gap-3">
                                        <form method="POST" action="{{ route('pengeluaran.destroy', $item->id) }}">
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
                                <td colspan="5" class="text-center px-6 py-2">Tidak Ada Data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
