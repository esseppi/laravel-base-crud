require("./bootstrap");
// const button = document.querySelector(".deleteButton");
// var form = document.querySelector(".deleteForm");

// document.querySelectorAll(".deleteButton").forEach((button) => {
//     button.addEventListener("click", function () {
//         form.action = confirmationForm.dataset.base + "/" + this.dataset.id;
//     });
// });
const button = document.querySelectorAll(".deleteButton");
const form = document.querySelector(".deleteForm");

button.forEach((btn) => {
    btn.addEventListener("click", function () {
        form.action = confirmationForm.dataset.base + "/" + this.dataset.id;
    });
});
