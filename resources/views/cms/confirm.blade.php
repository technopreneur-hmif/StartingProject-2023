@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="/css/confirm.css">
<section id="content-wrapper">
    <div class="row">
        <div class="column">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Konfirmasi</h3>
                </div>
                <!-- Check settings for dependencies! -->
                <div class="containers">
                    <div class="card-confirm">
                        {{-- <p>{{ $loop->iteration }}</p> --}}
                        <div class="user-details">
                            <label>Detail</label>
                            <p><span>Nama</span>: {{ $user->nama_user }}</p>
                            <p><span>Email</span>: {{ $user->email }}</p>
                            <p><span>Username</span>: {{ $user->username }}</p>
                            <p><span>Role</span>: {{ $user->role }}</p>
                        </div>

                                <div class="btn">
                                    <form action="{{ Route('move',$user->id)}}" method="POST">
                                        @csrf
                                        <a id="btn-confirm"><button id="btn-reject">Konfirmasi</button> </a>
                                    </form>


                                    <form action="{{Route('reject', $user->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button id="btn-reject">Tolak </button>
                                        </form>
                                </div>
                        </form>
 
     
                    </div>
                </div>
            </div>
        </div>
</section>
<script src="js/cms.js"></script>
@endsection


