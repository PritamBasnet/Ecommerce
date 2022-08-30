let featuredBox = document.querySelectorAll(".featured-wrapper");
let line = document.querySelectorAll(".line");
let overlay = document.querySelectorAll(".overlay-featured");
let featuredBtn = document.querySelectorAll(".featured-a");
for(const box in featuredBox)
{
    featuredBox[box].addEventListener("mouseover",()=>{
        featuredBtn[box].classList.toggle('a-active');
        line[box].classList.toggle("line-active");
        overlay[box].style.display = "block";
    });
    featuredBox[box].addEventListener("mouseout",()=>{
        featuredBtn[box].classList.remove('a-active');
        line[box].classList.remove("line-active");
        overlay[box].style.display = "none";
    });
}

