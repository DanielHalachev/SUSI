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
            <th>Преподавател</th>
            <th>Време</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Увод в програмирането</td>
            <td>Иван Иванов</td>
            <td>13:00 - 15:00</td>
          </tr>
          <tr>
            <td>Английски език</td>
            <td>Мария Петрова</td>
            <td>15:15 - 17:15</td>
          </tr>
          <tr>
            <td>Приятна почивка</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="messages">Messages</div>
  <div class="elective">Elective</div>
  <div class="cluster">
    <h2><a href="#">Taxes</a></h2>
    <div class="content">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Amount</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Semester tax</td>
            <td>200.00</td>
            <td><button class="paid">Платена</button></td>
          </tr>
          <tr>
            <td>Exam retake tax</td>
            <td>50.00</td>
            <td><a href="#" class="unpaid">Плати</a></td>
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
              <th>Marked</th>
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
            <tr><th>Фрактали</th></tr>
            <tr><th>Увод в статистиката</th></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="cluster">
    <h2><a href="#">Messages</a></h2>
    <div class="content">
      <ul>
        <li>
          <a href="#">John sent you a message</a>
          <p>Hey, did you understand the homework for Math class?</p>
          <small>2 hours ago</small>
        </li>
        <li>
          <a href="#">Jane sent you a message</a>
          <p>Hi, can I borrow your notes from History class?</p>
          <small>Yesterday</small>
        </li>
        <li>
          <a href="#">David sent you a message</a>
          <p>Do you want to form a study group for Science class?</p>
          <small>Last week</small>
        </li>
        <li>
          <p>Няма съобщения</p>
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
