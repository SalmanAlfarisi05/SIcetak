<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5 max-w-3xl mx-auto">
        <div class="border-b py-3 px-5 w-min whitespace-nowrap">
            <p class="text-xl font-bold">Tambah User</p> 
        </div>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            @method('POST')
        <div class="space-y-3">
            <div class="flex flex-col gap-1">
                <label for="name">Nama Users</label>
                <input type="text" id="name" name="name" class="rounded-lg" placeholder="Masukkan Nama User" required>
            </div>
            <div class="flex flex-col gap-1">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="rounded-lg" placeholder="Masukkan Email User" required>
            </div>
            <div class="flex flex-col gap-1">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" class="rounded-lg" placeholder="Masukkan Password User" required>
            </div>

            
            <button type="submit" class=" rounded-lg px-5 py-2 bg-gray-800 text-white"> Simpan</button>
        </div>
        </form>
    </div>
</x-app-layout>