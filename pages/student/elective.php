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
<!-- <script src="./../../js/tableFilter.js"></script>  -->
<script src="./../../js/tableSort.js"></script> 
<script>
window.addEventListener('load', function() {
  // Read the query parameter from the URL
  const urlParams = new URLSearchParams(window.location.search);
  const filter = urlParams.get('filter');

  // Set the corresponding values in the select elements
  if (filter === 'marked') {
    document.getElementById('markingFilter').value = 'marked';
    document.getElementById('markingFilter').dispatchEvent(new Event('change'));
  } else if (filter === 'enrolled') {
    document.getElementById('enrolledFilter').value = 'enrolled';
    document.getElementById('enrolledFilter').dispatchEvent(new Event('change'));
  } else if (filter === 'enrolled-in-queue') {
    document.getElementById('enrolledFilter').value = 'enrolled-in-queue';
    document.getElementById('enrolledFilter').dispatchEvent(new Event('change'));
  }
});
</script>
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
      include "./../../includes/student/header.php";
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
      <td><a class="subject" data-subject="Увод в програмирането">Увод в програмирането</a></td>
      <td><a class="prof" data-name="Доц. д-р Иван Иванов">Доц. д-р Иван Иванов</a></td>
      <td>5</td>
      <td>Изпит/Текуща оценка</td>
      <td>1</td>
      <td>4.6</td>
      <td><input type="checkbox" /></td>
      <td><button class="positive">Записване</button></td>
    </tr>
    <tr>
      <td><a class="subject" data-subject="Английски език 1">Английски език 1</a></td>
      <td><a class="prof" data-name="Преп. Мария Петрова">Преп. Мария Петрова</a></td>
      <td>3</td>
      <td>Текуща оценка</td>
      <td>1</td>
      <td>4.3</td>
      <td><input type="checkbox" /></td>
      <td><button class="positive">Записване</button></td>
    </tr>
    <tr>
      <td><a class="subject" data-subject="Основи на базите данни">Основи на базите данни</a></td>
      <td><a class="prof" data-name="Проф. д-р Николай Николов">Проф. д-р Николай Николов</a></td>
      <td>4</td>
      <td>Изпит/Текуща оценка</td>
      <td>2</td>
      <td>4.5</td>
      <td><input type="checkbox" /></td>
      <td><button class="neutral">Записана в опашка</button></td>
    </tr>
    <tr>
      <td><a class="subject" data-subject="Криптография">Криптография</a></td>
      <td><a class="prof" data-name="Проф. д-р Стефан Стефанов">Проф. д-р Стефан Стефанов</a></td>
      <td>6</td>
      <td>Изпит</td>
      <td>4</td>
      <td>4.8</td>
      <td><input type="checkbox" /></td>
      <td><button class="positive">Записване в опашка</button></td>
    </tr>
    <tr>
      <td><a class="subject" data-subject="Интернет програмиране">Интернет програмиране</a></td>
      <td><a class="prof" data-name="Доц. д-р Мария Георгиева">Доц. д-р Мария Георгиева</a></td>
      <td>5</td>
      <td>Изпит/Текуща оценка</td>
      <td>3</td>
      <td>4.4</td>
      <td><input type="checkbox" /></td>
      <td><button class="positive">Записване</button></td>
    </tr>
    <tr>
      <td><a class="subject" data-subject="Дискретни структури">Дискретни структури</a></td>
      <td><a class="prof" data-name="Проф. д-р Петър Петров">Проф. д-р Петър Петров</a></td>
      <td>5</td>
      <td>Изпит/Текуща оценка</td>
      <td>2</td>
      <td>4.5</td>
      <td><input type="checkbox" /></td>
      <td><button class="positive">Записване в опашка</button></td>
    </tr>
    <tr>
      <td><a class="subject" data-subject="Увод в програмирането">Увод в програмирането</a></td>
      <td><a class="prof" data-name="Доц. д-р Иван Иванов">Доц. д-р Иван Иванов</a></td>
      <td>5</td>
      <td>Изпит/Текуща оценка</td>
      <td>1</td>
      <td>4.6</td>
      <td><input type="checkbox" /></td>
      <td><button class="positive">Записване</button></td>
    </tr>
    <tr>
      <td><a class="subject" data-subject="Английски език 1">Английски език 1</a></td>
      <td><a class="prof" data-name="Преп. Мария Петрова">Преп. Мария Петрова</a></td>
      <td>3</td>
      <td>Текуща оценка</td>
      <td>1</td>
      <td>4.3</td>
      <td><input type="checkbox" /></td>
      <td><button class="positive">Записване</button></td>
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
