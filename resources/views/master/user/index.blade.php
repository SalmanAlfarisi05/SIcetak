<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5">
        <a href="{{ route('users.create') }}" class="bg-gray-800 text-white px-5 py-2 rounded-lg hover:bg-gray-700">Tambah
            Users</a>
        <div class="relative">
            <div class="rounded-lg overflow-hidden border">
                <table class="w-full">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <td class="px-6 py-2">No.</td>
                            <td class="px-6 py-2">Nama User</td>
                            <td class="px-6 py-2">Email</td>
                            <td class="px-6 py-2">Role</td>
                            <td class="px-6 py-2">Action</td>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($users->count() > 0)
                            @foreach ($users as $item)
                                <tr>
                                    <td class="px-6 py-2">
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{ $item->name }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{ $item->email }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{ $item->role }}
                                    </td>
                                    <td class="px-6 py-2 flex justify-center gap-3">
                                        <a href="{{ route('users.edit', $item->id) }}">Edit</a>
                                        <form method="POST" action="{{ route('users.destroy', $item->id) }}">
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
