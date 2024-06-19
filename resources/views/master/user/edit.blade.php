<x-app-layout>
    <div class="bg-white rounded-lg p-5 shadow border space-y-5 max-w-3xl mx-auto">
        <div class="border-b py-3 px-5 w-min whitespace-nowrap">
            <p class="text-xl font-bold">Edit User</p>
        </div>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-3">
                <div class="flex flex-col gap-1">
                    <label for="name">Nama User</label>
                    <input required type="text" id="name" name="name" class="rounded-lg"
                        placeholder="Masukkan Nama user" value="{{ $user->name }}">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email">Email</label>
                    <input required type="email" id="email" name="email" class="rounded-lg" placeholder="Masukkan Email" value="{{ $user->email }}">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password">Pasword</label>
                    <input type="text" id="password" name="password" class="rounded-lg"
                        placeholder="Masukkan Password">
                </div>
                <button type="submit" class=" rounded-lg px-5 py-2 bg-gray-800 text-white"> Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
