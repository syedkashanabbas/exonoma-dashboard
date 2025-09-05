// Hours studied bar chart
const ctx1 = document.getElementById('hoursChart');
if(ctx1){
    new Chart(ctx1,{
        type:'bar',
        data:{
            labels:['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
            datasets:[{
                label:'Hours',
                data:[2,4,1,3,5,6,2],
                backgroundColor:'rgba(54,162,235,0.7)',
                borderRadius:6
            }]
        },
        options:{
            responsive:true,
            plugins:{ legend:{ display:false } }
        }
    });
}
