
<main class="producto">

    <div class="producto__body">
        <div class="producto__img">
            <figure>
                <img src="/cube/public/imagenes/<?=$producto->imagen?>" class="img" alt="Imagen cubo">
            </figure>
        </div>
        <div class="producto__info">
            <h1><?=$producto->nombreProducto?></h1>
            <p class="ta"><?=$producto->tipo?></p>
            <p class="precio ta"><?=$producto->precio?></p>
            <a class="boton_compra azul" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="inv icon icon-tabler icon-tabler-shopping-cart-plus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l6 .429m7.138 6.573l-.143 1h-13" />
                    <path d="M15 6h6m-3 -3v6" />
                </svg>Añadir a carrito
            </a>

            <a class="boton_compra verde" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-bag" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                    <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                </svg>Comprar ahora
            </a>
        </div>
    </div>

    <div class="descripcion">
        <p><?=$producto->descripcion?></p>
    </div>

    <div class="detalles">
        <p><span>Tipo:</span></p>
        <p><?=$producto->tipo?></p>
        <p><span>Version:</span></p>
        <p><?=$producto->version?></p>
        <p><span>Marca:</span></p>
        <p><?=$producto->pBrand?></p>
        <p><span>Imanes:</span></p>
        <p><?=$producto->pMagnets?></p>
        <p><span>Tamaño:</span></p>
        <p><?=$producto->pSize?>mm</p>
        <p><span>Peso:</span></p>
        <p><?=$producto->pWeight?>gr</p>
        <p><span>Fecha de lanzamiento:</span></p>
        <p><?=$producto->pReleased?></p>
    </div>
</main>
