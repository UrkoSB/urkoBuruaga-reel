<form action="enviar-mensaje/index.php" method="post" id="contact-form">
    <label for="izena">Izena | Nombre</label>
    <input type="text" name="izena" id="izena" required>

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" required>

    <label for="gaia">Gaia | Asunto</label>
    <input type="gaia" name="gaia" id="gaia" required>

    <label for="mezua">Mezua | Mensaje</label>
    <textarea name="mezua" id="mezua" required></textarea>

    <button type="submit"
        class="g-recaptcha" 
        data-sitekey="6LfLTfMpAAAAAGGrzWqOTGgOohFC0B-p4FXdDywU" 
        data-callback='onSubmit' 
        data-action='submit'
    >
        Bidali
        <svg xmlns="http://www.w3.org/2000/svg" width="34.963" height="34.963" viewBox="0 0 34.963 34.963">
            <path id="Trazado_3" data-name="Trazado 3" d="M27.937,1.2A.875.875,0,0,0,26.8.063L1.343,10.246h0l-.791.315a.875.875,0,0,0-.143,1.552l.717.455,0,0,8.741,5.561,5.561,8.741,0,0,.455.717a.875.875,0,0,0,1.55-.145ZM24.729,4.508,11.615,17.622l-.376-.591a.875.875,0,0,0-.269-.269l-.591-.376L23.492,3.271l2.061-.824Z" transform="translate(8.187 0) rotate(17)" fill="rgba(255,255,255,0.8)"/>
        </svg>
        Enviar
    </button>

    <p id="lopd-form">
    Zure datu pertsonalen tratamenduari buruzko informazioa: Arduraduna:  Urko Sáenz de Buruaga. Helburua: harreman-inprimakiaren bitartez helarazitako mezuak kudeatzea. Eskubideak eta informazio gehigarria: Zure datuen tratamenduari buruzko eskubideak erabili daitezke eta urkoburuaga.com webguneko pribatutasun politikan aipatu tratamenduari buruzko informazio gehigarria lor daiteke. 
    </p>
    <p id="lopd-form">
    Información relativa al tratamiento de sus datos personales: Responsable: Urko Sáenz de Buruaga. Finalidad: Gestionar los mensajes enviados a través de este formulario. Derechos e información adicional: Pueden ejercerse los derechos relativos al tratamiento de sus datos y obtener información adicional sobre dicho tratamiento en la política de privacidad del sitio web urkoburuaga.com.
    </p>
</form>