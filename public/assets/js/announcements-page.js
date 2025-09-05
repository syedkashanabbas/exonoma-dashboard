document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".announcement-card");

    // Filter functionality
    filterButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const category = btn.dataset.filter;
            cards.forEach(card => {
                card.style.display =
                    category === "all" || card.dataset.category === category
                        ? "block"
                        : "none";
            });
        });
    });

    // Countdown for Hackathon event
    const countdownEl = document.getElementById("countdown");
    if (countdownEl) {
        const eventDate = new Date("2025-09-30T09:00:00").getTime();

        setInterval(() => {
            const now = new Date().getTime();
            const diff = eventDate - now;

            if (diff <= 0) {
                countdownEl.innerText = "Ongoing!";
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));

            countdownEl.innerText = `${days}d ${hours}h ${mins}m`;
        }, 1000);
    }
});
