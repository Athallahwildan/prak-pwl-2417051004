@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Mahasiswa</h1>

    @if ($errors->any())
        <div style="padding: 15px; margin-bottom: 20px; border-radius: 4px; color: #842029; background-color: #f8d7da; border: 1px solid #f5c2c7;">
            <strong>Terjadi kesalahan:</strong>
            <ul style="margin: 5px 0 0 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nama">Nama Mahasiswa:</label><br>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required style="padding: 8px; width: 50%; border-radius: 4px; border: 1px solid #ccc;"><br><br>
        
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" value="{{ old('npm', $user->npm) }}" required style="padding: 8px; width: 50%; border-radius: 4px; border: 1px solid #ccc;"><br><br>

        <label for="kelas_id">Kelas:</label><br>
        <select id="kelas_id" name="kelas_id" required style="padding: 8px; width: 50%; border-radius: 4px; border: 1px solid #ccc;">
            <option value="">-- Pilih Kelas --</option>
            @foreach($kelas as $k)
                <option value="{{ $k->id }}" {{ old('kelas_id', $user->kelas_id) == $k->id ? 'selected' : '' }}>
                    {{ $k->nama_kelas }}
                </option>
            @endforeach
        </select><br><br>
        
        <button type="submit" style="padding: 10px 20px; background-color: #198754; color: white; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Update Data</button>
    </form>
</div>
@endsection