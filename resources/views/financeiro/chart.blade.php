@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>

<canvas id="fly01chart" width="1182" height="591" class="chartjs-render-monitor" style="display: block; width: 1182px; height: 591px;"></canvas>

<script>
 var barChartData = {
            labels: ["31/01/2018", "11/02/2018", "15/02/2018", "24/02/2018", "2702/2018"],
            datasets: [{
                type: 'bar',
                label: 'Recebimentos',
                backgroundColor: "#4BC0C0",
                data: [
                    1081.66,
                    166.68,
                    0,
                    700.00,
                    0
                ]
            }, {
                type: 'bar',
                label: 'Pagamentos',
                backgroundColor: "#FF6384",
                data: [
                    -1200,
                    0,
                    -1200,
                    0,
                    -500
                ]
            }, {
                type: 'line',
                label: 'Saldo',
                backgroundColor: "#000000",
                borderWidth: 3,
                fill: false,
                data: [
                    -2776.68,
                    -2610,
                    -3810,
                    -3110,
                    -3610
                ]
            }]
        };

        

      
            var ctx = document.getElementById("fly01chart");
            var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    title:{
                        display:true,
                        text:"Fluxo de Caixa"
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
            });
</script>
</div></div></div></div>

@endsection
