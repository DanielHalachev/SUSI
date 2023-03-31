<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./../../css/student/grades.css"/>    
  <link rel="stylesheet" type="text/css" href="./../../css/student/elective.css"/>    
    <?php
      include "./../../includes/styles.php";
      include "./../../includes/javascript.php";
    ?>
  </head>
  <body>
    <?php
      include "./../../includes/header.php";
    ?>
  <main>
  <h1>Оценки и кредити</h1>
  <input type="search" placeholder="Потърсете дисциплина"/>
  <div class="optional-headers">
    <label><input type="checkbox"/>Име</label>
    <label><input type="checkbox"/>Преподавател</label>
    <label><input type="checkbox"/>Тип</label>
    <label><input type="checkbox"/>Кредити</label>
    <label><input type="checkbox"/>Оценка</label>
        <div class="filter-container">
          <div class="select-btn">
            <span class="btn-text">Изберете семестър</span>
            <span class="arrow-dwn">
              <i class="fa-solid fa-chevron-down"></i>
            </span>
          </div>

          <ul class="list-items">
            <li class="item">
              <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
              </span>
              <span class="item-text">Понеделник</span>
            </li>
            <li class="item">
              <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
              </span>
              <span class="item-text">Вторник</span>
            </li>
            <li class="item">
              <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
              </span>
              <span class="item-text">Сряда</span>
            </li>
            <li class="item">
              <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
              </span>
              <span class="item-text">Четвъртък</span>
            </li>
            <li class="item">
              <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
              </span>
              <span class="item-text">Петък</span>
            </li>
            <li class="item">
              <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
              </span>
              <span class="item-text">Събота</span>
            </li>
          </ul>
          </div>
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
        <tr>
          <th colspan="5">Зимен семестър 2020-2021 <span class="fa fa-angle-down"></span></th>
        </tr>
        <tr>
          <td>Информатика</td>
          <td>Проф. Димитър Иванов</td>
          <td>Редовна</td>
          <td>6</td>
          <td>5.50</td>
        </tr>
        <tr>
          <td>Английски език</td>
          <td>Доц. Мария Петрова</td>
          <td>Избираема</td>
          <td>4</td>
          <td>6.00</td>
        </tr>
        <tr>
          <td>История на България</td>
          <td>Доц. Петър Димитров</td>
          <td>Редовна</td>
          <td>2</td>
          <td>5.25</td>
        </tr>
        <tr>
          <td>Математика</td>
          <td>Проф. Георги Илиев</td>
          <td>Редовна</td>
          <td>6</td>
          <td>5.75</td>
        </tr>
        <tr>
          <td>Социология</td>
          <td>Доц. Елена Николова</td>
          <td>Избираема</td>
          <td>4</td>
          <td>6.00</td>
        </tr>
        <tr>
          <th colspan="5">Летен семестър 2020-2021 <span class="fa fa-angle-down"></span></th>
        </tr>
        <tr>
          <td>Физика</td>
          <td>Проф. Иван Иванов</td>
          <td>Редовна</td>
          <td>6</td>
          <td>5.50</td>
        </tr>
        <tr>
          <td>Анализ на данни</td>
          <td>Доц. Мария Николова</td>
          <td>Избираема</td>
          <td>4</td>
          <td>6.00</td>
        </tr>
        <tr>
          <td>Френски език</td>
          <td>Проф. София Димитрова</td>
          <td>Избираема</td>
          <td>4</td>
          <td>5.75</td>
        </tr>
        <tr>
          <td>Право</td>
          <td>Доц. Петър Георгиев</td>
          <td>Редовна</td>
          <td>6</td>
          <td>6.00</td>
        </tr>
        <tr>
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
