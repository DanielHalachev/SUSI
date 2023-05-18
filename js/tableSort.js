function sortTable(columnHeader) {
  const column = columnHeader.getAttribute('data-column');
  const table = document.querySelector('table');
  const tbody = table.querySelector('tbody');
  const rows = Array.from(tbody.querySelectorAll('tr'));

  // Get the current sorting order and toggle it
  const currentOrder = columnHeader.classList.contains('ascending') ? 'ascending' : 'descending';

  // Reset the sort icons
  const sortIcons = table.querySelectorAll('thead th .fa');
  sortIcons.forEach(function(icon) {
    icon.className = 'fa fa-sort';
  });

  if (currentOrder === 'ascending') {
    columnHeader.classList.remove('ascending');
    columnHeader.classList.add('descending');
    columnHeader.querySelector('.fa').classList.remove('fa-sort');
    columnHeader.querySelector('.fa').classList.add('fa-sort-down');
    rows.sort(compareValues(column, 'desc'));
  } else {
    columnHeader.classList.remove('descending');
    columnHeader.classList.add('ascending');
    columnHeader.querySelector('.fa').classList.remove('fa-sort');
    columnHeader.querySelector('.fa').classList.add('fa-sort-up');
    rows.sort(compareValues(column, 'asc'));
  }

  // Reorder the table rows
  rows.forEach(function(row) {
    tbody.appendChild(row);
  });
}

function compareValues(column, order) {
  return function(row1, row2) {
    const value1 = row1.querySelector(`td:nth-child(${column})`).innerText.trim();
    const value2 = row2.querySelector(`td:nth-child(${column})`).innerText.trim();

    let comparison = 0;
    if (value1 > value2) {
      comparison = 1;
    } else if (value1 < value2) {
      comparison = -1;
    }

    return order === 'asc' ? comparison : -comparison;
  };
}
