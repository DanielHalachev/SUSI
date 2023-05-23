function setTheme(themeName) {
  localStorage.setItem('theme', themeName);
  document.documentElement.className = themeName;
}

// Function to change the theme based on the selected option
function changeTheme() {
  const themeSelect = document.getElementById('theme-select');
  const selectedOption = themeSelect.value;
  const customThemeDiv = document.getElementById('custom-theme');

  if (selectedOption === 'light') {
    setTheme('theme-light');
    customThemeDiv.style.display = 'none';
  } else if (selectedOption === 'dark') {
    setTheme('theme-dark');
    customThemeDiv.style.display = 'none';
  } else if (selectedOption === 'device') {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    setTheme(prefersDark ? 'theme-dark' : 'theme-light');
    customThemeDiv.style.display = 'none';
  } else if (selectedOption === 'custom') {
    setTheme('theme-custom');
    customThemeDiv.style.display = 'block';
  }
}

// // Immediately invoked function to set the theme on initial load
// (function () {
//   const theme = localStorage.getItem('theme');
//   if (theme === 'theme-dark') {
//     setTheme('theme-dark');
//   } else if (theme === 'theme-light'){
//     setTheme('theme-light');
//   } else {
//     setTheme('theme-custom');
//   }
// })();
//

// Function to update and apply the custom theme
function setCustomTheme(variable, value) {
  document.documentElement.style.setProperty(variable, value);
}

// Function to change the theme based on the selected option
function changeTheme() {
  const themeSelect = document.getElementById('theme-select');
  const selectedOption = themeSelect.value;
  const customThemeDiv = document.getElementById('custom-theme');
  var logo = document.querySelector('.logo');

  if (selectedOption === 'light') {
    setTheme('theme-light');
    logo.src = "./../../images/logo.png";
    customThemeDiv.style.display = 'none';
  } else if (selectedOption === 'dark') {
    setTheme('theme-dark');
    logo.src = "./../../images/dark-logo.png";
    customThemeDiv.style.display = 'none';
  } else if (selectedOption === 'device') {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    setTheme(prefersDark ? 'theme-dark' : 'theme-light');
    logo.src = prefersDark ? "./../../images/dark-logo.png" : "./../../images/logo.png";
    customThemeDiv.style.display = 'none';
  } else if (selectedOption === 'custom') {
    setTheme('theme-custom');
    logo.src = "./../../images/logo.png";
    customThemeDiv.style.display = 'block';
  }
}

// Function to update the custom theme when a color picker value changes
function updateCustomTheme() {
  setCustomTheme('--primary-color', document.getElementById('primary-color-picker').value);
  setCustomTheme('--secondary-color', document.getElementById('secondary-color-picker').value);
  setCustomTheme('--back-color', document.getElementById('back-color-picker').value);
  setCustomTheme('--surface-color', document.getElementById('surface-color-picker').value);
  setCustomTheme('--error-color', document.getElementById('error-color-picker').value);
  setCustomTheme('--on-primary', document.getElementById('on-primary-picker').value);
  setCustomTheme('--on-secondary', document.getElementById('on-secondary-picker').value);
  setCustomTheme('--on-background', document.getElementById('on-background-picker').value);
  setCustomTheme('--on-surface', document.getElementById('on-surface-picker').value);
  setCustomTheme('--on-error', document.getElementById('on-error-picker').value);
  setCustomTheme('--positive', document.getElementById('positive-picker').value);
  setCustomTheme('--positive-hover', document.getElementById('positive-hover-picker').value);
  setCustomTheme('--negative', document.getElementById('negative-picker').value);
  setCustomTheme('--negative-hover', document.getElementById('negative-hover-picker').value);
  setCustomTheme('--neutral', document.getElementById('neutral-picker').value);
  setCustomTheme('--neutral-hover', document.getElementById('neutral-hover-picker').value);
  setCustomTheme('--on-positive', document.getElementById('on-positive-picker').value);
  setCustomTheme('--on-negative', document.getElementById('on-negative-picker').value);
  setCustomTheme('--on-neutral', document.getElementById('on-neutral-picker').value);
  setCustomTheme('--th-color', document.getElementById('th-color-picker').value);
  setCustomTheme('--td-color', document.getElementById('td-color-picker').value);
  setCustomTheme('--on-th', document.getElementById('on-th-picker').value);
  setCustomTheme('--on-td', document.getElementById('on-td-picker').value);
  setCustomTheme('--border-color', document.getElementById('border-color-picker').value);
  setCustomTheme('--menu-gradient-start', document.getElementById('menu-gradient-start-picker').value);
  setCustomTheme('--menu-gradient-end', document.getElementById('menu-gradient-end-picker').value);

  // Save the custom theme in local storage
  localStorage.setItem('customTheme', document.getElementById('theme-settings').innerHTML);
}

// Immediately invoked function to set the theme on initial load
(function () {
  const theme = localStorage.getItem('theme');
  if (theme === 'theme-dark') {
    setTheme('theme-dark');
  } else if (theme === 'theme-light'){
    setTheme('theme-light');
  } else {
    setTheme('theme-custom');
  }
})();
