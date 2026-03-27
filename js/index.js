const body = document.querySelector("body");
const toggleThemeBtn = document.querySelector("#toggle_theme");

toggleThemeBtn.addEventListener("click", () => {
    body.classList.toggle("dark");

    if(body.classList.contains("dark")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
});

if(localStorage.getItem("theme") === "dark") {
    body.classList.add("dark");
}