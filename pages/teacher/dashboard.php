<!DOCTYPE html>
<html lang="bg">
<head>

    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php"
    ?>
    <link rel="stylesheet" type="text/css" href="./../../css/dashboard.css"/>
    <link rel="stylesheet" type="text/css" href="./../../css/teacher/dashboard.css"/>
</head>
<body>
<?php
include "./../../includes/teacher/header.php"
?>

<main id="hello">
    <div id="daily-timetable" class="cluster">
        <h2 class="cluster-title"><a href="#">График за деня</a></h2>
        <div class="cluster-content">
            <table>
                <thead>
                <tr>
                    <th>Вид</th>
                    <th>Дисциплина</th>
                    <th>Тип</th>
                    <th>Място</th>
                    <th>Време</th>
                    <th>Специалност</th>
                    <th>Курс</th>
                    <th>Група</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ЗД</td>
                    <td>Статистика и емпирични методи</td>
                    <td>Лекция</td>
                    <td>ФМИ, 200</td>
                    <td>10:00<br/>12:00</td>
                    <td>СИ</td>
                    <td>3</td>
                    <td>1,2,3,4,5,6</td>
                </tr>
                <tr>
                    <td>ЗД</td>
                    <td>Вероятности и статистика</td>
                    <td>Лекция</td>
                    <td>ФМИ, 200</td>
                    <td>14:00<br/>16:00</td>
                    <td>КН</td>
                    <td>3</td>
                    <td>1,2,3,4</td>
                </tr>
                <tr>
                    <td>ИД</td>
                    <td>Теория на вероятностите</td>
                    <td>Упражнение</td>
                    <td>ФМИ, 514</td>
                    <td>16:00<br/>18:00</td>
                    <td>СИ, КН, И</td>
                    <td>2,3,4</td>
                    <td>1</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="messages" class="cluster">
        <h2><a href="#">Съобщения</a></h2>
        <div class="cluster-content">
            <ul class="message-list">
                <li class="message">
                    <a href="#">Служебна командировка</a>
                    <br/><small>Димитър Димитров</small>,
                    <small>Преди 6 часа</small>
                </li>
                <li class="message">
                    <a href="#">Добре дошли в курса по ВИС</a>
                    <br/><small>Иван Георгиев</small>,
                    <small>26.03 11:40</small>
                </li>
                <li class="message">
                    <a href="#">Гост-лектор</a>
                    <br/><small>Боян Бончев</small>,
                    <small>19.03 9:00</small>
                </li>
            </ul>
        </div>
    </div>
    <div id="elective-courses" class="cluster">
        <h2><a href="#">Кампания за избираеми дисциплини</a></h2>
        <div class="cluster-content">
            <table>
                <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>Вид</th>
                    <th>Дисциплина</th>
                    <th>Кредити</th>
                    <th>Начин на оценяване</th>
                    <th>Брой записани</th>
                    <th>Лимит</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#"><span class="fa fa-cog"></span></a></td>
                    <td>ИД</td>
                    <td>Математическа статистика</td>
                    <td>6</td>
                    <td>Изпит</td>
                    <td><strong>16</strong></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td><a href="#"><span class="fa fa-cog"></span></a></td>
                    <td>ИД</td>
                    <td>Теория на вероятностите</td>
                    <td>8</td>
                    <td>Изпит</td>
                    <td><strong>4</strong></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td><a href="#"><span class="fa fa-cog"></span></a></td>
                    <td>ИД</td>
                    <td>Увод в статистиката</td>
                    <td>6</td>
                    <td>Изпит/Текуща оценка</td>
                    <td><strong>44</strong></td>
                    <td>50</td>
                </tr>
<!--                <tr>-->
<!--                    <td>Artificial Intelligence</td>-->
<!--                    <td class="no-padding"><input type="checkbox" name="mark" value="EL04"></td>-->
<!--                </tr>-->
                </tbody>
            </table>
        </div>
    </div>
    <div id="courses" class="cluster">
        <h2><a href="#">Управление на курсове</a></h2>
        <div class="cluster-content">
            <table>
                <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>Вид</th>
                    <th>Дисциплина</th>
                    <th>Специалност</th>
                    <th>Курс</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#"><span class="fa fa-cog"></span></a></td>
                    <td>ЗД</td>
                    <td>СЕМ</td>
                    <td>СИ</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td><a href="#"><span class="fa fa-cog"></span></a></td>
                    <td>ЗД</td>
                    <td>ВИС</td>
                    <td>КН</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td><a href="#"><span class="fa fa-cog"></span></a></td>
                    <td>ИД</td>
                    <td>ТВ</td>
                    <td>СИ,И,КН,ИС</td>
                    <td>1,2,3,4</td>
                </tr>
                <tr>
                    <td><a href="#"><span class="fa fa-cog"></span></a></td>
                    <td>ИД</td>
                    <td>УС</td>
                    <td>СИ,И,КН,ИС</td>
                    <td>1,2</td>
                </tr>
                <tr>
                    <td><a href="#"><span class="fa fa-cog"></span></a></td>
                    <td>ИД</td>
                    <td>МС</td>
                    <td>СИ,КН</td>
                    <td>3,4</td>
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

