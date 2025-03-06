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
                            <p class="text-box">Connecter , créer ,innover l'Unipod , Moteur</p>
                            <p class="text-box">du changement pour</p>
                            <p class="text-box">jeunesse togolaise !</p>
                        </div>
                    </div>
                </div>

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
      <style>
        .featured-services .swiper {
          padding-top: 50px
        }
      </style>

<style>
 
</style>
      
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="{{ asset('assets/images/icon1.png')}}" alt="" width="20%"></div>
                        <h4><a href="#" class="stretched-link service-toggle" data-target="dropdown1">Formation et Mentorat</a></h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eiu.</p>
                        <div class="dropdown-content" id="dropdown1">
                            <p>Nous offrons des formations et du mentorat pour aider à développer vos compétences.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="{{ asset('assets/images/icon2.png')}}" alt="" width="20%"></div>
                        <h4><a href="" class="stretched-link">Recherche et développement</a></h4>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="{{ asset('assets/images/icon3.png')}}" alt="" width="20%"></div>
                        <h4><a href="" class="stretched-link">Développement de produits et propriété intellectuelle</a></h4>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="{{ asset('assets/images/icon3.png')}}" alt="" width="20%"></div>
                        <h4><a href="" class="stretched-link">Développement de produits et propriété intellectuelle</a></h4>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
    document.querySelectorAll(".service-toggle").forEach(item => {
        item.addEventListener("click", function(event) {
            event.preventDefault();
            let target = this.getAttribute("data-target");
            let dropdown = document.getElementById(target);
            
            // Fermer les autres dropdowns
            document.querySelectorAll(".dropdown-content").forEach(d => {
                if (d.id !== target) {
                    d.classList.remove("active");
                }
            });

            // Toggle l'affichage du dropdown sélectionné
            dropdown.classList.toggle("active");
        });
    });
</script>

<!-- Styles pour le dropdown -->
<style>
    .dropdown-content {
        display: none;
        background: #f8f9fa;
        padding: 10px;
        border-radius: 5px;
        position: relative;
        width: 100%;
        top: 100%;
        left: 0;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .dropdown-content.active {
        display: block;
    }

    .service-item {
        position: relative;
    }
</style>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3, // Affiche 3 services à la fois
        spaceBetween: 30, // Espace entre les services
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true, // Active le défilement infini
    });
</script>




  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Qui sommes-nous?<br></span>
      <h2>Qui sommes-nous?</h2>
      <p> Le Pole Universitaire d'Innovation et de Technologie</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-6">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          <img src="{{ asset('assets/images/photo_propos.png') }}" class="img-fluid" alt="" width="90%">
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">

          <div class="none">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p>
           
            <ul>
              <li><i class="bi bi-check2-square"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check2-square"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check2-square"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
            </ul>
          </div>
          
          
          
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
<footer id="footer" class="footer">
<div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6">
          <h4>Join Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>
  

@endsection
