@extends('layout.base')

@section('content')

<div class="container-fluid">
    <div class="card-body">
        <div class="justify-content-between d-flex align-items-center mb-4"></div>

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/photo_banner6.jpeg') }}');">
                    <div class="contenu">
                        <div class="vertical-bar"></div>
                        <div>
                            <p class="text-box">Connecter , creer ,innover l'Unipod , Moteur</p>
                            <p class="text-box">du changement pour</p>
                            <p class="text-box">jeunesse togolaise !</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/photo_banner6.jpeg') }}');">
                    <div class="contenu">
                        <div class="vertical-bar">
                        </div>
                      <p class="text-box">snkkkkkkkkkkkkkkk</p>
                      
                    </div>
                </div> --}}

                <!-- Slide 2 -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/photo_banner7.jpeg') }}');">
                    <div class="contenu">
                        <div class="vertical-bar"></div>
                        <div>
                            <p class="text-box">Lorem ipsum, dolor sit amet consectetur.</p>
                            <p class="text-box">Lorem ipsum dolor sit amet .</p>
                            <p class="text-box">Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/photo_banner8.jpeg') }}');">
                    <div class="contenu">
                        <div class="vertical-bar"></div>
                        <div>
                            <p class="text-box">Lorem ipsum, dolor sit amet consectetur.</p>
                            <p class="text-box">Lorem ipsum dolor sit amet .</p>
                            <p class="text-box">Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div> 
</div> 

<section id="featured-services" class="featured-services section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-activity icon"></i></div>
            <h4><a href="" class="stretched-link">Formation et Mentorat</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
            <h4><a href="" class="stretched-link">Recherche et Développement</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
            <h4><a href="" class="stretched-link">Développement de produits et propriété intellectuelle</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div><!-- End Service Item -->

        {{-- <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
            <h4><a href="" class="stretched-link">Incubation et accélération de startups</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div><!-- End Service Item --> --}}

      </div>

    </div>

  </section>


  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>About Us<br></span>
      <h2>About</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          <img src="{{ asset('assets/images/photo_propos.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
          </p>
        </div>
      </div>

    </div>

  </section>

  <section class="project-section">
  

    <div class="project-item">
        <img src="{{ asset('assets/images/woman.jpg') }}" alt="" width="100%">
        <p style="margin-left: 30px; text-align : right"> Lorem ipsum dolor sit amet consectetur.</p>
        <a style="float: right" class="btn btn-primary" href="#">Lire plus</a>
    </div>
    <div class="project-item">
        <img src="{{ asset('assets/images/woman.jpg') }}" alt="" width="100%">
        <p style="margin-left: 30px; text-align : right"> Lorem ipsum dolor sit amet consectetur.</p>
        <a style="float: right" class="btn btn-primary" href="#">Lire plus</a>
    </div>
    <div class="project-item">
        <img src="{{ asset('assets/images/woman.jpg') }}" alt="" width="100%">
        <p style="margin-left: 30px; text-align : right"> Lorem ipsum dolor sit amet consectetur.</p>
        <a style="float: right" class="btn btn-primary" href="#">Lire plus</a>
    </div>
    <div class="project-item">
        <img src="{{ asset('assets/images/woman.jpg') }}" alt="" width="100%">
        <p style="margin-left: 30px; text-align : right"> Lorem ipsum dolor sit amet consectetur.</p>
        <a style="float: right" class="btn btn-primary" href="#">Lire plus</a>
    </div>

  </section>


  <section class="partner-section">
 
        <img src="{{ asset('assets/images/ul.jpeg') }}" alt="">
        <img src="{{ asset('assets/images/pnud-logo.jpg') }}" alt="">
        <img src="{{ asset('assets/images/cervida.jpeg') }}" alt="">
        <img src="{{ asset('assets/images/impact.jpeg') }}" alt="">

  </section>

<!-- Initialisation de Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".swiper-container", {
            effect: "fade",
            loop: true,
            speed: 1500, // Augmente la durée de transition (en ms)
            fadeEffect: {
            crossFade: true // Rend la transition plus fluide
        },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });
    });
</script>

@endsection
