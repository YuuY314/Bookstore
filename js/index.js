const body = document.querySelector("body");
const toggleThemeBtn = document.querySelector("#toggle_theme");
const headerLogo = document.querySelector("#header_logo");
const footerLogo = document.querySelector("#footer_logo");

function applyTheme(theme) {
    if (theme === "dark") {
        body.classList.add("dark");
        headerLogo.src = "img/white_logo.png";
        footerLogo.src = "img/black_logo.png";
    } else {
        body.classList.remove("dark");
        headerLogo.src = "img/black_logo.png";
        footerLogo.src = "img/white_logo.png";
    }
}

toggleThemeBtn.addEventListener("click", () => {
    const isDark = body.classList.toggle("dark");

    const theme = isDark ? "dark" : "light";
    localStorage.setItem("theme", theme);

    applyTheme(theme);
});

const savedTheme = localStorage.getItem("theme") || "light";
applyTheme(savedTheme);