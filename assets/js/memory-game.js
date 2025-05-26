// memory-game.js - jogo da memória simples e funcional

document.addEventListener('DOMContentLoaded', () => {
  const cardsArray = [
    { name: 'hello', img: 'assets/img/cards/hello.png' },
    { name: 'kitty', img: 'assets/img/cards/kitty.png' },
    { name: 'melody', img: 'assets/img/cards/melody.png' },
    { name: 'kuromi', img: 'assets/img/cards/kuromi.png' },
    { name: 'cinnamoroll', img: 'assets/img/cards/cinnamoroll.png' },
    { name: 'keroppi', img: 'assets/img/cards/keroppi.png' },
  ];

  let gameGrid = cardsArray.concat(cardsArray); // pares duplos
  gameGrid.sort(() => 0.5 - Math.random());

  const grid = document.querySelector('.memory-grid');
  let firstGuess = '';
  let secondGuess = '';
  let count = 0;
  let previousTarget = null;
  let delay = 1200;

  function resetGuesses() {
    firstGuess = '';
    secondGuess = '';
    count = 0;
    previousTarget = null;
  }

  function createBoard() {
    gameGrid.forEach(item => {
      const card = document.createElement('div');
      card.classList.add('card');
      card.dataset.name = item.name;

      const front = document.createElement('div');
      front.classList.add('front');

      const back = document.createElement('div');
      back.classList.add('back');
      back.style.backgroundImage = `url(${item.img})`;

      card.appendChild(front);
      card.appendChild(back);

      grid.appendChild(card);
    });
  }

  createBoard();

  grid.addEventListener('click', function(e) {
    let clicked = e.target;

    if (
      clicked.nodeName === 'SECTION' ||
      clicked === previousTarget ||
      clicked.parentNode.classList.contains('selected') ||
      clicked.parentNode.classList.contains('matched')
    ) {
      return;
    }

    if (count < 2) {
      count++;
      if (count === 1) {
        firstGuess = clicked.parentNode.dataset.name;
        clicked.parentNode.classList.add('selected');
      } else {
        secondGuess = clicked.parentNode.dataset.name;
        clicked.parentNode.classList.add('selected');
      }

      if (firstGuess && secondGuess) {
        if (firstGuess === secondGuess) {
          setTimeout(match, delay);
          setTimeout(resetGuesses, delay);
        } else {
          setTimeout(reset, delay);
          setTimeout(resetGuesses, delay);
        }
      }
      previousTarget = clicked;
    }
  });

  function match() {
    const selected = document.querySelectorAll('.selected');
    selected.forEach(card => {
      card.classList.add('matched');
    });
  }

  function reset() {
    const selected = document.querySelectorAll('.selected');
    selected.forEach(card => {
      card.classList.remove('selected');
    });
  }
});