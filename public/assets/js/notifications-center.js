$(function () {
    // Radar Chart
    new Chart(document.getElementById('notifRadar'), {
        type: 'radar',
        data: {
            labels: ['Risk Alerts','Plan Updates','AI Alerts'],
            datasets: [{
                label: 'This Week',
                data: [67,92,86],
                backgroundColor:'rgba(13,110,253,0.2)',
                borderColor:'#0d6efd',
                pointBackgroundColor:'#0d6efd'
            },{
                label: 'Last Week',
                data: [55,70,60],
                backgroundColor:'rgba(220,53,69,0.2)',
                borderColor:'#dc3545',
                pointBackgroundColor:'#dc3545'
            }]
        },
        options:{ plugins:{legend:{position:'bottom'}} }
    });

    // Bubble Chart (Urgency Map)
    new Chart(document.getElementById('notifBubble'), {
        type:'bubble',
        data:{
            datasets:[{
                label:'Risk Alerts',
                data:[{x:2,y:9,r:15},{x:5,y:7,r:10},{x:7,y:4,r:20}],
                backgroundColor:'rgba(220,53,69,0.6)'
            },{
                label:'AI Alerts',
                data:[{x:3,y:3,r:12},{x:6,y:6,r:8},{x:9,y:5,r:18}],
                backgroundColor:'rgba(25,135,84,0.6)'
            }]
        },
        options:{ scales:{x:{beginAtZero:true},y:{beginAtZero:true}} }
    });

    // Stacked Area (Line with fill multiple datasets)
    new Chart(document.getElementById('notifArea'), {
        type:'line',
        data:{
            labels:['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
            datasets:[
                {label:'Risk', data:[5,7,6,9,12,10,8], borderColor:'#dc3545', backgroundColor:'rgba(220,53,69,0.2)', fill:true, tension:0.4, stack:'combined'},
                {label:'Plan', data:[6,9,8,10,14,12,11], borderColor:'#ffc107', backgroundColor:'rgba(255,193,7,0.2)', fill:true, tension:0.4, stack:'combined'},
                {label:'AI', data:[4,6,5,7,8,9,7], borderColor:'#20c997', backgroundColor:'rgba(32,201,151,0.2)', fill:true, tension:0.4, stack:'combined'}
            ]
        },
        options:{ plugins:{legend:{position:'bottom'}}, interaction:{mode:'index',intersect:false} }
    });
});
