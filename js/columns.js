window.addEventListener('load', function() {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  const table = document.querySelector('table');

  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', (event) => {
      const { column } = event.target.dataset;
      const rows = table.querySelectorAll(`tr td:nth-child(${column}), tr th:nth-child(${column})`);

      rows.forEach((cell) => {
        cell.style.display = event.target.checked ? 'table-cell' : 'none';
      });
    });
  });
});
