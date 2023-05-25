<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./../../css/student/grades.css"/>
    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php";
    ?>
</head>
<body>
<?php
include "./../../includes/admin/header.php";
?>

<?php
$headers = ['Специалност', 'Курс', 'Име', 'Преподавател', 'Семестър', 'ECTS', 'Статус'];
$courses = [
    ['СЕ', 2, 'Статистиак и емпирични методи', 'доц. Младен Савов', 'Зимен 2023-24', 8, 'Предстоящ'],
    ['СЕ', 3, 'WEB технологии', 'доц. Милен Петров', 'Летен 2022-23', 6, 'В ход'],
    ['СЕ', 1, 'Увод в програмирането', 'доц. Александър Димитров', 'Летен 2021-22', 4, 'Приключил'],
    ['СЕ', 1, 'Дискретни структури 2', 'доц. Ангел Дичев', 'Летен 2021-22', 8, 'Приключил'],
];
?>

<main>
    <h1>Задължителни дисциплини</h1>
    <input type="search" placeholder="Потърсете курс"/>
    <div class="filters">
        <?php
        foreach ($headers as $header):
        ?>
        <td><label><input type="checkbox" checked/><?=$header?></label></td>
        <?php endforeach;?>
        <td>
            <a class="positive" href="course.php?mode=new" target="_blank"><i class="fa fa-plus"></i>Нов курс</a>
        </td>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <?php
                    foreach ($headers as $header):
                        ?>
                        <th><?=$header?><span class="fa fa-filter"></span></th>
                    <?php endforeach;?>
                    <th>Действия<span class="fa fa-filter"></span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course):?>
                <tr>
                    <?php foreach ($course as $td):?>
                    <td><?=$td?></td>
                    <?php endforeach;?>
                    <td>
                        <i class="fa fa-eye" title="Детайлен преглед"></i>
                        <i class="fa fa-edit" title="Редактирай"></i>
                        <i class="fa fa-copy" title="Копирай"></i>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</main>
<?php
include "./../../includes/footer.php";
?>
</body>
</html>
