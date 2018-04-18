<script>
    
     var barChartData = {
            <?php $intervalo = 0;?>
            @if($pagina == '/index.php/financeiro/fluxodecaixa/day')
                <?php $intervalo = 0;?>
            @elseif($pagina == '/index.php/financeiro/fluxodecaixa/week')
                <?php $intervalo = 4;?>
            @elseif($pagina == '/index.php/financeiro/fluxodecaixa')
                <?php $intervalo = 4;?>
            @endif
            
            <?php $i = 0; ?>
            labels: [@while($i <= $intervalo)
                      "{{ date("d/m/y") }}",
                    <?php $i++; ?>
                     @endwhile],
           datasets: [{
                type: 'line',
                label: 'Saldo',
                backgroundColor: "#000000",
                borderWidth: 3,
                borderColor: "#000000",
                fill: false,
                data: [
					<?php $i = 0; ?>
                    @while($i <= $intervalo)
                    {{ $vSaldo[$i] }},
					<?php $i++; ?>
                    @endwhile
                ]
            },
            {
                type: 'bar',
                label: 'Recebimentos',
                backgroundColor: "#4BC0C0",
                data: [
					<?php $i = 0; ?>
                    @while($i <= $intervalo)
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
                    @while($i <= $intervalo)
                    {{ $vPag[$i] }},
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