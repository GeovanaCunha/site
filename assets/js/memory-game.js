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

 