var findresponsif = document.getElementById("tagText");
var placeholderresponsif = document.getElementById("phRename");
var divElement = document.getElementById("navbarSupportedContent");
var currentClass = divElement.getAttribute("class");
var lets = document.getElementById("text");
var idreplace = document.getElementById("replacecontainer");
var font = document.getElementById("fontsize");
var fontP = document.getElementById("fontP");
var sponsor = document.getElementById("spon");
var windowWidth = window.innerWidth;
const buttonLets = document.getElementById("buttonLets");
const buttonLets2 = document.getElementById("buttonLets2");
// very small version



if (windowWidth < 576) {
  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");
  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  document.getElementById('fotrow').classList.remove('row');

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  findresponsif.textContent = "";
  findresponsif.style.display = "none";
  font.style.fontSize = "6.2vmin";
  font.style.lineHeight = "8vmin";
  fontP.style.fontSize = "3vmin";
  sponsor.style.marginTop = "30px";
  placeholderresponsif.placeholder = "Search ";
  document.getElementById("paragraphcard").style.marginLeft = "0px";


  var element = document.getElementById("sec5");
  element.style.height = "300px";

  // replace container footer
  document.getElementById("replaceid").classList.replace("container", "container-fluid");
}

// small version
if (windowWidth < 768) {
  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");

  findresponsif.textContent = "";
  findresponsif.style.display = "none";
  placeholderresponsif.placeholder = "Search";
  // var updatedClass = currentClass + " shadow-sm";
  // divElement.setAttribute("class", updatedClass);
  divElement.style.borderBottomRightRadius = "10px";
  divElement.style.borderBottomLeftRadius = "10px";
  idreplace.classList.replace("container", "container-fluid");


  placeholderresponsif.placeholder = "Search ";
  // divElement.classList.remove("shadow-sm");

  // replace container footer
  document.getElementById("replaceid").classList.replace("container", "container-fluid");
} else {
  placeholderresponsif.placeholder = "Search News, Artikel, Something...";
  idreplace.classList.replace("container-fluid", "container");

  //   $(function () {
  //     $(document).scroll(function () {
  //       var $nav = $(".navbar-fixed-top");
  //       $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
  //     });
  //   });
}

// md / mode tablet

if (windowWidth < 992) {
  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  placeholderresponsif.placeholder = "Search ";

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");
  // replace container footer
  document.getElementById("replaceid").classList.replace("container", "container-fluid");
}
