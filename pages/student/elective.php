<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./../../css/student/elective.css"/>    
    <?php
      include "./../../includes/styles.php";
      include "./../../includes/javascript.php";
    ?>
<script src="./../../js/popup.js"></script> 
<script src="./../../js/columns.js"></script> 
<script src="./../../js/tableFilter.js"></script> 
<script src="./../../js/tableSort.js"></script> 

<script>
document.addEventListener('DOMContentLoaded', function() {
document.getElementById('enrolledFilter').addEventListener('change', function() {
      var value = this.value;
      var table = document.querySelector('table');
      var rows = table.querySelectorAll('tbody tr');
      
      for (var i = 0; i < rows.length; i++) {
        var button = rows[i].querySelector('td button');
        if (value === 'enrolled' && button.innerHTML!=="Записана") {
          rows[i].style.display = 'none';
        } else if (value === 'enrolled-in-queue' && button.innerHTML !== "Записана в опашка") {
          rows[i].style.display = 'none';
        } else if (value === 'not-enrolled' && button.innerHTML !== "Записване") {
          rows[i].style.display = 'none';
        } else {
          rows[i].style.display = '';
        }
      }
    });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
document.getElementById('markingFilter').addEventListener('change', function() {
      var value = this.value;
      var table = document.querySelector('table');
      var rows = table.querySelectorAll('tbody tr');
      
      for (var i = 0; i < rows.length; i++) {
        var checkbox = rows[i].querySelector('input[type="checkbox"]');
        if (value === 'marked' && !checkbox.checked) {
          rows[i].style.display = 'none';
        } else if (value === 'unmarked' && checkbox.checked) {
          rows[i].style.display = 'none';
        } else {
          rows[i].style.display = '';
        }
      }
    });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const buttons = document.querySelectorAll('.neutral, .positive');

  buttons.forEach(function(button) {
    const originalText = button.innerText;

    button.addEventListener('click', function() {
      button.classList.toggle('neutral');
      button.classList.toggle('positive');

      if (button.classList.contains('neutral')) {
        button.innerText = 'Записана';
      } else {
        button.innerText = originalText;
      }
    });

    button.addEventListener('mouseover', function() {
      if (button.classList.contains('neutral')) {
        button.innerText = 'Отписване';
      }
    });

    button.addEventListener('mouseout', function() {
      if (button.classList.contains('neutral')) {
        button.innerText = 'Записана';
      }
    });
  });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('markingFilter').addEventListener('change', function() {
      var value = this.value;
      var table = document.querySelector('table');
      var rows = table.querySelectorAll('tbody tr');
      
      for (var i = 0; i < rows.length; i++) {
        var checkbox = rows[i].querySelector('td:last-child input[type="checkbox"]');
        if (value === 'marked' && !checkbox.checked) {
          rows[i].style.display = 'none';
        } else if (value === 'unmarked' && checkbox.checked) {
          rows[i].style.display = 'none';
        } else {
          rows[i].style.display = '';
        }
      }
    });
    });
</script>

  <body>
    <?php
      include "./../../includes/header.php";
    ?>
    <main>
      <h1>Избираеми дисциплини</h1>
      <input type="search" placeholder="Потърсете избираема дисциплина"/>
      <div class="filters">
          <label><input type="checkbox" checked disabled data-column="1"/>Име</label>
          <label><input type="checkbox" checked data-column="2"/>Преподавател</label>
          <label><input type="checkbox" checked data-column="3"/>Кредити</label>
          <label><input type="checkbox" checked data-column="4"/>Оценка</label>
          <label><input type="checkbox" checked data-column="5"/>Препоръчителен семестър</label>
          <label><input type="checkbox" checked data-column="6"/>Рейтинг</label>
          <label><input type="checkbox" checked data-column="7"/>Маркиране</label>
        <select id="markingFilter">
          <option default value="all">Маркирани и немаркирани</option>
          <option value="marked">Маркирани</option>
          <option value="unmarked">Немаркирани</option>
        </select>
        <select id="enrolledFilter">
          <option default value="all">Всички</option>
          <option value="enrolled">Записани</option>
          <option value="enrolled-in-queue">Записани в опашка</option>
          <option value="not-enrolled">Незаписани</option>
        </select>
    <span class="export fa fa-file-csv"></span>
    <span class="export fa fa-file-pdf"></span>
      </div>
      <div>
        <table>
        <thead>
        <tr>
          <th data-column="1" onclick="sortTable(this)">Име <span class="fa fa-sort"></span></th>
          <th data-column="2" onclick="sortTable(this)">Преподавател <span class="fa fa-sort"></span></th>
          <th data-column="3" onclick="sortTable(this)">Кредити <span class="fa fa-sort"></span></th>
          <th data-column="4" onclick="sortTable(this)">Оценка <span class="fa fa-sort"></span></th>
          <th data-column="5" onclick="sortTable(this)">Препоръчителен семестър <span class="fa fa-sort"></span></th>
          <th data-column="6" onclick="sortTable(this)">Рейтинг <span class="fa fa-sort"></span></th>
          <th data-column="7" onclick="sortTable(this)">Маркиране <span class="fa fa-sort"></span></th>
          <th data-column="8" onclick="sortTable(this)">Записване <span class="fa fa-sort"></span></th>
        </tr>
        </thead>
        <tbody>
          <tr>
  <td>Увод в програмирането</td>
  <td>Доц. д-р Иван Иванов</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>1</td>
  <td>4.6</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване</button></td>
</tr>
<tr>
  <td>Английски език 1</td>
  <td>Преп. Мария Петрова</td>
  <td>3</td>
  <td>Текуща оценка</td>
  <td>1</td>
  <td>4.3</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване</button></td>
</tr>
<tr>
  <td>Основи на базите данни</td>
  <td>Проф. д-р Николай Николов</td>
  <td>4</td>
  <td>Изпит/Текуща оценка</td>
  <td>2</td>
  <td>4.5</td>
  <td><input type="checkbox"/></td>
  <td><button class="neutral">Записана в опашка</button></td>
</tr>
<tr>
  <td>Криптография</td>
  <td>Проф. д-р Стефан Стефанов</td>
  <td>6</td>
  <td>Изпит</td>
  <td>4</td>
  <td>4.8</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване в опашка</button></td>
</tr>
<tr>
  <td>Интернет програмиране</td>
  <td>Доц. д-р Мария Георгиева</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>3</td>
  <td>4.4</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване</button></td>
</tr>
<tr>
  <td>Дискретни структури</td>
  <td>Проф. д-р Петър Петров</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>2</td>
  <td>4.5</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване в опашка</button></td>
</tr>
       <tr>
  <td>Увод в програмирането</td>
  <td>Доц. д-р Иван Иванов</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>1</td>
  <td>4.6</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване</button></td>
</tr>
<tr>
  <td>Английски език 1</td>
  <td>Преп. Мария Петрова</td>
  <td>3</td>
  <td>Текуща оценка</td>
  <td>1</td>
  <td>4.3</td>
  <td><input type="checkbox"/></td>
  <td><button class="neutral">Записана</button></td>
</tr>
<tr>
  <td>Основи на базите данни</td>
  <td>Проф. д-р Николай Николов</td>
  <td>4</td>
  <td>Изпит/Текуща оценка</td>
  <td>2</td>
  <td>4.5</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване</button></td>
</tr>
<tr>
  <td>Криптография</td>
  <td>Проф. д-р Стефан Стефанов</td>
  <td>6</td>
  <td>Изпит</td>
  <td>4</td>
  <td>4.8</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване в опашка</button></td>
</tr>
<tr>
  <td>Интернет програмиране</td>
  <td>Доц. д-р Мария Георгиева</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>3</td>
  <td>4.4</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване</button></td>
</tr>
<tr>
  <td>Дискретни структури</td>
  <td>Проф. д-р Петър Петров</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>2</td>
  <td>4.5</td>
  <td><input type="checkbox"/></td>
  <td><button class="positive">Записване в опашка</button></td>
</tr>
        </tbody>
        </table>
        </div>
    </main>
    <?php
      include "./../../includes/footer.php";
    ?>
  </body>
</html>
