    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
        type: 'pie',
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
                backgroundColor: [
                    @foreach($HasilVoting as $kandidatId => $jumlahSuara)
                        '{{ $kandidatId }}',
                    @endforeach
                ],
            }],
        },
    });

