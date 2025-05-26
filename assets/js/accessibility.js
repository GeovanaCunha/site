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

    // Daltonismo
    const daltonismo = localStorage.getItem('daltonismo') || 'none';
    protCSS.disabled = daltonismo !== 'prot';
    deutCSS.disabled = daltonismo !== 'deut';
    tritCSS.disabled = daltonismo !== 'trit';

    // Tamanho fonte
    const fontSize = localStorage.getItem('fontSize') || '16';
    document.documentElement.style.fontSize = fontSize + 'px';
    if(fontSizeSlider) fontSizeSlider.value = fontSize;

    // Idioma
    // Idioma PHP depende da sessão, para atualizar redireciona-se via GET (no index.php)
  }

  applyPreferences();

  // Eventos

  // Idioma (redireciona para trocar via PHP)
  if(langSelector) {
    langSelector.addEventListener('change', () => {
      const selected = langSelector.value;
      // Recarrega a página com ?lang= para mudar PHP
      window.location.search = `?lang=${selected}`;
    });
  }

  // Modo escuro
  if(darkModeToggle) {
    darkModeToggle.addEventListener('click', () => {
      const enabled = darkModeCSS.disabled;
      darkModeCSS.disabled = !enabled;
      localStorage.setItem('darkMode', !enabled);
    });
  }

  // Tamanho da fonte
  if(fontSizeSlider) {
    fontSizeSlider.addEventListener('input', () => {
      const val = fontSizeSlider.value;
      document.documentElement.style.fontSize = val + 'px';
      localStorage.setItem('fontSize', val);
    });
  }

  // Daltonismo
  if(daltonismoSelector) {
    daltonismoSelector.addEventListener('change', () => {
      const val = daltonismoSelector.value;
      protCSS.disabled = val !== 'prot';
      deutCSS.disabled = val !== 'deut';
      tritCSS.disabled = val !== 'trit';
      localStorage.setItem('daltonismo', val);
    });
  }

});