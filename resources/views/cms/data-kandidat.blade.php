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
                    <form action="/action_page.php" action="{{ route('tambah-user') }}>
                        @csrf
                        <label for="name">Nama Kandidat</label>
                        <input type="text" id="name" name="Nama Kandidat" placeholder="Masukkan Nama">
                    
                        <label for="tentang">Tentang Kandidat</label>
                        <input type="text" id="tentang" name="Tentang Kandidat" placeholder="MAsukkan Tentang">

                        <label for="prodi">Prodi Kandidat</label>
                        <input type="text" id="prodi" name="Prodi Kandidat" placeholder="Masukkan Prodi">

                        <label for="visi">Visi Kandidat</label>
                        <input type="text" id="visi" name="Visi Kandidat" placeholder="Masukkan Visi">

                        <label for="misi">Misi Kandidat</label>
                        <input type="text" id="misi" name="Misi Kandidat" placeholder="Masukkan Misi">

                        <label for="foto">Foto Kandidat</label>
                        <input type="text" id="foto" name="Foto Kandidat" placeholder="Masukkan Link Foto">
                      
                        <button class="btn-tambah-kandidat">Tambah</button>
                      </form>
                </div>
            </div>
        </div>
</section>
@endsection

<script src="../../js/cms.js"></script>
