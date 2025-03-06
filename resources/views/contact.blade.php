@extends('layout.base')

@section('content')

<main class="main">

    

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <style>
        #starter-section {
            background-image: url('{{ asset('assets/images/photo_about.png') }}');
            background-size: cover;
        }
    </style>
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span> Contactez-nous</span>
        <h2> Contactez-nous</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

     
    


    </section><!-- /Starter Section Section -->
 <div class="container mt-5">
        <div class="row g-4">
            <!-- Carte d'information -->
            <div class="col-lg-4">
                <div class="card shadow rounded-lg h-100">
                    <img src="{{ asset('assets/images/modern-business-center.jpg') }}" class="card-img-top rounded-lg" alt="WET Building">
                    <div class="card-body bg-light">
                        <p class="card-text text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae exercitationem accusantium iste repellendus laborum?
                        </p>
                        <div class="mt-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-telephone me-2"></i>
                                <span>+55555164556</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-envelope me-2"></i>
                                <span>info@unipod.ac.mw</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt me-2"></i>
                                <span>Lorem, ipsum.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Carte Google Maps -->
            <div class="col-lg-8">
                <iframe class="w-100 rounded-lg shadow" 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1238.5654506345043!2d35.026682775889455!3d-15.801852433752297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18d845928be10705%3A0xedbb7089654e143b!2sMalawi%20University%20Of%20Business%20And%20Applied%20Science!5e0!3m2!1sen!2smw!4v1701282260661!5m2!1sen!2smw" 
                    height="450" 
                    style="border:0;" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
  </main>
    
@endsection