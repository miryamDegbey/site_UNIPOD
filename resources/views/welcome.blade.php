@extends('layout.base')

@section('content')


    <div class="container-fluid">

        <div class="card-body">
            <div class="justify-content-between d-flex align-items-center mb-4">
            </div>
            <div id="carouselExampleFade" class="carousel slide carousel-fade"
                data-bs-ride="carousel">
                <ol class="carousel-indicators list-unstyled">
                    <li data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active">
                    </li>
                    <li data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" id="banner1">
                        
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid mx-auto" src="{{ asset('assets/images/photo_banner5.jpeg') }}"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid mx-auto" src="{{ asset('assets/images/photo_banner7.jpeg') }}"
                            alt="Third slide">
                    </div>
                </div>
                {{-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> --}}
            </div>
        </div> <!-- end card body -->
    </div> <!-- end card -->

<!-- end col -->
    
@endsection