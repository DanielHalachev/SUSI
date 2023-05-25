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
          Админ Админов
          <ul class="user-dropdown">
            <div class="user-info">
              <img class="profile-pic" src="./../../images/profile-pic-admin.jpg"/>
              <div>
                <p><small>Админ Админов</small></p>
                <p><small>Администратор на данни</small></p>
              </div>  
            </div>
            <hr/>
            <a href="./settings.php?tab=health-insurance">
              <li>
                <span class="fa fa-heart-pulse"></span>
                Здравно осигуряване
              </li>
            </a>
            <a href="./settings.php?tab=logins">
              <li>
                <span class="fa fa-right-to-bracket"></span>
                Логвания
              </li>
            </a>
            <a href="./settings.php?tab=card-settings">
              <li>
                <span class="fa fa-home"></span>
                Настройки на началната страница
              </li>
            </a>
            <a href="./settings.php?tab=theme-settings">
              <li>
                <span class="fa fa-circle-half-stroke"></span>
                Тема
              </li>
            </a>
            <a href="./../login/login.php">
              <li>
                <span class="fa fa-power-off"></span>
                Изход
              </li>
            </a>
          </ul>
        </li>

    </ul>
    </nav>
</header>
