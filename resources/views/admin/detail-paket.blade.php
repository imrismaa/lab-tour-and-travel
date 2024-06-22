@extends('layouts.dashboard-nav')

@section('content')
<div class="container detail-paket-container">
    <h6 class="text-center mb-4">Detail Paket</h6>
    <div class="container">
        <img src="/images/image1.png" alt="" class="detail-paket-img">
    </div>
    <div class="container mt-3">
        <table class="summary">
            <tr>
                <td class="font-neutral">Pembuat</td>
                <td>: Kinan</td>
            </tr>
            <tr>
                <td class="font-neutral">Nama Paket</td>
                <td>: 2 Hari di HY</td>
            </tr>
            <tr>
                <td class="font-neutral">Durasi Wisata</td>
                <td>: 365 Hari</td>
            </tr>
            <tr>
                <td class="font-neutral">Harga WNI</td>
                <td>: Rp50.000</td>
            </tr>
            <tr>
                <td class="font-neutral">Harga WNA</td>
                <td>: Rp500.000</td>
            </tr>
            <tr>
                <td class="font-neutral">Total Jarak Tempuh</td>
                <td>: 0 KM</td>
            </tr>
            <tr>
                <td class="font-neutral">Tanggal Dibuat</td>
                <td>: 22 Juni 2024</td>
            </tr>
        </table>
        <a href="{{route('tambah-jadwal-destinasi')}}" style="text-decoration: none;">
            <button class="blue-pil form-control mt-2">Tambah Jadwal Destinasi</button>
        </a>
    </div>
    <table class="admin-table mt-3">
    <thead>
        <tr>
            <th class="p-2">Hari</th>
            <th class="p-2">Hari ke</th>
            <th class="p-2">Destinasi ke</th>
            <th class="p-2">Jarak Tempuh</th>
            <th class="p-2">Waktu Tempuh</th>
            <th class="p-2">ID Destinasi</th>
            <th class="p-2">Jam Mulai</th>
            <th class="p-2">Jam Selesai</th>
            <th class="p-2">Zona Mulai</th>
            <th class="p-2">Zona Selesai</th>
            <th class="p-2">Catatan</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="py-4">Rabu</td>
            <td class="py-4">1</td>
            <td class="py-4">1</td>
            <td class="py-4">0</td>
            <td class="py-4">0</td>
            <td class="py-4">1</td>
            <td class="py-4">06:00:00</td>
            <td class="py-4">08:00:00</td>
            <td class="py-4">WIB</td>
            <td class="py-4">WIB</td>
            <td class="py-4"> </td>
            <td>
                <a href="" style="text-decoration: none;">
                    <button class="red-pil">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash me-1" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </button>
                </a>
            </td>
        </tr>
        <tr>
            <td class="py-4">Rabu</td>
            <td class="py-4">1</td>
            <td class="py-4">1</td>
            <td class="py-4">0</td>
            <td class="py-4">0</td>
            <td class="py-4">1</td>
            <td class="py-4">06:00:00</td>
            <td class="py-4">08:00:00</td>
            <td class="py-4">WIB</td>
            <td class="py-4">WIB</td>
            <td class="py-4"> </td>
            <td>
                <a href="" style="text-decoration: none;">
                    <button class="red-pil">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash me-1" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </button>
                </a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection