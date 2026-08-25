const menuButton = document.querySelector("#btn");
const sidebar = document.querySelector(".sidebar");
const searchButton = document.querySelector(".bx-search");

menuButton.onclick = function () {
    sidebar.classList.toggle("active");
};

searchButton.onclick = function () {
    sidebar.classList.toggle("active");
};
