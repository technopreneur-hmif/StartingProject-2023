@extends('layouts.main')


@section('container')
<link rel="stylesheet"  type="text/css"  href="/css/data-user.css">
        <section id="content-wrapper">
            <div class="row">
                <div class="column">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Data User</h3>
                        </div>
                        <!-- Check settings for dependencies! -->
                        <div class="container">
                            <form method="POST" action="{{ Route('tambah-user') }}">
                                @csrf
                                <label for="name">Nama User</label>
                                <input type="text" id="name" name="nama_user" placeholder="Masukkan Nama" required>

                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" placeholder="Masukkan email" required>

                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" placeholder="Masukkan Username" required>

                                <label for="password">Password</label>
                                <input type="text" id="password" name="password" placeholder="Masukkan Password" required>

                                <label for="role">Role</label>
                                <select id="role" name="role" required>
                                    <option value="admin">Admin</option>
                                    <option value="pemilih">Pemilih</option>
                                </select>

                                <button class="btn-tambah-kandidat" type="submit" value="Tambah Akun User" >Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        <script src="js/cms.js"></script>
@endsection


