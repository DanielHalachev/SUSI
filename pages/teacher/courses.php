<!DOCTYPE html>
<html lang="bg">
<head>

<?php
include "./../../includes/styles.php";
include "./../../includes/javascript.php"
?>
<link rel="stylesheet" type="text/css" href="../../css/teacher/courses.css"/>
<script>
window.addEventListener('DOMContentLoaded', function() {
  const queryNameHeadings = document.querySelectorAll('.query-name');

  queryNameHeadings.forEach((heading) => {
    heading.addEventListener('click', (event) => {
    icon = event.currentTarget.querySelector('.toggle');
    if(icon.classList.contains('fa-chevron-down')){
      icon.classList.remove('fa-chevron-down');
      icon.classList.add('fa-chevron-up');
    } else{
      icon.classList.remove('fa-chevron-up');
      icon.classList.add('fa-chevron-down');
    }
    const courseDetailsPreview = heading.nextElementSibling;
    courseDetailsPreview.style.display = courseDetailsPreview.style.display === 'none' ? 'block' : 'none';
    });
  });
});
  </script>
<script>
window.addEventListener('DOMContentLoaded', function() {
  var textareas = document.getElementsByTagName('textarea');
  for (var i = 0; i < textareas.length; i++) {
    var textarea = textareas[i];
    textarea.dataset.originalValue = textarea.value;
  }
});
function handleEditButtonClick(editButton) {
  var textarea = editButton.parentElement.previousElementSibling;
  var saveButton = editButton.parentElement.querySelector('.save');
  var dismissButton = editButton.parentElement.querySelector('.dismiss');
  textarea.disabled = !textarea.disabled;
  saveButton.style.display = "block";
  editButton.style.display = "none"
  dismissButton.style.display = "block";
}

function handleSaveButtonClick(saveButton) {
  var textarea = saveButton.parentElement.previousElementSibling;
  var editButton = saveButton.parentElement.querySelector('.edit');
  var dismissButton = saveButton.parentElement.querySelector('.dismiss');
  textarea.disabled = !textarea.disabled;
  saveButton.style.display = "none";
  editButton.style.display = "block";
  dismissButton.style.display = "none";
  textarea.dataset.originalValue = textarea.value;
}
function handleDismissButtonClick(dismissButton) {
  var textarea = dismissButton.parentElement.previousElementSibling;
  var editButton = dismissButton.parentElement.querySelector('.edit');
  var saveButton = dismissButton.parentElement.querySelector('.save');
  textarea.disabled = !textarea.disabled;
  saveButton.style.display = "none";
  editButton.style.display = "block";
  dismissButton.style.display = "none";
  textarea.value = textarea.dataset.originalValue;
}
</script>
</head>
<body>
<?php
include "./../../includes/teacher/header.php"
?>

<main id="queries-main">
  <h1>Управление на курсове</h1>
  <div class="selectors">
    <select name="year" id="year-select">
      <option value="instr" selected>Всички академичи години</option>
      <option value="option1">2022/2023</option>
      <option value="option2">2021/2022</option>
      <option value="option3">2020/2021</option>
      <option value="option4">2019/2020</option>
      <option value="option5">2018/2019</option>
    </select>
    <select name="faculty" id="faculty-select">
      <option value="instr" selected>Всички факултети</option>
      <option value="option1">Биологически факултет</option>
      <option value="option2">Филологически класически и нови филологии</option>
      <option value="option3">Факултет по математика и информатика</option>
      <option value="option4">Факултет по науки за образованието и изкуствата</option>
      <option value="option5">Факултет по химия и фармация</option>
      <option value="option6">Физически факултет</option>
    </select>
    <select name="oks" id="oks-select">
      <option value="instr" selected>Всички ОКС</option>
      <option value="option1">Бакалавър</option>
      <option value="option2">Магистър</option>
      <option value="option3">Доктор</option>
      <option value="option4">Друго</option>
    </select>
    <select name="major" id="major-select">
      <option value="instr" selected>Всички специалности</option>
      <option value="option1">Английска филология</option>
      <option value="option2">Биология</option>
      <option value="option3">Биохимия</option>
      <option value="option4">Информатика</option>
      <option value="option5">Компютърни науки</option>
      <option value="option6">Математика</option>
      <option value="option7">Начална педагогика</option>
      <option value="option8">Софтуерни технологии</option>
      <option value="option9">Софтуерно инженерство</option>
    </select>
    <select name="semester" id="semester-select">
      <option value="instr" selected>Всички семестри</option>
      <option value="option1">Зимен</option>
      <option value="option2">Летен</option>
    </select>
    <select name="course" id="course-select">
      <option value="instr" selected>Всички дисциплини</option>
      <option value="option1">Вероятности и статистика</option>
      <option value="option2">Математическа статистика</option>
      <option value="option3">Статистика и емпирични методи</option>
      <option value="option4">Теория на вероятностите</option>
      <option value="option5">Увод в статистиката</option>
    </select>
    <button id="search-button">Търсене</button>
  </div>
  <div class="course-details-list">
    <div class="course-details" >
      <h2 class="query-name">1. ЗД <span style="font-weight: bold">Вероятности и статистика</span>
        <span class="toggle fa fa-chevron-down"></span>
        <span class="export fa fa-file-csv"></span>
        <span class="export fa fa-file-pdf"></span>
      </h2>
      <div class="course-details-preview">
        <h3>Титуляр: <span style="font-weight: bold">проф. д-р Иван Георгиев</span></h3>
        <h3>Асистенти: <span style="font-weight: bold">д-р Васил Кръстев, ас. Росица Живкова</span></h3>
        <div class="query-course-characteristics">
          <h3>Академична година: <span style="font-weight: bold">2022/2023</span></h3>
          <h3>Брой записани студенти: <span style="font-weight: bold">120</span></h3>
          <h3>Кредити: <span style="font-weight: bold">7</span></h3>
          <h3>Семестър: <span style="font-weight: bold">Зимен</span></h3>
          <h3>Специалност: <span style="font-weight: bold">Компютърни науки</span></h3>
          <h3>Оценка: <span style="font-weight: bold">Изпит/Текуща оценка</span></h3>
          <h3>Факултет: <span style="font-weight: bold">ФМИ</span></h3>
          <h3>Курс: <span style="font-weight: bold">3</span></h3>
          <h3>Хорариум: <span style="font-weight: bold">30+30+30</span></h3>
        </div>
        <div /*id="criteria-container"*/>
        <h3>Анотация: </h3>
        <div class="annotation">
          <textarea disabled>
            Курсът по вероятности и статистика в университета представлява въведение в основните концепции и методи в областта на вероятностите и статистиката. Целта на курса е да помогне на студентите да разберат и приложат вероятностните и статистически принципи в различни области на знанието и научат как да правят рационални изводи и взимат решения, базирани на налични данни.
            Програмата на курса включва следните теми: основни понятия във вероятностите, измерване на вероятности, комбинаторика, условна вероятност, независимост, дискретни и непрекъснати разпределения, централна гранична теорема, статистически изводи, параметрични и непараметрични тестове, корелация и регресия, анализ на времеви редове и много други.
            През курса студентите ще имат възможност да участват в практически упражнения, включващи решаване на проблеми, статистически анализ на данни и използване на софтуерни инструменти за статистически анализ. Чрез тези упражнения студентите ще придобият необходимите умения за обработка и интерпретация на данни, както и за правилното извеждане на статистически изводи.</textarea>
          <div class="annotation-buttons">
            <button class="negative edit" onclick="handleEditButtonClick(this)">Редактирай</button>
            <button class="negative dismiss" onclick="handleDismissButtonClick(this)" style="display: none;">Отхвърли</button>
            <button class="positive save" onclick="handleSaveButtonClick(this)" style="display: none;">Запази</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="course-details">
    <h2 class="query-name">2. ИД <span style="font-weight: bold">Теория на вероятностите</span>
      <span class="toggle fa fa-chevron-down"></span>
      <span class="export fa fa-file-csv"></span>
      <span class="export fa fa-file-pdf"></span>
    </h2>
    <div class="course-details-preview">
      <h3>Титуляр: <span style="font-weight: bold">проф. д-р Иван Георгиев</span></h3>
      <h3>Асистенти: <span style="font-weight: bold">д-р Васил Кръстев</span></h3>
      <div class="query-course-characteristics">
        <h3>Академична година: <span style="font-weight: bold">2022/2023</span></h3>
        <h3>Брой записани студенти: <span style="font-weight: bold">120</span></h3>
        <h3>Кредити: <span style="font-weight: bold">5</span></h3>
        <h3>Семестър: <span style="font-weight: bold">Зимен</span></h3>
        <h3>Специалност: <span style="font-weight: bold">СИ,КН,И,ИС</span></h3>
        <h3>Оценка: <span style="font-weight: bold">Изпит/Текуща оценка</span></h3>
        <h3>Факултет: <span style="font-weight: bold">ФМИ</span></h3>
        <h3>Курс: <span style="font-weight: bold">1,2</span></h3>
        <h3>Хорариум: <span style="font-weight: bold">15+15+15</span></h3>
      </div>
    <div /*id="criteria-container"*/>
    <h3>Анотация: </h3>
    <div class="annotation">
      <textarea disabled>
        Университетският курс по теория на вероятностите представлява дълбоко изучаване на математическите основи и принципи на вероятностното мислене. Курсът има за цел да запознае студентите със същността на случайните явления и да ги научи как да моделират, анализират и разбират вероятностни събития.
        Програмата на курса включва следните основни теми: основни понятия и дефиниции в теорията на вероятностите, вероятностни пространства, вероятностни разпределения на случайни величини, функции на разпределение, очакване и дисперсия, многомерни разпределения, независими случайни величини, законите на големите числа и централната гранична теорема.
        През курса студентите ще се запознаят с различни методи и техники за работа с вероятности, включително комбинаторика, условна вероятност, теория на избора, марковски вериги и вероятностни модели за случайни процеси. Те ще развият аналитични умения за решаване на задачи, свързани с вероятността, и ще бъдат насърчавани да използват математически методи и формули за моделиране и анализ на реални проблеми.</textarea>
      <div class="annotation-buttons">
        <button class="negative edit" onclick="handleEditButtonClick(this)">Редактирай</button>
        <button class="negative dismiss" onclick="handleDismissButtonClick(this)" style="display: none;">Отхвърли</button>
        <button class="positive save" onclick="handleSaveButtonClick(this)" style="display: none;">Запази</button>
      </div>
    </div>
  </div>
  </div>
</main>

<!-- footer -->
<?php
include "./../../includes/footer.php"
?>
</body>
</html>
