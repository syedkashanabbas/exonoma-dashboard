document.addEventListener("DOMContentLoaded", () => {
    // Highlight rows dynamically based on score
    document.querySelectorAll("tbody tr").forEach(row => {
        const scoreText = row.children[2].innerText.replace("%", "");
        const score = parseInt(scoreText);
        if (score >= 80) {
            row.style.backgroundColor = "#e8fff3"; // green tint
        } else if (score < 60) {
            row.style.backgroundColor = "#ffe8e8"; // red tint
        } else {
            row.style.backgroundColor = "#fffbe8"; // yellow tint
        }
    });
});
