<section id="kontratazioa" class="w-icons">
    <span class="section_title">
        <h2>Kontratazioa</h2>
        <h2>Contratación</h2>
    </span>
    <article>
        <span>
            <h3>Katxea</h3>
            <p>Galdetu</p>
        </span>
        <span class="icono_texto">€</span>
        <span>
            <h3>Caché</h3>
            <p>Consultar</p>
        </span>
    </article>

    <article>
        <span>
            <h3>Iraupena</h3>
            <span class="multiparrafo">
                <p>1h 15min</p>
                <p>~ <span class="laburdura">g.g.b.</span><span class="ez-laburdura">Gutxi gorabehera</span>~</p>
            </span>
        </span>
        <?php include('assets/img/svg/icons/kronometro.svg') ?>
        <span>
            <h3>Duración</h3>
            <span class="multiparrafo">
                <p>1h 15min</p>
                <p>~ <span class="laburdura">Aprox.</span><span class="ez-laburdura">Aproximadamente</span> ~</p>
            </span>
        </span>
    </article>

    <article>
        <span>
            <h3>Nire ekipoa</h3>
            <p>Nire PA sistema erabiltzeko aukera.</p>
        </span>
        <?php include('assets/img/svg/icons/pa.svg') ?>
        <span>
            <h3>Equipo propio</h3>
            <p>Opción de usar mi propio sistema de PA.</p>
        </span>
    </article>

    <article>
        <span>
            <h3>Faktura</h3>
            <p>Faktura egiteko aukera.</p>
        </span>    
        <?php include('assets/img/svg/icons/faktura.svg') ?>
        <span>
            <h3>Factura</h3>
            <p>Posibilidad de hacer factura.</p>
        </span>
    </article>

    <article id="article-harremana">
        <h3>Harremana</h3>
        <?php include('assets/img/svg/icons/envelope.svg') ?>
        <h3>Contacto</h3>
        
        <?php 
        if (isset($_COOKIE["messagesent_cookie"])) {
            if($_COOKIE["messagesent_cookie"] === 'true'){
                include('parts/message-sent.php');
            } else {
                include('parts/message-error.php');
            }
        } else{
            include('parts/formulario-contacto.php');
        }
        ?>

    </article>

</section>