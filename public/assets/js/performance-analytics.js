$(function () {
    // YTD Growth Line
    new Chart(document.getElementById('growthChart'), {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep'],
            datasets: [{
                label: 'Portfolio Growth %',
                data: [2,4,6,8,12,14,16,17,18],
                borderColor:'#0d6efd',
                backgroundColor:'rgba(13,110,253,0.2)',
                fill:true,
                tension:0.4
            }]
        },
        options:{ plugins:{legend:{display:false}} }
    });

    // Volatility Gauge (doughnut style)
    new Chart(document.getElementById('volatilityGauge'), {
        type:'doughnut',
        data:{
            labels:['Volatility','Remaining'],
            datasets:[{ data:[28,72], backgroundColor:['#ffc107','#e9ecef'], cutout:'75%' }]
        },
        options:{ plugins:{legend:{display:false}} }
    });

    // Benchmark Comparison
    new Chart(document.getElementById('benchmarkChart'), {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep'],
            datasets: [
                { label:'Portfolio', data:[2,4,6,8,12,14,16,17,18], borderColor:'#0d6efd', tension:0.4 },
                { label:'S&P 500', data:[1,2,3,4,5,7,8,9,10], borderColor:'#dc3545', tension:0.4 }
            ]
        },
        options:{ plugins:{legend:{position:'bottom'}} }
    });

    // Sharpe Ratio Trend
    new Chart(document.getElementById('sharpeChart'), {
        type:'bar',
        data:{
            labels:['Q1','Q2','Q3'],
            datasets:[{ label:'Sharpe Ratio', data:[1.2,1.5,1.8], backgroundColor:'#20c997', borderRadius:6 }]
        },
        options:{ plugins:{legend:{display:false}} }
    });

    // Asset Performance Bar
    new Chart(document.getElementById('assetBarChart'), {
        type:'bar',
        data:{
            labels:['Tesla','Apple','Bitcoin','Gold','Amazon'],
            datasets:[{
                data:[42,-3,28,10,15],
                backgroundColor:['#ffc107','#dc3545','#0d6efd','#20c997','#6610f2']
            }]
        },
        options:{ plugins:{legend:{display:false}}, scales:{y:{beginAtZero:true}} }
    });
});
