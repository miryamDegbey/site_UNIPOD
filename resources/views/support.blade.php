@extends('layout.base')

@section('content')

<main class="main">

    

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <style>
        
        #starter-section {
            background-image: url('{{ asset('assets/images/polygon.png') }}');
            background-size: cover;
        }
    </style>

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        
        <h2> Nos Programmes</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

    </section><!-- /Starter Section Section -->


    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <div class="col-lg-8 support_program" data-aos="fade-up" data-aos-delay="200">
      <img src="{{ asset('assets/images/megatech.jpeg') }}" alt="Image descriptive" class="img-fluid services-img">
      
      <h3>Titre du Programme</h3>
  
      <p>
          Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque 
          consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero.
      </p>
  
      <ul>
          <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
      </ul>
  
      <p>
          Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est 
          architecto cupiditate ullam. Quia est ut occaecati fuga.
      </p>
  </div>


  <section class="project-section container py-5">
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/woman.jpg') }}" class="card-img-top img-fluid" alt="Projet">
                <div class="card-body text-center">
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <a class="btn btn-outline-primary" href="#">Lire plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/woman.jpg') }}" class="card-img-top img-fluid" alt="Projet">
                <div class="card-body text-center">
                    <p>Lorem ipsum dolor sit amet consectetur lo.</p>
                    <a class="btn btn-outline-primary" href="#">Lire plus</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/woman.jpg') }}" class="card-img-top img-fluid" alt="Projet">
                <div class="card-body text-center">
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <a class="btn btn-outline-primary" href="#">Lire plus</a>
                </div>
            </div>
        </div>
       
    </div>
</section>


 


  </main>
    
@endsection