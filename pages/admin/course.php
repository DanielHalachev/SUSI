<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./../../css/student/grades.css"/>
    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php";
    $mode = $_REQUEST['mode'] ?? 'new';
    $title = match ($mode) {
        "new" => "Създаване на нов курс",
        "edit" => "Редактиране на курс",
        "copy" => "Копиране на курс",
    };
    ?>
    <title><?=$title?></title>
</head>
<body>
<?php
include "./../../includes/admin/header.php";
?>
<main>
    <h1><?=$title?></h1>

    <form>
        <label for="name">
            Име
            <input required type="text" name="name" id="name"/>
        </label>


        <label>
            Академична година
            <select name="year">
                <option value="23">2023/24</option>
                <option value="22" selected>2022/23</option>
            </select>
        </label>


        <label>
            Семестър
            <select name="semester">
                <option value="winter">Зимен</option>
                <option value="summer" selected>Летен</option>
            </select>
        </label>

        <label>
            Титуляр
            <select name="teacher">
                <option value="" disabled selected>Изберете титуляр</option>
                <?php
                $teachers = [
                    'Ангел Дичев',
                    'Милен Чечев',
                    'Олег Константинов'
                ];
                foreach ($teachers as $teacher):
                ?>
                    <option value="1"><?=$teacher?></option>
                <?php endforeach;?>
            </select>
        </label>

        <fieldset>
            <legend>Хорариум (общо в часове):</legend>
            <label>
                Лекции
                <input type="number" name="lectures"/>
            </label>
            <label>
                Семинарни упражнения
                <input type="number" name="seminar"/>
            </label>
            <label>
                Практически упражнения
                <input type="number" name="practical"/>
            </label>
        </fieldset>

        <label>
            Конспект
            <input type="file" name="conspect"/>
        </label>

        <label>
            Начин на оценяване
            <select>
                <option value="1">Изпит</option>
                <option value="2">Текуща оценка</option>
                <option value="3">Изпит + текуща оценка</option>
            </select>
        </label>

        <label>
            ECTS
            <input type="number" name="ects"/>
        </label>

        <button type="submit" class="positive">Създай</button>
    </form>
</main>
<?php
include "./../../includes/footer.php";
?>
</body>
</html>