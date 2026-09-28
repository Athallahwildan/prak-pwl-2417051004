@extends('layouts.app')

@section('content')
    <h2>Buat Pengguna Baru</h2>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama..." required>
        </div>
        
        <div class="form-group">
            <label for="npm">NPM / NIM:</label>
            <input type="text" id="npm" name="npm" placeholder="Masukkan NPM..." required>
        </div>
        
        <div class="form-group">
            <label for="kelas_id">Kelas:</label>
            <select id="kelas_id" name="kelas_id">
                <option value="1">Kelas A</option>
                <option value="2">Kelas B</option>
                <option value="3">Kelas C</option>
                <option value="4">Kelas D</option>
            </select>
        </div>
        
        <button type="submit">Simpan Data</button>
    </form>
@endsection