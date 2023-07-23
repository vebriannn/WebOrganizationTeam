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

  // card1
  document.getElementById("card1").style.padding = "0px";
  document.getElementById("card1").style.paddingBottom = "10px";
  document.getElementById("card1").style.width = "290px";
  document.getElementById("card1").style.height = "max-content";
  // document.getElementById("soalterjawab").style.paddingLeft = "40px";


  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");

  // document.getElementById("h4sec3").style.lineHeight = "20px"
  document.getElementById("inputplaceholder").placeholder = "Email";

  // Mengambil semua elemen div dengan kelas "background"
  var divElements = document.querySelectorAll("div.background");

  // Iterasi melalui setiap elemen dan mengubah kontennya
  divElements.forEach(function (div) {
    div.innerHTML = "";
    // textContent = "";
  });

  // replace container footer
  document.getElementById("replaceid").classList.replace("container", "container-fluid");

}

// mode sm
if (windowWidth >= 577 && windowWidth <= 768) {
  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  // document.getElementById("h4sec3").style.lineHeight = "20px"
  document.getElementById("inputplaceholder").placeholder = "Email";

  // Mengambil semua elemen div dengan kelas "background"
  var divElements = document.querySelectorAll("div.background");
  // Iterasi melalui setiap elemen dan mengubah kontennya
  divElements.forEach(function (div) {
    div.innerHTML = "";
    // textContent = "";
  });

  // card1
  document.getElementById("card1").style.padding = "0px";
  document.getElementById("card1").style.paddingBottom = "10px";
  document.getElementById("card1").style.width = "300px";
  document.getElementById("card1").style.height = "max-content";

  document.getElementById("remove-some").classList.add("social-media");

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");
}

// mode md
if (windowWidth >= 769 && windowWidth <= 991) {
  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  // Mengambil semua elemen div dengan kelas "background"
  var divElements = document.querySelectorAll("div.background");
  // Iterasi melalui setiap elemen dan mengubah kontennya
  divElements.forEach(function (div) {
    div.innerHTML = "";
    // textContent = "";
  });

  // card1
  document.getElementById("card1").style.padding = "0px";
  document.getElementById("card1").style.paddingBottom = "10px";
  document.getElementById("card1").style.width = "300px";
  document.getElementById("card1").style.height = "max-content";
  document.getElementById("remove-some").classList.add("social-media");

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");
}
