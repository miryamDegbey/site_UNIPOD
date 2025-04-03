@extends('layout.base')

@section('content')
    <main class="main">
        <!-- Starter Section Section -->
        <section id="starter-section" class="starter-section section">
    <style>
                #starter-section {
                    background-image: 
                    linear-gradient(rgba(0, 0, 0, 0.801), rgba(0, 0, 0, 0.418)),
                    url('{{ asset('assets/images/photo_about.png') }}'),linear-gradient(red, black, white);
                    background-size: cover;
                    color: white;   
                }
            </style>
            <div class="container section-title" data-aos="fade-up">
                {{-- <img src="{{ asset('assets/images/photo_about.png') }}" alt=""> --}}
        
                <h2> A Propos De Nous</h2>
                <p>Découvrez qui nous sommes-nous?</p>
            </div><!-- End Section Title -->
        </section>

        <section class="container py-5">
            {{-- <div data-aos="fade-right"></div> --}}
            <div  class="row align-items-center">
                <div data-aos="fade-right" class="col-md-6">
                    <div class="position-relative">
                        <div class="rounded-3 overflow-hidden">
                            <img src="{{ asset('assets/images/photo_directeur.jpg') }}" width="70%" 
                                 alt="Directeur Général" 
                                 class="img-fluid rounded-3">
                        </div>
                        {{-- <div class="position-absolute bottom-0 end-0 bg-primary text-white p-3 rounded shadow d-none d-md-block">
                            <i class="fs-3 bi bi-quote"></i>
                        </div> --}}
                    </div>
                </div>
                
                <div data-aos="zoom-in-left" class="col-md-6">
                    <h2 class="fw-semi-bold text-dark">Mot du Directeur</h2>
                    <p class="text-dark fw-bold fs-5">Professeur Edem KOLEDZI</p>
                    <p class="text-muted">Directeur Général de UniPod Togo</p>
    
                    <p>Chers collaborateurs et partenaires,</p>
                    <p>
                        Le pôle Universitaire et de Technologie est chargé d'identifier et de sélectionner des projets pour transformer les idées riches, tout en préservant notre patrimoine intellectuelle.
                    </p>
                    <p>
                        Ensemble, nous construisons un avenir prometteur, où chaque défi est une opportunité 
                        de nous surpasser et de créer un cadre d'apprentissage instructive pour correspondant à tout type de profil.
                    </p>
    
                  
                </div>
            </div>
        </section>

        <section class="presentation">
            <div class="about_items">
                <div class="items_rigth">
                    <img src="{{ asset('assets/images/about1.jpg') }} " style="border-radius: 40px" width="400" alt="">
                </div>
                <div class="items_left">
                    <ul>
                        <h3>Qui sommes-nous ?</h3>
                        <p>UniPod n'est pas seulement une Université, c'est un épicentre d'innovation, de créativité et de transformation. Nous sommes une communauté dynamique de rêveurs, de penseurs et d'acteurs, animés par une passion commune : explorer des idées novatrices et les transformer en réalités tangibles. Chez UniPod, nous créons un environnement stimulant où la recherche, la collaboration et l'expérimentation se rencontrent pour façonner un avenir audacieux. Nous nous engageons à former la prochaine génération d'innovateurs et à établir des ponts entre le savoir académique et les opportunités, ouvrant ainsi la voie à des succès durables et à un impact positif sur la société.</p>
                    </ul>
                  
                </div>
            </div>


            <div class="about_items">
                <div class="items_rigth">
                    <img src="{{ asset('assets/images/vision.jpeg') }} " style="border-radius: 40px" width="400" alt="">
                </div>
                <div class="items_left">
                    <ul>
                        <h3>Notre Vision</h3>
                        <p><i class="fa-sharp fa-solid fa-wand-magic-sparkles"></i>Etre le centre d'excellence en recherche et en innovation au Togo, qui révolutionne le monde de la technologie et transforme les idées en succès</p>
                        
                    </ul>
                  
                </div>
            </div>


            <div class="about_items">
                <div class="items_rigth">
                    <img src="{{ asset('assets/images/mission.jpg') }} " style="border-radius: 40px" width="400" alt="" height="300" width="80%">
                </div>
                <div class="items_left">
                    <ul>
                        <h3>Notre Mission</h3>
                        <li>Promouvoir l'innovation en milieu Universitaire</li>
                        <li>Valoriser les produits de la recherche & développement</li>
                        <li>Faciliter le transfert de technologie et de la propriété intellectuelle</li>
                        <li>Soutenir l'employabilité à travers l'élosion des Startups</li>
                    </ul>
                  
                </div>
            </div>


            <div class="about_items">
                <div class="items_rigth">
                    <img src="{{ asset('assets/images/valeur1.jpeg') }} " style="border-radius: 40px" width="400" alt="" height="270">
                </div>
                <div class="items_left">
                    <ul>
                        <h3>Nos Valeurs</h3>
                        <li>Collaboration</li>
                        <li>Innovation</li>
                        <li>Excellence</li>
                        <li>Equité</li>
                        <li>Entrepreneuriat</li>
                        <li>Impact social</li>   
                    </ul>
                  
                </div>
            </div>

            
        </section>


        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                {{-- <span>Section Title</span> --}}
                <h2>Notre équipe</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="pic"><img src="{{ asset('assets/images/lolo-photo.jpg') }}" class="img-fluid"
                                    alt="" width="70%"></div>
                            <div class="member-info">
                                <h4>Dr-Ing. Komlan LOLO</h4>
                                <span>Chef Division des Services et Logistiques à Unipod Togo</span>
                                
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="pic"><img src="assets/images/jonne.jpg" class="img-fluid" alt="" width="70%">
                            </div>
                            <div class="member-info">
                                <h4>GNAGLIGA Bakoulpama</h4>
                                <span>Chef Division des Services et Logistiques à Unipod Togo</span>
                                
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member --> --}}

                </div>

            </div>

        </section><!-- /Team Section -->

    </main>
@endsection
