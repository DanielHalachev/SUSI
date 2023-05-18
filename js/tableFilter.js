window.addEventListener('load', function() {
  const selectElement = document.getElementById('semester-select');

  // Add event listener for changes in the select element
  selectElement.addEventListener('change', function() {
    // Get the selected option value
    const selectedSemester = this.value;
    const tableRows = document.querySelectorAll('tbody tr');

    if(selectedSemester === "all"){
      tableRows.forEach((function (row) {
        row.style.display = 'table-row';
        row.style.opacity = '1';
      }));
    }
    else {

      tableRows.forEach(function(row) {
        // Check if the row has the class corresponding to the selected semester
        if (row.classList.contains(selectedSemester)) {
          row.style.display = 'table-row'; // Show the row
          row.style.opacity = '1';
        } else {
          row.style.display = 'none'; // Hide the row
        }
      });
    }

  });
});
