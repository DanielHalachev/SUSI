// make sure the document has been loaded to find the button
document.addEventListener("DOMContentLoaded", function() {
  const menuBtn = document.querySelector('.menu-button img');
  const menu = document.querySelector('nav ul');

  let menuOpen = false;
  menuBtn.addEventListener('click', () => {
    console.log("Hello");
    if (!menuOpen) {
      menu.classList.add('show');
      menuOpen = true;
    } else {
      menu.classList.remove('show');
      menuOpen = false;
    }
  });
});
