function buscar(str="",tip="",pag,pagi=1){
    var pag1=document.getElementById("pag").value;
    var parametros={buscar:str,
                    tipo:tip,
                    paginas:pag1,
                    pagina:pagi}
    $.ajax({
        data:parametros,
        type:"POST",
        url:"/cube/public/index.php/productos",
        dataType: 'html',
    }).done(function(resultado){
        $("#par").html(resultado);
    })
}
var buscar1=document.getElementById("buscar").value;
var tipo1=document.getElementById("tipo").value;
var pag1=document.getElementById("pag").value;
var pag2=document.getElementById("pagina").value;
var pag3=document.getElementById("pagina").value;
var pag4=document.getElementById("pag").value;

var parametros2={buscar:buscar1,
                tipo:tipo1,
                paginas:pag4,
                pagina:pag3};
    $.ajax({
        data:parametros2,
        type:"POST",
        url:"/cube/public/index.php/listado",
        dataType: 'html',
    }).done(function(resultado){
        $("#par").html(resultado);
})


$(document).on("keyup","#buscar",function(){
     buscar1=document.getElementById("buscar").value;
     tipo1=document.getElementById("tipo").value;
     pag1=document.getElementById("pag").value;
    pag2=document.getElementById("pagina").value;
    buscar(buscar1,tipo1,pag1,1);
});

$(document).on("change","#pag",function(){
     buscar1=document.getElementById("buscar").value;
     tipo1=document.getElementById("tipo").value;
    pag1=document.getElementById("pag").value;
    pag2=document.getElementById("pagina").value;
    buscar(buscar1,tipo1,pag1,1);
});

$(document).on("change","#pagina",function(){
     buscar1=document.getElementById("buscar").value;
    tipo1=document.getElementById("tipo").value;
    pag1=document.getElementById("pag").value;
     pag2=document.getElementById("pagina").value;
    buscar(buscar1,tipo1,pag1,1);
});

$(document).on("input","#tipo",function(){

 buscar1=document.getElementById("buscar").value;
    tipo1=document.getElementById("tipo").value;
     pag1=document.getElementById("pag").value;
     pag2=document.getElementById("pagina").value;
    buscar(buscar1,tipo1,pag1,1);
});

