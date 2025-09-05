document.addEventListener("DOMContentLoaded", () => {
    const darkSwitch = document.getElementById("darkModeSwitch");

    if (darkSwitch) {
        darkSwitch.addEventListener("change", () => {
            if (darkSwitch.checked) {
                document.body.style.background = "#1e1e2f";
                document.body.style.color = "#1e1e2f";
            } else {
                document.body.style.background = "";
                document.body.style.color = "";
            }
        });
    }
});
