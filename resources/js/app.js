require("./bootstrap");
// const button = document.querySelector(".deleteButton");
const form = document.querySelector(".deleteForm");

document.querySelectorAll(".deleteButton").forEach((button) => {
    button.addEventListener("click", function () {
        form.action = confirmationForm.dataset.base + "/" + this.dataset.id;
    });
});
