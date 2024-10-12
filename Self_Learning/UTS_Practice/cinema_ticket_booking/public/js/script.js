const toggle = document.getElementById("theme");

toggle.addEventListener("change", function () {
    if (this.checked) {
        document.documentElement.classList.add("dark");
        localStorage.setItem("theme", "dark");
    } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
    }
});

if (localStorage.getItem("theme") === "dark") {
    toggle.checked = true;
    document.documentElement.classList.add("dark");
} else {
    toggle.checked = false;
    document.documentElement.classList.remove("dark");
}
