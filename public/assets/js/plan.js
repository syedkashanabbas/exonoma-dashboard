$(document).ready(function () {
    // Tabs
    $('#planTabs .nav-link').click(function (e) {
        e.preventDefault();
        $('#planTabs .nav-link').removeClass('active');
        $(this).addClass('active');
    });

    // Fake Edit/Delete actions
    // $('.btn-outline-secondary').click(function () {
    //     alert('Edit plan feature coming soon!');
    // });

    // $('.btn-outline-danger').click(function () {
    //     if (confirm('Are you sure you want to delete this plan?')) {
    //         $(this).closest('.plan-card').fadeOut();
    //     }
    // });

    // ROI Chart
    const ctx = document.getElementById('roiChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Average ROI %',
                    data: [12, 13, 14, 15, 16, 14],
                    borderColor: '#0d6efd',
                    backgroundColor: 'rgba(13,110,253,0.1)',
                    tension: 0.4,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                }
            }
        });
    }
});
