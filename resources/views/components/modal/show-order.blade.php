<div id="show-order-{{$order->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Detail Order {{$order->kode_pemesanan}}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="show-order-{{$order->id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <input disabled class="rounded-lg w-full" type="text" value="{{$order->kode_pemesanan}}">
                <input disabled class="rounded-lg w-full" type="text" value="{{$order->nama}}">
                <div class="flex gap-3 items-center">
                    <input disabled class="rounded-lg w-full" type="text" value="{{$order->panjang}}">
                    <p class="dark:text-white">X</p>
                    <input disabled class="rounded-lg w-full" type="text" value="{{$order->lebar}}">
                </div>
                <input disabled class="rounded-lg w-full" type="text" value="{{$order->bahan->nama_bahan}}">
                <input disabled class="rounded-lg w-full" type="text" value="{{ $order->laminasi ? $order->laminasi->nama_laminasi : 'Tanpa Laminasi'}}">
                <input disabled class="rounded-lg w-full" type="text" value="{{ $order->cutting ? $order->cutting->nama_cutting : 'Tanpa Cutting'}}">
                <input disabled class="rounded-lg w-full" type="text" value="Rp. {{number_format($order->total,0,',','.')}}">
                <input disabled class="rounded-lg w-full" type="text" value="Estimasi Pengerjaan {{$order->estimasi}} Hari">
            </div>
        </div>
    </div>
</div>