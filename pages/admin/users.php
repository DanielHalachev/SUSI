<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./../../css/student/grades.css"/>
    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php";
    ?>
    <title>Потребители</title>
</head>
<body>
<?php
include "./../../includes/admin/header.php";
?>

<?php
$headers = ['Име', 'Роля', 'Имейл'];
$users = [
    ['Павел Атанасов', 'Студент', 'aloda@skolev.com'],
    ['Давид Петров', 'Студент', 'kudeechoveka@skolev.com'],
];
?>

<main>
    <h1>Потребители</h1>
    <input type="search" placeholder="Потърсете потребител"/>
    <div class="filters">
        <?php
        foreach ($headers as $header):
            ?>
            <td><label><input type="checkbox" checked/><?=$header?></label></td>
        <?php endforeach;?>
            <td><a class="positive" href="user.php"><i class="fa fa-plus"></i>Нов потребител</a></td>
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
            <?php foreach ($users as $user):?>
            <tr>
                <?php foreach ($user as $td):?>
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
