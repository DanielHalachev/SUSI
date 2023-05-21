<header>
    <a href="./dashboard.php"><img class="logo" src="./../../images/logo.png"/></a>
    <nav role="navigation">
        <!-- <div class="menu-button"><img src="./../../images/menu.png"/></div> -->
        <span id="menu-button" class="fa fa-bars"></span>
        <ul>
            <li>
                <span class="fa fa-calendar-days"></span>
                <a href="./timetable.php">График</a>
            </li>
            <li>
                <span class="fa fa-pencil"></span>
                <a href="./protocols.php">Протоколи</a>
            </li>
            <li>
                <span class="fa fa-folder-open"></span>
                <a href="./courses.php">Управление на курсове</a>
<!--                <ul class="dropdown" aria-label="submenu">-->
<!--                    <li><a>Списък избираеми дисциплини</a></li>-->
<!--                    <li><a>Предпочитани избираеми дисциплини</a></li>-->
<!--                    <li><a>Моите избираеми дисциплини</a></li>-->
<!--                </ul>-->
            </li>
            <li>
                <span class="fa fa-check-square"></span>
                <a href="./elective.php">Кампания за избираеми дисциплини</a>
            </li>
            <li>
                <span class="fa fa-info-circle"></span>
                <a href="./queries.php">Справки</a>
            </li>
            <li>
                <span class="fa fa-envelope"></span>
                <a href="./messages.php">Съобщения</a>
            </li>
            <li id="username">
                <span class="fa fa-user"></span>
                <a>проф. д-р Иван Георгиев</a>
                <ul class="user-dropdown">
                    <div class="user-info">
                        <img class="profile-pic" src="./../../images/profile-pic-teacher.jpg"/>
                        <div>
                            <p><small>Иван Христов Георгиев</small></p>
                            <p><small>кат. "Вероятности и статистика"</small></p>
                        </div>
                    </div>
                    <hr/>
                    <li>
                        <span class="fa fa-gear"></span>
                        <a href="./settings.php">Настройки</a>
                    </li>
                    <li>
                        <span class="fa fa-database"></span>
                        <a href="./settings.php">Моите данни</a>
                    </li>
                    <li>
                        <span class="fa fa-power-off"></span>
                        <a href="./../login/login.php">Изход</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
