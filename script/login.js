// ukur width untuk responsive
var windowWidth = window.innerWidth;


document.getElementById('loginmode').style.height = "max-content";
// document.getElementById('displ').style.overflow = "hidden";


if (windowWidth >= 320 && windowWidth <= 1160) {
  var element = document.getElementById('fotstart');
  element.style.display = "none";

  document.querySelector('.right-col').style.padding = "0px"
  document.getElementById('loginmode').style.marginLeft = "auto";
  document.getElementById('loginmode').style.marginRight = "auto";
}

