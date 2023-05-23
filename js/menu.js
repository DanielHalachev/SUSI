// make sure the document has been loaded to find the button
document.addEventListener("DOMContentLoaded", function() {
  // const menuBtn = document.querySelector('.menu-button img');
  const menuBtn = document.querySelector('#menu-button');
  const menu = document.querySelector('nav ul');

  let menuOpen = false;
  menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
      menu.classList.add('show');
      menuBtn.classList.replace("fa-bars", "fa-xmark");
      menuOpen = true;
    } else {
      menu.classList.remove('show');
      menuBtn.classList.replace('fa-xmark', 'fa-bars');
      menuOpen = false;
    }
  });
  var logo = document.querySelector('.logo');
  const th = localStorage.getItem('theme');
  if (th){
    if (th === 'theme-light'){
      logo.src = "./../../images/logo.png";
    } else if(th === 'theme-dark'){
      logo.src = "./../../images/dark-logo.png";
    } else if(th === 'theme-custom') {
      logo.src = "./../../images/logo.png";
    }
  }
});
