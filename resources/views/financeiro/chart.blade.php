@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>

<canvas id="fly01chart" width="1182" height="591" class="chartjs-render-monitor" style="display: block; width: 1182px; height: 591px;"></canvas>

<script>
<?php $saldo=2000; ?>
 var barChartData = {
            labels: ["31/01/2018", "11/02/2018", "15/02/2018", "24/02/2018", "2702/2018"],
            datasets: [{
                type: 'bar',
                label: 'Recebimentos',
                backgroundColor: "#4BC0C0",
                data: [
                    <?=$rec1=rand(2000, 5000);?>,
                    <?=$rec2=rand(2000, 5000);?>,
                    <?=$rec3=rand(2000, 5000);?>,
                    <?=$rec4=rand(2000, 5000);?>,
                    <?=$rec5=rand(2000, 5000);?>
                ]
            }, {
                type: 'bar',
                label: 'Pagamentos',
                backgroundColor: "#FF6384",
                data: [
                    <?=$pag1=-rand(0, 2000);?>,
                    <?=$pag2=-rand(0, 2000);?>,
                    <?=$pag3=-rand(0, 2000);?>,
                    <?=$pag4=-rand(0, 2000);?>,
                    <?=$pag5=-rand(0, 2000);?>
                ]
            }, {
                type: 'line',
                label: 'Saldo',
                backgroundColor: "#000000",
                borderWidth: 3,
                fill: false,
                data: [
                    <?php $saldo1 = $saldo + $rec1 - $pag1; ?>
                    <?=$saldo1?>,
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
