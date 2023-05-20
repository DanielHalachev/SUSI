<!DOCTYPE html>
<html lang="bg">
<head>

    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php"
    ?>
    <link rel="stylesheet" type="text/css" href="../../css/teacher/timetable.css"/>
    <script src="./../../js/menu.js" type="text/javascript"></script>
    <script type="text/javascript" src="./../../js/multiple-select.js"></script>
</head>
<body>
<?php
include "./../../includes/teacher/header.php"
?>

<main>
    <h1 id="page-title">График</h1>
    <div class="filters">
        <select>
            <option default>Всички дни</option>
            <option>Понеделник</option>
            <option>Вторник</option>
            <option>Сряда</option>
            <option>Четвъртък</option>
            <option>Петък</option>
        </select>
        <select>
            <option default>Всички типове</option>
            <option>Лекции</option>
            <option>Упражнения</option>
        </select>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="lecture" colspan="2">Вероятности и статистика<br/>проф. д-р И. Георгиев, 210 ФХФ</td>
            <td class="exercise" colspan="2">Теория на вероятностите<br/>д-р В. Кръстев, 514 ФМИ</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>Вторник</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="lecture" colspan="2">Теория на вероятностите<br/>проф. д-р И. Георгиев, 325 ФМИ</td>
            <td></td>
            <td class="exercise" colspan="2">Вероятности и статистика<br/>д-р В. Кръстев, 101 ФМИ</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>Сряда</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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
            <td class="exercise" colspan="2">Вероятности и статистика<br/>ас. Росица Живкова, 209 ФМИ</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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

<!-- footer -->
<?php
include "./../../includes/footer.php"
?>
</body>
</html>