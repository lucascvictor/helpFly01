<script>
    
     var barChartData = {
        
            labels: ["{{ $billToPay->duedate }}"],
            datasets: [ {
                type: 'bar',
                label: 'Pagamentos',
                backgroundColor: "#FF6384",
                data: [
                    <?php $totalChartPay = 0; ?>
                    @if(!isSet($pagina[3]) || !$pagina[3] > 0)
                        @foreach($billsToPay as $billToPay)
                         <?php $totalChartPay += $billToPay->value; ?>
                        @endforeach
                        {{ $totalChartPay }}
                    @else
                        {{ $totalGeral }}
                    @endif

                ]
            },{
                type: 'bar',
                label: 'Recebimentos',
                backgroundColor: "#4BC0C0",
                data: [
                    <?php $totalChartReceive = 0; ?>
                    @if(!isSet($pagina[3]) || !$pagina[3] > 0)
                        @foreach($billsToPay as $billToPay)
                         <?php $totalChartReceive += $billToReceive->value; ?>
                        @endforeach
                        {{ $totalChartReceive }}
                    @else
                        {{ $totalGeral }}
                    @endif
                ]
            },{
                type: 'line',
                label: 'Saldo Consolidado',
                backgroundColor: "#000000",
                borderWidth: 3,
                fill: false,
                data: [
                    @if(!isSet($pagina[3]) || !$pagina[3] > 0)
                        {{ $totalBank[$bank->id] }}
                    @else
                        {{ $totalGeral }}
                    @endif
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
                    text:"Saldo do Período - {{ $bank->nomeBanco }}"
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
