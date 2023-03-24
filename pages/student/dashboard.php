<html>
<head>
<?php
include "./../../includes/styles.php";
include "./../../includes/javascript.php"
?>
<link rel="stylesheet" type="text/css" href="./../../css/dashboard.css"/>
</head>
<body>
<header>
<h1>Logo</h1>
<?php
include "./../../includes/header.php"
?>
</header>
<main>
  <div id="timetable" class="cluster">
    <h2 class="cluster-title"><a href="#">Разписание на занятията</a></h2>
    <div class="cluster-content">
      <table>
        <thead>
          <tr>
            <th>Дисциплина</th>
            <th>Място</th>
            <th>Начало</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Увод в програмирането</td>
            <td>ФМИ, 200</td>
            <td>13:00</td>
          </tr>
          <tr>
            <td>Английски език</td>
            <td>ФМИ, 313</td>
            <td>15:15</td>
          </tr>
          <tr>
            <td>Бази данни</td>
            <td>ФМИ, 325</td>
            <td>16:00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="cluster">
    <h2><a href="#">Taxes</a></h2>
    <div class="content">
      <table>
        <thead>
          <tr>
            <th>Такса</th>
            <th>Сума</th>
            <th>Статус</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Семестриална такса</td>
            <td>450лв.</td>
            <td><button class="paid">Платена</button></td>
          </tr>
          <tr>
            <td>Exam retake tax</td>
            <td>50.00</td>
            <td><button href="#" class="unpaid">Плати</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="cluster">
    <h2><a href="#">Избираеми дисциплини</a></h2>
    <div class="content">
      <div class="left-list">
        <h3>Маркирани</h3>
        <table>
          <thead>
            <tr>
              <th>Име</th>
              <th>Маркер</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Introduction to Programming</td>
              <td><input type="checkbox" name="mark" value="EL01"></td>
            </tr>
            <tr>
              <td>Database Management Systems</td>
              <td><input type="checkbox" name="mark" value="EL02" checked></td>
            </tr>
            <tr>
              <td>Web Development</td>
              <td><input type="checkbox" name="mark" value="EL03"></td>
            </tr>
            <tr>
              <td>Artificial Intelligence</td>
              <td><input type="checkbox" name="mark" value="EL04"></td>
            </tr>
            <!-- add more rows as needed -->
          </tbody>
        </table>
      </div>
      <div class="right-list">
        <h3>Записани</h3>
        <table>
          <thead>
            <tr>
              <th>Име</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Фрактали</td></tr>
            <tr><td>Увод в статистиката</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="cluster">
    <h2><a href="#">Съобщения</a></h2>
    <div class="content">
      <ul>
        <li>
          <a href="#">Добре дошли в курса по Джава</a>
          <p>Евгений Кръстев</p>
          <small>Преди 2 часа</small>
        </li>
        <li>
          <a href="#">Провеждане на курса по Увод в програмирането</a>
          <p>Александър Димов</p>
          <small>Вчера</small>
        </li>
        <li>
          <a href="#">Гост-лектор</a>
          <p>Боян Бончев<p>
          <small>19.03, 9:00</small>
        </li>
      </ul>
    </div>
    <div class="cluster">
      <h2><a href="#">Оценки</a></h2>
      <div class="content">
        <table>
          <thead>
            <tr>
              <th>Дисциплина</th>
              <th>Преподавател</th>
              <th>Оценка</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Math</td>
              <td>John Smith</td>
              <td>4.5</td>
            </tr>
            <tr>
              <td>History</td>
              <td>Jane Doe</td>
              <td>5.0</td>
            </tr>
            <tr>
              <td>Science</td>
              <td>David Johnson</td>
              <td>4.0</td>
            </tr>
            <tr>
              <td>English</td>
              <td>Mary Williams</td>
              <td>5.5</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
<!-- footer -->
<?php
include "./../../includes/footer.php"
?>
</body>
</html>
