function toggleAccordion(semesterNumber) {
  const heading = document.querySelectorAll('.accordion-heading span')[semesterNumber-1];
  if (heading.classList.contains('fa-angle-up')) {
    heading.classList.remove('fa-angle-up');
    heading.classList.add('fa-angle-down');
  } else {
    heading.classList.remove('fa-angle-down');
    heading.classList.add('fa-angle-up');
  }
  const semesterRows = document.getElementsByClassName(`semester${semesterNumber}`);
  for (let i = 0; i < semesterRows.length; i++) {
    const row = semesterRows[i];
    // row.style.display = row.style.display === 'none' ? 'table-row' : 'none';
    if (row.style.display === 'none'){
      row.style.display = 'table-row';
      window.setTimeout(function(){
        row.style.opacity = 1;
        row.style.transform = 'scale(1)';
      },100);
    }else {
      row.style.opacity = 0;
      row.style.transform = 'scale(1)';
      window.setTimeout(function(){
        row.style.display = 'none';
      },400); 
    }
  }
}
