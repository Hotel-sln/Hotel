$(document).ready(function() {
    //Création des éléments du tableau
    const slides = $("#slider .slide");

    //Initialisation du curseur
    let slideIndex = 0;

    let slideTimer;

    //Affichage du premier slide
    $(slides[slideIndex]).attr("style", "opacity: 1");

    //Declenche le timer
    start();

    //Clique sur le bouton précédent ou suivant
    $(".sliderbutton").on("click", function() {
        if ($(this).hasClass("prev")) {
            //Clique sur le bouton précédent
            move("prev");
        } else {
            // clique sur le bouton suivant
            move("next");
        }
    });

    //Arrete le timer au survol de la souris
    $("#slider").on("mouseover", function() {
        stop();
    });

    //relance le timer au retrait de la souris
    $("#slider").on("mouseout", function() {
        start();
    });

    // Affiche le slide précédent ou suivant
    function move(direction) {
        if (direction == "prev") {
            //Affiche le slide précédent
            slideIndex--;
            if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            }
        } else {
            //Affiche le slide suivant
            slideIndex++;
            if (slideIndex > slides.length - 1) {
                slideIndex = 0;
            }
        }

        //Cache tous les slides
        $("#slider .slide").attr("style", "opacity: 0");

        //Affiche le slide qui correspond au curse
        $(slides[slideIndex]).attr("style", "opacity: 1");
    }

    // Lance le timer
    function start() {
        slideTimer = setInterval(function() {
            move("next");
        }, 4000);
    }

    //Arrete le timer
    function stop() {
        clearInterval(slideTimer);
    }
});