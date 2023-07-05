@extends('layouts.main')


@section('container')
<link rel="stylesheet" href="css/testconfirm.css">
<section id="content-wrapper">
    <div class="row">
        <div class="column">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Konfirmasi Pemilih</h3>
                </div>
                <!-- Check settings for dependencies! -->

                @foreach ($users as $user)
                <div class="containers">
                    <div class="pemilih">
                        <div class="username">
                            <svg class="user-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z" />
                            </svg>
                            @csrf
                        </div>

                        <p>pemilih  {{ $loop->iteration }} </p>
                        <p></p>
                        <p>{{ $user->nama_user }}</p>
    
                        <div class="btn">
                            <a class="btn-reject" href="{{ Route('reject' ,$user->id)}} "><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                    height="40" viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24Zm37.66 130.34a8 8 0 0 1-11.32 11.32L128 139.31l-26.34 26.35a8 8 0 0 1-11.32-11.32L116.69 128l-26.35-26.34a8 8 0 0 1 11.32-11.32L128 116.69l26.34-26.35a8 8 0 0 1 11.32 11.32L139.31 128Z" />
                                </svg></a>
                                
                            <a class="btn-accept" href="{{ Route('confirm-page' ,$user->id)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="35"
                                    height="35" viewBox="0 0 48 48">
                                    <mask id="ipSCheckOne0">
                                        <g fill="none" stroke-linejoin="round" stroke-width="4">
                                            <path fill="#fff" stroke="#fff"
                                                d="M24 44a19.937 19.937 0 0 0 14.142-5.858A19.937 19.937 0 0 0 44 24a19.938 19.938 0 0 0-5.858-14.142A19.937 19.937 0 0 0 24 4A19.938 19.938 0 0 0 9.858 9.858A19.938 19.938 0 0 0 4 24a19.937 19.937 0 0 0 5.858 14.142A19.938 19.938 0 0 0 24 44Z" />
                                            <path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12" />
                                        </g>
                                    </mask>
                                    <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)" />
                                </svg></a>
                        </div>    
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<script src="js/cms.js"></script>

@endsection

