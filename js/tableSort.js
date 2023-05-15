window.addEventListener('load', function() {
  const headers = document.querySelectorAll('th');
  const rows = document.querySelectorAll('tr');

  headers.forEach((header) => {
    header.addEventListener('click', () => {
      const columnIndex = Array.from(headers).indexOf(header);
      const isAscending = header.classList.toggle('ascending');
      const comparator = getComparator(columnIndex, isAscending);

      const sortedRows = Array.from(rows).sort(comparator);
      const parentAccordion = header.closest('.accordion');
      const tbody = parentAccordion.querySelector('tbody');

      sortedRows.forEach((row) => {
        tbody.appendChild(row);
      });
    });
    });

});
function getComparator(columnIndex, isAscending) {
  return (rowA, rowB) => {
    const valueA = rowA.querySelector(`td:nth-child(${columnIndex})`).textContent;
    const valueB = rowB.querySelector(`td:nth-child(${columnIndex})`).textContent;

    if (isAscending) {
      return valueA.localeCompare(valueB);
    } else {
      return valueB.localeCompare(valueA);
    }
  };
}
