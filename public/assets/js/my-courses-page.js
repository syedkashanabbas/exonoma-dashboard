document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const courseCards = document.querySelectorAll(".course-card");
    const searchInput = document.getElementById("courseSearch");
    const gridBtn = document.getElementById("gridView");
    const listBtn = document.getElementById("listView");
    const coursesWrapper = document.getElementById("coursesWrapper");

    // Filter
    filterButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const filter = btn.getAttribute("data-filter");
            courseCards.forEach(card => {
                card.style.display =
                    filter === "all" || card.dataset.status === filter
                        ? "block"
                        : "none";
            });
        });
    });

    // Search
    searchInput.addEventListener("keyup", function () {
        const value = this.value.toLowerCase();
        courseCards.forEach(card => {
            card.style.display =
                card.innerText.toLowerCase().includes(value) ? "block" : "none";
        });
    });

    // Grid / List toggle
    gridBtn.addEventListener("click", () => {
        coursesWrapper.classList.remove("list-view");
    });
    listBtn.addEventListener("click", () => {
        coursesWrapper.classList.add("list-view");
    });
});
