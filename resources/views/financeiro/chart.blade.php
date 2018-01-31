@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>

<canvas id="fly01chart" width="200" height="100"></canvas>

<script>
var ctx = document.getElementById("fly01chart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["30/01/2018", "11/02/2018", "15/02/2018", "24/02/2018", "27/02/2018"],
        datasets: [{
            label: 'Recebimentos',
            data: [1081.62, 166.68, 0.00, 700.00, 0],
            backgroundColor: [
                '#4BC0C0',
                '#4BC0C0',
                '#4BC0C0',
                '#4BC0C0',
                '#4BC0C0',
            ],
            borderWidth: 1
          },{
            label: 'Pagamentos',
            data: [-1081.62, -166.68, 0.00, -700.00, 0],
            backgroundColor: [
                '#FF6384',
                '#FF6384',
                '#FF6384',
                '#FF6384',
                '#FF6384',
            ],
            borderWidth: 1,
          }]
    },
    options: {
        scales: {
            scales: {
            xAxes: [{
                stacked: true

            }],
            yAxes: [{
                stacked: true
            }]
        }
        }
    }
});
</script>
</div></div></div></div>

@endsection
