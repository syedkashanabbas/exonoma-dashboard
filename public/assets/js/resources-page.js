document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("resourceSearch");
    const filterSelect = document.getElementById("resourceFilter");
    const resourceCards = document.querySelectorAll(".resource-card");

    // Search
    searchInput.addEventListener("keyup", function () {
        const query = this.value.toLowerCase();
        resourceCards.forEach(card => {
            card.style.display =
                card.innerText.toLowerCase().includes(query) ? "block" : "none";
        });
    });

    // Filter
    filterSelect.addEventListener("change", function () {
        const value = this.value;
        resourceCards.forEach(card => {
            card.style.display =
                value === "all" || card.dataset.course === value ? "block" : "none";
        });
    });
});
