@extends('layouts.dashboard-nav')

@section('content')
<div class="container form-container">
    <h6 class="text-center mb-4">Tambah Jadwal Destinasi</h6>
    <form action="">
        <label for="name">Hari</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Hari ke</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Destinasi ke</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Jarak Tempuh</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Nama Destinasi</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Jam Mulai</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Jam Selesai</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Zona Mulai</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Zona Selesai</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Catatan</label>
        <textarea rows="7" type="text" name="note" id="note" class="form-control mb-3 border" placeholder=""></textarea>
        <div class="col d-flex justify-content-end">
            <a href="" style="text-decoration: none;">
                <button class="blue-pil mt-3 mx-3">Save</button>
            </a>
            <a href="" style="text-decoration: none;">
                <button class="red-pil mt-3">Cancel</button>
            </a>
        </div>
    </form>
</div>
@endsection