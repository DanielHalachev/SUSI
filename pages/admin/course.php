<!DOCTYPE html>
<html>

<head>
  <?php
  include "./../../includes/styles.php";
  include "./../../includes/javascript.php";
  $mode = $_REQUEST['mode'] ?? 'new';
  $title = match ($mode) {
    "new" => "Създаване на нов курс",
    "edit" => "Редактиране на курс",
    "copy" => "Копиране на курс",
  };
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
          <span>Академична година:</span>
          <select name="year" class="input-field">
            <option value="23">2023/24</option>
            <option value="22" selected>2022/23</option>
          </select>
        </div>

        <div class="label-input-pair">
          <span>Титуляр:</span>
          <select name="teacher" class="input-field">
            <option value="" disabled selected>Изберете титуляр</option>
            <?php
            $teachers = [
                'Ангел Дичев',
                'Милен Чечев',
                'Олег Константинов'
            ];
            foreach ($teachers as $teacher) :
              ?>
              <option value="<?= $teacher ?>"><?= $teacher ?></option>
            <?php endforeach; ?>
          </select>
        </div>


        <div class="label-input-pair">
          <span>Семестър:</span>
          <select name="semester" class="input-field">
            <option value="winter">Зимен</option>
            <option value="summer" selected>Летен</option>
          </select>
        </div>

        <div class="label-input-pair">
          <span>Начин на оценяване:</span>
          <select class="scoring-options">
            <option value="" disabled selected>Изберете начин на оценяване</option>
            <option value="1">Изпит</option>
            <option value="2">Текуща оценка</option>
            <option value="3">Изпит + текуща оценка</option>
          </select>
        </div>

        <div class="label-input-pair">
          <span>ECTS:</span>
          <input type="number" name="ects" class="input-field" />
        </div>
      </div>

      <div class="fieldsets-wrapper">
        <fieldset class="last-fieldset">
          <legend>Хорариум (общо в часове):</legend>
          <div class="label-input-pair">
            <span>Лекции:</span>
            <input type="number" name="lectures" class="input-field" />
          </div>
          <div class="label-input-pair">
            <span>Семинарни упражнения:</span>
            <input type="number" name="seminar" class="input-field" />
          </div>
          <div class="label-input-pair">
            <span>Практически упражнения:</span>
            <input type="number" name="practical" class="input-field" />
          </div>
        </fieldset>
      </div>

      <div class="last-row">
        <div class="label-input-pair">
          <span>Конспект:</span>
          <input type="file" name="conspect" class="input-field" />
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

<!-- :vim: shiftwidth=2: -->
