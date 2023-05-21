<!DOCTYPE html>
<html lang="bg">
<head>

    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php"
    ?>
    <link rel="stylesheet" type="text/css" href="../../css/teacher/protocols.css"/>
</head>
<body>
<?php
include "./../../includes/teacher/header.php"
?>

<main id="protocols-main">
    <!-- <div class="container"> -->
    <h1>Попълване на протоколи</h1>
        <h2>За <span style="font-weight: bold">2022/2023 юнска </span> сесия</h2>
    <div class="selectors">
        <select name="protocol-number" id="protocol-number-select">
            <option value="instr" disabled selected>Изберете № на протокол</option>
            <option value="option1">П874</option>
            <option value="option2">П63</option>
            <option value="option3">П881</option>
            <option value="option4">П128</option>
            <option value="option5">П1049</option>
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
        <select name="major" id="major-select">
            <option value="instr" disabled selected>Изберете специалност</option>
            <option value="option1">Английска филология</option>
            <option value="option2">Биология</option>
            <option value="option3">Биохимия</option>
            <option value="option4">Информатика</option>
            <option value="option5">Компютърни науки</option>
            <option value="option6">Математика</option>
            <option value="option7">Начална педагогика</option>
            <option value="option8">Софтуерни технологии</option>
            <option value="option9">Софтуерно инженерство</option>
        </select>
        <select name="stream" id="stream-select">
            <option value="instr" selected disabled>Изберете поток</option>
            <option value="option1">-</option>
            <option value="option2">I</option>
            <option value="option3">II</option>
            <option value="option4">III</option>
        </select>
        <select name="course" id="course-select">
            <option value="instr" selected disabled>Изберете дисциплина</option>
            <option value="option1">Вероятности и статистика</option>
            <option value="option2">Математическа статистика</option>
            <option value="option3">Статистика и емпирични методи</option>
            <option value="option4">Теория на вероятностите</option>
            <option value="option5">Увод в статистиката</option>
        </select>
    </div>
        <button id="search-button">Търси</button>
  <h2 id="protocol-name">СИ: ЗД
    <span style="font-weight: bold">Статистика и емпирични методи</span> 
    <span class="fa fa-file-csv"></span>
    <span class="fa fa-file-pdf"></span>
  </h2>
        <table id="grades-table">
            <thead>
                <th><a href="#">№ <span class="fa fa-sort"></span></a></th>
                <th><a href="#">Факултетен номер <span class="fa fa-sort"></span></a></th>
                <th><a href="#">Име <span class="fa fa-sort"></span></a></th>
                <th><a href="#">Презиме <span class="fa fa-sort"></span></a></th>
                <th><a href="#">Фамилия <span class="fa fa-sort"></span></a></th>
                <th><a href="#">Специалност <span class="fa fa-sort"></span></a></th>
                <th><a href="#">Курс <span class="fa fa-sort"></span></a></th>
                <th><a href="#">Оценка <span class="fa fa-sort"></span></a></th>
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
                <td>
                    <button class="two-grade">2</button>
                    <button class="three-grade">3</button>
                    <button class="four-grade">4</button>
                    <button class="five-grade">5</button>
                    <button class="six-grade">6</button>
                    <input type="text" class="field-grade">
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>61178</td>
                <td>Иван</td>
                <td>Николов</td>
                <td>Николов</td>
                <td>СИ</td>
                <td>3</td>
                <td>
                    <button class="two-grade">2</button>
                    <button class="three-grade">3</button>
                    <button class="four-grade">4</button>
                    <button class="five-grade">5</button>
                    <button class="six-grade">6</button>
                    <input type="text" class="field-grade">
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>61180</td>
                <td>Димитър</td>
                <td>Колев</td>
                <td>Дерменджиев</td>
                <td>СИ</td>
                <td>3</td>
                <td>
                    <button class="two-grade">2</button>
                    <button class="three-grade">3</button>
                    <button class="four-grade">4</button>
                    <button class="five-grade">5</button>
                    <button class="six-grade">6</button>
                    <input type="text" class="field-grade">
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>61181</td>
                <td>Надежда</td>
                <td>Василева</td>
                <td>Веселинова</td>
                <td>СИ</td>
                <td>3</td>
                <td>
                    <button class="two-grade">2</button>
                    <button class="three-grade">3</button>
                    <button class="four-grade">4</button>
                    <button class="five-grade">5</button>
                    <button class="six-grade">6</button>
                    <input type="text" class="field-grade">
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>61186</td>
                <td>Христо</td>
                <td>Христов</td>
                <td>Методиев</td>
                <td>СИ</td>
                <td>3</td>
                <td>
                    <button class="two-grade">2</button>
                    <button class="three-grade">3</button>
                    <button class="four-grade">4</button>
                    <button class="five-grade">5</button>
                    <button class="six-grade">6</button>
                    <input type="text" class="field-grade">
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>61187</td>
                <td>Ивана</td>
                <td>Георгиева</td>
                <td>Цонева</td>
                <td>СИ</td>
                <td>3</td>
                <td>
                    <button class="two-grade">2</button>
                    <button class="three-grade">3</button>
                    <button class="four-grade">4</button>
                    <button class="five-grade">5</button>
                    <button class="six-grade">6</button>
                    <input type="text" class="field-grade">
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>61199</td>
                <td>Валентина</td>
                <td>Дичева</td>
                <td>Методиева</td>
                <td>СИ</td>
                <td>3</td>
                <td>
                    <button class="two-grade">2</button>
                    <button class="three-grade">3</button>
                    <button class="four-grade">4</button>
                    <button class="five-grade">5</button>
                    <button class="six-grade">6</button>
                    <input type="text" class="field-grade">
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>61201</td>
                <td>Георги</td>
                <td>Миленов</td>
                <td>Марков</td>
                <td>СИ</td>
                <td>3</td>
                <td>
                    <button class="two-grade">2</button>
                    <button class="three-grade">3</button>
                    <button class="four-grade">4</button>
                    <button class="five-grade">5</button>
                    <button class="six-grade">6</button>
                    <input type="text" class="field-grade">
                </td>
            </tr>
            </tbody>
        </table>
        <div id="right-button">
            <button id="send-button">Изпрати за одобрение</button>
        </div>
    <!-- </div> -->



</main>

<!-- footer -->
<?php
include "./../../includes/footer.php"
?>
</body>
</html>

