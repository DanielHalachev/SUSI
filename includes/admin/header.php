<header>
    <?php
    $tabs = [
        ['Потребители', 'users', 'users'],
        ['Задължителни дисциплини', 'bars', 'courses'],
        ['Избираеми дисциплини', 'check', 'elective'],
        ['Кампании', 'check', 'campaigns'], //dropdown - semestrialni taksi / izbiraemi disciplini
//        ['Съобщения', 'envelope', 'message'],
    ];
    ?>
    <a href="../../pages/admin/dashboard.php"><img class="logo" src="../../images/logo.png"/></a>
    <nav role="navigation">
        <span id="menu-button" class="fa fa-bars"></span>
    <ul>
        <?php foreach ($tabs as $tab):?>
        <li>
            <span class="fa fa-<?= $tab[1]?>"></span>
            <a href="./<?= $tab[2]?>.php"><?= $tab[0]?></a>
        </li>
        <?php endforeach;?>
        <li id="username">
            <span class="fa fa-user"></span>
            <a>Админ Админов</a>
        </li>
    </ul>
    </nav>
</header>