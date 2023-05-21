<!DOCTYPE html>
<html lang="bg">
<head>

<?php
include "./../../includes/styles.php";
include "./../../includes/javascript.php"
?>
<link rel="stylesheet" type="text/css" href="../../css/teacher/queries.css"/>
</head>
<body>
<?php
include "./../../includes/teacher/header.php"
?>

<main id="queries-main">
  <h1>Справки</h1>
  <div class="selectors">
    <select name="year" id="year-select">
      <option value="instr" disabled selected>Изберете академична година</option>
      <option value="option1">2022/2023</option>
      <option value="option2">2021/2022</option>
      <option value="option3">2020/2021</option>
      <option value="option4">2019/2020</option>
      <option value="option5">2018/2019</option>
    </select>
    <select name="faculty" id="faculty-select">
      <option value="instr" disabled selected>Изберете факултет</option>
      <option value="option1">Биологически факултет</option>
      <option value="option2">Филологически класически и нови филологии</option>
      <option value="option3">Факултет по математика и информатика</option>
      <option value="option4">Факултет по науки за образованието и изкуствата</option>
      <option value="option5">Факултет по химия и фармация</option>
      <option value="option6">Физически факултет</option>
    </select>
    <select name="oks" id="oks-select">
      <option value="instr" disabled selected>Изберете ОКС</option>
      <option value="option1">Бакалавър</option>
      <option value="option2">Магистър</option>
      <option value="option3">Доктор</option>
      <option value="option4">Друго</option>
    </select>
    <select name="major" id="major-select">
      <option value="instr" disabled selected>Изберете специалност</option>
      <option value="option1">Английска филология</option>
      <option value="option2">Биология</option>
      <option value="option3">Биохимия</option>
      <option value="option4">Информатика</option>
      <option value="option5">Компютърни науки</option>
      <option value="option6">Математика</option>
      <option value="option7">Начална педагогика</option>
      <option value="option8">Софтуерни технологии</option>
      <option value="option9">Софтуерно инженерство</option>
    </select>
    <select name="semester" id="semester-select">
      <option value="instr" disabled selected>Изберете семестър</option>
      <option value="option1">Зимен</option>
      <option value="option2">Летен</option>
    </select>
    <select name="course" id="course-select">
      <option value="instr" selected disabled>Изберете дисциплина</option>
      <option value="option1">Вероятности и статистика</option>
      <option value="option2">Математическа статистика</option>
      <option value="option3">Статистика и емпирични методи</option>
      <option value="option4">Теория на вероятностите</option>
      <option value="option5">Увод в статистиката</option>
    </select>
    <button id="search-button">Търси</button>
  </div>
  <h2 id="query-name">ЗД <span style="font-weight: bold">Вероятности и статистика</span>
    <span class="export fa fa-file-csv"></span>
    <span class="export fa fa-file-pdf"></span>
  </h2>
  <hr id="line"/>
  <div id="query-course-characteristics">
    <div id="query-course-details">
      <h3>Академична година: <span style="font-weight: bold">2021/2022</span></h3>
      <h3>Брой записани студенти: <span style="font-weight: bold">120</span></h3>
      <h3>Кредити: <span style="font-weight: bold">7</span></h3>
      <h3>Семестър: <span style="font-weight: bold">Зимен</span></h3>
      <h3>Специалност: <span style="font-weight: bold">Компютърни науки</span></h3>
      <h3>Оценка: <span style="font-weight: bold">Изпит/Текуща оценка</span></h3>
      <h3>Факултет: <span style="font-weight: bold">ФМИ</span></h3>
      <h3>Курс: <span style="font-weight: bold">3</span></h3>
      <h3>Хорариум: <span style="font-weight: bold">30+30+30</span></h3>
    </div>
  </div>
  <!-- <div id="criteria-container"> -->
  <!--   <h3>Критерий: <span style="font-weight: bold">Имащи</span></h3> -->
  <!--   <select name="field" id="field-select"> -->
  <!--     <option value="instr" selected disabled>Изберете поле</option> -->
  <!--     <option value="option1">Факултетен номер</option> -->
  <!--     <option value="option2">Име</option> -->
  <!--     <option value="option3">Фамилия</option> -->
  <!--     <option value="option4">Специалност</option> -->
  <!--     <option value="option5">Курс</option> -->
  <!--     <option value="option6">Оценка</option> -->
  <!--   </select> -->
  <!--   <select name="operation" id="operation-select"> -->
  <!--   <option value="instr" selected disabled>Изберете оператор</option> -->
  <!--   <option value="option1">равно на</option> -->
  <!--   <option value="option2">по-голямо от</option> -->
  <!--   <option value="option3">по-голямо или равно на</option> -->
  <!--   <option value="option4">по-малко от</option> -->
  <!--   <option value="option5">по-малко или равно на</option> -->
  <!--   <option value="option6">различно от</option> -->
  <!-- </select> -->
  <!--   <input type="text" id="criteria-text-field"/> -->
  <!--   <button>Приложи</button> -->
  <!-- </div> -->
  <table id="query-grades-table">
    <thead>
      <th><a href="#">№ <span class="fa fa-sort"></span></a></th>
      <th><a href="#">Факултетен номер <span class="fa fa-sort"></span></a></th>
      <th><a href="#">Име <span class="fa fa-sort"></span></a></th>
      <th><a href="#">Презиме <span class="fa fa-sort"></span></a></th>
      <th><a href="#">Фамилия <span class="fa fa-sort"></span></a></th>
      <th><a href="#">Специалност <span class="fa fa-sort"></span></a></th>
      <th><a href="#">Курс <span class="fa fa-sort"></span></a></th>
      <th><a href="#">Оценка <span class="fa fa-sort"></span></a></th>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>81149</td>
        <td>Марин</td>
        <td>Димитров</td>
        <td>Христов</td>
        <td>КН</td>
        <td>3</td>
        <td>6.00</td>
      </tr>
      <tr>
        <td>2</td>
        <td>81008</td>
        <td>Иван</td>
        <td>Николов</td>
        <td>Иванов</td>
        <td>КН</td>
        <td>4</td>
        <td>5.75</td>
      </tr>
    </tbody>
  </table>
</main>
<!-- footer -->
<?php
include "./../../includes/footer.php"
?>
</body>
</html>
