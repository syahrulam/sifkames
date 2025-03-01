@extends('layoutfrontend.master')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active">
      <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
      <div class="carousel-container">
        <h2>FKAM Brebes Rescue & Peduli<br></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a href="#featured-services" class="btn-get-started">Get Started</a>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
      <div class="carousel-container">
        <h2>At vero eos et accusamus</h2>
        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
        <a href="#featured-services" class="btn-get-started">Get Started</a>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
      <div class="carousel-container">
        <h2>Temporibus autem quibusdam</h2>
        <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
        <a href="#featured-services" class="btn-get-started">Get Started</a>
      </div>
    </div><!-- End Carousel Item -->

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Sejarah</h2>
    <p>Tentang Kami<br></p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>
          FKAM (Forum Komunikasi Aktivis Masjid) berdiri sebagai wadah untuk mempererat ukhuwah Islamiyah serta memperkuat peran masjid dalam kehidupan sosial masyarakat. 
                Sejak didirikan, FKAM terus berkontribusi dalam berbagai kegiatan keislaman, sosial, dan kemanusiaan.
        </p>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <p>Berawal dari kepedulian terhadap peran strategis masjid, FKAM lahir untuk mengoordinasikan kegiatan yang berorientasi pada dakwah, pendidikan, dan sosial kemasyarakatan. 
                Dengan semangat kebersamaan, FKAM terus berkembang dan memperluas manfaatnya bagi umat.</p>
        
        <a href="{{ route('sejarah') }}" class="read-more">Read More</a>
    <span>Read More</span>
    <i class="bi bi-arrow-right"></i>
</a>
      </div>

    </div>

  </div>

</section><!-- /About Section -->

<!-- Clients Section -->
<section id="clients" class="clients section light-background">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4">

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid" alt="Client 1">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt="Client 2">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt="Client 3">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt="Client 4">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt="Client 5">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt="Client 6">
      </div><!-- End Client Item -->

    </div>
  </div>
</section><!-- /Clients Section -->

<!-- Services Section -->
<section id="services" class="services section">
  <div class="container">
    <div class="row gy-4">

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item d-flex position-relative h-100">
          <i class="bi bi-briefcase icon flex-shrink-0"></i>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item d-flex position-relative h-100">
          <i class="bi bi-card-checklist icon flex-shrink-0"></i>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div>
      </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-bar-chart icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-binoculars icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-brightness-high icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div>
            </div>
          </div><!-- End Service Item -->


    </div>
  </div>
</section><!-- /Services Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <p>Necessitatibus eius consequatur</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-product">Card</li>
        <li data-filter=".filter-branding">Web</li>
      </ul><!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <!-- Portfolio Item 1 -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-1.jpg') }}" class="img-fluid" alt="App 1">
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-1.jpg') }}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <!-- Portfolio Item 2 -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-2.jpg') }}" class="img-fluid" alt="Product 1">
          <div class="portfolio-info">
            <h4>Product 1</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-2.jpg') }}" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <!-- Portfolio Item 3 -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-3.jpg') }}" class="img-fluid" alt="Branding 1">
          <div class="portfolio-info">
            <h4>Branding 1</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-3.jpg') }}" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <!-- Portfolio Item 4 -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-4.jpg') }}" class="img-fluid" alt="App 2">
          <div class="portfolio-info">
            <h4>App 2</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-4.jpg') }}" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <!-- Portfolio Item 5 -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-5.jpg') }}" class="img-fluid" alt="Product 2">
          <div class="portfolio-info">
            <h4>Product 2</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-5.jpg') }}" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <!-- Portfolio Item 6 -->
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-6.jpg') }}" class="img-fluid" alt="Branding 2">
          <div class="portfolio-info">
            <h4>Branding 2</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="{{ asset('assets/img/masonry-portfolio/masonry-portfolio-6.jpg') }}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

      </div><!-- End Portfolio Container -->

    </div>

  </div>

</section><!-- /Portfolio Section -->

@endsection
