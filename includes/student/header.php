<header>
  <a href="./dashboard.php"><img class="logo" src="./../../images/logo.png"/></a>
  <nav role="navigation">
    <!-- <div class="menu-button"><img src="./../../images/menu.png"/></div> -->
    <span id="menu-button" class="fa fa-bars"></span>
    <ul>
      <a href="./timetable.php">
        <li>
          <span class="fa fa-calendar-days"></span>
          График
        </li>
      </a>
      <a href="./grades.php">
        <li>
          <span class="fa fa-file-pen"></span>
          Оценки
        </li>
      </a>
      <a href="./elective.php" aria-haspopup="true">
        <li>
          <span class="fa fa-graduation-cap"></span>
          Избираеми дисциплини
          <ul class="dropdown" aria-label="submenu">
            <a href="./elective.php"><li>Всички избираеми дисциплини</li></a>
            <a href="./elective.php?filter=marked"><li>Маркирани избираеми дисциплини</li></a>
            <a href="./elective.php?filter=enrolled"><li>Записани избираеми дисциплини</li></a>
            <a href="./elective.php?filter=enrolled-in-queue"><li>Записани в опашка избираеми дисциплини</li></a>
          </ul>
        </li>
      </a>
      <a href="./messages.php">
        <li>
          <span class="fa fa-envelope"></span>
          Съобщения
        </li>
      </a>
      <a>
        <li id="username">
          <span class="fa fa-user"></span>
          62547
          <ul class="user-dropdown">
            <div class="user-info">
              <img class="profile-pic" src="./../../images/profile-pic.jpg"/>
              <div>
                <p><small>Иван Петров Иванов</small></p>
                <p><small>Софтуерно инженерство</small></p>
                <p><small>Курс 3</small></p>
              </div>  
            </div>
            <hr/>
            <a href="./settings.php">
              <li>
                <span class="fa fa-database"></span>
                Моите данни
              </li>
            </a>
            <a href="./settings.php?tab=taxes">
              <li>
                <span class="fa fa-money-bill-1-wave"></span>
                Такси
              </li>
            </a>
            <a href="./settings.php?tab=health-insurance">
              <li>
                <span class="fa fa-heart-pulse"></span>
                Здравно осигуряване
              </li>
            </a>
            <a href="./settings.php?tab=logins">
              <li>
                <span class="fa fa-right-to-bracket"></span>
                Логавания
              </li>
            </a>
            <a href="./settings.php?tab=card-settings">
              <li>
                <span class="fa fa-home"></span>
                Настройки на началната страница
              </li>
            </a>
            <a href="./settings.php?tab=email-settings">
              <li>
                <span class="fa fa-bell"></span>
                Настройки на известията
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
      </a>
    </ul>
  </nav>
</header>

