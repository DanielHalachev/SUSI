<!DOCTYPE html>
<html>
<head>
    <?php
    include "./../../includes/styles.php";
    include "./../../includes/javascript.php";
    ?>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        main {
            max-width: 800px;
        }

        hr {
            border: none;
            border-top: 2px solid black;
            margin-top: 2rem;
            margin-bottom: 2rem;
            width: 100%;
        }

        ul {
            list-style-type: circle;
            padding: revert;
            margin-top: 0;
            /*margin-bottom: 2rem;*/
        }

        /*.fa{*/
        /*    color:#c59926;*/
        /*}*/

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
include "./../../includes/header.php";
?>
<main>
    <div>
        <h2>Относно SIMS</h2>
        <p>Добре дошли в нашата система за управление на студентска информация! Ние сме екип от посветени разработчици, които работят неуморно, за да създадат система, която отговаря на нуждите на съвременните образователни институции.</p>
    </div>
    <hr>
    <div>
        <h2>Нашата мисия</h2>
        <p>Нашата мисия е да предоставим мощна, но лесна за употреба платформа, която позволява на администратори, учители и персонал да управляват ефективно цялата информация по отношение на учебната дейност.</p>
    </div>
    <hr>
    <div>
        <h2>Нашият екип</h2>
        <p>Ние сме разнообразна група професионалисти със специализация в разработката на софтуер, дизайна на потребителски интерфейс и образованието. Нашият екип включва:</p>
        <ul>
            <li>John Doe, Lead Developer</li>
            <li>Jane Smith, UX Designer</li>
            <li>Bob Johnson, Education Consultant</li>
            <li>Sara Lee, QA Engineer</li>
        </ul>
    </div>
    <hr>
    <div>
        <h2>Свържете се с нас</h2>
        <p>Имате въпроси относно нашата система? Искате да запазите демо или да получите повече информация? Не се колебайте да се свържете с нас:</p>
        <ul>
            <li>Телефон: 555-123-4567</li>
            <li>Имейл: info@sims.com</li>
            <li>Адрес: 123 Main Street, Suite 100, Anytown USA</li>
        </ul>
    </div>
</main>
<?php
include "./../../includes/footer.php";
?>
</body>
</html>
