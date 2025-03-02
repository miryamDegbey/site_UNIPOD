@extends('layout.base')

@section('content')

<div class="container-fluid">
    <div class="card-body">
        <div class="justify-content-between d-flex align-items-center mb-4"></div>

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/photo_banner6.jpeg') }}');">
                    <div class="vertical-bar"></div>
                    {{-- <div class="text-box">
                        <p>Texte pour le premier slide</p>
                    </div> --}}
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/photo_banner7.jpeg') }}');">
                    <div class="vertical-bar"></div>
                    
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/photo_banner8.jpeg') }}');">
                    <div class="vertical-bar"></div>
                   
                </div>
            </div>
            <!-- Boutons de navigation -->
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
            <!-- Pagination -->
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </div> 
</div> 

<!-- Initialisation de Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
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

@endsection
