document.addEventListener("DOMContentLoaded", () => {
    // Animate certificates on load
    document.querySelectorAll(".card img").forEach((img, i) => {
        img.style.opacity = 0;
        setTimeout(() => {
            img.style.transition = "0.8s";
            img.style.opacity = 1;
        }, i * 200);
    });

    // Highlight timeline items sequentially
    const timelineItems = document.querySelectorAll(".list-group-item");
    timelineItems.forEach((item, i) => {
        item.style.opacity = 0;
        setTimeout(() => {
            item.style.transition = "0.6s";
            item.style.opacity = 1;
        }, 600 + i * 300);
    });
});
