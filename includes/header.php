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
        <span class="fa fa-money-bill-1-wave"></span>
        <a>Такси</a>
      </li>
      <li>
        <span class="fa fa-graduation-cap"></span>
        <a href="./elective.php" aria-haspopup="true">Избираеми дисциплини</a>
        <ul class="dropdown" aria-label="submenu">
          <li><a>Списък избираеми дисциплини</a></li>
          <li><a>Предпочитани избираеми дисциплини</a></li>
          <li><a>Моите избираеми дисциплини</a></li>
        </ul>
      </li>
      <li>
        <span class="fa fa-envelope"></span>
        <a href="./messages.php">Съобщения</a></li>
      <li id="username">
        <span class="fa fa-user"></span>
        <a>62547</a>
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
          <li>
            <span class="fa fa-gear"></span>
            <a href="./settings.php">Настройки</a>
          </li>
          <li>
            <span class="fa fa-database"></span>
            <a href="./setting.php">Моите данни</a>
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
