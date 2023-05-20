<!DOCTYPE html>
<html lang="bg">
<head>

    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php"
    ?>
    <link rel="stylesheet" type="text/css" href="../../css/teacher/elective.css"/>
</head>
<body>
<?php
include "./../../includes/teacher/header.php"
?>

<main id="elective-main">

    <div class="container">
        <h1>Кампания за избираеми дисциплини</h1>
        <div class="selectors">
            <select name="year" id="year-select">
                <option value="instr" disabled selected>Изберете академична година</option>
                <option value="option1">2022/2023</option>
                <option value="option2">2021/2022</option>
                <option value="option3">2020/2021</option>
                <option value="option4">2019/2020</option>
                <option value="option5">2018/2019</option>
            </select>
            <select name="faculty" id="faculty-select">
                <option value="instr" disabled selected>Изберете факултет</option>
                <option value="option1">Биологически факултет</option>
                <option value="option2">Филологически класически и нови филологии</option>
                <option value="option3">Факултет по математика и информатика</option>
                <option value="option4">Факултет по науки за образованието и изкуствата</option>
                <option value="option5">Факултет по химия и фармация</option>
                <option value="option6">Физически факултет</option>
            </select>
            <select name="oks" id="oks-select">
                <option value="instr" disabled selected>Изберете ОКС</option>
                <option value="option1">Бакалавър</option>
                <option value="option2">Магистър</option>
                <option value="option3">Доктор</option>
                <option value="option4">Друго</option>
            </select>
            <select name="semester" id="semester-select">
                <option value="instr" disabled selected>Изберете семестър</option>
                <option value="option1">Зимен</option>
                <option value="option2">Летен</option>
            </select>
            <select name="course" id="course-select">
                <option value="instr" selected disabled>Изберете дисциплина</option>
                <option value="option1">Математическа статистика</option>
                <option value="option2">Статистика и емпирични методи</option>
                <option value="option3">Теория на вероятностите</option>
                <option value="option4">Увод в статистиката</option>
            </select>
            <button id="search-button">Търси</button>
        </div>
        <div id="course-characteristics">
            <h2 id="discipline-name">ИД: <span style="font-weight: bold">Теория на вероятностите</span> &nbsp;&nbsp;
                <a href="#"><span style="color: #000" class="export fa fa-file-csv"></span></a>
            &nbsp;&nbsp;
                <a href="#"><span class="export fa fa-file-pdf" style="color: #000"></span></a></h2>
        <div id="course-details">
            <h3>Брой записани студенти: <span style="font-weight: bold">4</span></h3>
            <h3>Кредити: <span style="font-weight: bold">8</span></h3>
            <h3>Хорариум: <span style="font-weight: bold">45+30+15</span></h3>
            <h3>Лимит: <span style="font-weight: bold">20</span></h3>
            <h3>Оценка: <span style="font-weight: bold">Изпит</span></h3>
        </div>
        </div>
        <table id="elective-course-table">
            <thead>
            <th><a href="#">№ <span class="fa fa-sort"></span></a></th>
            <th><a href="#">Факултетен номер <span class="fa fa-sort"></span></a></th>
            <th><a href="#">Име <span class="fa fa-sort"></span></a></th>
            <th><a href="#">Презиме <span class="fa fa-sort"></span></a></th>
            <th><a href="#">Фамилия <span class="fa fa-sort"></span></a></th>
            <th><a href="#">Специалност <span class="fa fa-sort"></span></a></th>
            <th><a href="#">Курс <span class="fa fa-sort"></span></a></th>
            <th><a href="#">Статус <span class="fa fa-sort"></span></a></th>
            <th><a href="#">Дата на последно събитие <span class="fa fa-sort"></span></a></th>
            <th><a href="#">Отписване <span class="fa fa-sort"></span></a></th>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>61149</td>
                <td>Марин</td>
                <td>Стоянов</td>
                <td>Христов</td>
                <td>СИ</td>
                <td>3</td>
                <td>Записан</td>
                <td>28.02.2023 г. 14:23</td>
                <td>
                    <button class="cancel-button">Отпиши</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>31179</td>
                <td>Иван</td>
                <td>Николов</td>
                <td>Николов</td>
                <td>И</td>
                <td>2</td>
                <td>Записан</td>
                <td>26.02.2023 г. 9:03</td>
                <td>
                    <button class="cancel-button">Отпиши</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>61180</td>
                <td>Димитър</td>
                <td>Колев</td>
                <td>Дерменджиев</td>
                <td>СИ</td>
                <td>4</td>
                <td>Записан</td>
                <td>1.03.2023 г. 17:44</td>
                <td>
                    <button class="cancel-button">Отпиши</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>71230</td>
                <td>Надежда</td>
                <td>Василева</td>
                <td>Веселинова</td>
                <td>ИС</td>
                <td>1</td>
                <td>Записан</td>
                <td>2.03.2023 г. 17:14</td>
                <td>
                    <button class="cancel-button">Отпиши</button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>81166</td>
                <td>Тереза</td>
                <td>Кръстева</td>
                <td>Йотова</td>
                <td>КН</td>
                <td>4</td>
                <td>Отписан от студент</td>
                <td>6.03.2023 г. 19:47</td>
                <td>
                    <button class="cancelled-button">Отписан</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</main>


<!-- footer -->
<?php
include "./../../includes/footer.php"
?>
</body>
</html>


