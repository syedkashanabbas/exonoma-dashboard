document.addEventListener("DOMContentLoaded", () => {
    // Hours studied line chart
    new Chart(document.getElementById("hoursChart"), {
        type: "line",
        data: {
            labels: ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],
            datasets: [{
                label: "Hours",
                data: [2, 4, 3, 6, 5, 7, 8],
                borderColor: "#667eea",
                backgroundColor: "rgba(102,126,234,0.2)",
                fill: true,
                tension: 0.4
            }]
        },
        options: { plugins:{legend:{display:false}} }
    });

    // Quiz scores bar chart
    new Chart(document.getElementById("quizChart"), {
        type: "bar",
        data: {
            labels: ["Python","Web Dev","Data Science","SQL"],
            datasets: [{
                label: "Scores",
                data: [85, 70, 60, 95],
                backgroundColor: ["#36d1dc","#5b86e5","#ff9a9e","#fad0c4"],
                borderRadius: 6
            }]
        },
        options: { plugins:{legend:{display:false}} }
    });

    // Consistency streak doughnut chart
    new Chart(document.getElementById("streakChart"), {
        type: "doughnut",
        data: {
            labels: ["Completed","Remaining"],
            datasets: [{
                data: [6, 1],
                backgroundColor: ["#ffb347", "#e0e0e0"]
            }]
        },
        options: {
            cutout: "70%",
            plugins: { legend: { display: false } }
        }
    });

    // Skill growth radar chart
    new Chart(document.getElementById("skillsChart"), {
        type: "radar",
        data: {
            labels: ["Coding","Data","Web","AI","Communication"],
            datasets: [{
                label: "Growth",
                data: [80, 65, 90, 50, 70],
                borderColor: "#764ba2",
                backgroundColor: "rgba(118,75,162,0.2)",
                pointBackgroundColor: "#764ba2"
            }]
        },
        options: { scales:{r:{beginAtZero:true}} }
    });
});
