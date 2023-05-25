<!DOCTYPE html>
<html>

<head>
    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php";
    $mode = $_REQUEST['mode'] ?? 'new';
    $title = "Създаване на потребител";
    ?>
    <link rel="stylesheet" type="text/css" href="./../../css/admin/course.css" />
    <title><?= $title ?></title>
</head>

<body>
<?php
include "./../../includes/admin/header.php";
?>
<h1><?= $title ?></h1>
<main>
    <form>
        <div class="grid-2x3">
            <div class="label-input-pair">
                <span>Име:</span>
                <input required type="text" name="name" id="name" class="input-field" />
            </div>

            <div class="label-input-pair">
                <span>Роля:</span>
                <select name="year" class="input-field">
                    <option value="23" selected>Студент</option>
                    <option value="22">Преподавател</option>
                </select>
            </div>

            <div class="label-input-pair">
                <span>ЕГН:</span>
                <input required type="text" name="name" id="name" class="input-field" />
            </div>

            <div class="label-input-pair">
                <span>Факултет:</span>
                <select name="teacher" class="input-field">
                    <option value="" disabled selected>Изберете факултет</option>
                    <?php
                    $teachers = [
                        'ФМИ',
                        'ФЗФ',
                        'ФХФ'
                    ];
                    foreach ($teachers as $teacher) :
                        ?>
                        <option value="<?= $teacher ?>"><?= $teacher ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="label-input-pair">
                <span>Имейл адрес:</span>
                <input required type="text" name="name" id="name" class="input-field" />
            </div>


            <div class="label-input-pair">
                <span>ОКС:</span>
                <select name="semester" class="input-field">
                    <option value="winter">Бакалавър</option>
                    <option value="summer" selected>Магистър</option>
                </select>
            </div>

            <div class="label-input-pair">
                <span>Държава:</span>
                <select class="scoring-options">
                    <option value="" disabled selected>Изберете държава</option>
                    <option value="1">България</option>
                    <option value="2">Не България</option>
                </select>
            </div>

            <div class="label-input-pair">
                <span>Град:</span>
                <input type="number" name="ects" class="input-field" />
            </div>
        </div>

        <div class="last-row">
            <div class="label-input-pair">
                <span>Импортирай от файл:</span>
                <input type="file" name="conspect" class="input-field" accept=".csv, .xsl, .xslx"/>
            </div>

            <button type="submit" class="positive">Създай</button>
        </div>
    </form>
</main>
<?php
include "./../../includes/footer.php";
?>
</body>

</html>