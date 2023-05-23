window.addEventListener('load', function() {
  // Get all the discipline and professor name elements
  const disciplineNames = document.querySelectorAll('td a.subject');
  const professorNames = document.querySelectorAll('td a.prof');
  const loremImpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."; 
  
  // Delay in milliseconds before showing the popup
  const popupDelay = 500; // 0.5 seconds

  // Create and append popup elements for discipline names
  disciplineNames.forEach((name) => {
    const disciplineName = '<span class="name"><b>Име: </b>' + name.innerHTML + '</span>';
    const annotation = '<span class="annotation"><b>Анотация: </b>' + loremImpsum + '</span>';
    const type = '<span class="type"><b>Тип:</b> редовна</span>';
    const credits = '<span class="credits"><b>Кредити:</b> 6' + '</span>'; 
    const description = disciplineName + annotation + type + credits;
    const popup = createDisciplinePopup(description);
    name.appendChild(popup);
  });

  // Create and append popup elements for professor names
  professorNames.forEach((name) => {
    const profName = '<span class="name"><b>' + name.innerHTML + '</b></span>';
    const faculty = '<span class="faculty"><b>Факултет: </b>ФМИ</span>';
    const department = '<span class="department"><b>Катедра: </b>Математически анализ</span>';
    const image = '<img src="./../../images/profile-pic-teacher.jpg"/>'
    const info = '<div class="image">' + image + '</div>' + '<div class="info">' + profName + faculty + department + '</div>';
    const popup = createProfessorPopup(info);
    name.appendChild(popup);
  });

  // Helper function to create a popup element
  function createDisciplinePopup(content) {
    const popup = document.createElement('div');
    popup.classList.add('popup', 'discipline');
    popup.innerHTML = content;
    return popup;
  }

  // Helper function to create a popup element
  function createProfessorPopup(content) {
    const popup = document.createElement('div');
    popup.classList.add('popup', 'professor');
    popup.innerHTML = content;
    return popup;
  }

  // Variable to hold the timeout ID
  let popupTimeout;

  // Add event listeners for discipline names
  disciplineNames.forEach((name) => {
    name.addEventListener('mouseenter', handleMouseEnter);
    name.addEventListener('mouseleave', handleMouseLeave);
  });

  // Add event listeners for professor names
  professorNames.forEach((name) => {
    name.addEventListener('mouseenter', handleMouseEnter);
    name.addEventListener('mouseleave', handleMouseLeave);
  });

  // Event handler for mouse enter
  function handleMouseEnter(event) {
    // Clear the timeout if it exists
    clearTimeout(popupTimeout);

    // Schedule the popup to show after the delay
    popupTimeout = setTimeout(() => {
      showPopup(event.target);
    }, popupDelay);
  }

  // Event handler for mouse leave
  function handleMouseLeave() {
    // Clear the timeout if it exists
    clearTimeout(popupTimeout);

    // Hide the popup
    hidePopup();
  }

  // Event handler to show the popup
  function showPopup(target) {
    const popup = target.querySelector('.popup');
    if (popup){
      popup.classList.add('visible');
    }
  }

  // Event handler to hide the popup
  function hidePopup() {
    const visiblePopups = document.querySelectorAll('.popup.visible');
    visiblePopups.forEach((popup) => {
      popup.classList.remove('visible');
    });
  }
});
