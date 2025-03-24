@extends('layout.base')

@section('content')

<main class="main">

    

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <style>
        
        #starter-section {
            background-color: #1d9dd9;
            background-size: cover;
        }
    </style>

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        
        <h2> Nos Projets</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

    </section><!-- /Starter Section Section -->


    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <div class="col-lg-8 support_program" data-aos="fade-up" data-aos-delay="200">
      <img src="{{ asset('assets/images/project-proto.jpg') }}" alt="Image descriptive" class="img-fluid services-img">
      
      <h3>Le projet Mega-Tech</h3>
  
      <p>
        Vous êtes régulièrement inscrit-e-s dans une université ou dans une école supérieure au Togo et vous avez des idées innovantes à concrétiser ? Vous cherchez à booster vos compétences techniques dans un environnement 100% pratique et innovant ? Les portes de L’ UniPod Togo vous sont ouvertes !

        L'UniPod Togo, est un pôle d'innovation mis en place au travers d'une collaboration entre l'Université de Lomé, le PNUD et d'autres partenaires clés. Il dispose de plusieurs FabLabs (laboratoires de fabrication) équipés des outils et équipements de dernière génération. En vous abonnant à l'UniPod, vous aurez ainsi accès aux laboratoires suivants :
      </p>
  
      <ul>
          <li><i class="bi bi-check-circle"></i> <span>Laboratoire de Mécanique.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Laboratoire Greentech</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Laboratoire de Foodtech</span></li>
      </ul>
  
      <p>
        Nous vous invitons à vous abonner à l'UniPod pour profiter de tous les équipements et aussi être accompagné-e-s pour la concrétisation de vos idées les plus innovantes et les plus extraordinaires. Avec l'UniPod, votre imagination est votre seule limite. Il est temps de passer à la pratique.

        L'abonnement se fait sur ce lien et sera à 10 000 FCFA *pour toute l'année
      </p>
  </div>


  <section class="project-section container py-5">
    <div class="row">
        {{-- <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/mega-tech.jpg') }}" class="card-img-top img-fluid" alt="Projet">
                <div class="card-body">
                    <p class="text-dark">Le projet Mega-tech de Unipod vous offre un accès exclusive à des équipements pour votre prototypage.</p>
                    <a class="btn btn-outline-primary" href="{{ Route('support') }}">Lire plus</a>
                </div>
            </div>
        </div> --}}
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


 


  </main>
    
@endsection