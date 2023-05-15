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
<script src="./../../js/tableSort.js"></script> 
</head>
<body>
  <?php
    include "./../../includes/header.php";
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
    <select data-placeholder="Begin typing" class="chosen-select">
      <option>Изберете семестър</option>
      <option>Зимен 2020-2021</option> 
      <option>Летен 2020-2021</option> 
      <option>Зимен 2021-2022</option> 
      <option>Летен 2021-2022</option> 
      <option>Зимен 2022-2023</option> 
      <option>Летен 2023-2023</option> 
    </select>
    <span class="export fa fa-file-csv"></span>
    <span class="export fa fa-file-pdf"></span>
  </div>
  <br/>
  <hr/>
  <br/>
  <div>
    <table>
      <thead>
        <tr>
          <th>Име <span class="fa fa-filter"></span></th>
          <th>Преподавател <span class="fa fa-filter"></span></th>
          <th>Тип <span class="fa fa-filter"></span></th>
          <th>Кредити <span class="fa fa-filter"></span></th>
          <th>Оценка <span class="fa fa-filter"></span></th>
        </tr>
      </thead>
      <tbody>
        <tr class="accordion-heading">
          <th colspan="5" onclick="toggleAccordion(1)">Зимен семестър 2020-2021 <span class="fa fa-angle-down"></span></th>
        </tr>
        <tr class="semester1">
          <td><a>Информатика</a></td>
          <td data-info="GoodBye">Проф. Димитър Иванов</td>
          <td>Редовна</td>
          <td>6</td>
  <td>5.50</td>
        </tr>
        <tr class="semester1">
          <td>Английски език</td>
          <td>Доц. Мария Петрова</td>
          <td>Избираема</td>
          <td>4</td>
          <td>6.00</td>
        </tr>
        <tr class="semester1">
          <td>История на България</td>
          <td>Доц. Петър Димитров</td>
          <td>Редовна</td>
          <td>2</td>
          <td>5.25</td>
        </tr>
        <tr class="semester1">
          <td>Математика</td>
          <td>Проф. Георги Илиев</td>
          <td>Редовна</td>
          <td>6</td>
          <td>5.75</td>
        </tr>
        <tr class="semester1">
          <td>Социология</td>
          <td>Доц. Елена Николова</td>
          <td>Избираема</td>
          <td>4</td>
          <td>6.00</td>
        </tr>
        <tr class="accordion-heading">
          <th colspan="5" onclick="toggleAccordion(2)">Летен семестър 2020-2021 <span class="fa fa-angle-down"></span></th>
        </tr>
        <tr class="semester2">
          <td>Физика</td>
          <td>Проф. Иван Иванов</td>
          <td>Редовна</td>
          <td>6</td>
          <td>5.50</td>
        </tr>
        <tr class="semester2">
          <td>Анализ на данни</td>
          <td>Доц. Мария Николова</td>
          <td>Избираема</td>
          <td>4</td>
          <td>6.00</td>
        </tr>
        <tr class="semester2">
          <td>Френски език</td>
          <td>Проф. София Димитрова</td>
          <td>Избираема</td>
          <td>4</td>
          <td>5.75</td>
        </tr>
        <tr class="semester2">
          <td>Право</td>
          <td>Доц. Петър Георгиев</td>
          <td>Редовна</td>
          <td>6</td>
          <td>6.00</td>
        </tr>
        <tr class="semester2">
          <td>Комуникационни умения</td>
          <td>Проф. Мария Илиева</td>
          <td>Избираема</td>
          <td>2</td>
          <td>5.50</td>
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
