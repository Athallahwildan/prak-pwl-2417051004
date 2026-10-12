@extends('layouts.app')

@section('content')
    <div class="container" style="padding: 20px;">
        <h2>Data Pengguna</h2>

        @if(session('success'))
            <div style="padding: 15px; margin-bottom: 20px; border-radius: 4px; color: #155724; background-color: #d4edda; border: 1px solid #c3e6cb;">
                <strong>Berhasil!</strong> {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('user.create') }}" style="padding: 8px 15px; background-color: #0d6efd; color: white; text-decoration: none; border-radius: 4px; display: inline-block; margin-bottom: 15px;">+ Tambah Pengguna</a>

        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead style="background-color: #f8f9fa;">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($users) && count($users) > 0)
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->npm }}</td>
                        <td>{{ $user->nama_kelas }}</td>
                        <td>

                            <a href="{{ route('user.edit', $user->id) }}" style="padding: 6px 12px; background-color: #ffc107; color: black; text-decoration: none; border-radius: 4px; font-weight: bold;">Edit</a> 
                            
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" style="padding: 6px 12px; background-color: #dc3545; color: white; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; margin-left: 5px;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td>1</td>
                        <td>Athallah Wildan Rafi</td>
                        <td>2417051004</td>
                        <td>A</td>
                        <td align="center">-</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection