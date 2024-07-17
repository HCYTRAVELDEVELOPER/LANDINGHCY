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

document.getElementById('colombia').addEventListener('click', function(event) {
  event.preventDefault();
  highlightCountry('colombia');
  showCards('colombia');
});

function showCards(country) {
  let cardsArgentina = document.getElementById('cards-argentina');
  let cardsBrasil = document.getElementById('cards-brasil');
  let cardsColombia = document.getElementById('cards-colombia'); // Agregar referencia a las tarjetas de Colombia

  if (country === 'argentina') {
      cardsBrasil.classList.remove('show');
      cardsBrasil.classList.add('hide');
      cardsColombia.classList.remove('show'); // Ocultar tarjetas de Colombia si estaban mostradas
      cardsColombia.classList.add('hide');
      setTimeout(function() {
          cardsBrasil.style.display = 'none';
          cardsColombia.style.display = 'none'; // Ocultar tarjetas de Colombia si estaban mostradas
          cardsArgentina.style.display = 'block';
          setTimeout(function() {
              cardsArgentina.classList.remove('hide');
              cardsArgentina.classList.add('show');
          }, 10); // Pequeña demora para permitir el reflujo del DOM
      }, 500); // Duración de la animación de salida
  } else if (country === 'brasil') {
      cardsArgentina.classList.remove('show');
      cardsArgentina.classList.add('hide');
      cardsColombia.classList.remove('show'); // Ocultar tarjetas de Colombia si estaban mostradas
      cardsColombia.classList.add('hide');
      setTimeout(function() {
          cardsArgentina.style.display = 'none';
          cardsColombia.style.display = 'none'; // Ocultar tarjetas de Colombia si estaban mostradas
          cardsBrasil.style.display = 'block';
          setTimeout(function() {
              cardsBrasil.classList.remove('hide');
              cardsBrasil.classList.add('show');
          }, 10); // Pequeña demora para permitir el reflujo del DOM
      }, 500); // Duración de la animación de salida
  } else if (country === 'colombia') {
      cardsArgentina.classList.remove('show');
      cardsArgentina.classList.add('hide');
      cardsBrasil.classList.remove('show');
      cardsBrasil.classList.add('hide');
      setTimeout(function() {
          cardsArgentina.style.display = 'none';
          cardsBrasil.style.display = 'none';
          cardsColombia.style.display = 'block';
          setTimeout(function() {
              cardsColombia.classList.remove('hide');
              cardsColombia.classList.add('show');
          }, 10); // Pequeña demora para permitir el reflujo del DOM
      }, 500); // Duración de la animación de salida      
  }
}

function highlightCountry(country) {
  let argentina = document.getElementById('argentina');
  let brasil = document.getElementById('brasil');
  let colombia = document.getElementById('colombia'); // Ajusta según la estructura de tu HTML

  //ASIGNAR COLOR DE CAJA AL SELECCIONAR
  if (country === 'argentina') {
      argentina.classList.add('active');
      brasil.classList.remove('active');
      colombia.classList.remove('active');
  } else if (country === 'brasil') {
      argentina.classList.remove('active');
      brasil.classList.add('active');
      colombia.classList.remove('active');
  } else if (country === 'colombia') {
      argentina.classList.remove('active');
      brasil.classList.remove('active');
      colombia.classList.add('active');
  }
}

// Inicializar Argentina como visible por defecto y resaltado
document.getElementById('cards-argentina').classList.add('show');
document.getElementById('cards-brasil').classList.add('hide');
document.getElementById('cards-colombia').classList.add('hide'); // Ocultar tarjetas de Colombia por defecto
document.getElementById('argentina').classList.add('active');
