<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Cibodas | HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.9.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-auto"><img src="assets/img/cibodas.png" alt="logo" height="80px"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/">HOME</a></li>
          <li class="dropdown"><a href="/profil"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link" href="/visimisi">Visi dan Misi</a></li>
              <li><a class="nav-link" href="/sotk">Struktur Organisasi dan Tata Kerja</a></li>
              <!-- <li><a class="nav-link" href="/kelembagaan">Kelembagaan</a></li>
              <li><a class="nav-link" href="/potensi">Potensi Desa</a></li>
              <li><a class="nav-link" href="/asetdesa">Aset Desa</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/datadesa">Data Desa</a></li>
          <li class="dropdown"><a href="/informasi"><span>INFORMASI LAYANAN</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/ktp">Pembuatan KTP</a></li>
              <li><a href="/kk">Pembuatan KK</a></li>
              <li><a href="/aktekelahiran">Pembuatan Akte Kelahiran</a></li>
              <li><a href="/aktekematian">Pembuatan Akte Kematian</a></li>
              <li><a href="/pindahdomisili">Prosedur Pindah Domisili</a></li>
              <li><a href="/izinkeramaian">Pembuatan Surat Izin Keramaian</a></li>
              <li><a href="https://bapenda.jabarprov.go.id//" target="_blank">Cek PBB</a></li>
              <li><a href="/suratnikah">Pembuatan Surat Nikah</a></li>
              <li><a href="/izinskhu">Pembuatan SKHU</a></li>
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto" href="/event">EVENT</a></li> -->
          <li><a class="nav-link scrollto" href="/berita">BERITA</a></li>
          <li><a class="nav-link scrollto" href="/galeri">GALERI</a></li>
          <li><a class="nav-link scrollto" href="/login">LOGIN</a></li>
          <!-- <li><a class="nav-link scrollto" href="/umkm">POJOK UMKM</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          @foreach ($sliders as $index => $slider)

          <div class="carousel-item {{$index === 0 ? 'active' : ''}}" style="background-image: url(image/{{$slider->image}})">
            <div class="container">
              <h2>{{$slider->title}}</h2>
              <p>{{$slider->description}}</p>

            </div>
          </div>
          @endforeach


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </section> -->
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Berita Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita Desa Cibodas</h2>
        </div>

        <div class="row">
          @foreach ($news as $news)
          <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="/image/{{$news->image}}" alt="" class="img-fluid">
              </div>
              <br>
              <div class="text-center">
                <h4>{{$news->title}}</h4>
              </div>
              <p class="description">{{$news->description}}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Berita Section -->

    <!-- ======= Doctors Section ======= -->
    <!-- <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Perangkat Desa Cibodas</h2>
        </div>

        <div class="row">
          @foreach ($perangkat as $perangkat)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/image/{{$perangkat->image}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$perangkat->title}}</h4>
                <span>{{$perangkat->description}}</span>
              </div>
            </div>
          </div>
          @endforeach


        </div>

      </div>
    </section> -->
    <!-- End Doctors Section -->


    <!-- ======= Sejarah Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Sejarah Desa Cibodas</h3>
          <p> Desa Cibodas merupakan desa yang terletak di pinggiran bagian utara kota majalengka. meskipun Desa Cibodas terletak dipinggiran kota, namun Desa Cibodas memiliki . . . .</p>
          <a class="cta-btn scrollto" href="/sejarah">Lihat detail</a>
        </div>

      </div>s
    </section>End Cta Section -->


    <!-- ======= Data Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data Desa Cibodas</h2>
        </div>

        <div class="row">
          @foreach ($data as $data)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon">
                <img src="/image/{{$data->image}}" alt="" class="img-fluid" width="80">
              </div>
              <h4>{{$data->title}}</h4>
              <p class="description">{{$data->description}}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Data Section -->

    <!-- ======= visimisi Section ======= -->

    <section id="visimisi" class="features">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Visi & Misi</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Visi</h4>
              <h5>Terwujudnya Masyarakat Desa Cibodas BERSATU</h5>
              <p>(Berdaya, Edukasi, Religius, Sejahtera, Amanah, Transparansi, Unggul)</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Misi</h4>
              <p>1. Meningkatkan Sistem pelayanan public yang maksimal kepada masyarakat</p>
              <p>2. Meningkatkan insfratuktur, sarana dan prasarana desa agar bisa dinikmati oleh masyarakat baik dari kalangan umum maupun khusus</p>
              <p>3. Mengedepankan musyawarah dan transfaransi dalam menjalankan roda pemerintahan</p>
              <p>4. Mendorong partisifasi masyarakat dalam proses pembangunan sebagai upaya mewujudkan pembangunan desa yang berkeadilan</p>
              <p>5. Mengutamakan musyawarah dalam segala kegiatan perencanaan dan pelaksanaan pembangunan desa</p>
              <p>6. Memberdayakan kalangan milineal atau regenerasi dalam setiap kegiatan baik meliputi kegiatan umum, agama, serta gotong royong</p>
              <p>7. Meningkatkan mutu dan tatakelola badan usaha milik desa (BUMDES)</p>
              <p>8. Mengembangkan ide-ide / inovasi masyarakat yang berpotensi di segala bidang baik bidang pendidikan, kesehatan, ekonomi termasuk sector pertanian</p>
              <p>9. Memaksimalkan program-program pemerintah desa dan diimbangi dengan pembenahan (bantuan) yang kurang tepat sasaran</p>
              <p>10. Mewujudkan keharmonisan antar kelembagaan yang ada di desa cibodas sehingga terjalin sinergitas kerja yang optimal.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/KADES.png");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End visimisi Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Informasi Layanan Desa Cibodas</h2>
        </div>

        <div class="row">
          @foreach ($service as $service)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <img src="/image/{{$service->image}}" alt="" class="img-fluid" width="100">
            <h4>{{$service->title}}</h4>
            <p>{{$service->description}}</p>
            <a class="cta-btn scrollto" href="/informasi">Lihat detail</a>
          </div>
          @endforeach
        </div>
      </div>
    </section> -->
    <!-- End Featured Services Section -->

    <!-- ======= UMKM Section ======= -->
    <!-- <section id="services" class="services services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>UMKM Desa Cibodas</h2>
        </div>

        <div class="row">
          @foreach ($umkm as $umkm)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <img src="/image/{{$umkm->image}}" alt="" class="img-fluid" width="100">
            <h4>{{$umkm->title}}</h4>
            <p>{{$umkm->description}}</p>
          </div>
          @endforeach
        </div>

      </div>
    </section> -->
    <!-- End Services Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri Desa Cibodas</h2>
        </div>

        <div class="gallery-slider swiper">

          <div class="swiper-wrapper align-items-center">
            @foreach ($galeri as $index => $galeri)
            <div class="swiper-slide{{$index === 0 ? 'active' : ''}}">
              <a class="gallery-lightbox" href="image/{{$galeri->image}}"> <img src="image/{{$galeri->image}}" class="img-fluid" alt=""> </a>

            </div>
            @endforeach
          </div>
          <div class="swiper-pagination">

          </div>


        </div>

      </div>
    </section><!-- End Gallery Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Cibodas</h3>
              <p>
                Kec. Majalengka <br>
                Kab. Majalengka<br><br>
                <strong>Phone:</strong>0821 1362 3637<br>
                <strong>Email:</strong>haldialamsyah7@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/beranda">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/profil">Profil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/informasi">Informasi Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/berita">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/galeri">Galeri</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Desa</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/kk">Pembuatan KTP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/ktp">Pembuatan Kartu Keluarga</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/aktekelahiran">Pembuatan Akte Kelahiran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/aktekematian">Pembuatan Akte Kematian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/pindahdomisili">Prosedur Pindah Domisili</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/izinkeramaian">Pembuatan Surat Izin Keramaian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/suratnikah">Pembuatan Surat Nikah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/izinskhu">Pembuatan SKHU</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Haldi Alamsyah</span></strong>.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>