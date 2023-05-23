<!DOCTYPE html>
<html lang="bg">
<head>

<?php
include "./../../includes/styles.php";
include "./../../includes/javascript.php"
?>
<link rel="stylesheet" type="text/css" href="./../../css/student/dashboard.css"/>
</head>
<body>
<?php
include "./../../includes/student/header.php"
?>
<main id="hello">
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
            <td>Английски език</td>
            <td>ФМИ, 313</td>
            <td>09:00</td>
          </tr>
          <tr>
            <td>Бази данни</td>
            <td>ФМИ, 325</td>
            <td>11:00</td>
          </tr>
          <tr>
            <td>Увод в програмирането</td>
            <td>ФМИ, 200</td>
            <td>13:00</td>
          </tr>
          <tr>
            <td>ОO програмиране</td>
            <td>ФМИ, 313</td>
            <td>15:00</td>
          </tr>
          <tr>
            <td>Операционни системи</td>
            <td>ФМИ, 325</td>
            <td>17:00</td>
          </tr>
          <tr>
            <td>Увод в програмирането</td>
            <td>ФМИ, 200</td>
            <td>19:00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="cluster">
    <h2><a href="#">Такси</a></h2>
    <div class="cluster-content">
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
            <td class="no-padding"><a class="neutral">Платена</a></td>
          </tr>
          <tr>
            <td>Exam retake tax</td>
            <td>50.00</td>
            <td class="no-padding"><a href="#" class="positive">Плати</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="cluster">
    <h2><a href="#">Отбелязани избираеми дисциплини</a></h2>
    <div class="cluster-content">
      <table>
        <thead>
          <tr>
            <th>Име</th>
            <th>Записана</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Програмиране с Java</td>
            <td class="no-padding"><input type="checkbox"></td>
          </tr>
          <tr>
            <td>Фрактали</td>
            <td class="no-padding"><input type="checkbox" checked></td>
          </tr>
          <tr>
            <td>Увод в статистиката</td>
            <td class="no-padding"><input type="checkbox" checked></td>
          </tr>
          <tr>
            <td>Функционално програмиране</td>
            <td class="no-padding"><input type="checkbox"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="cluster">
    <h2><a href="#">Записани избираеми дисциплини</a></h2>
    <div class="cluster-content">
      <table>
        <thead>
          <tr>
            <th>Дисциплина</th>
            <th>Преподавател</th>
            <th>Кредити</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Фрактали</td>
            <td>Милко Такев</td>
            <td>8</td>
          </tr>
          <tr>
            <td>Увод в статистиката</td>
            <td>Мая Желязкова</td>
            <td>5</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="cluster">
    <h2><a href="#">Съобщения</a></h2>
    <div class="cluster-content">
      <ul class="message-list">
        <li class="message">
          <a href="#">Добре дошли в курса по Джава</a>
          <br/><small>Евгений Кръстев</small>,
          <small>Преди 2 часа</small>
        </li>
        <li class="message">
          <a href="#">Провеждане на курса по Увод в програмирането</a>
          <br/><small>Александър Димов</small>,
          <small>Вчера</small>
        </li>
        <li class="message">
          <a href="#">Гост-лектор</a>
          <br/><small>Боян Бончев</small>,
          <small>19.03 9:00</small>
        </li>
      </ul>
    </div>
    </div>
    <div class="cluster">
      <h2><a href="#">Оценки</a></h2>
      <div class="cluster-content">
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
              <td>Дискретни структури</td>
              <td>Андрей Сариев</td>
              <td>4.50</td>
            </tr>
            <tr>
              <td>Алгебра</td>
              <td>Боряна Ангелова</td>
              <td>5.00</td>
            </tr>
            <tr>
              <td>Комуникативни умения</td>
              <td>Симеон Петров</td>
              <td>4.00</td>
            </tr>
            <tr>
              <td>Структури от данни</td>
              <td>Боян Димитров</td>
              <td>5.50</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</main>
<!-- footer -->
<?php
include "./../../includes/footer.php"
?>
</body>
</html>
