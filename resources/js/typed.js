import Typed from 'typed.js';


document.addEventListener('DOMContentLoaded', function () {
    var options = {
        strings: ["Texte animé", "Une autre phrase", "Et une autre encore"],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true,
        showCursor: false,
        smartBackspace: true,
    };

    var typed = new Typed('.typed-text', options);
});