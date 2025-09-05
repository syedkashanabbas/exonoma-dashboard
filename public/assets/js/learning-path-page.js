document.addEventListener("DOMContentLoaded", () => {
    // Animate milestones on load
    gsap.from(".milestone", {
        opacity: 0,
        y: 100,
        duration: 1,
        stagger: 0.3,
        ease: "power3.out"
    });

    // Animate progress bars
    gsap.from(".progress-bar", {
        width: 0,
        duration: 1,
        stagger: 0.2,
        ease: "power2.out",
        delay: 0.5
    });
});
