@extends('layout.base')

@section('content')
    <main class="main">
        <!-- Starter Section Section -->
        <section id="starter-section" class="starter-section section">
            <style>
                #starter-section {
                    background-image: 
                    linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)),
                    url('{{ asset('assets/images/photo_about.png') }}'),
                    linear-gradient(red, black, white);
                    background-size: cover;
                    color: white;
                }

                .background-image {
                    background-image: url('{{ asset('assets/images/photo_about.png') }}');
                    background-size: cover;
                    background-position: center;
                    height: 100vh;
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
                        <button class="btn btn-primary dropdown-toggle mb-3 btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 600px;">
                            Prototypage, Innovation et R&D
                        </button>
                        <ul class="dropdown-menu" style="width: 600px;">
                            <li><a class="dropdown-item" href="#">Fornir aux etudiant</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul>

                        <button class="btn btn-primary dropdown-toggle mb-3 btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 600px;">
                            Dropdown 2
                        </button>
                        <ul class="dropdown-menu" style="width: 600px;">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul>

                        <button class="btn btn-primary dropdown-toggle mb-3 btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown 3
                        </button>
                        <ul class="dropdown-menu" style="width: 600px;">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul>

                        <button class="btn btn-primary dropdown-toggle mb-3 btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown 4
                        </button>
                        <ul class="dropdown-menu" style="width: 600px;">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
