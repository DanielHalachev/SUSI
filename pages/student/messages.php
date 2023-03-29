<!DOCTYPE html>
  <html>
  <head>
    <script>
function displayPreview(id) {
  const message = document.querySelector(`.message:nth-child(${id})`);
  const preview = message.querySelector('.message-preview');
  
  if (preview.style.display === 'block') {
    preview.style.display = 'none';
    message.classList.remove('message-active');
  } else {
    preview.style.display = 'block';
    message.classList.add('message-active');
  }
}
    </script>
  <link rel="stylesheet" type="text/css" href="./../../css/student/messages.css"/>    
    <?php
      include "./../../includes/styles.php";
      include "./../../includes/javascript.php";
    ?>
  </head>
  <body>
    <?php
      include "./../../includes/header.php";
    ?>
    <main>
      <h1>Съобщения</h1>
      <div class="messages-container">
        <h2>Входяща поща</h2>
        <div class="message-list">
          <div class="message" onclick="displayPreview(1)">
            <h4>Добре дошли в курса по Джава</h4>
            <p>Евгений Кръстев</p>
            <p>Преди 2 часа</p>
            <div class="message-preview">
              <p>This is the preview for message 1.</p>
            </div>
          </div>
          <div class="message" onclick="displayPreview(2)">
            <h4>Провеждане на курса по Увод в програмирането</h4>
            <p>Александър Димов</p>
            <p>Вчера</p>
            <div class="message-preview">
              <p>This is the preview for message 2.</p>
            </div>
          </div>
          <div class="message" onclick="displayPreview(3)">
          <h4>Гост-лектор</h4>
          <p>Боян Бончев</p>
          <p>19.03 9:00</p>
          <div class="message-preview">
            <p>This is the preview for message 3.</p>
          </div>
        </div>
        <div class="message" onclick="displayPreview(4)">
          <h4>Съобщение 4</h4>
            <p>Евгений Кръстев</p>
            <p>Преди 2 часа</p>
          <div class="message-preview">
            <p>This is the preview for message 4.</p>
          </div>
        </div>
        <div class="message" onclick="displayPreview(5)">
          <h4>Съобщение 5</h4>
            <p>Евгений Кръстев</p>
            <p>Преди 2 часа</p>
          <div class="message-preview">
            <p>This is the preview for message 5.</p>
          </div>
        </div>
      </div>
        </div>
      <div class="message-form-container">
        <h2>Ново съобщение</h2>
        <form class="message-form">
          <input type="text" id="recipient-input" name="recipient" required placeholder="Въведете получател">

          <input type="text" id="subject-input" name="subject" required placeholder="Въведете тема">

          <textarea id="message-input" name="message" required placeholder="Въведете съобщение"></textarea>

          <button type="submit">Изпрати</button>
        </form>
      </div>
    </main>
    <?php
      include "./../../includes/footer.php";
    ?>
  </body>
</html>
