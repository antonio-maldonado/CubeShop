

(function(){
    

    const sliders=[...document.querySelectorAll(".slider__body")];
    const arrowNext=document.querySelector("#next");
    const arrowBefore=document.querySelector("#before");
    document.querySelector('.slider__img').setAttribute('draggable', false);
    let value;
    var timeout=7000;
    var flag=false;
    var tim ;
    arrowNext.addEventListener("click",()=>changePosition(1));
    arrowBefore.addEventListener("click",()=>changePosition(-1));
    function esperar(){
        
        tim= setInterval(()=>changePosition(1),timeout);
    }
    
    async function esperar2(){
        return new Promise(resolve => setTimeout(timeout));
        
    }
    
    async function esp(){
        clearInterval(si);
        await esperar2();
    }

    if(flag==false){
        esperar();
        flag=true;
    }
    
    function changePosition(change){
   
        const currentElement=Number(document.querySelector(".slider__body--show").dataset.id);
        value=currentElement;
        value+=change;
       
        if(value===0 || value==sliders.length+1){
            value=value===0?sliders.length:1;
        }
        
        sliders[value-1].classList.toggle("slider__body--show");
        sliders[currentElement-1].classList.toggle("slider__body--show");
        // let nodes= sliders[currentElement-1].children;
        // let nodes2= sliders[value-1].children;
        // nodes[0].style.display="none";
        // nodes2[0].style.display=null;

        // sliders[currentElement-1].children[0].style.display="none";
        // sliders[value-1].children[0].style.display="block";


        clearInterval(tim);
        si=null;
        esperar();
        
      
    }
    
})();


