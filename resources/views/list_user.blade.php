@extends('layouts.app')

@section('content')
    <h2>Data Pengguna</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($users) && count($users) > 0)
                @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->kelas }}</td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td>1</td>
                    <td>Athallah Wildan Rafi</td>
                    <td>2417051004</td>
                    <td>A</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection