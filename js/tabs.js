document.addEventListener("DOMContentLoaded", function() {
  document.querySelector('.tabs .tabline button').click();
});
function openTab(event, id) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(id).style.display = "block";
  document.getElementById(id).style.maxWidth = "100%";
  event.currentTarget.className += " active";
}
