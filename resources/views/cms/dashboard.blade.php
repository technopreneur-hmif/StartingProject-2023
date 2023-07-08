@extends('layouts.main')


@section('container')
<link rel="stylesheet" href='css/cms.css' />
<section id="content-wrapper">
  <main>
    <ul class="box-info">
      <li>
        <div
          role="progressbar"
          aria-valuenow="{{ $presentasePemilih }}"
          aria-valuemin="0"
          aria-valuemax="100"
          style="--value: {{ $presentasePemilih }}"
        ></div>
        <span class="text">
          <p>Total Pemilih</p>
          <h3>{{ $TotalPemilih }}</h3>
        </span>
      </li>
      <li>
        <div
          role="progressbar"
          aria-valuenow="{{ $presentaseKandidat }}"
          aria-valuemin="0"
          aria-valuemax="100"
          style="--value: {{ $presentaseKandidat }}"
        ></div>
        <span class="text">
          <p>Total Kandidat</p>
          <h3>{{$JumlahKandidat }}</h3>
        </span>
      </li>
    </ul>
    <div class="chart">
      <figure class="pie-chart">
        <h2>Hasil Voting</h2>
        <figcaption>
          1<span style="color: #4e79a7"></span><br />
          2<span style="color: #f28e2c"></span><br />
          3<span style="color: #e15759"></span>
        </figcaption>
      </figure>
    </div>
  </main>
</section>
<script src="js/cms.js"></script>

@endsection







