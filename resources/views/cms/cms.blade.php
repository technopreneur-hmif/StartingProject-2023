@extends('layouts.main')


@section('container')
<section id="content-wrapper">
  <main>
    <ul class="box-info">
      <li>
        <div
          role="progressbar"
          aria-valuenow="67"
          aria-valuemin="0"
          aria-valuemax="100"
          style="--value: 67"
        ></div>
        <span class="text">
          <p>Total Pemilih</p>
          <h3>1020</h3>
        </span>
      </li>
      <li>
        <div
          role="progressbar"
          aria-valuenow="67"
          aria-valuemin="0"
          aria-valuemax="100"
          style="--value: 25"
        ></div>
        <span class="text">
          <p>Total Kandidat</p>
          <h3>2834</h3>
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
@endsection



  <script src="../../js/cms.js"></script>



