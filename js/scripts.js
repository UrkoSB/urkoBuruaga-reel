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
        console.log("click");
        if(!tituloEs.classList.contains("active")){
            tituloEu.classList.toggle("active");
            tituloEs.classList.toggle("active");
            contenidoEs.style.display = "block";
            contenidoEu.style.display = "none";
        }
    });

        
    const targetDiv = document.querySelector('#bideoak'); 

    const observer = new IntersectionObserver(entries => {
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

    observer.observe(targetDiv);

});