<!DOCTYPE html>
<html lang="bg">
<head>

<?php
include "./../../includes/styles.php";
include "./../../includes/javascript.php"
?>
<link rel="stylesheet" type="text/css" href="./../../css/dashboard.css"/>
<link rel="stylesheet" type="text/css" href="./../../css/admin/dashboard.css"/>
</head>
<body>
<?php
include "./../../includes/admin/header.php";
?>
<main>
  <div class="cluster">
    <h2 class="cluster-title"><a href="#">Управление на потребители</a></h2>
    <div class="cluster-content">
      <button>
        <span class="fa fa-user-plus"></span>
        <br/>
        Нов потребител
      </button>
      <button>
        <span class="fa fa-user-pen"></span>
        <br/>
        Редактирай потребител
      </button>
      <button>
        <span class="fa fa-user-xmark"></span>
        <br/>
        Изтрий потребител
      </button>
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
    <h2><a href="#">Управление на курсове</a></h2>
    <div class="cluster-content">
      <button>
        <span class="fa fa-file-circle-plus"></span>
        <br/>
        Нов<br/>курс
      </button>
      <button>
        <span class="fa fa-file-circle-xmark"></span>
        <br/>
        Редактирай курс
      </button>
    </div>
  </div>
  <!-- TODO  -->
  <div class="cluster" style="flex: 2; min-width: 800px;">
    <h2><a href="#">Кампания за избираеми дисциплини</a></h2>
    <div class="cluster-content">
      <table>
        <thead>
          <tr>
            <th>Факултет</th>
            <th>Етап</th>
            <th>Начало</th>
            <th>Край</th>
            <th><span class="fa fa-pen-to-square"></span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ФМИ</td>
            <td>1</td>
            <td>14.03.2023 12:00</td>
            <td>21.03.2023 12:00</td>
            <td class="payment-status"><a class="negative"><span class="fa fa-pen-to-square"></span></a></td>
          </tr>
          <tr>
            <td>ФМИ</td>
            <td>2</td>
            <td>21.03.2023 12:00</td>
            <td>28.03.2023 12:00</td>
            <td class="payment-status"><a class="negative"><span class="fa fa-pen-to-square"></span></a></td>
          </tr>
          <tr>
            <td>ФХФ</td>
            <td>1</td>
            <td>21.03.2023 8:00</td>
            <td>28.03.2023 8:00</td>
            <td class="payment-status"><a href="#" class="negative"><span class="fa fa-pen-to-square"></span></a></td>
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
