<!DOCTYPE html>
<html lang="bg">
<head>

<?php
include "./../../includes/styles.php";
include "./../../includes/javascript.php"
?>
<link rel="stylesheet" type="text/css" href="./../../css/student/settings.css"/>
<script src="./../../js/tabs.js"></script>
</head>
<body>
<?php
include "./../../includes/header.php"
?>
<main>
  <div class="personal-info">
    <div class="image-settings">
      <img src="./../../images/profile-pic.jpg">
        <div>
      <a href="#"><span class="fa fa-pen-to-square"></span</a>
      <a href="#"><span class="fa fa-trash"></span></a>
        </div>
    </div>
    <table>
      <tbody>
        <tr>
          <td>Име</td>
          <td>Иван Петров Иванов</td>
        </tr>
        <tr>
          <td>Факултет</td>
          <td>ФМИ</td>
        </tr>
        <tr>
          <td>Специалност</td>
          <td>Софтуерно инженерство</td>
        </tr>
        <tr>
          <td>Факултетен номер</td>
          <td>62547</td>
</tr>
        <tr>
          <td>Курс</td>
          <td>3</td>
        </tr>
        <tr>
          <td>Група</td>
          <td>2</td>
        </tr>
        <tr>
          <td>Имейл</td>
          <td>somerandomemail@fmi.uni-sofia.bg <span class="fa fa-pen-to-square"></span></td>
        </tr>
        <tr>
          <td>Телефон</td>
          <td>0888888888 <span class="fa fa-pen-to-square"></td>
        </tr>
        <tr>
          <td>Адрес</td>
          <td>гр. Плевен, ул. "Гренадерска" 21 <span class="fa fa-pen-to-square"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tabs">
    <div class="tabline">
      <button class="tablinks" onclick="openTab(event, 'taxes')">Такси</button>
      <button class="tablinks" onclick="openTab(event, 'health-insurance')">Здравно осигуряване</button>
      <button class="tablinks" onclick="openTab(event, 'logins')">Логвания</button>
    </div> 
    <div id="taxes" class="tabcontent">
      <table>
        <thead>
          <tr>
            <th>Такса</th>
            <th>Сума (лв.)</th>
            <th>Статус</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Семестриална такса</td>
            <td>450.00</td>
            <td class="payment-status"><a class="positive">Платена</a></td>
          </tr>
          <tr>
            <td>Дискретни структури 1</td>
            <td>50.00</td>
            <td class="payment-status"><a href="#" class="negative">Плати</a></td>
          </tr>
        </tbody>
      </table>
      <br/>
      <hr/>
      <br/>
      <form>
        <select>
          <option selected disabled>Изберете предмет</option>
          <option>Дискретни структури 1</option>
        </select>
        <input type="submit" class="button" value="Генериране на такса"/>
      </form>
          
    </div>
    <div id="health-insurance" class="tabcontent">
      <table>
  <thead>
    <tr>
      <th>Година</th>
      <th>Януари</th>
      <th>Февруари</th>
      <th>Март</th>
      <th>Април</th>
      <th>Май</th>
      <th>Юни</th>
      <th>Юли</th>
      <th>Август</th>
      <th>Септември</th>
      <th>Октомври</th>
      <th>Ноември</th>
      <th>Декември</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>2020</th>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
    </tr>
    <tr>
      <th>2021</th>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
    </tr>
    <tr>
      <th>2022</th>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
    </tr>
    <tr>
      <th>2023</th>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="paid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
      <td class="unpaid"></td>
    </tr>
  </tbody>
</table>
    </div>
    <div id="logins" class="tabcontent">
      <table>
  <thead>
    <tr>
      <th>Дата и час</th>
      <th>Устройство</th>
      <th>IP адрес</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>27/01/2023 14:05:23</td>
      <td>Windows 10 / Chrome 97.0.4692.99</td>
      <td>192.168.1.1</td>
    </tr>
    <tr>
      <td>25/01/2023 08:47:19</td>
      <td>Mac OS X / Safari 15.1</td>
      <td>172.16.0.2</td>
    </tr>
    <tr>
      <td>23/01/2023 17:31:11</td>
      <td>Windows 11 / Firefox 95.0</td>
      <td>10.0.0.1</td>
    </tr>
    <tr>
      <td>21/01/2023 22:09:45</td>
      <td>iOS 15 / Safari 15.1</td>
      <td>192.168.0.10</td>
    </tr>
    <tr>
      <td>19/01/2023 11:15:33</td>
      <td>Android 12 / Chrome 96.0.4664.93</td>
      <td>192.168.1.100</td>
    </tr>
    <tr>
      <td>17/01/2023 16:22:01</td>
      <td>Windows 10 / Edge 98.0.1108.56</td>
      <td>192.168.1.50</td>
    </tr>
    <tr>
      <td>15/01/2023 09:43:10</td>
      <td>Linux / Firefox 95.0.1</td>
      <td>172.16.0.100</td>
    </tr>
    <tr>
      <td>13/01/2023 14:58:21</td>
      <td>Mac OS X / Chrome 97.0.4692.99</td>
      <td>192.168.1.2</td>
    </tr>
    <tr>
      <td>11/01/2023 18:30:05</td>
      <td>iOS 14 / Safari 14.1</td>
      <td>10.0.0.2</td>
    </tr>
    <tr>
      <td>09/01/2023 21:05:57</td>
      <td>Windows 11 / Edge 98.0.1108.56</td>
      <td>192.168.1.20</td>
    </tr>
    <tr>
      <td>07/01/2023 12:18:13</td>
      <td>Android 11 / Chrome 96.0.4664.93</td>
      <td>192.168.0.2</td>
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
