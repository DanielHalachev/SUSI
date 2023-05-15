window.addEventListener('load', function() {
  // // Get all the discipline and professor name elements
  const disciplineNames = document.querySelectorAll('td a');
  const professorNames = document.querySelectorAll('td a');

  // Create and append popup elements for discipline names
  disciplineNames.forEach((name) => {
    const description = name.innerHTML;
    const popup = createPopup(description);
    name.appendChild(popup);
  });

  // Create and append popup elements for professor names
  professorNames.forEach((name) => {
    const info = "Hello";
    const popup = createPopup(info);
    name.appendChild(popup);
  });

  // Helper function to create a popup element
  function createPopup(content) {
    const popup = document.createElement('div');
    popup.classList.add('popup');
    popup.textContent = content;
    return popup;
  }

  // Add event listeners for discipline names
  disciplineNames.forEach((name) => {
    name.addEventListener('mouseover', showPopup);
    name.addEventListener('mouseout', hidePopup);
  });

  // Add event listeners for professor names
  professorNames.forEach((name) => {
    name.addEventListener('mouseover', showPopup);
    name.addEventListener('mouseout', hidePopup);
  });

  // Event handler to show the popup
  function showPopup(event) {
    console.log(event.target);
    const popup = event.target.querySelector('.popup');
    popup.classList.add('visible');
  }

  // Event handler to hide the popup
  function hidePopup(event) {
    console.log("Hover has ended");
    const popup = event.target.querySelector('.popup');
    popup.classList.remove('visible');
  }
});
