@extends('layout.base')

@section('content')


<main>

    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            {{-- <span>Section Title</span> --}}
            {{-- <h2>Notre équipe</h2> --}}
            {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('assets/images/lolo-photo.jpg') }}" class="img-fluid"
                                alt="" width="70%"></div>
                        <div class="member-info">
                            <h4>Dr-Ing. Komlan LOLO</h4>
                            <span>Chef Division des Services et Logistiques à Unipod Togo</span>
                            
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="assets/images/jonne.jpg" class="img-fluid" alt="" width="70%">
                        </div>
                        <div class="member-info">
                            <h4>GNAGLIGA Bakoulpama</h4>
                            <span>Chef Division des Services et Logistiques à Unipod Togo</span>
                            
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="assets/images/homme_profil.jpeg" class="img-fluid" alt="" width="70%">
                        </div>
                        <div class="member-info">
                            <h4>Nom responsable</h4>
                            <span>Chef Division des Services et Logistiques à Unipod Togo</span>
                            
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="assets/images/homme_profil.jpeg" class="img-fluid" alt="" width="70%">
                        </div>
                        <div class="member-info">
                            <h4>Mme Faouziat</h4>
                            <span>Chef Division des Services et Logistiques à Unipod Togo</span>
                            
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="assets/images/homme_profil.jpeg" class="img-fluid" alt="" width="70%">
                        </div>
                        <div class="member-info">
                            <h4>Mme Faouziat</h4>
                            <span>Chef Division des Services et Logistiques à Unipod Togo</span>
                            
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="assets/images/homme_profil.jpeg" class="img-fluid" alt="" width="70%">
                        </div>
                        <div class="member-info">
                            <h4>Mme Faouziat</h4>
                            <span>Chef Division des Services et Logistiques à Unipod Togo</span>
                            
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="assets/images/homme_profil.jpeg" class="img-fluid" alt="" width="70%">
                        </div>
                        <div class="member-info">
                            <h4>Mme Faouziat</h4>
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