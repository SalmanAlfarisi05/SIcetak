<x-app-layout>
    <div class="bg-gray-900 rounded-lg p-5 h-full flex flex-col justify-between shadow-lg bg-jar shadow-lg">
        <div class="flex justify-end mb-10">
            <div class="flex items-center">
                <div class="relative">
                    <input name="start" type="date" value="{{ $subMonth }}"
                        class="rounded-lg bg-gray-700 text-white accent-white" id="filterStart"
                        placeholder="Select date start">
                </div>
                <span class="mx-4 text-gray-500">to</span>
                <div class="relative">
                    <input name="end" type="date" value="{{ date('Y-m-d') }}"
                        class="rounded-lg bg-gray-700 text-white accent-white" id="filterEnd"
                        placeholder="Select date end">
                </div>
            </div>
        </div>

        <div class="w-full space-y-5">
            <div class="grid grid-cols-4 gap-3">
                <div class="w-full">
                    <p class="text-center text-white">Pendapatan</p>
                    <div class="w-full border rounded-lg border-black p-5 bg-gray-700 text-white hover:bg-gray-600 transition-all duration-500 border-white"
                        data-modal-target="show-omset" data-modal-toggle="show-omset">
                        <p class="text-center text-lg">Rp. <span id="omset">0</span></p>
                    </div>
                    <x-modal.show-omset></x-modal.show-omset>
                </div>
                <div class="w-full">
                    <p class="text-center text-white">Pengeluaran Bahan</p>
                    <div class="w-full border rounded-lg border-black p-5 bg-gray-700 text-white hover:bg-gray-600 transition-all duration-500 border-white"
                        data-modal-target="show-pengeluaran-bahan" data-modal-toggle="show-pengeluaran-bahan">
                        <p class="text-center text-lg">Rp. <span id="pBahan">0</span></p>
                    </div>
                    <x-modal.show-pengeluaran-bahan></x-modal.show-pengeluaran-bahan>
                </div>
                <div class="w-full">
                    <p class="text-center text-white">Pengeluaran Operasional</p>
                    <div class="w-full border rounded-lg border-black p-5 bg-gray-700 text-white hover:bg-gray-600 transition-all duration-500 border-white"
                        data-modal-target="show-pengeluaran-operasional"
                        data-modal-toggle="show-pengeluaran-operasional">
                        <p class="text-center text-lg">Rp. <span id="pOperasional">0</span></p>
                    </div>
                    <x-modal.show-pengeluaran-operasional></x-modal.show-pengeluaran-operasional>
                </div>
                <div class="w-full">
                    <p class="text-center text-white">Laba / Rugi</p>
                    <div class="w-full border rounded-lg border-black p-5 bg-gray-700 text-white hover:bg-gray-600 transition-all duration-500 border-white"
                        data-modal-target="show-profit" data-modal-toggle="show-profit">
                        <p id="profitEl" class="text-center text-lg">Rp. <span id="profit">0</span></p>
                    </div>
                    <x-modal.show-profit></x-modal.show-profit>
                </div>

            </div>
            <div style="width: 100%;" class="bg-white rounded-lg p-3">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- <script>
    $(document).ready(function() {
        $.ajax({
            url: '{{ route('get.omset') }}',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const orders = response.order;
                const omset = response.omset;
                const pOperasionalSum = response.pOperasionalSum;
                const pOperasional = response.pOperasional;
                const pBahanSum = response.pBahanSum;
                const pBahan = response.pBahan;
                const profit = omset - pOperasionalSum - pBahanSum;

                $('#omset').text(omset);
                $('#pOperasional').text(pOperasionalSum);
                $('#pBahan').text(pBahanSum);
                $('#profit').text(profit);
                if (profit >= 0) {
                    $('#profitEl').addClass('text-green-500')
                    $('#profitEl').removeClass('text-red-500')
                } else {
                    $('#profitEl').addClass('text-red-500')
                    $('#profitEl').removeClass('text-green-500')
                }

                $('#profitOmset').text(omset);
                $('#profitTotal').text(profit);
                $('#biayaOperasional').text(pOperasionalSum);
                $('#biayaBahan').text(pBahanSum);


                orders.forEach(function(order) {
                    $('#omsetTable tBody').append(
                        `
                        <tr>
                            <td class="px-3 py-1">${order['kode_pemesanan']}</td>
                            <td class="px-3 py-1">${order['total']}</td>
                        </tr>
                        `
                    );
                });
                pBahan.forEach(function(bahan) {
                    $('#pengeluaranBahanTable tBody').append(
                        `
                        <tr>
                            <td class="px-3 py-1">${bahan['keterangan']}</td>
                            <td class="px-3 py-1">${bahan['nominal']}</td>
                        </tr>
                        `
                    );
                });
                pOperasional.forEach(function(operasional) {
                    $('#pengeluaranOperasionalTable tBody').append(
                        `
                        <tr>
                            <td class="px-3 py-1">${operasional['keterangan']}</td>
                            <td class="px-3 py-1">${operasional['nominal']}</td>
                        </tr>
                        `
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + error);
            }
        });
        $('#filterStart').on('change', function() {
            filterData($('#filterStart').val(), $('#filterEnd').val());
        });
        $('#filterEnd').on('change', function() {
            filterData($('#filterStart').val(), $('#filterEnd').val());
        });

        function filterData(filterStart, filterEnd) {
            $.ajax({
                url: `/get/filter/omset/${filterStart}/${filterEnd}`,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    const orders = response.order;
                    const omset = response.omset;
                    const pOperasionalSum = response.pOperasionalSum;
                    const pOperasional = response.pOperasional;
                    const pBahanSum = response.pBahanSum;
                    const pBahan = response.pBahan;
                    const profit = omset - pOperasionalSum - pBahanSum;

                    $('#omset').text(omset);
                    $('#pOperasional').text(pOperasionalSum);
                    $('#pBahan').text(pBahanSum);
                    $('#profit').text(profit);

                    if (profit >= 0) {
                        $('#profitEl').addClass('text-green-500')
                        $('#profitEl').removeClass('text-red-500')
                    } else {
                        $('#profitEl').addClass('text-red-500')
                        $('#profitEl').removeClass('text-green-500')
                    }


                    $('#profitOmset').text(omset);
                    $('#profitTotal').text(profit);
                    $('#biayaOperasional').text(pOperasionalSum);
                    $('#biayaBahan').text(pBahanSum);

                    $('profitTable tBody').empty();
                    $('#omsetTable tBody').empty();
                    $('#pengeluaranBahanTable tBody').empty();
                    $('#pengeluaranOperasionalTable tBody').empty();

                    orders.forEach(function(order) {
                        $('#omsetTable tBody').append(
                            `
                        <tr>
                            <td class="px-3 py-1">${order['kode_pemesanan']}</td>
                            <td class="px-3 py-1">${order['total']}</td>
                        </tr>
                        `
                        );
                    });
                    pBahan.forEach(function(bahan) {
                        $('#pengeluaranBahanTable tBody').append(
                            `
                        <tr>
                            <td class="px-3 py-1">${bahan['keterangan']}</td>
                            <td class="px-3 py-1">${bahan['nominal']}</td>
                        </tr>
                        `
                        );
                    });
                    pOperasional.forEach(function(operasional) {
                        $('#pengeluaranOperasionalTable tBody').append(
                            `
                        <tr>
                            <td class="px-3 py-1">${operasional['keterangan']}</td>
                            <td class="px-3 py-1">${operasional['nominal']}</td>
                        </tr>
                        `
                        );
                    });
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status + error);
                }
            });
        }
    });
</script> --}}
<script>
    function formatRupiah(angka) {
        var numberString = angka.toString();
        var sign = "";

        if (numberString.startsWith('-')) {
            sign = "-";
            numberString = numberString.substring(1);
        }

        var sisa = numberString.length % 3;
        var rupiah = numberString.substr(0, sisa);
        var ribuan = numberString.substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            var separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        return sign + rupiah;
    }


    $(document).ready(function() {
        $.ajax({
            url: '{{ route('get.omset') }}',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                var data = response.combinedData;
                var dates = Object.keys(data);
                var omsets = [];
                var pengeluarans = [];

                dates.forEach(function(date) {
                    omsets.push(data[date].omset);
                    pengeluarans.push(data[date].pengeluaran);
                });
                console.log(omsets);
                var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: dates,
                            datasets: [{
                                label: 'Omsets',
                                data: omsets,
                                borderColor: 'green',
                                borderWidth: 1
                            },
                            {
                                label: 'Pengeluarans',
                                data: pengeluarans,
                                borderColor: 'red',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });




                const orders = response.order;
                const omset = response.omset;
                const pOperasionalSum = response.pOperasionalSum;
                const pOperasional = response.pOperasional;
                const pBahanSum = response.pBahanSum;
                const pBahan = response.pBahan;
                const profit = omset - pOperasionalSum - pBahanSum;

                $('#omset').text(formatRupiah(omset));
                $('#pOperasional').text(formatRupiah(pOperasionalSum));
                $('#pBahan').text(formatRupiah(pBahanSum));
                $('#profit').text(formatRupiah(profit));
                if (profit >= 0) {
                    $('#profitEl').addClass('text-green-500')
                    $('#profitEl').removeClass('text-red-500')
                } else {
                    $('#profitEl').addClass('text-red-500')
                    $('#profitEl').removeClass('text-green-500')
                }

                $('#profitOmset').text(formatRupiah(omset));
                $('#profitTotal').text(formatRupiah(profit));
                $('#biayaOperasional').text(formatRupiah(pOperasionalSum));
                $('#biayaBahan').text(formatRupiah(pBahanSum));

                orders.forEach(function(order) {
                    $('#omsetTable tBody').append(
                        `
                    <tr>
                        <td class="px-3 py-1">${order['kode_pemesanan']}</td>
                        <td class="px-3 py-1">Rp. ${formatRupiah(order['total'])}</td>
                    </tr>
                    `
                    );
                });
                pBahan.forEach(function(bahan) {
                    $('#pengeluaranBahanTable tBody').append(
                        `
                    <tr>
                        <td class="px-3 py-1">${bahan['keterangan']}</td>
                        <td class="px-3 py-1">Rp. ${formatRupiah(bahan['nominal'])}</td>
                    </tr>
                    `
                    );
                });
                pOperasional.forEach(function(operasional) {
                    $('#pengeluaranOperasionalTable tBody').append(
                        `
                    <tr>
                        <td class="px-3 py-1">${operasional['keterangan']}</td>
                        <td class="px-3 py-1">Rp. ${formatRupiah(operasional['nominal'])}</td>
                    </tr>
                    `
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + error);
            }
        });
        $('#filterStart').on('change', function() {
            filterData($('#filterStart').val(), $('#filterEnd').val());
        });
        $('#filterEnd').on('change', function() {
            filterData($('#filterStart').val(), $('#filterEnd').val());
        });

        function filterData(filterStart, filterEnd) {
            $.ajax({
                url: `/get/filter/omset/${filterStart}/${filterEnd}`,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    const orders = response.order;
                    const omset = response.omset;
                    const pOperasionalSum = response.pOperasionalSum;
                    const pOperasional = response.pOperasional;
                    const pBahanSum = response.pBahanSum;
                    const pBahan = response.pBahan;
                    const profit = omset - pOperasionalSum - pBahanSum;

                    $('#omset').text(formatRupiah(omset));
                    $('#pOperasional').text(formatRupiah(pOperasionalSum));
                    $('#pBahan').text(formatRupiah(pBahanSum));
                    $('#profit').text(formatRupiah(profit));

                    if (profit >= 0) {
                        $('#profitEl').addClass('text-green-500')
                        $('#profitEl').removeClass('text-red-500')
                    } else {
                        $('#profitEl').addClass('text-red-500')
                        $('#profitEl').removeClass('text-green-500')
                    }

                    $('#profitOmset').text(formatRupiah(omset));
                    $('#profitTotal').text(formatRupiah(profit));
                    $('#biayaOperasional').text(formatRupiah(pOperasionalSum));
                    $('#biayaBahan').text(formatRupiah(pBahanSum));

                    $('profitTable tBody').empty();
                    $('#omsetTable tBody').empty();
                    $('#pengeluaranBahanTable tBody').empty();
                    $('#pengeluaranOperasionalTable tBody').empty();

                    orders.forEach(function(order) {
                        $('#omsetTable tBody').append(
                            `
                    <tr>
                        <td class="px-3 py-1">${order['kode_pemesanan']}</td>
                        <td class="px-3 py-1">Rp. ${formatRupiah(order['total'])}</td>
                    </tr>
                    `
                        );
                    });
                    pBahan.forEach(function(bahan) {
                        $('#pengeluaranBahanTable tBody').append(
                            `
                    <tr>
                        <td class="px-3 py-1">${bahan['keterangan']}</td>
                        <td class="px-3 py-1">Rp. ${formatRupiah(bahan['nominal'])}</td>
                    </tr>
                    `
                        );
                    });
                    pOperasional.forEach(function(operasional) {
                        $('#pengeluaranOperasionalTable tBody').append(
                            `
                    <tr>
                        <td class="px-3 py-1">${operasional['keterangan']}</td>
                        <td class="px-3 py-1">Rp. ${formatRupiah(operasional['nominal'])}</td>
                    </tr>
                    `
                        );
                    });
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status + error);
                }
            });
        }
    });
</script>
