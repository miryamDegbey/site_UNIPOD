@extends('layout.base')

@section('content')

<main class="main">

    

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <style>
        #starter-section {
            background-image: url('{{ asset('assets/images/bloc2.png') }}');
            background-size: cover;
            color: white;
            
        }
    </style>
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span> Contactez-nous</span>
        <h2> Contactez-nous</h2>
        <p>Retrouvez-nous dans notre espace d'innovation pour favoriser échanges et collaborations.</p>
      </div><!-- End Section Title -->

     
    


    </section><!-- /Starter Section Section -->
 <div class="container mt-5">
        <div class="row g-4">
            <!-- Carte d'information -->
            <div class="col-lg-4">
                <div class="card shadow rounded-lg h-100">
                    <img src="{{ asset('assets/images/unipod_photo.jpg') }}" class="card-img-top rounded-lg" alt="WET Building">
                    <div class="card-body bg-light">
                        <p class="card-text text-muted">
                            Bienvenue au Pole Universitaire d'Inovation et de Technologie.
                        </p>
                        <div class="mt-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-telephone me-2"></i>
                                <span>+228 99470606</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-envelope me-2"></i>
                                <span>unipodtogo@gmail.com</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt me-2"></i>
                                <span>Université de Lomé, en face de l'Ecole Polytechnique de Lomé</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Carte Google Maps -->
            <div class="col-lg-8">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6713713289655!2d1.2096997725724636!3d6.174732312782649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e3f8e3cd3f5b%3A0xb75badac88d30601!2sEcole%20Polytechnique%20de%20Lom%C3%A9!5e0!3m2!1sfr!2stg!4v1741347858768!5m2!1sfr!2stg" 
                width="600" 
                height="450" 
                style="border:0" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
                </iframe>
               
                
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center form-contener" >

        <div class="col-lg-7 ">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">
    
                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Votre nom</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>
    
                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Votre email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>
    
                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Sujet</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>
    
                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>
    
                <div class="col-md-12 text-center">
                  <div class="loading">En cours</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre message a été envoyé. Merci!</div>
    
                  <button class="btn_contact" type="submit">Envoyez</button>
                </div>
    
              </div>
            </form>
        </div><!-- End Contact Form -->

    </div>
    <br><br>
   




  </main>


    
@endsection