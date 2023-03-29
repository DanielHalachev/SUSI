<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./../../css/student/timetable.css"/>    
    <?php
      include "./../../includes/styles.php";
      include "./../../includes/javascript.php";
    ?>
  <script type="text/javascript" src="./../../js/multiple-select.js"></script>
  </head>
  <body>
    <?php
      include "./../../includes/header.php";
    ?>
  <main>
  <div class="timetable-container">
    <h1>График</h1>
    <!-- <div class="timetable-filter"> -->
    <!--   <select multiple> -->
    <!--     <option value="monday">Понеделник</option> -->
    <!--     <option value="tuesday">Вторник</option> -->
    <!--     <option value="wednesday">Сряда</option> -->
    <!--     <option value="thursday">Четвъртък</option> -->
    <!--     <option value="friday">Петък</option> -->
    <!--   </select> -->
    <!--   <br> -->
    <!--   <label><input type="checkbox" name="lecture" value="lecture">Лекция</label> -->
    <!--   <label><input type="checkbox" name="exercise" value="exercise">Упражнение</label> -->
    <!-- </div> -->
      <div class="filter-container">
    <div class="filters">
            <div class="select-btn">
                <span class="btn-text">Изберете дни</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down">^</i>
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
      <div class="filters"> 
        <div class="select-btn">
                <span class="btn-text">Изберете тип</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down">^</i>
                </span>
            </div>

            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Лекции</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Упражнения</span>
                </li>
            </ul>
        </div>
        </div>
    <table>
      <thead>
        <tr>
          <th></th>
          <th>8:00</th>
          <th>9:00</th>
          <th>10:00</th>
          <th>11:00</th>
          <th>12:00</th>
          <th>13:00</th>
          <th>14:00</th>
          <th>15:00</th>
          <th>16:00</th>
          <th>17:00</th>
          <th>18:00</th>
          <th>19:00</th>
          <th>20:00</th>
          <th>21:00</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Понеделник</th>
          <td></td>
          <td></td>
          <td class="exercise" colspan="2">Математически анализ</br>проф. Иванов, 210 ФМИ</td>
          <td class="lecture" colspan="3">Операционни системи</br>доц. Петров, 101 ФМИ</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th>Вторник</th>
          <td class="both" colspan="3">Архитектура на компютърните системи</br>доц. Георгиев, 103 ФМИ</td>
          <td></td>
          <td></td>
          <td></td>
          <td class="lecture" colspan="2">Математически анализ</br>проф. Иванов, 210 ФМИ</td>
          <td class="exercise" colspan="3">Операционни системи</br>доц. Петров, 101 ФМИ</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th>Сряда</th>
          <td></td>
          <td></td>
          <td class="exercise" colspan="2">Линейна алгебра</br>проф. Георгиев, 201 ФМИ</td>
          <td></td>
          <td></td>
          <td class="lecture" colspan="2">Линейна алгебра</br>проф. Георгиев, 201 ФМИ</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th>Четвъртък</th>
          <td></td>
          <td class="lecture" colspan="2">Програмиране на C++</br>доц. Димитров, 104 ФМИ</td>
          <td></td>
          <td class="exercise" colspan="2">Програмиране на C++</br>доц. Димитров, 104 ФМИ</td>
          <td class="both" colspan="2">Теория на алгоритмите</br>проф. Николов, 105 ФМИ</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th>Петък</th>
          <td></td>
          <td></td>
          <td class="lecture" colspan="2">Функционално програмиране</br>проф. Костадинов, 102 ФМИ</td>
          <td class="exercise" colspan="2">Функционално програмиране</br>проф. Костадинов, 102 ФМИ</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr> 
        </tbody>
      </table>
</main>
    <?php
      include "./../../includes/footer.php";
    ?>
  </body>
</html>
