function mostrarImagen(){
    // const fragment = new DocumentFragment();
    const overlay=document.createElement("div");

    overlay.classList.add("overlay");
    overlay.append(img2);
    const body=document.querySelector("body");
    body.appendChild(overlay);

    overlay.addEventListener("click",()=>{
        overlay.remove();
    })
}

const img=document.querySelector(".img");
const img2=img.cloneNode();
img.addEventListener("click",mostrarImagen);

