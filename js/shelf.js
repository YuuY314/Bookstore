const filterButtons = document.querySelectorAll(".filter_buttons");

filterButtons.forEach((filterButton) => {
    filterButton.addEventListener("click", () => {
        filterButtons.forEach(filterButton => filterButton.classList.remove("focus"));
        filterButton.classList.add("focus");
    })
})