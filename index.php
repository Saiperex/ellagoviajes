<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/c8bf7962f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/ellagoviaj.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Lago Viajes</title>
</head>
<body>
    <script>(function()
        {
            var d = document, s = d.getElementsByTagName('script')[0], js = d.getElementById('olap-jssdk');
            if (js) return;
            js = d.createElement('SCRIPT');
            js.id = 'olap-jssdk';
            js.src = '//plus.ola.com.ar/embed.js?tok=dae79f2e092af2728e16e13da8d5c81b';
            s.parentNode.insertBefore(js, s);
        }())
    </script>
    <?php include('header.php')?>;
    <main class="principal">
        <div id="olap-search" data-olap-layout="1" data-olap-url="" data-olap-tabs="7"></div>
        <div id="olap-result" data-olap-count="10" data-olap-width="750"></div>
        <section class="contacto">
            <form action="" method="post">
                <h2>Contacto</h2>
                <label for="Nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <label for="correo">Correo Electronico</label>
                <input type="email" name="correo" id="correo">
                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" id="telefono">
                <fieldset>
                    <legend for="modo">Como prefieres ser contactado</legend>
                    <legend><input type="radio" name="whatsapp" id="whatsapp">Whatsapp</legend>
                    <legend><input type="radio" name="mail" id="mail">Correo</legend>
                    <legend><input type="radio" name="llamada" id="llamada">Llamada</legend>
                </fieldset>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" style="resize: none;"></textarea>
                <input type="submit" value="enviar consulta" name='enviar'>
            </form>
        </section>
    </main>
</body>
</html>