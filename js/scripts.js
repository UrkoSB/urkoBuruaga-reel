let tituloEu;
let tituloEs;
let contenidoEu;
let contenidoEs;

window.addEventListener("load", function (event) {
    // DOM
    tituloEu = document.querySelector('.tab_title_eu');
    tituloEs = document.querySelector('.tab_title_es');
    contenidoEu = document.querySelector('.tab_content_eu');
    contenidoEs = document.querySelector('.tab_content_es');

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

    // reCaptcha v3
    function onSubmit(token) {
        document.getElementById("contact-form").submit();
    }
});