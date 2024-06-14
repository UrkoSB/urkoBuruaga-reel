let tituloEu;
let tituloEs;
let contenidoEu;
let contenidoEs;

let videosInstagram;



function modificarVideosIG(){
    // videosInstagram = document.querySelectorAll('.instagram-media');

    for (const igVideo of videosInstagram) {
        igVideo.querySelector('.Footer').style.display = "none";
    }

    for (const igVideo of document.querySelectorAll('.Footer')) {
        igVideo.style.display = "none";
    }
}


function formatearIframeInstagram(){
    for (const iframe of document.querySelectorAll('.instagram-media')) {
        iframe.style.border = "none";
        iframe.style.minWidth = "";
        iframe.style.maxWidth = "";
        iframe.style.width = "";
        iframe.style.height = "";
        iframe.style.margin = "";
    }
}

function agregarScriptInstagram(){
    return new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = '//www.instagram.com/embed.js';
        script.async = true;
        script.onload = () => resolve();
        script.onerror = () => reject(new Error('Error loading script'));
        document.head.appendChild(script);
    });
}


function agregarScriptReCaptcha(){
        const siteKey = document.querySelector('button.g-recaptcha').dataset.sitekey;
        const script = document.createElement('script');
        script.src = 'https://www.google.com/recaptcha/enterprise.js?render='+siteKey;
        script.async = true;
        document.head.appendChild(script);
        console.log(("Hecho"));
}


/***** DOM CARGADO *****/

window.addEventListener("load", function (event) {
    /***** DOM *****/
    // TABS
    tituloEu = document.querySelector('.tab_title_eu');
    tituloEs = document.querySelector('.tab_title_es');
    contenidoEu = document.querySelector('.tab_content_eu');
    contenidoEs = document.querySelector('.tab_content_es');


    /* EventListeners */

    // TABS 
    tituloEu.addEventListener('click', function(e) {
        if(!tituloEu.classList.contains("active")){
            tituloEu.classList.toggle("active");
            tituloEs.classList.toggle("active");
            contenidoEu.style.display = "block";
            contenidoEs.style.display = "none";
        }
        
    });

    tituloEs.addEventListener('click', function(e) {
        if(!tituloEs.classList.contains("active")){
            tituloEu.classList.toggle("active");
            tituloEs.classList.toggle("active");
            contenidoEs.style.display = "block";
            contenidoEu.style.display = "none";
        }
    });

    /***** CARGAR SCRIPTS DINÁMICAMENTE *****/
    // reCaptcha
    const targetDivReCaptcha = document.querySelector('#kontratazioa'); 
    const observerReCaptcha = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            agregarScriptReCaptcha();
        }
    });
    }, { }); // Optional:
    observerReCaptcha.observe(targetDivReCaptcha);

    // Videos
    const targetDivBideoak = document.querySelector('#bideoak'); 
    const observerBideoak = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            agregarScriptInstagram()
            .then(() => {
                formatearIframeInstagram();
                setTimeout(() => {
                    formatearIframeInstagram();    
                }, 2500);
            }).catch(error => {
                console.error('Error:', error);
            });
        }
    });
    }, { }); // Optional:
    observerBideoak.observe(targetDivBideoak);

});