<?php

$page_redirected_from = $_SERVER['REQUEST_URI'];  // this is especially useful with error 404 to indicate the missing page.
$server_url = "http://" . $_SERVER["SERVER_NAME"];
$redirect_url = $_SERVER["REDIRECT_URL"];
$redirect_url_array = parse_url($redirect_url);
$end_of_path = strrchr($redirect_url_array["path"], "/");
$error_code = "400";
$explanation = "Страницата '" . $page_redirected_from . "' не съществува. Моля проверете отново адреса, който сте въвели. ";

switch(getenv("REDIRECT_STATUS"))
{
  # "400 - Bad Request"
  case 400:
    $error_code = "400";
    $explanation = "Не можем да обработим вашата заявка. Моля проверете URL адреса, който сте въвели. ";
    $redirect_to = "";
    break;

  # "401 - Unauthorized"
  case 401:
    $error_code = "401";
    $explanation = "Тази страница изисква да се логнете в профила си, за да я видите. Ако сте стигнали тук погрешка, моля върнете се на началната страница. ";
    $redirect_to = "";
    break;

  # "403 - Forbidden"
  case 403:
    $error_code = "403";
    $explanation = "Нямате права да преглеждате тази страница. Моля, върнете се назад! ";
    $redirect_to = "";
    break;

  # "404 - Not Found"
  case 404:
    $error_code = "404";
    $explanation = "Страницата '" . $page_redirected_from . "' не съществува. Моля проверете отново адреса, който сте въвели. ";
    $redirect_to = $server_url . $end_of_path;
    break;
}
?>

<!DOCTYPE html>
<html lang="bg">
<head>

<link rel="stylesheet" type="text/css" href="./../../css/error.css"/>
<?php
include "./../../includes/styles.php";
include "./../../includes/javascript.php";
?>


</head>
<body>
  <header>
    <img class="logo" src="./../../images/logo.png"/>
  </header>
  <main>
    <!-- <div class="item"> -->
    <!--   <img class="big-logo" src="./../../images/logo.png"/> -->
    <!-- </div> -->
    <div class="item">
      <h1><?php print ($error_code); ?></h1>
      <br/>
      <p><?PHP echo($explanation); ?></p>
      <br/>
      <br/>
      <button>Към началната страница</button>
    </div>
  </main>
<?php
include "./../../includes/footer.php"
?>
</body>
</html>
