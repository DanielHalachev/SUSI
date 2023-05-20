<!DOCTYPE html>
<html lang="bg">
<head>
    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php"
    ?>

    <link rel="stylesheet" type="text/css" href="../../css/teacher/settings.css"/>
    <script src="./../../js/tabs.js"></script>

    <script>
        window.addEventListener('load', function() {
            const mainCheckbox = document.querySelector('.main-option input');
            const subOptions = document.querySelector('.sub-options');

            mainCheckbox.addEventListener('change', () => {
                subOptions.classList.toggle('visible', mainCheckbox.checked);
                subOptions.querySelectorAll('input[type="checkbox"]').forEach(function (checkbox){checkbox.disabled = !checkbox.disabled});
            });
        });
    </script>

</head>

<?php
include "./../../includes/teacher/header.php"
?>
    <main>
<div class="personal-info">
    <div class="image-settings">
        <img src="./../../images/profile-pic-teacher.jpg">
        <div>
            <button><span class="fa fa-pen-to-square"></span> Редактиране</button>
            <button><span class="fa fa-trash"></span> Премахване</button>
            <button><span class="fa fa-key"></span> Смяна на парола</button>
        </div>
    </div>
    <table id="bio-details">
        <tbody>
        <tr>
            <td>Име</td>
            <td>Иван Христов Георгиев</td>
        </tr>
        <tr>
            <td>Титла</td>
            <td>проф. д-р</td>
        </tr>
        <tr>
            <td>Факултет</td>
            <td>ФМИ</td>
        </tr>
        <tr>
            <td>Катедра</td>
            <td>Вероятности и статистика</td>
        </tr>
        <tr>
            <td>Имейл</td>
            <td>ivan.georgiev@fmi.uni-sofia.bg <span class="fa fa-pen-to-square"></span></td>
        </tr>
        <tr>
            <td>Телефон</td>
            <td>0887896666 <span class="fa fa-pen-to-square"></td>
        </tr>
        <tr>
            <td>Адрес</td>
            <td>гр. София, ул. "Хан Крум" 34 <span class="fa fa-pen-to-square"></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="tabs">
    <div class="tabline">
<!--        <button class="neutral tablinks" onclick="openTab(event, 'taxes')">Такси</button>-->
        <button class="neutral tablinks" onclick="openTab(event, 'health-insurance')">Здравно осигуряване</button>
        <button class="neutral tablinks" onclick="openTab(event, 'logins')">Логвания</button>
        <button class="neutral tablinks" onclick="openTab(event, 'card-settings')">Настройки на началната страница</button>
        <button class="neutral tablinks" onclick="openTab(event, 'email-settings')">Настройки на известията</button>
        <button class="neutral tablinks" onclick="openTab(event, 'theme-settings')">Tема</button>
    </div>
<!--    <div id="taxes" class="tabcontent">-->
<!--        <h2>Такси</h2>-->
<!--        <table>-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Такса</th>-->
<!--                <th>Сума (лв.)</th>-->
<!--                <th>Статус</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr>-->
<!--                <td>Семестриална такса</td>-->
<!--                <td>450.00</td>-->
<!--                <td class="payment-status"><a class="neutral">Платена</a></td>-->
<!--            </tr>-->
<!--            <tr id="hidden-tax" style="display: none;">-->
<!--                <td>Дискретни структури 1</td>-->
<!--                <td>50.00</td>-->
<!--                <td class="payment-status"><a href="#" class="positive">Плати</a></td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
<!--        <br/>-->
<!--        <hr/>-->
<!--        <br/>-->
<!--        <div>-->
<!--            <select>-->
<!--                <option selected disabled>Изберете предмет</option>-->
<!--                <option>Дискретни структури 1</option>-->
<!--            </select>-->
<!--            <button class="neutral" onclick="document.getElementById('hidden-tax').style.display='table-row';">Генериране на такса</button>-->
<!--        </div>-->
<!---->
<!--    </div>-->
    <div id="health-insurance" class="tabcontent">
        <h2>Здравно осигуряване</h2>
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
                <th>2013</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2014</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2015</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2016</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2017</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2018</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2019</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2020</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2021</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2022</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
            </tr>
            <tr>
                <th>2023</th>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
                <td><span class="fa fa-check"></span></td>
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
    </div>
    <div id="logins" class="tabcontent">
        <h2>Логвания</h2>
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
                <td>18/05/2023 17:07:16</td>
                <td>Windows 11 / Chrome 97.0.4692.99</td>
                <td>192.168.2.1</td>
            </tr>
            <tr>
                <td>16/05/2023 09:16:16</td>
                <td>Mac OS X / Safari 15.1</td>
                <td>172.16.0.2</td>
            </tr>
            <tr>
                <td>09/05/2023 17:31:11</td>
                <td>Windows 10 / Firefox 95.0</td>
                <td>10.0.0.1</td>
            </tr>
            <tr>
                <td>06/05/2023 22:09:45</td>
                <td>iOS 15 / Safari 15.1</td>
                <td>192.168.0.10</td>
            </tr>
            <tr>
                <td>01/05/2023 11:15:33</td>
                <td>Android 12 / Chrome 96.0.4664.93</td>
                <td>192.168.1.100</td>
            </tr>
            <tr>
                <td>26/04/2023 16:22:01</td>
                <td>Windows 10 / Edge 98.0.1108.56</td>
                <td>192.168.1.50</td>
            </tr>
            <tr>
                <td>16/04/2023 09:43:10</td>
                <td>Linux / Firefox 95.0.1</td>
                <td>172.16.0.100</td>
            </tr>
            <tr>
                <td>10/04/2023 14:58:21</td>
                <td>Mac OS X / Chrome 97.0.4692.99</td>
                <td>192.168.1.2</td>
            </tr>
            <tr>
                <td>06/04/2023 11:30:05</td>
                <td>iOS 14 / Safari 14.1</td>
                <td>10.0.0.2</td>
            </tr>
            <tr>
                <td>26/03/2023 16:06:16</td>
                <td>Windows 11 / Edge 98.0.1108.56</td>
                <td>192.168.1.20</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="card-settings" class="tabcontent">
        <h2>Настройки на началната страница</h2>
        <label class="main-option"><input type="checkbox" checked />Статични карти</label>
        <div class="sub-options visible">
            <label><input type="checkbox" checked/>График за деня</label>
            <label><input type="checkbox" checked/>Кампания за избираеми дисциплини</label>
            <label><input type="checkbox" checked/>Управление на курсове</label>
            <label><input type="checkbox" checked/>Съобщения</label>
            <label><input type="checkbox"/>Протоколи</label>
        </div>
    </div>
    <div id="email-settings" class="tabcontent">
        <h2>Настройки на известията</h2>
        <p>Получаване на имейл при:</p>
        <label><input type="checkbox" checked/>ново съобщение</label>
        <label><input type="checkbox" checked/>промяна в графика</label>
        <label><input type="checkbox"/>промяна на броя записани в избираема дисциплина</label>
    </div>
    <div id="theme-settings" class="tabcontent">
        <h2>Тема</h2>
        <label><input type="checkbox" onchange="toggleTheme()"/>Тъмна тема</label>
    </div>
</div>

</main>


<!-- footer -->
<?php
include "./../../includes/footer.php"
?>
</body>
</html>
