let cartOpen = document.querySelector(".cart_open");
let cartClose = document.querySelector(".cart_close");
let cartWrapper = document.querySelector(".cart-wrapper");
cartOpen.addEventListener("click", function (){
    cartWrapper.style.display = "block";
});
cartClose.addEventListener("click", function (){
    cartWrapper.style.display = "none";
});


// sidebar
let hamBurger = document.querySelector(".ham-burger");
let sideBar = document.querySelector("#sidebar");
hamBurger.addEventListener("click",()=>{
    sideBar.classList.toggle('sidebar-active');
    hamBurger.classList.toggle('ham-active');
});
