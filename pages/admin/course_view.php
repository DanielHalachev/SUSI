<!DOCTYPE html>
<html>

<head>
  <?php
  include "./../../includes/styles.php";
  include "./../../includes/javascript.php";
  $title = "Преглед на курс"
  ?>
  <link rel="stylesheet" type="text/css" href="./../../css/admin/course_view.css" />
  <title><?= $title ?></title>
</head>

<body>
  <?php
  include "./../../includes/admin/header.php";
  ?>
  <h1><?= $title ?></h1>
  <main>
    <div class="form">
      <div class="grid-2x3">
        <div class="label-input-pair">
          <span>Име:</span>
          <input readonly required type="text" name="name" id="name" class="input-field" value="λ Смятане и Теория на Доказателствата" />
        </div>

        <div class="label-input-pair">
          <span>Академична година:</span>
          <input readonly required type="text" name="year" class="input-field" value="23" />
        </div>

        <div class="label-input-pair">
          <span>Титуляр:</span>
          <input readonly required type="text" name="teacher" class="input-field" value="Трифон Трифонов" />
        </div>

        <div class="label-input-pair">
          <span>Семестър:</span>
          <input readonly required type="text" name="semester" class="input-field" value="Летен" />
        </div>

        <div class="label-input-pair">
          <span>Начин на оценяване:</span>
          <input readonly required type="text" name="scoring-options" class="input-field" value="Текуща оценка + Изпит" />
        </div>

        <div class="label-input-pair">
          <span>ECTS:</span>
          <input readonly type="text" name="ects" class="input-field" value="9" />
        </div>
      </div>

      <div class="fieldsets-wrapper">
        <fieldset class="last-fieldset">
          <legend>Хорариум (общо в часове):</legend>
          <div class="label-input-pair">
            <span>Лекции:</span>
            <input readonly type="text" name="lectures" class="input-field" value="213" />
          </div>
          <div class="label-input-pair">
            <span>Семинарни упражнения:</span>
            <input readonly type="text" name="seminar" class="input-field" value="123" />
          </div>
          <div class="label-input-pair">
            <span>Практически упражнения:</span>
            <input readonly type="text" name="practical" class="input-field" value="5" />
          </div>
        </fieldset>
      </div>

      <div class="last-row">
        <div class="label-input-pair">
          <span>Конспект:</span>
          <button type="submit" class="positive">Прегледай</button>
        </div>

        <div class="label-input-pair">
          <span>Протоколи:</span>
          <button type="submit" class="positive">Прегледай</button>
          <button type="submit" class="positive">Потвърди</button>
          <button type="submit" class="negative">Отхвърли</button>
        </div>
      </div>
    </div>
  </main>
  <?php
  include "./../../includes/footer.php";
  ?>
</body>

</html>

<!-- vim: set shiftwidth=2: -->
