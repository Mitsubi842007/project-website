const menuButton = document.querySelector("#btn");
const sidebar = document.querySelector(".sidebar");
const searchButton = document.querySelector(".bx-search");
const dropbarButton = document.querySelector(".dropbar_button");

const blossom = document.querySelector(".cherry-blossom");

if (blossom) {
    for (let index = 0; index < 40; index += 1) {
        const petal = document.createElement("span");
        petal.className = "petal";
        petal.style.setProperty("--petal-x", `${Math.random() * 100}%`);
        petal.style.setProperty("--petal-delay", `${Math.random() * -12}s`);
        petal.style.setProperty("--petal-duration", `${7 + Math.random() * 5}s`);
        petal.style.setProperty("--petal-drift", `${40 + Math.random() * 100}px`);
        petal.style.setProperty("--petal-size", `${7 + Math.random() * 7}px`);
        blossom.appendChild(petal);
    }
}

if (menuButton && sidebar) {
    menuButton.onclick = function () {
        sidebar.classList.toggle("active");
    };
}

if (searchButton && sidebar) {
    searchButton.onclick = function () {
        sidebar.classList.toggle("active");
    };
}

