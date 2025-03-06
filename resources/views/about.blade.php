@extends('layout.base')

@section('content')
    <main class="main">



        <!-- Starter Section Section -->
        <section id="starter-section" class="starter-section section">

            <!-- Section Title -->

            <style>
                #starter-section {
                    background-image: url('{{ asset('assets/images/photo_about.png') }}');
                    background-size: cover;
                }
            </style>
            <div class="container section-title" data-aos="fade-up">
                {{-- <img src="{{ asset('assets/images/photo_about.png') }}" alt=""> --}}
                <span>A Propos De Nous </span>
                <h2> Propos De Nous</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->


        </section><!-- /Starter Section Section -->

        <section class="presentation">
            <style>
                .presentation {
                  margin-top: 50px;
                  padding: 0 50px 0 50px;
                    display: grid;
                    grid-template-rows: repeat(3, 1fr);
                    grid-template-columns: 400px 1fr;

                    gap: 21px 150px;
                    width: 100%;
                    height: 100%;
                }
            </style>

            <div >
                <img src="{{ asset('assets/images/photo_about.png') }} " style="border-radius: 40px" width="400" alt="">
            </div>
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, sequi.</p>
            </div>
            <div>
                <img src="{{ asset('assets/images/photo_about.png') }}" style="border-radius: 40px" width="400" alt="">
            </div>
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, sequi.</p>
            </div>
            <div>
                <img src="{{ asset('assets/images/photo_about.png') }}" style="border-radius: 40px"  width="400" alt="">
            </div>
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, sequi.</p>
            </div>

        </section>


        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                {{-- <span>Section Title</span> --}}
                <h2>Notre Valeureuse équipe</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="pic"><img src="{{ asset('assets/images/homme_profil.jpeg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
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
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

    </main>
@endsection
