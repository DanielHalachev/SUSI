<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./../../css/student/timetable.css"/>    
<?php
include "./../../includes/styles.php";
include "./../../includes/javascript.php";
?>
    <script type="text/javascript">
      var initialTableContent;
      window.addEventListener("load", function() {
        var table = document.querySelector("table");
        initialTableContent = table.cloneNode(true).innerHTML;
      });
      function restoreDefaults() {
        var table = document.querySelector("table");
        table.innerHTML = initialTableContent;
      }
    </script>
</head>
<body>
<?php
include "./../../includes/student/header.php";
?>
<main>
  <h1>График</h1>
  <div class="filters">
    <select>
      <option default>Всички дни</option>
      <option>Понеделник</option>
      <option>Вторник</option>
      <option>Сряда</option>
      <option>Четвъртък</option>
      <option>Петък</option>
    </select>
    <select>
      <option default>Всички типове</option>
      <option>Лекции</option>
      <option>Упражнения</option>
    </select>
    <button onclick="restoreDefaults()">Връщане по подразбиране</button>
  </div>
  <table id="pc">
    <thead>
      <tr>
        <th></th>
        <th>8:00</th>
        <th>9:00</th>
        <th>10:00</th>
        <th>11:00</th>
        <th>12:00</th>
        <th>13:00</th>
        <th>14:00</th>
        <th>15:00</th>
        <th>16:00</th>
        <th>17:00</th>
        <th>18:00</th>
        <th>19:00</th>
        <th>20:00</th>
        <th>21:00</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Понеделник</th>
        <td></td>
        <td></td>
        <td class="exercise" colspan="2">Математически анализ<br/>проф. Иванов, 210 ФМИ</td>
        <td class="lecture" colspan="3">Операционни системи<br/>доц. Петров, 101 ФМИ</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th>Вторник</th>
        <td class="both" colspan="3">Архитектура на компютърните системи<br/>доц. Георгиев, 103 ФМИ</td>
        <td></td>
        <td></td>
        <td></td>
        <td class="lecture" colspan="2">Математически анализ<br/>проф. Иванов, 210 ФМИ</td>
        <td class="exercise" colspan="3">Операционни системи<br/>доц. Петров, 101 ФМИ</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th>Сряда</th>
        <td></td>
        <td></td>
        <td class="exercise" colspan="2">Линейна алгебра<br/>проф. Георгиев, 201 ФМИ</td>
        <td></td>
        <td></td>
        <td class="lecture" colspan="2">Линейна алгебра<br/>проф. Георгиев, 201 ФМИ</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th>Четвъртък</th>
        <td></td>
        <td class="lecture" colspan="2">Програмиране на C++<br/>доц. Димитров, 104 ФМИ</td>
        <td></td>
        <td class="exercise" colspan="2">Програмиране на C++<br/>доц. Димитров, 104 ФМИ</td>
        <td class="both" colspan="2">Теория на алгоритмите<br/>проф. Николов, 105 ФМИ</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th>Петък</th>
        <td></td>
        <td></td>
        <td class="lecture" colspan="2">Функционално програмиране<br/>проф. Костадинов, 102 ФМИ</td>
        <td class="exercise" colspan="2">Функционално програмиране<br/>проф. Костадинов, 102 ФМИ</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
    </tbody>
  </table>

  <script type="text/javascript">
  // Add a click event listener to the table cells containing activities
  var activityCells = document.querySelectorAll("td.lecture, td.exercise");
  activityCells.forEach(function (cell) {
    cell.addEventListener("contextmenu", function (event) {
      event.preventDefault(); // Prevent the default right-click menu from appearing
      
      // Create the context menu
      var contextMenu = document.createElement("div");
      contextMenu.className = "context-menu";
      
      // Create the menu options
      var hideOption = document.createElement("div");
      hideOption.innerText = "Скриване";
      hideOption.addEventListener("click", function () {
        var colspan = cell.getAttribute("colspan") || 1; // Get the colspan value of the cell or default to 1
        
        // Add empty td elements with the appropriate colspan to compensate for the hidden cell
        var row = cell.parentNode; // Get the parent row of the clicked cell
        for (var i = 0; i < colspan; i++) {
          var emptyCell = document.createElement("td");
          row.insertBefore(emptyCell, cell);
        }
        
        cell.style.display = "none"; // Hide the activity cell
        contextMenu.remove(); // Remove the context menu
      });
      
      var changeTimeOption = document.createElement("div");
      changeTimeOption.innerText = "Промяна";
      changeTimeOption.addEventListener("click", function (event) {
        contextMenu.remove(); // Remove the context menu
        // Get the possible hours from the table headers
        var tableHeaders = document.querySelectorAll("table thead th:not(:first-child)");
        var hours = Array.from(tableHeaders).map(function (header) {
          return header.innerText;
        });
        
        // Get the possible days from the table headers on each row inside the tbody
        var tableRows = document.querySelectorAll("table tbody tr");
        var days = Array.from(tableRows).map(function (row) {
          return row.firstElementChild.innerText;
        });
        
        // Create a dialog to prompt the user for the new day and hour
        var dialog = document.createElement("div");
        dialog.className = "dialog";
        dialog.style.left = event.clientX + "px";
        dialog.style.top = event.clientY + "px";
        var dayLabel = document.createElement("label");
        dayLabel.innerText = "Изберете ден:";
        
        var daySelect = document.createElement("select");
        days.forEach(function (day) {
          var option = document.createElement("option");
          option.value = day;
          option.text = day;
          daySelect.appendChild(option);
        });
        
        var hourLabel = document.createElement("label");
        hourLabel.innerText = "Изберете час:";
        
        var hourSelect = document.createElement("select");
        hours.forEach(function (hour) {
          var option = document.createElement("option");
          option.value = hour;
          option.text = hour;
          hourSelect.appendChild(option);
        });
        
        var submitButton = document.createElement("button");
        submitButton.innerText = "Преместване";
        submitButton.addEventListener("click", function () {
          var selectedDay = daySelect.value;
          var selectedHour = hourSelect.value;
          
          // Find the target row and the corresponding td cell
          var targetRow = null;
          var targetCell = null;
          for (var i = 0; i < tableRows.length; i++) {
            if (tableRows[i].firstElementChild.innerText === selectedDay) {
              targetRow = tableRows[i];
              targetCell = targetRow.querySelector("td:nth-of-type(" + (hours.indexOf(selectedHour) + 1) + ")");
              break;
            }
          }
          
          if (targetRow && targetCell) {
            var oldRow = cell.parentNode;
            
            // Add necessary empty td elements in the old row
            var oldRowColspan = cell.getAttribute("colspan") || 1; // Get the colspan value of the moved cell or default to 1
            for (var i = 0; i < oldRowColspan; i++) {
              var emptyCell = document.createElement("td");
              oldRow.insertBefore(emptyCell, cell.nextSibling);
            }
            // Insert the moved cell in the new position
            targetRow.insertBefore(cell, targetCell);
            //oldRow.insertBefore(cell, cell.nextSibling);
            // Remove unnecessary td elements in the new row
            var newRowColspan = cell.getAttribute("colspan") || 1; // Get the colspan value of the moved cell or default to 1
            var newCells = targetRow.querySelectorAll("td");
            console.log(newCells);
            var startRemoveIndex = Array.from(newCells).indexOf(targetCell);
            console.log("newRowColspan:" + newRowColspan);
            console.log("startRemoveIndex:" + startRemoveIndex);
            for (let i = startRemoveIndex; i < (2 + startRemoveIndex); i++) {
              newCells[i].remove();
              console.log(i);
            }
          }
          
          dialog.remove(); // Remove the dialog
        });
        
        dialog.appendChild(dayLabel);
        dialog.appendChild(daySelect);
        dialog.appendChild(hourLabel);
dialog.appendChild(hourSelect);
        dialog.appendChild(submitButton);
        
        // Append the dialog to the document body
        document.body.appendChild(dialog);
        // Add a click event listener to the document to close the context menu and dialog on outside click
        //document.addEventListener("click", function (event) {
          //if (!contextMenu.contains(event.target)) {
            //contextMenu.remove(); // Remove the context menu
          //}
          
          //if (!dialog.contains(event.target)) {
            //dialog.remove(); // Remove the dialog for time change
          //}
        //});
      });
      
      // Append the options to the context menu
      contextMenu.appendChild(hideOption);
      contextMenu.appendChild(changeTimeOption);
      
      // Position the context menu relative to the clicked cell
      contextMenu.style.left = event.clientX + "px";
      contextMenu.style.top = event.clientY + "px";
      
      // Append the context menu to the document body
      document.body.appendChild(contextMenu);
    });
  });
</script>

<table id="mobile">
  <thead>
    <tr>
      <th colspan="2">Понеделник</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>8:00</th>
      <td></td>
    </tr>
    <tr>
      <th>9:00</th>
      <td></td>
    </tr>
    <tr>
      <th>10:00</th>
      <td class="exercise" rowspan="2">Математически анализ<br/>проф. Иванов, 210 ФМИ</td>
    </tr>
    <tr>
      <th>11:00</th>
    </tr>
    <tr>
      <th>12:00</th>
      <td class="lecture" rowspan="3">Операционни системи<br/>доц. Петров, 101 ФМИ</td>
    </tr>
    <tr>
      <th>13:00</th>
    </tr>
    <tr>
      <th>14:00</th>
    </tr>
    <tr>
      <th>15:00</th>
      <td></td>
    </tr>
    <tr>
      <th>16:00</th>
      <td></td>
    </tr>
    <tr>
      <th>17:00</th>
      <td></td>
    </tr>
    <tr>
      <th>18:00</th>
      <td></td>
    </tr>
    <tr>
      <th>19:00</th>
      <td></td>
    </tr>
    <tr>
      <th>20:00</th>
      <td></td>
    </tr>
    <tr>
      <th>21:00</th>
      <td></td>
    </tr>
    <tr>
      <th colspan="2">Вторник</th>
    </tr>
    <tr>
      <th>8:00</th>
      <td class="both" rowspan="3">Архитектура на компютърните системи<br/>доц. Георгиев, 103 ФМИ</td>
    </tr>
    <tr>
      <th>9:00</th>
    </tr>
    <tr>
      <th>10:00</th>
    </tr>
    <tr>
      <th>11:00</th>
      <td></td>
    </tr>
    <tr>
      <th>12:00</th>
      <td></td>
    </tr>
    <tr>
      <th>13:00</th>
      <td></td>
    </tr>
    <tr>
      <th>14:00</th>
      <td class="lecture" rowspan="2">Математически анализ<br>проф. Иванов, 210 ФМИ</td>
    </tr>
    <tr>
      <th>15:00</th>
    </tr>
    <tr>
      <th>16:00</th>
      <td class="exercise" rowspan="3">Операционни системи<br/>доц. Петров, 101 ФМИ</td>
    </tr>
    <tr>
      <th>17:00</th>
    </tr>
    <tr>
      <th>18:00</th>
    </tr>
    <tr>
      <th>19:00</th>
      <td></td>
    </tr>
    <tr>
      <th>20:00</th>
      <td></td>
    </tr>
    <tr>
      <th>21:00</th>
      <td></td>
    </tr>
    <tr>
      <th colspan="2">Сряда</th>
    </tr>
    <tr>
      <th>8:00</th>
      <td></td>
    </tr>
    <tr>
      <th>9:00</th>
      <td></td>
    </tr>
    <tr>
      <th>10:00</th>
      <td class="exercise" rowspan="2">Линейна алгебра<br>проф. Георгиев, 201 ФМИ</td>
    </tr>
    <tr>
      <th>11:00</th>
    </tr>
    <tr>
      <th>12:00</th>
      <td></td>
    </tr>
    <tr>
      <th>13:00</th>
      <td></td>
    </tr>
    <tr>
      <th>14:00</th>
      <td class="lecture" rowspan="2">Линейна алгебра<br>проф. Георгиев, 201 ФМИ</td>
    </tr>
    <tr>
      <th>15:00</th>
    </tr>
    <tr>
      <th>16:00</th>
      <td></td>
    </tr>
    <tr>
      <th>17:00</th>
      <td></td>
    </tr>
    <tr>
      <th>18:00</th>
      <td></td>
    </tr>
    <tr>
      <th>19:00</th>
      <td></td>
    </tr>
    <tr>
      <th>20:00</th>
      <td></td>
    </tr>
    <tr>
      <th>21:00</th>
      <td></td>
    </tr>
    <tr>
      <th colspan="2">Четвъртък</th>
    </tr>
    <tr>
      <th>8:00</th>
      <td></td>
    </tr>
    <tr>
      <th>9:00</th>
      <td class="lecture" rowspan="2">Програмиране на C++<br>доц. Димитров, 104 ФМИ</td>
    </tr>
    <tr>
      <th>10:00</th>
    </tr>
    <tr>
      <th>11:00</th>
      <td></td>
    </tr>
    <tr>
      <th>12:00</th>
      <td class="exercise" rowspan="2">Програмиране на C++<br>доц. Димитров, 104 ФМИ</td>
    </tr>
    <tr>
      <th>13:00</th>
    </tr>
    <tr>
      <th>14:00</th>
      <td class="both" rowspan="2">Теория на алгоритмите<br/>проф. Николов, 105 ФМИ</td>
    </tr>
    <tr>
      <th>15:00</th>
    </tr>
    <tr>
      <th>16:00</th>
      <td></td>
    </tr>
    <tr>
      <th>17:00</th>
      <td></td>
    </tr>
    <tr>
      <th>18:00</th>
      <td></td>
    </tr>
    <tr>
      <th>19:00</th>
      <td></td>
    </tr>
    <tr>
      <th>20:00</th>
      <td></td>
    </tr>
    <tr>
      <th>21:00</th>
      <td></td>
    </tr>
    <tr>
      <th colspan="2">Петък</th>
    </tr>
    <tr>
      <th>8:00</th>
      <td></td>
    </tr>
    <tr>
      <th>9:00</th>
      <td></td>
    </tr>
    <tr>
      <th>10:00</th>
      <td class="lecture" rowspan="2">Функционално програмиране<br/>проф. Костадинов, 102 ФМИ</td>
    </tr>
    <tr>
      <th>11:00</th>
    </tr>
    <tr>
      <th>12:00</th>
      <td class="exercise" rowspan="2">Функционално програмиране<br>проф. Костадинов, 102 ФМИ</td>
    </tr>
    <tr>
      <th>13:00</th>
    </tr>
    <tr>
      <th>14:00</th>
      <td></td>
    </tr>
    <tr>
      <th>15:00</th>
      <td></td>
    </tr>
    <tr>
      <th>16:00</th>
      <td></td>
    </tr>
    <tr>
      <th>17:00</th>
      <td></td>
    </tr>
    <tr>
      <th>18:00</th>
      <td></td>
    </tr>
    <tr>
      <th>19:00</th>
      <td></td>
    </tr>
    <tr>
      <th>20:00</th>
      <td></td>
    </tr>
    <tr>
      <th>21:00</th>
      <td></td>
    </tr>
  </tbody>
</table>
</main>
<?php
include "./../../includes/footer.php";
?>
</body>
</html>
