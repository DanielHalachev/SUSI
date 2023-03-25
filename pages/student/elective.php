<!DOCTYPE html>
<html>
<head>
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
      <h1>Избираеми дисциплини</h1>
      <input type="search" placeholder="Потърсете избираема дисциплина"/>
      <table>
        <tr>
          <td><label><input type="checkbox"/>Име</label></td>
          <td><label><input type="checkbox"/>Преподавател</label></td>
          <td><label><input type="checkbox"/>Кредити</label></td>
          <td><label><input type="checkbox"/>Оценка</label></td>
          <td><label><input type="checkbox"/>Препоръчителен семестър</label></td>
          <td><label><input type="checkbox"/>Рейтинг</label></td>
          <td><label><input type="checkbox"/>Маркиране</label></td>
          <td><label><input type="checkbox"/>Записване</label></td>
        </tr>
      </table>
      <hr/>
      <table>
        <thead>
        <tr>
          <th>Име</th>
          <th>Преподавател</th>
          <th>Кредити</th>
          <th>Оценка</th>
          <th>Препоръчителен семестър</th>
          <th>Рейтинг</th>
          <th>Маркиране</th>
          <th>Записване</th>
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
  <td><button class="enroll-btn">Записване</button></td>
</tr>
<tr>
  <td>Английски език 1</td>
  <td>Преп. Мария Петрова</td>
  <td>3</td>
  <td>Текуща оценка</td>
  <td>1</td>
  <td>4.3</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване</button></td>
</tr>
<tr>
  <td>Основи на базите данни</td>
  <td>Проф. д-р Николай Николов</td>
  <td>4</td>
  <td>Изпит/Текуща оценка</td>
  <td>2</td>
  <td>4.5</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване</button></td>
</tr>
<tr>
  <td>Криптография</td>
  <td>Проф. д-р Стефан Стефанов</td>
  <td>6</td>
  <td>Изпит</td>
  <td>4</td>
  <td>4.8</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване в опашка</button></td>
</tr>
<tr>
  <td>Интернет програмиране</td>
  <td>Доц. д-р Мария Георгиева</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>3</td>
  <td>4.4</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване</button></td>
</tr>
<tr>
  <td>Дискретни структури</td>
  <td>Проф. д-р Петър Петров</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>2</td>
  <td>4.5</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване в опашка</button></td>
</tr>
       <tr>
  <td>Увод в програмирането</td>
  <td>Доц. д-р Иван Иванов</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>1</td>
  <td>4.6</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване</button></td>
</tr>
<tr>
  <td>Английски език 1</td>
  <td>Преп. Мария Петрова</td>
  <td>3</td>
  <td>Текуща оценка</td>
  <td>1</td>
  <td>4.3</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване</button></td>
</tr>
<tr>
  <td>Основи на базите данни</td>
  <td>Проф. д-р Николай Николов</td>
  <td>4</td>
  <td>Изпит/Текуща оценка</td>
  <td>2</td>
  <td>4.5</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване</button></td>
</tr>
<tr>
  <td>Криптография</td>
  <td>Проф. д-р Стефан Стефанов</td>
  <td>6</td>
  <td>Изпит</td>
  <td>4</td>
  <td>4.8</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване в опашка</button></td>
</tr>
<tr>
  <td>Интернет програмиране</td>
  <td>Доц. д-р Мария Георгиева</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>3</td>
  <td>4.4</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване</button></td>
</tr>
<tr>
  <td>Дискретни структури</td>
  <td>Проф. д-р Петър Петров</td>
  <td>5</td>
  <td>Изпит/Текуща оценка</td>
  <td>2</td>
  <td>4.5</td>
  <td><input type="checkbox"/></td>
  <td><button class="enroll-btn">Записване в опашка</button></td>
</tr>
        </tbody>
      </table>
    </main>
    <?php
      include "./../../includes/footer.php";
    ?>
  </body>
</html>
