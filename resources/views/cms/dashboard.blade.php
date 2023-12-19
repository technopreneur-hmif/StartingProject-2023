@extends('layouts.main')


@section('container')
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
      <div class="card-for-piechart" style="background-color: white; padding: 10px;   position: relative;
      width: 30%;
      margin: 0;
      border-radius: 12px;
      padding: 10px;">
        <h2>Hasil Voting</h2>
        <canvas id="pieChart"></canvas>
      </div>
    </div>
  </main>
</section>
<script src="/js/cms.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chroma-js@2.1.0/chroma.min.js"></script>

<script>
  var ctx = document.getElementById('pieChart').getContext('2d');

  var colors = [
      '#2f80ed',
      '#f28e2c',
      '#e15759',
      '#A2FF86'
  ];

  var pieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: [
              @foreach($HasilVoting as $kandidatId => $jumlahSuara)
                  'Kandidat {{ $kandidatId }}',
              @endforeach
          ],
          datasets: [{
              data: [
                  @foreach($HasilVoting as $kandidatId => $jumlahSuara)
                      {{ $jumlahSuara }},
                  @endforeach
              ],
              backgroundColor: colors.slice(0, @php count($HasilVoting) @endphp),
          }],
      },
      options: {
          cutoutPercentage: 50, // Persentase lubang di tengah (50% untuk setengah lingkaran)
          plugins: {
                    legend: {
                        display: true,
                        position: 'bottom', // Menampilkan label di bagian bawah
                    },
          },
      }
  });
</script>







@endsection







