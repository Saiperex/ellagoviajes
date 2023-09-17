<header class="cabecera">
        <img src="img/ellagoviaj.jpg" alt="El LagoViajes.jpg">
        <ul class='slider'>
            <li><a href="index.php"><i class="fa-solid fa-house-chimney"></i>Inicio</a></li>
            <li><a href="contacto.php"><i class="fa-solid fa-envelope-circle-check"></i>contacto</a></li>
        </ul>
        <div class="boton">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
</header>
<script>
    document.querySelector('.boton').addEventListener('click',function()
    {
        document.querySelector('.slider').classList.toggle('slide')
    }
    )
</script>