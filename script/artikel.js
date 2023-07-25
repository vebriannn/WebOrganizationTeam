// ukur width untuk responsive
var windowWidth = window.innerWidth;

// const navbar = document.getElementById("nav");

// button let's Talk
const buttonLets = document.getElementById("buttonLets");
const buttonLets2 = document.getElementById("buttonLets2");
// text Let's Talk
const lets = document.getElementById("text");

// mode mobile


if (windowWidth >= 320 && windowWidth <= 576) {
  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  // bagian section 1
  // 600px height
  document.getElementById("sec1").style.height = "max-content";
  document.getElementById("sec1").style.paddingBottom = "50px";

  // bagian section 2
  // 600px height
  document.getElementById("sec2").style.height = "max-content";
  document.getElementById("sec2").style.paddingBottom = "60px";

  // bagian section 3
  //  900px height
  document.getElementById("sec3").style.height = "max-content";
  document.getElementById("sec3").style.paddingBottom = "80px";

  // bagian section 5
  document.getElementById("sec5").style.height = "1000px";
  document.getElementById("sec5").style.display = "none";

  // bagian section 6
  document.getElementById("sec6").style.height = "max-content";
  document.getElementById("sec6").style.paddingBottom = "80px";

  // menghapus elemnt
  document.getElementById("sec4").style.display = "none";


  // Berita Lainnya
  document.getElementById("BeritaLainnya").style.display = "none";

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");
}

// mode sm
if (windowWidth >= 577 && windowWidth <= 768) {
  // remove view more artikel ke none
  document.getElementById("viewMoreArtikel").style.display = "none";
  document.getElementById("artikelTersembunyi").style.display = "none";

  // button let's Talk
  buttonLets.style.width = "max-content";
  buttonLets.style.padding = "10px";

  // text let's Talk
  lets.style.fontSize = "12px";
  lets.style.padding = "8px 0px";

  // bagian section 1
  // 600px height
  document.getElementById("sec1").style.height = "max-content";
  document.getElementById("sec1").style.paddingBottom = "80px";

  // bagian section 2
  // 600px height
  document.getElementById("sec2").style.height = "max-content";
  document.getElementById("sec2").style.paddingBottom = "80px";

  // bagian section 5
  // 1000px height
  document.getElementById("sec5").style.height = "max-content";
  document.getElementById("sec5").style.paddingBottom = "80px";

  // bagian section 6
  document.getElementById("sec6").style.height = "max-content";
  document.getElementById("sec6").style.paddingBottom = "80px";


  // remove ml auto
  // document.getElementById("remove-ml").classList.remove("ml-auto");

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

  // bagian section 1
  // 600px height
  document.getElementById("sec1").style.height = "max-content";
  document.getElementById("sec1").style.paddingBottom = "120px";

  // bagian section 2
  // 600px height
  document.getElementById("sec2").style.height = "max-content";
  document.getElementById("sec2").style.paddingBottom = "80px";

  // bagian section 6
  document.getElementById("sec4").style.height = "max-content";
  document.getElementById("sec4").style.paddingBottom = "80px";

  // bagian section 6
  document.getElementById("sec6").style.height = "max-content";
  document.getElementById("sec6").style.paddingBottom = "80px";

  buttonLets.classList.remove("d-none");
  buttonLets2.classList.add("d-none");
}

// view dan remove view artikel
function viewBerita() {
  // adakan artikel
  document.getElementById("artikelTersembunyi").style.display = "block";
  document.getElementById("banyakBerita").style.display = "none";
  document.getElementById("sedikitBerita").style.display = "block";
}

function viewBeritaNone() {
  // adakan artikel
  document.getElementById("artikelTersembunyi").style.display = "none";
  document.getElementById("banyakBerita").style.display = "block";
  document.getElementById("sedikitBerita").style.display = "none";
}
