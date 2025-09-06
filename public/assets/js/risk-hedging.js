$(function () {
    // Exposure Bar (stacked horizontal)
    new Chart(document.getElementById('exposureBar'), {
        type: 'bar',
        data: {
            labels: ['Equities','Crypto','Commodities','Bonds'],
            datasets: [{
                label: 'Exposure %',
                data: [40, 35, 15, 10],
                backgroundColor: ['#0d6efd','#ffc107','#20c997','#6c757d'],
                borderRadius: 8
            }]
        },
        options: { indexAxis: 'y', plugins:{legend:{display:false}}, scales:{x:{max:100}} }
    });

    // VaR Gauge
    new Chart(document.getElementById('varGauge'), {
        type: 'doughnut',
        data: { labels:['VaR','Remaining'], datasets:[{data:[15,85], backgroundColor:['#dc3545','#e9ecef'], cutout:'75%'}] },
        options: { plugins:{legend:{display:false}} }
    });

    // Drawdown
    new Chart(document.getElementById('drawdownChart'), {
        type: 'line',
        data: { labels:['Mon','Tue','Wed','Thu','Fri'],
            datasets:[{ data:[0,-2,-3,-1,-4], borderColor:'#dc3545', backgroundColor:'rgba(220,53,69,0.2)', tension:0.4, fill:true }]
        },
        options:{ plugins:{legend:{display:false}} }
    });

    // Correlation Heatmap (simulate with stacked bars)
    new Chart(document.getElementById('correlationHeatmap'), {
        type: 'bar',
        data: {
            labels:['BTC vs ETH','BTC vs AAPL','ETH vs AAPL','AAPL vs Gold'],
            datasets:[{
                data:[0.92,0.4,0.55,0.2],
                backgroundColor:['#198754','#0d6efd','#ffc107','#6610f2']
            }]
        },
        options:{ plugins:{legend:{display:false}}, scales:{y:{max:1,min:0}} }
    });

    // Hedge Effectiveness
    new Chart(document.getElementById('hedgeChart'), {
        type: 'bar',
        data: {
            labels:['Before Hedge','After Hedge'],
            datasets:[{
                data:[-12,-4],
                backgroundColor:['#dc3545','#198754']
            }]
        },
        options:{ plugins:{legend:{display:false}}, scales:{y:{beginAtZero:true}} }
    });
});
