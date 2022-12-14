@extends('layouts.template')

{{-- @section('judul')
Home
@endsection --}}

@section('hero')
<!-- ======= Hero Section ======= -->
<section id="beranda" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">PT Mitratani Dua Tujuh</h1>
      <h2 data-aos="fade-up" data-aos-delay="400"></h2>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="tema/img/heroo.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->
@endsection

@section('main')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>PT Mitratani Dua Tujuh merupakan perusahaan swasta nasional yang bergerak di bidang agroindustri sayuran beku dengan komoditas utama kedelai Jepang atau edamame.</h2>
              <p>
              Namun saat ini sudah berkembang sehingga juga memproduksi okra, buncis, sweet potato (ubi jalar), dan jusme (minuman sari edamame).
              </p>
              <div class="text-center text-lg-start">
                <a href="/about" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="tema/img/about-bg.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Profile Section ======= -->
    <section id="profil" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Profile</h2>
          <p>PT Mitratani Dua Tujuh</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="fa-sharp fa-solid fa-buildings"></i>
              <i class="ri-discuss-line icon"></i>
              <h3>Sejarah Perusahaan</h3>
              <p>PT Mitratani Dua Tujuh didirikan pada tanggal 17 Nopember 1994.</p>
              <a href="/sejarah" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Visi Misi</h3>
              <p>"Menjadi produsen sayuran beku dan olahannya yang terdepan, berkualitas tinggi 
                dan beorientasi pada standar makanan sehat".</p>
              <a href="/visimisi" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Strategi Bisnis</h3>
              <p>Strategi Bisnis 3G PT Mitratani Dua Tujuh :
                1. Good Product
                2. Good Market
                3. Good Cooperation.</p>
              <a href="/strategibisnis" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3>Kebijakan Mutu</h3>
              <p>KEBIJAKAN SISTEM JAMINAN HALAL
                 KEBIJAKAN KEAMANAN PANGAN.</p>
              <a href="/kebijakanmutu" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3>Budaya Kerja</h3>
              <p>??? M, Open Mindedness
                 ??? T, Togetherness
                 ??? D, Dedicated to Service Excellent
                 ??? T, Thoughtfulness.</p>
              <a href="/budayakerja" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Wilayah Kerja</h3>
              <a href="/wilayahkerja" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #65c600;">Edamame</h3>
              <div class="price"><sup>Rp</sup>0<span> / </span></div>
              <img src="tema/img/portfolio/produk 2.JPG" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Okra</h3>
              <div class="price"><sup>Rp</sup>19<span> / mo</span></div>
              <img src="tema/img/portfolio/produk 3.jpg" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #65c600;">Sweet Potato</h3>
              <div class="price"><sup>Rp</sup>29<span> / mo</span></div>
              <img src="tema/img/portfolio/produk 9.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #65c600;">Jusme</h3>
              <div class="price"><sup>Rp</sup>49<span> / mo</span></div>
              <img src="tema/img/portfolio/produk 1.jpeg" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Manfaat Edamame bagi kesehatan?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                  1. Menurunkan kadar kolesterol jahat<break>
                  2. Mengurangi risiko terjadinya sejumlah penyakit<break>
                  3. Meredakan gejala menopause<break>
                  4. Menyehatkan saluran pencernaan<break>
                  5. Menjaga berat badan tetap ideal<break>
                  (Sumber : https://www.alodokter.com/fakta-fakta-mencengangkan-tentang-kedelai-edamame)
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  Apakah produk - produk dari PT. Mitratani Dua Tujuh terjamin kehalalannya ?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                  PT Mitratani Dua Tujuh memproduksi sayuran beku siap saji yang halal, aman dan bermutu tinggi 
                  untuk memenuhi dan memuaskan kebutuhan dan harapan konsumen dengan menjamin seluruh produk akhir yang diproduksi disertifikasi LPPOM MUI.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  Apakah produk dari PT. Mitratani Dua Tujuh aman dikonsumsi sehari - hari ? 
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                  PT Mitratani Dua Tujuh memproduksi sayuran beku siap saji dengan mutu tinggi dan aman dikonsumsi untuk memenuhi dan memuaskan kebutuhan dan harapan pelanggan dengan menerapkan 
                  Sistem Manajemen Keamanan Pangan melalui Hazard Analysis and Critical Control Point (HACCP)
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                  Apakah yang membedakan produk PT. Mitratani dengan produk lain dipasaran ? 
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                  Produk kami menerapkan cara Produksi Makanan yang Baik (CPMB) / Good Manufacturing Practices (GMP) dan
                   Menerapkan Sistem Manajemen Keamanan Pangan melalui Hazard Analysis and Critical Control Point (HACCP).
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                  Apa produk dari PT. Mitratani Dua Tujuh yang paling best seller ? 
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                  Produk dari PT. Mitratani Dua Tujuh yang paling best seller salah satunya yaitu C'Mame.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                  Berapa lama ketahanan Jusme ?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                  Bertahan 1 hari pada suhu ruang, bertahan 7 hari pada lemari es. Karena jusme tidak mengandung pengawet. 
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="produk" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Produk</h2>
          <p>Check our latest product</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Edamame</li>
              <li data-filter=".filter-card">Okra</li>
              <li data-filter=".filter-web">Sweet Potato</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="tema/img/portfolio/produk 4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Edamame</h4>
                <p>edamame</p>
                <div class="portfolio-links">
                  <a href="tema/img/portfolio/produk 4.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Jusme"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="tema/img/portfolio/produk 2.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Edamame</h4>
                <p>edamame</p>
                <div class="portfolio-links">
                  <a href="tema/img/portfolio/produk 2.JPG" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Edamame"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="tema/img/portfolio/produk 5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Edamame</h4>
                <p>edamame</p>
                <div class="portfolio-links">
                  <a href="tema/img/portfolio/produk 5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Okra"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="tema/img/portfolio/produk 1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Jusme</h4>
                <p>Sari Edamame</p>
                <div class="portfolio-links">
                  <a href="tema/img/portfolio/produk 1.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Edamame"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="tema/img/portfolio/produk 3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Okra</h4>
                <p>okra</p>
                <div class="portfolio-links">
                  <a href="tema/img/portfolio/produk 3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Edamame"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="tema/img/portfolio/produk 6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Jusme</h4>
                <p>Sari Edamame</p>
                <div class="portfolio-links">
                  <a href="tema/img/portfolio/produk 6.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Jusme"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="tema/img/portfolio/produk 7.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Edamame</h4>
                <p>edamame</p>
                <div class="portfolio-links">
                  <a href="tema/img/portfolio/produk 7.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Edamame"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="tema/img/portfolio/produk 8.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Edamame</h4>
                <p>edamame</p>
                <div class="portfolio-links">
                  <a href="tema/img/portfolio/produk 8.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Edamame"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="tema/img/portfolio/produk 9.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sweet Potato</h4>
                <p>Sweet Potato</p>
                <div class="portfolio-links">
                  <a href="tema/img/portfolio/produk 9.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sweet Potato"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section =======
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="tema/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="tema/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div>End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="tema/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div>End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="tema/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div>End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="tema/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>End Testimonials Section --> 

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Clients</h2>
          <p>Temporibus omnis officia</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="tema/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section>End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <!-- <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="tema/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="tema/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="tema/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section>End Recent Blog Posts Section --> -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jl. Brawijaya No. 83, Wonosari, Mangli,
                    <br> Kec. Kaliwates, Kabupaten Jember,
                    <br> Jawa Timur 68131,
                </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+62-331 422222, <br>+62-331 488881</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>mitratani27@mitratani27.co.id</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>07:30AM - 04:30PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="/tambahcontact" method="post" class="php-email-form">
            @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <!-- <div class="error-message"></div> -->
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->
@endsection