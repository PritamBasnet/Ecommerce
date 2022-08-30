let discountBtn = document.querySelector(".discount_btn");
let discountWrap = document.querySelector(".discount-wrapper");
discountBtn.addEventListener("click",()=>{
    discountWrap.classList.toggle('d-active');
});
