// ukur width untuk responsive
var windowWidth = window.innerWidth;

// const navbar = document.getElementById("nav");

// button let's Talk
const buttonLets = document.getElementById("buttonLets");
const buttonLets2 = document.getElementById("buttonLets2");
// text Let's Talk
const lets = document.getElementById("text");

if (windowWidth >= 320 && windowWidth <= 576) {
  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  document.getElementById("titlegem").style.fontSize = "32px";
  document.getElementById("titlegem").style.marginLeft = "10px";

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");

  document.getElementById("inputplaceholder").placeholder = "Email";

  document.getElementById("replaceid").classList.replace("container", "container-fluid");

  document.querySelector(".h1-2nd").classList.remove("h1-2nd");

  document.getElementById("SSwitch").src = "images/foto-sejarah-1-switch.png";
}

// mode sm
if (windowWidth >= 577 && windowWidth <= 768) {
  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  document.getElementById("inputplaceholder").placeholder = "Email";

  document.getElementById("inputplaceholder").placeholder = "Email";

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");


  document.getElementById("replaceid").classList.replace("container", "container-fluid");
  document.getElementById("SSwitch").src = "images/foto-sejarah-1-switch.png";
}

// mode md
if (windowWidth >= 769 && windowWidth <= 991) {
  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  document.getElementById("inputplaceholder").placeholder = "Email";

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");

  document.getElementById("replaceid").classList.replace("container", "container-fluid");
  document.getElementById("SSwitch").src = "images/foto-sejarah-1-switch.png";
}
