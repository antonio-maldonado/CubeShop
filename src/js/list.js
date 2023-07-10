function display(){
    const list=document.querySelector(".header__list");
    const head=document.querySelector(".header");
    head.classList.toggle("header2")
    list.classList.toggle("header__list--show");
    console.log("a");
}

const botonList=document.querySelector(".icc");

botonList.addEventListener("click",display);