document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".discussion-card");

    // Filter discussions
    filterButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const filter = btn.dataset.filter;
            cards.forEach(card => {
                card.style.display =
                    filter === "all" || card.dataset.category === filter
                        ? "block"
                        : "none";
            });
        });
    });
});
