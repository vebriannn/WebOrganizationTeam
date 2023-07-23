<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Gemilang - We are One!</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/forum.css" rel="stylesheet" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top aos-init aos-animate scrolled" data-aos="fade-down" id="nav">
      <div class="container">
        <a href="home.php" class="navbar-brand">
          <h4>Gemilang</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="artikel.php">Artikel</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="forum.php">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Tentang</a>
            </li>
            <div class="button ml-auto d-none" id="buttonLets">
              <a class="btn nav-link ml-auto px-4" href="index.php" id="text">Let's Talk</a>
            </div>
          </ul>
        </div>
        <div class="button ml-auto" id="buttonLets2">
          <a class="btn nav-link ml-auto px-4" href="index.php" id="text">Let's Talk</a>
        </div>
      </div>
    </nav>

    <div class="page-content page-home">
      <!-- section1 -->
      <section class="section1">
        <div class="container d-sm-flex justify-content-sm-center">
          <div class="row wrapper-img text-center align-items-center justify-content-center col-lg-12 col-sm-12">
            <img src="images/Rectangle-biru.png" alt="" data-aos="fade-right"/>
            <div class="text-center content-text">
              <img src="images/arrow-left.png" alt="" class="arrow-left d-none " />
              <h1 data-aos="fade-down" >Diskusikan Pertanyaan Anda!</h1>
              <p data-aos="fade-down" data-aos-delay="100">Nantinya anggota kami atau pengguna lain dapat melihat serta<br />menjawab pertanyaan yang anda buat</p>
              <img src="images/arrow-left.png" alt="" class="arrow-right d-none " class="d-none" />
            </div>
          </div>
        </div>
      </section>
      <!-- section2 -->
      <section class="section2">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 d-block d-md-block d-lg-flex wrapper-profile">
              <img src="images/profie-main.png" alt="" data-aos="fade-down"/>
              <div class="name-person ml-sm-3 ml-md-3 ml-lg-3">
                <h5 class="m-0 text-center text-md-center text-lg-left" data-aos="fade-down">Bintang Azka</h5>
                <p class="text-center" data-aos="fade-down"><span>Student</span> at SMK Telkom Purwokerto</p>
                <div class="info d-flex justify-content-center justify-content-md-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="200">
                  <p>0 Question</p>
                  <p>0 Answer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <textarea name="" id="" cols="20" rows="10" placeholder="Start a Question..." data-aos="fade-left"></textarea>
              <div class="btn-submit">
                <button type="submit" data-aos="fade-left" data-aos-delay="200">Share</button>
                <img src="images/plus-square.svg" alt="" class="d-none" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section3 -->
      <section class="section3">
        <div class="container p-0">
          <div class="row" id="rowwidth1" data-aos="fade-right">
            <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sudah Dijawab</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Belum Dijawab</a>
              </li>
            </ul>
          </div>
          <div class="row" id="rowwidth">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row d-lg-flex justify-content-lg-around" id="column">
                  <div class="col-lg-4 mb-5" data-aos="fade-down">
                    <div class="card card-white">
                      <div class="card-body">
                        <h4 id="h4sec3">Apakah komunitas ini sedang merekrut anggota baru?</h4>
                        <div class="konten mt-4">
                          <h5>Anda Bisa mengisi formulir yang tersedia di Website</h5>
                          <p>> Dijawab Rizky</p>
                        </div>
                        <div class="profile d-flex">
                          <div class="image">
                            <img src="images/foto-cewe.png" alt="" />
                          </div>
                          <div class="name-person ml-2">
                            <h6>Azizah Iqlima</h6>
                            <p><span>Student</span> at SMK Telkom Purwokerto</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-5" data-aos="fade-down">
                    <div class="card card-white">
                      <div class="card-body">
                        <h4 id="h4sec3">Saya ingin memberikan donasi tapi di bagian mana ya?</h4>
                        <div class="konten mt-4">
                          <h5>Anda Bisa mengisi formulir yang tersedia di Website</h5>
                          <p>> Dijawab Rizky</p>
                        </div>
                        <div class="profile d-flex">
                          <div class="image">
                            <img src="images/foto-profil-lur (5).png" alt="" />
                          </div>
                          <div class="name-person ml-2">
                            <h6>Vebrian Nikola</h6>
                            <p><span>Programmer</span> at Telkom Japanese Office</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-5" data-aos="fade-down">
                    <div class="card card-white">
                      <div class="card-body">
                        <h4 id="h4sec3">
                          Bagaimana cara bergabung ke<br />
                          Komunitas Gemilang?
                        </h4>
                        <div class="konten mt-4">
                          <h5>Anda Bisa mengisi formulir yang tersedia di Website</h5>
                          <p>> Dijawab Rizky</p>
                        </div>
                        <div class="profile d-flex">
                          <div class="image">
                            <img src="images/foto-cewe.png" alt="" />
                          </div>
                          <div class="name-person ml-2">
                            <h6>Faliza Star</h6>
                            <p><span>Student</span> at SMK Telkom Purwokerto</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row" id="rowwidth">
                  <div class="col-lg-4" data-aos="fade-down">
                    <div class="card" id="cardwidth">
                      <div class="card-body">
                        <h4 id="h4sec3">
                          Bagaimana cara bergabung ke<br />
                          Komunitas Gemilang?
                        </h4>
                        <div class="button">
                          <div class="background">terdapat jawaban? Swipe untuk menjawab</div>
                          <div class="konten d-flex">
                            <img src="images/arrow-right-cuy.svg" alt="" />
                            <p class="ml-md-3">
                              terdapat jawaban?<br />
                              Swipe untuk menjawab
                            </p>
                          </div>
                        </div>
                        <div class="profile d-flex">
                          <div class="image">
                            <img src="images/foto-profil-lur (1).png" alt="" />
                          </div>
                          <div class="name-person ml-2 mt-1">
                            <h6>Faliza Putri</h6>
                            <p><span>Student</span> at SMK Telkom Purwokerto</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4" data-aos="fade-down">
                    <div class="card" id="cardwidth">
                      <div class="card-body">
                        <h4 id="h4sec3">Apakah gemilang sedang open donasi untuk pelajar jalanan?</h4>
                        <div class="button">
                          <div class="background">terdapat jawaban? Swipe untuk menjawab</div>
                          <div class="konten d-flex">
                            <img src="images/arrow-right-cuy.svg" alt="" />
                            <p class="ml-3">terdapat jawaban?<br />Swipe untuk menjawab</p>
                          </div>
                        </div>
                        <div class="profile d-flex">
                          <div class="image">
                            <img src="images/foto-profil-lur (3).png" alt="" />
                          </div>
                          <div class="name-person ml-2 mt-1">
                            <h6>Agung Syaputra</h6>
                            <p><span>Doctor</span> at Margono Hospital</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4" data-aos="fade-down">
                    <div class="card" id="cardwidth">
                      <div class="card-body">
                        <h4 id="h4sec3">Saya ingin menjadi designer di komunitas ini, apakah bisa?</h4>
                        <div class="button">
                          <div class="background">terdapat jawaban? Swipe untuk menjawab</div>
                          <div class="konten d-flex">
                            <img src="images/arrow-right-cuy.svg" alt="" />
                            <p class="ml-3">terdapat jawaban?<br />Swipe untuk menjawab</p>
                          </div>
                        </div>
                        <div class="profile d-flex">
                          <div class="image">
                            <img src="images/foto-profil-lur (2).png" alt="" />
                          </div>
                          <div class="name-person ml-2 mt-1">
                            <h6>Bintang Azka</h6>
                            <p><span>UI Designer</span> at SMK Telkom Purwokerto</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4" data-aos="fade-down">
                    <div class="card" id="cardwidth">
                      <div class="card-body">
                        <h4 id="h4sec3">Apakah saya bisa ikut mengajar untuk para pelajar jalanan?</h4>
                        <div class="button">
                          <div class="background">terdapat jawaban? Swipe untuk menjawab</div>
                          <div class="konten d-flex">
                            <img src="images/arrow-right-cuy.svg" alt="" />
                            <p class="ml-3">terdapat jawaban?<br />Swipe untuk menjawab</p>
                          </div>
                        </div>
                        <div class="profile d-flex">
                          <div class="image">
                            <img src="images/foto-profil-lur (4).png" alt="" />
                          </div>
                          <div class="name-person ml-2 mt-1">
                            <h6>Syerena Aprilia</h6>
                            <p><span>Dosen</span> at ITB Campus</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4" data-aos="fade-down">
                    <div class="card" id="cardwidth">
                      <div class="card-body">
                        <h4 id="h4sec3">
                          Bagaimana cara bergabung ke<br />
                          Komunitas Gemilang?
                        </h4>
                        <div class="button">
                          <div class="background">terdapat jawaban? Swipe untuk menjawab</div>
                          <div class="konten d-flex">
                            <img src="images/arrow-right-cuy.svg" alt="" />
                            <p class="ml-3">terdapat jawaban?<br />Swipe untuk menjawab</p>
                          </div>
                        </div>
                        <div class="profile d-flex">
                          <div class="image">
                            <img src="images/foto-cewe.png" alt="" />
                          </div>
                          <div class="name-person ml-2 mt-1">
                            <h6>Ahmad dyan</h6>
                            <p><span>Student</span> at SMK Telkom Purwokerto</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4" data-aos="fade-down">
                    <div class="card" id="cardwidth">
                      <div class="card-body">
                        <h4 id="h4sec3">Apakah membutuhkan tenaga IT untuk pengembangan web?</h4>
                        <div class="button">
                          <div class="background">terdapat jawaban? Swipe untuk menjawab</div>
                          <div class="konten d-flex">
                            <img src="images/arrow-right-cuy.svg" alt="" />
                            <p class="ml-3">terdapat jawaban?<br />Swipe untuk menjawab</p>
                          </div>
                        </div>
                        <div class="profile d-flex">
                          <div class="image">
                            <img src="images/foto-profil-lur (6).png" alt="" />
                          </div>
                          <div class="name-person ml-2 mt-1">
                            <h6>Muhammad Tegar</h6>
                            <p><span>Programmer</span> at Telkom Indonesia</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section4 -->
      <section class="section4">
        <div class="container">
          <div class="title" data-aos="fade-down">
            <h1>
              <span>Bantu </span>orang lain untuk<br />
              menjadi <span>peringkat no 1!</span>
            </h1>
            <p class="">Berikut peringkat Saat ini :</p>
          </div>
          <div class="row d-flex justify-content-around">
            <div class="card border-content mt-5 overflow-hidden" id="card1">
              <div class="row" data-aos="fade-right">
                <div class="col-lg-9 col-md-12 d-flex">
                  <p class="mt-lg-3 mr-lg-5" id="number">01.</p>
                  <img src="images/img-peringkat.png" alt="" />
                  <div class="name-info ml-2 ml-lg-3 mt-1">
                    <h5>Ahmad Dyan</h5>
                    <p class="info-p"><span>Student</span> at SMK Telkom Purwokerto</p>
                  </div>
                </div>
                <div class="col-lg-3 d-flex mt-2">
                  <h3 class="ml-5">120K</h3>
                  <p class="ml-lg-auto">Soal<br/>terjawab</p>
                </div>
              </div>
              <div class="row" data-aos="fade-right">
                <div class="col-lg-9 d-flex" >
                  <p class="mt-lg-3 mr-lg-5" id="number">02.</p>
                  <img src="images/img-peringkat.png" alt="" />
                  <div class="name-info ml-2 ml-lg-3 mt-1">
                    <h5>Charlie Monica</h5>
                    <p class="info-p"><span>Student</span> at SMK Telkom Purwokerto</p>
                  </div>
                </div>
                <div class="col-lg-3 d-flex mt-2" id="soalterjawab">
                  <h3 class="ml-5">50K</h3>
                  <p class="ml-lg-auto">Soal<br />terjawab</p>
                </div>
              </div>
              <div class="row" data-aos="fade-right">
                <div class="col-lg-9 d-flex" >
                  <p class="mt-lg-3 mr-lg-5" id="number">03.</p>
                  <img src="images/img-peringkat.png" alt="" />
                  <div class="name-info ml-2 ml-lg-3 mt-1">
                    <h5>Tegar Wahyu</h5>
                    <p class="info-p"><span>Student</span> at SMK Telkom Purwokerto</p>
                  </div>
                </div>
                <div class="col-lg-3 d-flex mt-2" id="soalterjawab">
                  <h3 class="ml-5">10K</h3>
                  <p class="ml-lg-auto">Soal<br />terjawab</p>
                </div>
              </div>
              <div class="row" data-aos="fade-right">
                <div class="col-lg-9 d-flex" >
                  <p class="mt-lg-3 mr-lg-5" id="number">04.</p>
                  <img src="images/img-peringkat.png" alt="" />
                  <div class="name-info ml-2 ml-lg-3 mt-1">
                    <h5>Bintang Azka</h5>
                    <p class="info-p"><span>Student</span> at SMK Telkom Purwokerto</p>
                  </div>
                </div>
                <div class="col-lg-3 d-flex mt-2" id="soalterjawab">
                  <h3 class="ml-5">5K</h3>
                  <p class="ml-lg-auto">Soal<br />terjawab</p>
                </div>
              </div>
              <div class="row" data-aos="fade-right">
                <div class="col-lg-9 d-flex">
                  <p class="mt-lg-3 mr-lg-5" id="number">05.</p>
                  <img src="images/img-peringkat.png" alt="" />
                  <div class="name-info ml-2 ml-lg-3 mt-1">
                    <h5>Vebrian Nikola</h5>
                    <p class="info-p"><span>Student</span> at SMK Telkom Purwokerto</p>
                  </div>
                </div>
                <div class="col-lg-3 d-flex mt-2" id="soalterjawab">
                  <h3 class="ml-5">150+</h3>
                  <p class="ml-lg-auto">Soal<br />terjawab</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section5 -->
      <section class="section5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="card first-card w-100" data-aos="fade-right">
                <div class="card second-card">
                  <img src="images/left-rectangle.png" alt="" class="foto-rectangle position-relative mr-auto d-none d-lg-block" />
                  <img src="images/arrow-left.svg" alt="" class="arrow-left d-none d-lg-block" />
                  <h2 data-aos="fade-down">Masuk untuk mendapat Update terbaru<br />dari Komunitas kami!</h2>
                  <div class="search d-lg-flex" data-aos="fade-up">
                    <input type="text" placeholder="Enter your email" class="mt-4" id="inputplaceholder"/>
                    <div class="button">
                      <a href="#">Get Started</a>
                    </div>
                  </div>
                  <img src="images/right-rectangle.png" alt="" class="foto-rectangle position-relative ml-auto d-none d-lg-block" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section6  -->
      <section class="section6" style="background-color: #2a2a2a" id="sec6">
        <div class="container" id="replaceid">
          <div class="content">
            <div class="title-footer">
              <h1>Gemilang</h1>
            </div>
            <div class="list-content d-flex mb-4 justify-content-center align-items-center">
              <div class="row d-sm-flex justify-content-sm-center mr-auto">
                <div class="about col-lg-3 col-sm-5 col-md-5">
                  <div class="title-list mb-4">
                    <h5 id="h5footer">Tentang</h5>
                  </div>
                  <ul id="isi">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Github Repo</a></li>
                    <li><a href="#">Slack</a></li>
                    <li><a href="#">Submit on Issue</a></li>
                  </ul>
                </div>
                <div class="getting gap-list col-lg-3 col-sm-5 col-md-5">
                  <div class="title-list mb-4">
                    <h5 id="h5footer" >Get Started</h5>
                  </div>
                  <ul id="isi">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Fourm Diskusi</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Pendaftaran</a></li>
                  </ul>
                </div>
                <div class="resources gap-list col-sm-5 col-lg-3 mt-lg-0 mt-sm-5 col-md-5">
                  <div class="title-list mb-4">
                    <h5 id="h5footer">Help Desk</h5>
                  </div>
                  <ul id="isi">
                    <li><a href="#">Telepon</a></li>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Alamat</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 mt-lg-0 col-sm-5 mt-sm-5 col-md-5" id="remove-some">
                  <div class="title-list mb-4">
                    <h5 id="h5footer">Social Media</h5>
                    <p id="pfoter">Kunjung sosial media kami untuk melihat update terbaru.</p>
                    <div class="icon">
                      <div class="row" id="sosmed">
                       
                        <div class="col-sm-2 col-md-2">
                          <img src="images/Whatsapp.svg" alt="" />
                        </div>
                        <div class="col-sm-2 col-md-2">
                          <img src="images/Instagram.svg" alt="" />
                        </div>
                        <div class="col-sm-2 col-md-2">
                          <img src="images/Facebook.svg" alt="" />
                        </div>
                        <div class="col-sm-2 col-md-2">
                          <img src="images/Youtube.svg" alt="" />
                        </div>
                         <div class="col-sm-2 col-md-2">
                          <img src="images/googleicon.svg" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-bottom d-flex">
              <p id="hakcipta">@Copyright SMK Telkom Teams</p>
              <p class="ml-auto" id="author">Tegar, Bintang, Vebrian</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- <script src="/script/app.js"></script>
    <script src="/script/app2.js"></script> -->
    <script src="script/forum.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- <script>
      const txts = document.querySelector(".animate-text").children,
        txtsLen = txts.length;
      let index = 0;
      const textInTimer = 2000,
        textOutTimer = 1800;

      function animateText() {
        for (let i = 0; i < txtsLen; i++) {
          txts[i].classList.remove("text-in", "text-out");
        }
        txts[index].classList.add("text-in");

        setTimeout(function () {
          txts[index].classList.add("text-out");
        }, textOutTimer);

        setTimeout(function () {
          if (index == txtsLen - 1) {
            index = 0;
          } else {
            index++;
          }
          animateText();
        }, textInTimer);
      }
      window.onload = animateText;
    </script>
    <script>
      var typingEffect = new Typed(".multiText", {
        strings: ["Karakter", "Pendirian", "Pribadi"],
        loop: true,
        typeSpeed: 60,
        backSpeed: 40,
        backDelay: 1500,
      });
    </script> -->
  </body>
</html>
