@extends('layout.base')

@section('content')
    <main class="main">
        <!-- Starter Section Section -->
        <section id="starter-section" class="starter-section section">
            <style>
                #starter-section {
                    background-image: 
                    linear-gradient(rgba(0, 0, 0, 0.371), rgba(0, 0, 0, 0.295)),
                    url('{{ asset('assets/images/program-barner.jpg') }}'),
                    linear-gradient(red, black, white);
                    background-size: cover;
                    color: white;

                }

                .background-image {
                    background-image: url('{{ asset('assets/images/photo-program.jpg') }}');
                    background-size: cover;
                    background-position: center;
                    height: 100vh;
                    margin-top: 80px;
                    margin-bottom:80px;
                }

                /* Media Query */
                @media (max-width: 768px) {
                    .dropdown-menu {
                        width: 100% !important; 
                    }

                    .btn-lg {
                        width: 100% !important; 
                    }
                }
            </style>
            <div class="container section-title" data-aos="fade-up">
                <h2> Les programmes fournis au sein d'UniPod</h2>
                <p>Découvrez nos differents programmes?</p>
            </div><!-- End Section Title -->
        </section>
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-6 background-image">
                </div>

       
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <div class="btn-group-vertical">
                        <button class="btn btn-secondary dropdown-toggle mb-3 btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 600px;">
                            Prototypage, Innovation et R&D
                        </button>
                        <ul class="dropdown-menu" style="width: 600px;">
                            <li><a class="dropdown-item overflow-hidden text-wrap" href="#">Nous fournissons aux étudiants, entrepreneurs, artisans et enseignants les logiciels, équipements et matériels essentiels. </a></li>
                            <li><a class="dropdown-item overflow-hidden text-wrap" href="#">Notre objectif est de favoriser l'innovation à travers des solutions adaptées à leurs besoins.</a></li>
                            <li><a class="dropdown-item overflow-hidden text-wrap" href="#">Ces outils leur permettent de développer leurs compétences et de concrétiser leurs idées. 
                                </a></li>
                        </ul>

                        <button class="btn btn-secondary dropdown-toggle mb-3 btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 600px;">
                            Entrepreneuriat et incubation de projets
                        </button>
                        <ul class="dropdown-menu" style="width: 600px;">
                            <li><a class="dropdown-item overflow-hidden text-wrap" href="#">Des formations libres et certifiantes en entrepreneuriat et des pojets innovants sont donnés sur le campus.</a></li>
                            <li><a class="dropdown-item overflow-hidden text-wrap" href="#">Ces formations couvrent également le développement de projets innovants. </a></li>
                            <li><a class="dropdown-item overflow-hidden text-wrap" href="#">Elles permettent aux participants d’acquérir des compétences pratiques et reconnues.</a></li>
                        </ul>

                        <button class="btn btn-secondary dropdown-toggle mb-3 btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Collaborations et des partenariats public privé-université
                        </button>
                        <ul class="dropdown-menu" style="width: 600px;">
                            <li><a class="dropdown-item overflow-hidden text-wrap" href="#">Nous accompagnons les enseignants dans la conception de projets avec leurs étudiants.  </a></li>
                            <li><a class="dropdown-item overflow-hidden text-wrap" href="#">Nous développons des partenariats avec le secteur public et privé. </a></li>
                            <li><a class="dropdown-item overflow-hidden text-wrap" href="#">Nous facilitons le transfert de technologies prêtes pour le marché.</a></li>
                        </ul>

                        {{-- <button class="btn btn-primary dropdown-toggle mb-3 btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown 4
                        </button>
                        <ul class="dropdown-menu" style="width: 600px;">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
