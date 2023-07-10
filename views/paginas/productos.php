   
   <h1 class="mt fw">Productos</h1>
    <div class="search" >
        <label for="pag">Por página:</label>
        <select name="pag" id="pag" name="pag" >
            <option  value="9" <?=$_SESSION["num"]==9 ? "selected":""?> >9</option>  
            <option value="15"  <?=$_SESSION["num"]==15 ? "selected":""?> >15</option>
        </select>
        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo" value="" selected>
            <option value="">--Seleccione--</option>
            <option value="2x2" <?=$_SESSION["tipo"]=="2x2" ? "selected":""?> >2x2</option>
            <option value="3x3" <?=$_SESSION["tipo"]=="3x3" ? "selected":""?> >3x3</option>
            <option value="4x4" <?=$_SESSION["tipo"]=="4x4" ? "selected":""?>>4x4</option>
            <option value="5x5" <?=$_SESSION["tipo"]=="5x5" ? "selected":""?>>5x5</option>
            <option value="6x6" <?=$_SESSION["tipo"]=="6x6" ? "selected":""?>>6x6</option>
            <option value="7x7" <?=$_SESSION["tipo"]=="7x7" ? "selected":""?>>7x7</option>
            <option value="Megaminx" <?=$_SESSION["tipo"]=="Megaminx" ? "selected":""?>>Megaminx</option>
            <option value="Pyraminx"<?=$_SESSION["tipo"]=="Pyraminx" ? "selected":""?>>Pyraminx</option>
            <option value="Square-1" <?=$_SESSION["tipo"]=="Square-1" ? "selected":""?>>Square-1</option>
            <option value="Skewb" <?=$_SESSION["tipo"]=="Skewb" ? "selected":""?>>Skewb</option>
            <option value="Timer" <?=$_SESSION["tipo"]=="Timer" ? "selected":""?>>Timer</option>
            <option value="Lubricante" <?=$_SESSION["tipo"]=="Lubricante" ? "selected":""?>>Lubricante</option>
        </select>
        <input type="hidden" name="pagina" id="pagina" value="<?=$pagina?>">
        <label for="buscar">Buscar:</label>
        <input type="text" name="buscar" id="buscar" value="<?=$_SESSION['buscar']?>" class="buscar" placeholder="Cubo de rubik">
    </div>
 

    <p id="par">
    
</p>

