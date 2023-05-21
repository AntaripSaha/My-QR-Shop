  // Variable to keep track of the current active card
  var currentCard = 1;

  // Function to show the previous hero card
  function showPreviousCard() {
    if (currentCard > 1) {
      showHeroCard(currentCard - 1);
      scrollCardContainer(-1);
    }
  }

  // Function to show the next hero card
  function showNextCard() {
    var totalCards = document.getElementsByClassName('slider-card').length;
    if (currentCard < totalCards) {
      showHeroCard(currentCard + 1);
      scrollCardContainer(1);
    }
  }

  // Function to show a specific hero card
  function showHeroCard(cardNumber) {
    // Hide all hero cards
    var heroCards = document.getElementsByClassName('hero-card');
    for (var i = 0; i < heroCards.length; i++) {
      heroCards[i].style.display = 'none';
    }

    // Show the selected hero card
    var selectedHeroCard = document.getElementById('hero-card-' + cardNumber);
    selectedHeroCard.style.display = 'flex';

    // Remove active class from all cards
    var cards = document.getElementsByClassName('slider-card');
    for (var i = 0; i < cards.length; i++) {
      cards[i].classList.remove('active');
    }

    // Add active class to the selected card
    var selectedCard = document.querySelector('.slider-card:nth-child(' + cardNumber + ')');
    selectedCard.classList.add('active');

    // Update the current active card
    currentCard = cardNumber;

    // Scroll the card container to show the selected card
    scrollCardContainerToCard(cardNumber);
  }

// Function to scroll the card container to show the selected card
// Function to scroll the card container to show the selected card
function scrollCardContainerToCard(cardNumber) {
  var cardContainer = document.getElementById('slider-card-container');
  var selectedCard = document.querySelector('.slider-card:nth-child(' + cardNumber + ')');
  var cardOffsetLeft = selectedCard.offsetLeft;
  var containerScrollLeft = cardContainer.scrollLeft;
  var containerWidth = cardContainer.offsetWidth;
  
  // Calculate the total width of the hidden cards to the left
  var totalHiddenWidth = 0;
  for (var i = 1; i < cardNumber; i++) {
    var card = document.querySelector('.slider-card:nth-child(' + i + ')');
    totalHiddenWidth += card.offsetWidth;
  }
  
  // Calculate the maximum scroll position to show the selected card first
  var maxScrollLeft = totalHiddenWidth - (containerWidth / 8) + (selectedCard.offsetWidth / 2);
  
  // Smooth scroll to the maximum scroll position
  cardContainer.scrollTo({
    left: maxScrollLeft,
    behavior: 'smooth'
  });
}

