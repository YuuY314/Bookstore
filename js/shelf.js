const filterButtons = document.querySelectorAll(".filter_buttons");

filterButtons.forEach((filterButton) => {
    filterButton.addEventListener("click", () => {
        filterButtons.forEach(filterButton => filterButton.classList.remove("focus"));
        filterButton.classList.add("focus");
    })
})

const removeNotificationBtn = document.querySelector("#remove_notification");

removeNotificationBtn.addEventListener("click", (e) => {
    let notification = e.target.closest(".notification");

    if(notification){
        notification.classList.add("closing");

        setTimeout(() => {
            notification.remove();
        }, 300);
    };
});