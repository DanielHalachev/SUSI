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
$headers = ['Категория', 'Име', 'Преподавател', 'ECTS', 'Статус'];
$courses = [
    ['ПМ', 'Числени методи', 'доц. Веселин Гушев', 8, 'Предстоящ'],
    ['М', 'Избрани теми от ДИС', 'доц. Иван Гаджев', 6, 'В ход'],
    ['ОКН', 'Ламбда смятане', 'доц. Трифон Трифонов', 4, 'Приключил'],
    ['ЯКН', 'Модерни Java технологии', 'доц. Стоян Велев', 8, 'Приключил'],
];
?>

<main>
    <h1>Избираеми дисциплини</h1>
    <input type="search" placeholder="Потърсете курс"/>
    <div class="filters">
        <?php
        foreach ($headers as $header):
        ?>
        <td><label><input type="checkbox" checked/><?=$header?></label></td>
        <?php endforeach;?>
        <td>
            <a class="positive" title="Същото като в Задължителни дисциплини" href="#" style="opacity: 50%;"><i class="fa fa-plus"></i>Нов курс</a>
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
