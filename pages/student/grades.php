<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./../../css/student/grades.css"/>  
  <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php";
  ?>
  <script src="./../../js/popup.js"></script> 
  <script src="./../../js/columns.js"></script> 
  <script src="./../../js/accordionTable.js"></script> 
  <script src="./../../js/tableFilter.js"></script> 
  <script src="./../../js/tableSort.js"></script> 
</head>
<body>
  <?php
    include "./../../includes/student/header.php";
  ?>
<main>
  <h1>Оценки и кредити</h1>
  <input type="search" placeholder="Потърсете дисциплина"/>
  <div class="filters">
    <label><input type="checkbox" checked disabled data-column="1"/>Име</label>
    <label><input type="checkbox" checked data-column="2"/>Преподавател</label>
    <label><input type="checkbox" checked data-column="3"/>Тип</label>
    <label><input type="checkbox" checked data-column="4"/>Кредити</label>
    <label><input type="checkbox" checked data-column="5"/>Оценка</label>
    <select id="semester-select" class="chosen-select">
      <option value="all" default>Всички семестри</option>
      <option value="semester1">Зимен 2020-2021</option> 
      <option value="semester2">Летен 2020-2021</option> 
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
          <th data-column="3" onclick="sortTable(this)">Тип <span class="fa fa-sort"></span></th>
          <th data-column="4" onclick="sortTable(this)">Кредити <span class="fa fa-sort"></span></th>
          <th data-column="5" onclick="sortTable(this)">Оценка <span class="fa fa-sort"></span></th>
        </tr>
      </thead>
      <tbody>
        <tr class="accordion-heading">
          <th colspan="5" onclick="toggleAccordion(1)">Зимен семестър 2020-2021 <span class="fa fa-angle-down"></span></th>
        </tr>
        <tr class="semester1">
          <td><a class="subject" data-subject="Информатика">Информатика</a></td>
          <td><a class="prof" data-name="Проф. Димитър Иванов">Проф. Димитър Иванов</a></td>
          <td>Редовна</td>
          <td>6</td>
          <td>5.50</td>
        </tr>
        <tr class="semester1">
          <td><a class="subject" data-subject="Английски език">Английски език</a></td>
          <td><a class="prof" data-name="Доц. Мария Петрова">Доц. Мария Петрова</a></td>
          <td>Избираема</td>
          <td>4</td>
          <td>6.00</td>
        </tr>
        <tr class="semester1">
          <td><a class="subject" data-subject="История на България">История на България</a></td>
          <td><a class="prof" data-name="Доц. Петър Димитров">Доц. Петър Димитров</a></td>
          <td>Редовна</td>
          <td>2</td>
          <td>5.25</td>
        </tr>
        <tr class="semester1">
          <td><a class="subject" data-subject="Математика">Математика</a></td>
          <td><a class="prof" data-name="Проф. Георги Илиев">Проф. Георги Илиев</a></td>
          <td>Редовна</td>
          <td>6</td>
          <td>5.75</td>
        </tr>
        <tr class="semester1">
          <td><a class="subject" data-subject="Социология">Социология</a></td>
          <td><a class="prof" data-name="Доц. Елена Николова">Доц. Елена Николова</a></td>
          <td>Избираема</td>
          <td>4</td>
          <td>6.00</td>
        </tr>
        <tr class="accordion-heading">
          <th colspan="5" onclick="toggleAccordion(2)">Летен семестър 2020-2021 <span class="fa fa-angle-down"></span></th>
        </tr>
        <tr class="semester2">
          <td><a class="subject" data-subject="Физика">Физика</a></td>
          <td><a class="prof" data-name="Проф. Иван Иванов">Проф. Иван Иванов</a></td>
          <td>Редовна</td>
          <td>6</td>
          <td>5.50</td>
        </tr>
        <tr class="semester2">
          <td><a class="subject" data-subject="Анализ на данни">Анализ на данни</a></td>
          <td><a class="prof" data-name="Доц. Мария Николова">Доц. Мария Николова</a></td>
          <td>Избираема</td>
          <td>4</td>
          <td>6.00</td>
        </tr>
        <tr class="semester2">
          <td><a class="subject" data-subject="Френски език">Френски език</a></td>
          <td><a class="prof" data-name="Проф. София Димитрова">Проф. София Димитрова</a></td>
          <td>Избираема</td>
          <td>4</td>
          <td>5.75</td>
        </tr>
        <tr class="semester2">
          <td><a class="subject" data-subject="Право">Право</a></td>
          <td><a class="prof" data-name="Доц. Петър Георгиев">Доц. Петър Георгиев</a></td>
          <td>Редовна</td>
          <td>6</td>
          <td>6.00</td>
        </tr>
        <tr class="semester2">
          <td><a class="subject" data-subject="Комуникационни умения">Комуникационни умения</a></td>
          <td><a class="prof" data-name="Проф. Мария Илиева">Проф. Мария Илиева</a></td>
          <td>Избираема</td>
          <td>2</td>
          <td>5.50</td>
        </tr>
        <tr class="accordion-heading">
          <th></th>
          <th></th>
          <th></th>
          <th id="sumCredits"></th>
          <th id="averageGrades"></th>
        </tr>
      </tbody>
    </table>
  </div>
</main>
<?php
include "./../../includes/footer.php";
?>
<script>
  function updateSummary() {
    var visibleRows = document.querySelectorAll('tbody tr:not(.accordion-heading):not([style*="display: none"])');
    var sumCredits = 0;
    var sumGrades = 0;

    for (var i = 0; i < visibleRows.length; i++) {
      var credits = parseInt(visibleRows[i].querySelector('td:nth-child(4)').textContent);
      var grade = parseFloat(visibleRows[i].querySelector('td:nth-child(5)').textContent);

      sumCredits += credits;
      sumGrades += grade;
    }

    var averageGrade = visibleRows.length === 0 ? 0 : sumGrades / visibleRows.length;

    document.getElementById('sumCredits').textContent = sumCredits;
    document.getElementById('averageGrades').textContent = averageGrade.toFixed(2);
  }

  // Call the updateSummary function when the accordion is toggled or when the page loads
  document.addEventListener('DOMContentLoaded', updateSummary);
</script>
</body>
</html>
