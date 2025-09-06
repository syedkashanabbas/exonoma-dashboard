$(function () {
    // Compliance Trend Line
    new Chart(document.getElementById('complianceChart'), {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep'],
            datasets: [{
                label: 'Compliance %',
                data: [92,93,95,94,96,97,98,98,99],
                borderColor:'#0d6efd',
                backgroundColor:'rgba(13,110,253,0.2)',
                fill:true,
                tension:0.4
            }]
        },
        options:{ plugins:{legend:{display:false}} }
    });

    // Export Activity Bar
    new Chart(document.getElementById('exportChart'), {
        type:'bar',
        data:{
            labels:['Mon','Tue','Wed','Thu','Fri'],
            datasets:[{ label:'Exports', data:[3,5,2,6,4], backgroundColor:'#20c997', borderRadius:6 }]
        },
        options:{ plugins:{legend:{display:false}} }
    });
});
