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
    <img src="{{ asset('assets/images/labo-agro.png') }}" alt="Grande image" class="large-img">
    <div class="text-content">
        <h2>Laboratoire de Technologie Agro-alimentaire</h2>
        <p>
          Le Laboratoire de Technologie et Agroalimentaire d'UniPod Togo est un espace dédié à l'innovation dans le domaine de la transformation alimentaire et des technologies agro-industrielles. Il offre aux chercheurs, entrepreneurs et étudiants l'opportunité d'explorer, concevoir et tester des solutions pour améliorer la production, la conservation et la transformation des produits agricoles.

          Ce laboratoire met à disposition des équipements modernes pour l'analyse de la qualité des aliments, le développement de nouveaux produits et l'optimisation des procédés de fabrication. Il favorise également l'utilisation de technologies durables pour garantir une production respectueuse de l’environnement et répondre aux défis de la sécurité alimentaire.
        </p>
    </div>
</div>
  <!-- Deux petites divs à droite -->
  <div class="side-content">
      <div class="small-box">
          <img src="{{ asset('assets/images/agro-photo.jpg') }}" alt="Petite image 1">
          <p>Ce dispositif permet de capter l’énergie solaire et de la convertir en électricité grâce à des cellules photovoltaïques. Il est utilisé énergétique des installations solaires et pour former les étudiants à l’ingénierie solaire..</p>
      </div>
      <div class="small-box">
          <img src="{{ asset('assets/images/dispo.jpg') }}" alt="Petite image 2">
          <p>Ce Dispositif permet d'alimenteret de fournir l'électicité en quantité. Lorem ipsum dolor sit amet consectetur.</p>
      </div>
  </div>
</div>



  @endsection