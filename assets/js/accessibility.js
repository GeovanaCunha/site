// accessibility.js - controla preferências do usuário, armazenadas no localStorage

document.addEventListener('DOMContentLoaded', () => {
  // Elementos
  const langSelector = document.getElementById('language-selector');
  const darkModeToggle = document.querySelector('button[onclick="toggleDarkMode()"]');
  const fontSizeSlider = document.getElementById('font-size');
  const daltonismoSelector = document.getElementById('daltonismo-selector');
  const darkModeCSS = document.getElementById('dark-mode-css');
  const protCSS = document.getElementById('prot-css');
  const deutCSS = document.getElementById('deut-css');
  const tritCSS = document.getElementById('trit-css');

  // Aplica preferências salvas no localStorage
  function applyPreferences() {
    // Tema escuro
    const darkMode = localStorage.getItem('darkMode') === 'true';
    darkModeCSS.disabled = !darkMode;

