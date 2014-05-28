<section >
    <div class="download">
        <span>¿Qué es una rueda de negocios?</span>
        <span class="orange">Jornadas preparatorias</span>
    </div>
    <div class="download download-contend">
        <figure><img src="images/human-circulart.png" alt=""/></figure>
        <p class="p-download">DESCARGA</p>
        <p class="p">la convocatoria completa</p>
    </div>
</section>
<section id="<?php echo($url) ?>">
    <h2 class="<?php echo($url) ?>">circulart</h2>
    <article>

        <h3>Circulart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx</h3>
        <p>Circulart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx </p>

    </article>
    <h2 class="register">registrarse</h2>
    <canvas id="myCanvas"></canvas>
</section>


<script>


        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');
        doResize();
        window.onresize=function() { doResize(); };
         function doResize()
        {

            context.canvas.width = window.innerWidth-20;
            context.beginPath();
            context.moveTo(0, 10);
            context.lineTo(500, 10);
            context.lineTo(1020, 80);
            context.lineTo(window.innerWidth-20, 20);

            context.stroke();
        }

</script>