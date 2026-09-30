<style>
    .navbar {
        background-color: #2c3e50;
        color: white;
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .nav-links a {
        color: white;
        text-decoration: none;
        margin-left: 20px;
        font-size: 15px;
    }
    .nav-links a:hover {
        color: #3498db;
    }
</style>
<div class="navbar">
    <div class="brand"><strong>Aplikasi Data Mahasiswa</strong></div>
    <div class="nav-links">
        <a href="{{ route('user.index') }}">Daftar Pengguna</a>
        <a href="{{ route('user.create') }}">Tambah Pengguna</a>
    </div>
</div>