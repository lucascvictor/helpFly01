<script>
     var barChartData = {
            labels: ["31/12/2017", "03/01/2018", "31/01/2018"],
            datasets: [{
                type: 'bar',
                label: 'Recebimentos',
                backgroundColor: "#4BC0C0",
                data: [
                    0,
                    600,
                    0
                ]
            }, {
                type: 'bar',
                label: 'Pagamentos',
                backgroundColor: "#FF6384",
                data: [
                    0,
                    -600,
                    0
                ]
            }, {
                type: 'line',
                label: 'Saldo Consolidado',
                backgroundColor: "#000000",
                borderWidth: 3,
                fill: false,
                data: [
                    -2658.34,
                    -2658.34,
                    -2658.34
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
                        text:"Saldo do Per�odo"
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
