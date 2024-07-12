// Asignar evento clic a todos los elementos con la clase 'country-box'
document.querySelectorAll('.country-box').forEach(box => {
    box.addEventListener('click', function(event) {
      event.preventDefault();
      let country = this.getAttribute('data-pais');
      highlightCountry(country);
      showCards(country);
    });
  });
  
  function showCards(country) {
    let cardsContainers = document.querySelectorAll('.transfer-cards');
  
    cardsContainers.forEach(container => {
      if (container.id === 'cards-' + country) {
        container.style.display = 'block';
        container.classList.add('show');
      } else {
        container.style.display = 'none';
        container.classList.remove('show');
      }
    });
  
    fetch('../../includes/buscarTransfer.php?pais=' + country)
      .then(response => response.json())
      .then(data => {
        let cardsContainer = document.getElementById('cards-' + country);
        mostrarTransfers(cardsContainer, data);
      })
      .catch(error => console.error('Error:', error));
  }
  