@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="css/confirm.css">
<section id="content-wrapper">
    <div class="row">
        <div class="column">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Konfirmasi Pemilih</h3>
                </div>
                <!-- Check settings for dependencies! -->
                <div class="containers">
                    <div class="card-confirm">
                        <h2>Pemilih 1 (ganti nama pemilih)</h2>
                        <p>Nama: Ryan Garcia</p>
                        <p>Email : ryan.121140123@itera.ac.id</p>
                        <p>Username : Ryan</p>
                        <p>Role : Pemilih</p>
                        <div class="btn">
                            <a href="./konfirmasi-pemilih" id="btn-confirm">Konfirmasi</a>
                            <a href="" id="btn-reject">Tolak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection

<script src="../../js/cms.js"></script>
