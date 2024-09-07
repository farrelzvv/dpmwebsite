@include('layouts.header')

<main>
    <article>
      <section class="section hero" id="home">
        <div class="container">
    
            <figure class="hero-banner">
                <img src="./assets/images/banner-hero.png" width="804" height="643" loading="lazy" alt="hero banner"
                    class="w-100">
            </figure>
    
            <div class="hero-content">
    
                <h2 class="h1 hero-title">Tugas Pokok & Fungsi</h2>
    
                <p class="section-text">
                    Dewan Nirvahaka Abirama - Saatnya Beraksi!
                </p>
                
                <ul class="hero-list">
                    <li class="hero-item">
                        <img src="./assets/images/check-circle.svg" width="16" height="16" loading="lazy" alt="Checkmark icon">
                        <span class="span">Legislasi</span>
                    </li>
                    <li class="hero-item">
                        <img src="./assets/images/check-circle.svg" width="16" height="16" loading="lazy" alt="Checkmark icon">
                        <span class="span">Budgeting</span>
                    </li>
                    <li class="hero-item">
                        <img src="./assets/images/check-circle.svg" width="16" height="16" loading="lazy" alt="Checkmark icon">
                        <span class="span">Controlling</span>
                    </li>
                </ul>
                
                <!-- Tombol baru -->
                <a href="#features" class="btn hero-btn">Kenalan Yuk!</a>
            </div>
        </div>
    </section>
    
<!---Tupoksi-->

<section class="section service" id="services">
  <div class="container">


    <h2 class="h2 section-title" data-aos="fade-up" data-aos-duration="1000">Tiga Tupoksi DPM</h2>

    <p class="section-text" data-aos="fade-up" data-aos-duration="1000">
      Masih belum tau, tugas Dewan Perwakilan Mahasiswa itu apa aja? yuk langsung kepoin!
    </p>
    <ul class="service-list">
      <li>
        <div class="service-card" data-aos="fade-up" data-aos-duration="1000">

          <figure class="card-banner">
            <img src="./assets/images/legislasi.svg" width="728" height="344" loading="lazy" alt="support"
              class="w-100">
          </figure>

          <div class="card-content" data-aos="fade-up" data-aos-duration="1500">

            <h3 class="h3">
              <a href="#" class="card-title">Legislation</a>
            </h3>

            <p class="card-text">
              Fungsi legislasi dalam DPM berhubungan dengan pembuatan dan pengesahan 
              peraturan-peraturan yang mengatur kehidupan kampus dan kegiatan mahasiswa.
            </p>

            <a href="#" class="btn-link">
              <span class="span">Kepoin Outputnya</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </li>

      <li>
        <div class="service-card" data-aos="fade-up" data-aos-duration="2000">

          <figure class="card-banner">
            <img src="./assets/images/budgeting.svg" width="728" height="344" loading="lazy" alt="Engagement"
              class="w-100">
          </figure>

          <div class="card-content"data-aos="fade-up" data-aos-duration="2500" >

            <h3 class="h3">
              <a href="#" class="card-title">Budgeting</a>
            </h3>

            <p class="card-text">
              Fungsi budgeting berkaitan dengan pengelolaan anggaran dan keuangan yang digunakan untuk mendanai kegiatan mahasiswa, serta memastikan alokasi dana yang tepat.
            </p>

            <a href="#" class="btn-link">
              <span class="span">Kepoin Outputnya</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </li>

      <li>
        <div class="service-card" data-aos="fade-up" data-aos-duration="2500">

          <figure class="card-banner">
            <img src="./assets/images/controlling.svg" width="728" height="344" loading="lazy" alt="Marketing"
              class="w-100">
          </figure>

          <div class="card-content" data-aos="fade-up" data-aos-duration="3000">

            <h3 class="h3">
              <a href="#" class="card-title">Controlling</a>
            </h3>

            <p class="card-text">
              Fungsi controlling berfokus pada pengawasan dan evaluasi terhadap kinerja dan kegiatan yang dilaksanakan oleh berbagai organisasi mahasiswa untuk memastikan semuanya berjalan.
            </p>

            <a href="#" class="btn-link">
              <span class="span">Kepoin Outputnya</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </li>

    </ul>

  </div>
</section>

      <!-- 
        - #Aspirasi
      -->

      <section class="section support">
        <div class="container">

          <div class="support-content">
            <h2 class="h2 section-title">24/7 Wadah Aspirasi</h2>

            <p class="section-text">
              Kamu punya kritik/pesan untuk kampus? yuk sampaikan pada kami!
            </p>
          </div>

          <a href="#" class="btn btn-secondary">Wadah Aspirasi</a>

        </div>
      </section>

    </article>
  </main>

  @include('layouts.footer')