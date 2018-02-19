<script>
     var barChartData = {
            labels: ["31/01/2018", "11/02/2018", "15/02/2018", "24/02/2018", "27/02/2018"],
           datasets: [{
                type: 'bar',
                label: 'Recebimentos',
                backgroundColor: "#4BC0C0",
                data: [
					<?php $i = 0; ?>
                    @while($i <= 4)
                    {{ $vRec[$i] }},
					<?php $i++; ?>
                    @endwhile
                ]
            }, {
                type: 'bar',
                label: 'Pagamentos',
                backgroundColor: "#FF6384",
                data: [
					<?php $i = 0; ?>
                    @while($i <= 4)
                    {{ $vPag[$i] }},
					<?php $i++; ?>
                    @endwhile
                ]
            }, {
                type: 'line',
                label: 'Saldo',
                backgroundColor: "#000000",
                borderWidth: 3,
                borderColor: "#000000",
                fill: false,
                data: [
					<?php $i = 0; ?>
                    @while($i <= 4)
                    {{ $vSaldo[$i] }},
					<?php $i++; ?>
                    @endwhile
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
                    },
                    legend: {
                        position: 'bottom',
                    }
                }
            });
</script>