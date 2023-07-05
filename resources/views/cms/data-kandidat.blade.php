@extends('layouts.main')


@section('container')
<link rel="stylesheet" href="css/data-kandidat.css">
<section id="content-wrapper">
    <div class="row">
        <div class="column">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Kandidat</h3>
                </div>
                <!-- Check settings for dependencies! -->
                <div class="container">
                    <form  method="POST" action="{{ Route('data-kandidat.store') }}">
                        @csrf
                        <label for="name">Nama Kandidat</label>
                        <input type="text" id="name" name="nama_kandidat" placeholder="Masukkan Nama" required>
                    
                        <label for="tentang">Tentang Kandidat</label>
                        <input type="text" id="tentang" name="tentang_kandidat" placeholder="Masukkan Tentang" required>

                        <label for="prodi">Prodi Kandidat</label>
                        <input type="text" id="prodi" name="prodi_Kandidat" placeholder="Masukkan Prodi" required>

                        <label for="visi">Visi Kandidat</label>
                        <input type="text" id="visi" name="visi_kandidat" placeholder="Masukkan Visi" required>

                        <label for="misi">Misi Kandidat</label>
                        <input type="text" id="misi" name="misi_kandidat" placeholder="Masukkan Misi" required>

                        <label for="foto">Foto Kandidat</label>
                        <input type="text" id="foto" name="link_foto_kandidat" placeholder="Masukkan Link Foto" required>
                      
                        <button class="btn-tambah-kandidat">Tambah</button>
                      </form>
                </div>
            </div>
        </div>
</section>
<script src="js/cms.js"></script>

@endsection


