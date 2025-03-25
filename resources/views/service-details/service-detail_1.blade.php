@extends('layout.base')

@section('content')




<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


{{-- <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
    <img src="{{ asset('assets/images/photo_banner4.jpeg') }}" alt="" class="img-fluid services-img" width="70% "><br><br>
    <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
    <p>
      Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
    </p>
    <ul>
      <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
      <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
      <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
    </ul>
    <p>
      Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
    </p>
    <p>
      Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
    </p>
</div> --}}



<div class="container_serv">
  <!-- Grande div principale -->
  <div class="main-content">
      <img src="{{ asset('assets/images/labo-meca.png') }}" alt="Grande image" class="large-img" >
      <div class="text-content" style="margin-bottom : 50px;">
          <h2>Laboratoire énergie Renouvelable</h2>
          <p class="lh-lg">Le Laboratoire Énergie Renouvelable d'UniPod Togo est un espace dédié à l'innovation et à la recherche sur les solutions énergétiques durables. Il permet aux entrepreneurs, étudiants et chercheurs d'explorer, concevoir et tester des technologies basées sur les énergies renouvelables telles que le solaire, l'éolien et la biomasse. Grâce à cet environnement collaboratif, UniPod Togo accompagne le développement de projets visant à favoriser l’accès à une énergie propre et accessible pour tous.
          </p>
      </div>
  </div>

  <!-- Deux petites divs à droite -->
  <div class="side-content">
    <div class="card" style="width: 16rem ; height: 18rem; background-color:#19555529; margin-bottom:50px;">
      <img src="{{ asset('assets/images/equip.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 16rem ; height: 20rem; background-color:#19555529">
      <img src="{{ asset('assets/images/labo-meca.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Ce Dispositif permet d'alimenteret de fournir l'électicité en quantité. Lorem ipsum dolor sit amet consectetur.</p>
      </div>
    </div>
      
  </div>
</div>



  @endsection