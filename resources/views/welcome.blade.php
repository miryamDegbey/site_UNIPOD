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
                            <p class="text-box">du changement pour la</p>
                            <p class="text-box">jeunesse togolaise !</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/photo_banner7.jpeg') }}');">
                    <div class="contenu">
                        <div class="vertical-bar"></div>
                        <div>
                            <p class="text-box">UniPod Togo valorise les talents émergents,</p>
                            <p class="text-box">pour un avenir prometteur.</p>
                            
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/photo_banner8.jpeg') }}');">
                {{-- linear-gradient(rgba(0, 0, 0, 0.449), rgba(0, 0, 0, 0.316)),  --}}
                    <div class="contenu">
                        <div class="vertical-bar"></div>
                        <div>
                            <p class="text-box">UniPod Togo, catalyseur de transformation :</p>
                            <p class="text-box">vos idées se convertissent en projets d'impact</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div> 
</div> 

<section id="hero" class="hero section">


    <div class="container">
    <div class="container section-title" data-aos="fade-up">
       
        <h2>Nos Services</h2>
        <p>Les services offerts par UniPod Togo :</p>
      </div>
  
      <div class="row gy-4 mt-2">
        <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
        <div class="icon-box">
            <div class="icon"><i class="bi bi-mortarboard text-secondary fs-1"></i></div>
            <h4 class="title"><a href="{{ route('service') }}">Formation et Mentorat</a></h4>
            <p class="description">UniPod promeut les géants de demain.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-search text-secondary fs-1"></i></div>
            <h4 class="title"><a href="{{ route('service') }}">Recherche et Développement</a></h4>
            <p class="description">UniPod accélère la révolution numérique.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-box-seam text-secondary fs-1"></i>  </div>
            <h4 class="title"><a href="{{ route('service') }}">Développement de produits et propriété intellectuelle</a></h4>
            <p class="description">UniPod transforme les prototypes en succès.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-lightbulb text-secondary fs-1"></i>  </div>
            <h4 class="title"><a href="{{ route('service') }}">Incubation et Accélération des Startups </a></h4>
            <p class="description">Créons, Innovons et Transformons.</p>
          </div>
        </div>
      </div>
    </div>

  </section>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Qui sommes-nous?<br></span>
      <h2>Qui sommes-nous?</h2>
      <p> UNIPOD, Pole Universitaire d'Innovation et de Technologie</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-6">
        <div class="col-lg-6 position-relative align-self-start">
          <img src="{{ asset('assets/images/photo_propos.png') }}" class="img-fluid" alt="" width="80%">
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">


        <div class="none">
            <p class="text-dark">
                Le Pôle Universitaire d’Innovation et de Technologie s’inscrit dans l’initiative <b>TIMBUKTOO du PNUD</b>, visant à créer des UniPods dans plusieurs pays d’Afrique, dont le Togo.
La mise en place de l’UniPod Togo devrait faire de l’Université de Lomé, au travers des FabLabs et du programme d’incubation entrepreneuriale, un cadre de formation d’innovateurs et d’entrepreneurs de qualité, ayant le savoir-faire et les compétences indispensables pour appuyer les ambitions de croissance et de développement du Togo.
            </p>
            <p class="text-dark">
                UniPod Togo s'adresse à une diversité d'acteurs comme suit : 
            </p>
           
            <ul>
              <li><i class="bi bi-check2-square"></i> <span><b class="text-dark">Les étudiants et jeunes diplômés</b></span></li>
              <li><i class="bi bi-check2-square"></i> <span><b class="text-dark">Les enseignants chercheurs</b></span></li>
              <li><i class="bi bi-check2-square"></i> <span><b class="text-dark">Entrepreneurs</b></span></li>
              <li><i class="bi bi-check2-square"></i> <span><b class="text-dark">Les innovateurs</b></span></li>
              <li><i class="bi bi-check2-square"></i> <span><b class="text-dark">Artisans, Markers, Tourneurs</b></span></li>
            </ul>
        </div>
          
          
          
        </div>
      </div>

    </div>

  </section>

  <div class="container_mission py-5">
    <h2>Ambitions et Objectifs</h2>
    <p>Nos Ambitions et Objectifs s'alignent comme suit:</p>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Service 1 -->
            <div class="service-box">
                <div class="service-title">
                    <i class="bi bi-graph-up-arrow"></i>
                    <span>Création d'entreprises innovantes</span>
                </div>
                <p>
                    100 entreprises à forte croissance sorties de l'UniPod Togo sur 10ans avec 50 brevets déposés, 150 produits et services mis sur le marché.
            </p>
            </div>

            <!-- Service 2 -->
            <div class="service-box">
                <div class="service-title ">
                    <i class="bi bi-book "></i>
                    <span>Amélioration du système éducatif</span>
                </div>
                <p >Rendre accessible aux étudiants et enseignants des équipements, outils et logiciels afin d'améliorer leurs compétences sur le marché de l'emploi.</p>
            </div>

            <!-- Service 3 -->
            <div class="service-box">
                <div class="service-title">
                    <i class="bi bi-lightbulb"></i>
                    <span>Création de valeur</span>
                </div>
                <p>Participer en collaboration avec les autres UniPods à la création de 10 milliards de dollars de valeur et l'amélioration des moyens de subsistance de 50 millions d'africains directement et indirectement...</p>
            </div>

        </div>
    </div>
</div>


  <section class="project-section container py-5">
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/mega-tech.jpg') }}" class="card-img-top img-fluid" alt="Projet">
                <div class="card-body">
                    <p class="text-dark">Le projet Mega-tech de Unipod vous offre un accès exclusive à des équipements pour votre prototypage.</p>
                    <a class="btn btn-outline-primary" href="{{ Route('support') }}">Lire plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/project-proto.jpg') }}" class="card-img-top img-fluid" alt="Projet">
                <div class="card-body">
                    <p class="text-dark">Ce projet permet aux étudiants des écoles supérieures et universitaires de pouvoir faire des travaux pratiques.</p>
                    <a class="btn btn-outline-primary" href="{{ Route('project_detail_1') }}">Lire plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/projet-enf.jpg') }}" class="card-img-top img-fluid" alt="Projet">
                <div class="card-body">
                    <p class="text-dark">Ce projet permet aux enfants de 05 à 15 ans de pouvoir faire des travaux pratiques. Ce projet permet aux enfants de 05 à 15 ans de pouvoir faire des travaux pratiques.</p>
                    <a class="btn btn-outline-primary" href="{{ Route('project_detail_2') }}">Lire plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/devi-preneur.jpg') }}" class="card-img-top img-fluid" alt="Projet">
                <div class="card-body">
                    <p>Ce projet permet aux enfants de 05 à 15 ans de pouvoir faire des travaux pratiques.</p>
                    <a class="btn btn-outline-primary" href="{{ Route('project_detail_3') }}">Lire plus</a>
                </div>
            </div>
        </div>
    </div>
</section>

  <section class="partner-section swiper2">
    
    <div class="swiper-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="swiper-slide"><img src="{{ asset('assets/images/ul.jpeg') }}" alt="Université de Lomé"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/images/pnud.png') }}" alt="Logo du PNUD"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/images/cervida.jpeg') }}" alt="Logo de Cervida" ></div>
        <div class="swiper-slide"><img src="{{ asset('assets/images/impact.jpeg') }}" alt="Logo de Impact"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/images/tombuktoo.jpeg') }}" alt="Logo de Impact"></div>
    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".swiper2", {
            slidesPerView: "3", 
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 2000, // 2 secondes entre chaque défilement
                disableOnInteraction: false,
            },
            speed: 1000, // Vitesse de transition
        });
    });
</script>


<!-- Initialisation de Swiper -->
{{-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> --}}
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

<script>
// Swiper initialization
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
        1200: { slidesPerView: 4 }
    }
});

// Toggle dropdown content
function toggleDropdown(id) {
    $(".dropdown-content").not("#" + id).slideUp(); // Ferme les autres dropdowns
    $("#" + id).slideToggle(); // Ouvre ou ferme l'élément cliqué
}
</script>

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
<footer id="footer" class="footer">
<div class="footer-newsletter">

<style>
    .footer-newsletter {
        background-image: url('{{ asset('assets/images/newsletter.png') }}') ;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: white; with:50% ;
        
        
    }
</style>


    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6 ">
          <h4 class="note_book">Notre Newsletter</h4>
          <p class="note">Inscrivez-vous à notre newsletter</p>
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
