$(function () {
    // Radar Chart
    new Chart(document.getElementById('radarChart'), {
        type: 'radar',
        data: {
            labels: ['BTC', 'ETH', 'AAPL', 'TSLA', 'AMZN'],
            datasets: [{
                label: 'Signal Strength',
                data: [90, 75, 60, 85, 70],
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13,110,253,0.2)',
                pointBackgroundColor: '#0d6efd'
            }]
        },
        options: { scales: { r: { angleLines: { color: '#ddd' } } } }
    });

    // Polar Area Chart
    new Chart(document.getElementById('polarChart'), {
        type: 'polarArea',
        data: {
            labels: ['Bullish', 'Bearish', 'Neutral'],
            datasets: [{ data: [60, 25, 15], backgroundColor: ['#198754', '#dc3545', '#ffc107'] }]
        },
        options: { scales: { r: { ticks: { display: false } } } }
    });

    // Bubble Chart
    new Chart(document.getElementById('bubbleChart'), {
        type: 'bubble',
        data: {
            datasets: [
                { label: 'BTC', data: [{x: 30, y: 90, r: 15}], backgroundColor: '#f39c12' },
                { label: 'ETH', data: [{x: 50, y: 80, r: 12}], backgroundColor: '#8e44ad' },
                { label: 'AAPL', data: [{x: 20, y: 70, r: 10}], backgroundColor: '#0d6efd' }
            ]
        },
        options: { scales: { x: { title: { display: true, text: 'Volatility' } }, y: { title: { display: true, text: 'Confidence %' } } } }
    });

    // Gauge Chart (simulate with doughnut)
    new Chart(document.getElementById('gaugeChart'), {
        type: 'doughnut',
        data: {
            labels: ['Accuracy', 'Remaining'],
            datasets: [{ data: [82, 18], backgroundColor: ['#198754', '#e9ecef'], cutout: '80%' }]
        },
        options: { plugins: { legend: { display: false }, tooltip: { enabled: false } } }
    });

    // Heatmap simulation (stacked bar to fake intensity)
    new Chart(document.getElementById('heatmapChart'), {
        type: 'bar',
        data: {
            labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
            datasets: [
                { label: 'Buy', data: [5, 8, 6, 7, 9, 4, 3], backgroundColor: 'rgba(25,135,84,0.7)', stack: 'stack1' },
                { label: 'Sell', data: [2, 4, 3, 5, 6, 7, 8], backgroundColor: 'rgba(220,53,69,0.7)', stack: 'stack1' }
            ]
        },
        options: { responsive: true, plugins: { legend: { position: 'bottom' } }, scales: { x: { stacked: true }, y: { stacked: true } } }
    });
});
