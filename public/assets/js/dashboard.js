document.addEventListener("DOMContentLoaded", () => {
    const ctx = document.getElementById("portfolioChart").getContext("2d");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug"],
            datasets: [{
                label: "Portfolio Value",
                data: [100000,104000,108500,111000,115000,118500,120000,120500],
                backgroundColor: "rgba(54, 162, 235, 0.6)",
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { ticks: { color: "#555" }, grid: { color: "#eee" } },
                x: { ticks: { color: "#555" }, grid: { color: "#f5f5f5" } }
            }
        }
    });
});
