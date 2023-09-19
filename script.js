// const searchBar = document.getElementById("search");
// const navbar = document.querySelector(".navbar");
// let stopScroll = 0

// window.addEventListener('scroll', (e) => {
//     var currentScrollY = window.scrollY;
//     if (currentScrollY > stopScroll) {
//         navbar.classList.add("hidden")
//     }else{
//         navbar.classList.remove("hidden")
//     }
//     stopScroll = currentScrollY
    
// });

const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerInk = document.querySelector(".register-ink");

registerInk.addEventListener("click", () => {
    wrapper.classList.add('active');
});

loginLink.addEventListener("click", () => {
    wrapper.classList.remove('active');
});
