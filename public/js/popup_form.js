const crossBtn = document.querySelectorAll(".crossBtn");
const form = document.querySelectorAll(".pop_up_form");

crossBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        form.forEach((form) => {
            form.style.display = "none";
        });
    });
});



