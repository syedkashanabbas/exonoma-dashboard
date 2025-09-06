$(function () {
    // Deposits vs Withdrawals Line Chart
    new Chart(document.getElementById('depositWithdrawChart'), {
        type: 'line',
        data: {
            labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
            datasets: [
                { label: 'Deposits', data: [500,700,400,600,800,750,900], borderColor:'#198754', backgroundColor:'rgba(25,135,84,0.2)', fill:true, tension:0.4 },
                { label: 'Withdrawals', data: [200,300,250,400,350,500,450], borderColor:'#dc3545', backgroundColor:'rgba(220,53,69,0.2)', fill:true, tension:0.4 }
            ]
        },
        options: { plugins:{legend:{position:'bottom'}} }
    });

    // Trade Volume Bar Chart
    new Chart(document.getElementById('tradeChart'), {
        type: 'bar',
        data: {
            labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
            datasets: [{ label:'Trades', data:[32,45,38,50,60,42,48], backgroundColor:'#0d6efd', borderRadius:6 }]
        },
        options: { plugins:{legend:{display:false}} }
    });

    // Plan Renewals Timeline
    new Chart(document.getElementById('renewalChart'), {
        type: 'line',
        data: {
            labels:['Week 1','Week 2','Week 3','Week 4'],
            datasets:[{ label:'Renewals', data:[3,5,4,6], borderColor:'#ffc107', backgroundColor:'rgba(255,193,7,0.2)', fill:true, tension:0.4 }]
        },
        options:{ plugins:{legend:{display:false}} }
    });

    // Payment Method Pie
    new Chart(document.getElementById('paymentChart'), {
        type: 'pie',
        data: {
            labels:['Bank Transfer','Credit Card','Crypto','PayPal'],
            datasets:[{ data:[45,30,15,10], backgroundColor:['#0d6efd','#6610f2','#20c997','#ffc107'] }]
        },
        options:{ plugins:{legend:{position:'bottom'}} }
    });

    // Live Activity Feed Simulation
    const feed = document.getElementById('activityFeed');
    if(feed){
        const activities = [
            "Deposit of $800 confirmed",
            "Withdrawal of $300 processed",
            "Trade executed: AAPL buy $1,200",
            "Plan Renewal: Compound Gold $2,500",
            "Deposit of $1,000 confirmed",
            "Trade executed: BTC sell $3,400",
            "Withdrawal of $750 requested"
        ];
        let index = 0;
        setInterval(() => {
            const time = new Date().toLocaleTimeString([], {hour:'2-digit', minute:'2-digit'});
            const li = document.createElement('li');
            li.className = "list-group-item";
            li.textContent = `[${time}] ${activities[index]}`;
            feed.prepend(li);
            if(feed.children.length > 8){ feed.removeChild(feed.lastChild); }
            index = (index + 1) % activities.length;
        }, 5000);
    }
});
