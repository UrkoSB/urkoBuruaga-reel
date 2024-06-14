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
    
    for (const iframe of document.querySelectorAll('.instagram-media')) {
        iframe.style.border = "none";
        iframe.style.minWidth = "";
        iframe.style.maxWidth = "";
        iframe.style.width = "";
        iframe.style.height = "";
        iframe.style.margin = "";
    }
    
    // intervalo = setInterval(probarIframe, 500);
});

function probarIframe(){
    console.log("Entra")
    if (document.querySelectorAll('.instagram-media')) {
        for (const iframe of document.querySelectorAll('.instagram-media')) {
            // iframe.style.border = "none" 
            clearInterval(intervalo)
            if (iframe.querySelector('.Footer')) {
                for (const footer of iframe.querySelector('.Footer')) {
                    footer.style.display = "none";
                }
            }

        }
    }

    return;

}