document.getElementById('argentina').addEventListener('click', function(event) {
    event.preventDefault();
    highlightCountry('argentina');
    showCards('argentina');
});

document.getElementById('brasil').addEventListener('click', function(event) {
    event.preventDefault();
    highlightCountry('brasil');
    showCards('brasil');
});

function showCards(country) {
    let cardsArgentina = document.getElementById('cards-argentina');
    let cardsBrasil = document.getElementById('cards-brasil');

    if (country === 'argentina') {
        cardsBrasil.classList.remove('show');
        cardsBrasil.classList.add('hide');
        setTimeout(function() {
            cardsBrasil.style.display = 'none';
            cardsArgentina.style.display = 'block';
            setTimeout(function() {
                cardsArgentina.classList.remove('hide');
                cardsArgentina.classList.add('show');
            }, 10); // Pequeña demora para permitir el reflujo del DOM
        }, 500); // Duración de la animación de salida
    } else if (country === 'brasil') {
        cardsArgentina.classList.remove('show');
        cardsArgentina.classList.add('hide');
        setTimeout(function() {
            cardsArgentina.style.display = 'none';
            cardsBrasil.style.display = 'block';
            setTimeout(function() {
                cardsBrasil.classList.remove('hide');
                cardsBrasil.classList.add('show');
            }, 10); // Pequeña demora para permitir el reflujo del DOM
        }, 500); // Duración de la animación de salida
    }
}

function highlightCountry(country) {
    let argentina = document.getElementById('argentina');
    let brasil = document.getElementById('brasil');

    if (country === 'argentina') {
        argentina.classList.add('active');
        brasil.classList.remove('active');
    } else if (country === 'brasil') {
        argentina.classList.remove('active');
        brasil.classList.add('active');
    }
}

// Inicializar Argentina como visible por defecto y resaltado
document.getElementById('cards-argentina').classList.add('show');
document.getElementById('cards-brasil').classList.add('hide');
document.getElementById('argentina').classList.add('active');
