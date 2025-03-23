@extends('layout.base')

@section('content')
    <section id="tabs" class="tabs section">

        <div class="container">
            {{-- first --}}
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tabs-tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-right">
                            <h3>Formation et Mentorat</h3>
                            <p class="fst">
                                UniPod Togo offre des services de formation et de mentorat pour accompagner les jeunes et professionnels dans leur développement. Les formations couvrent des domaines tels que le développement web, le marketing digital et l'entrepreneuriat, tandis que le mentorat fournit un accompagnement personnalisé pour aider chaque individu à atteindre ses objectifs professionnels avec l'aide d'experts.
                            </p>
                            {{-- <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                            </p> --}}
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Développement pratique de compétences professionnelles</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Certifications dans les domaines du numérique et de la fabrication numérique.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Accès et utilisation des technologies avancées.</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-left">
                            <img src="assets/images/formation.png" width="60%" alt=""
                                class="img-fluid rounded-3  rounded-4">
                        </div>
                    </div>
                </div>
            </div>
            {{-- second --}}
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tabs-tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-1 text-center" data-aos="fade-up-right">
                            <img src="assets/images/recherche.png" width="50%" alt=""
                                class="img-fluid rounded-3  rounded-4">
                        </div>

                        <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0" data-aos="fade-right">
                            <h3>Recherche et Développement</h3>
                            <p class="fst">
                                UniPod Togo propose des ateliers pratiques pour aider les jeunes à acquérir des compétences concrètes dans divers domaines. Ces ateliers interactifs permettent aux participants d'apprendre en pratiquant, en développant des projets réels et en obtenant des retours constructifs, afin de renforcer leur employabilité et leur confiance.
                            {{-- <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                            </p> --}}
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Production de commaissances pour les grains socio-économiques.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Orientation sur les besoins du marché pour la commercialisation.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Valorisation des resultats de la recherche issue des laboratoires.</span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            {{-- third --}}
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tabs-tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up-left">
                            <h3>Développement de produits et propriété intellectuelle</h3>
                            <p class="fst">
                                UniPod Togo offre des services en développement de produits et propriété intellectuelle pour aider les entrepreneurs à concevoir et protéger leurs idées. Cela inclut l'accompagnement dans la création de produits innovants, ainsi que des conseils pour sécuriser les droits de propriété intellectuelle, assurant ainsi la protection légale des inventions et créations.
                            </p>
                            {{-- <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                            </p> --}}
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Prototypage d'idées en produits</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Dispositif de transfert de technologie.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Protection d'idées par des brevets, marque et droit d'auteur.</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up-right">
                            <img src="assets/images/produit.png" width="50%"
                                class="img-fluid rounded-3 rounded-4">
                        </div>
                    </div>
                </div>
            </div>

            {{-- four --}}
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tabs-tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-1 text-center" data-aos="fade-up-right">
                            <img src="assets/images/incubation.png" width="50%" alt=""
                                class="img-fluid rounded-3 rounded-4">
                        </div>

                        <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0" data-aos="fade-right">
                            <h3>Incubation et Accélération des Startups</h3>
                            <p class="fst">
                                UniPod Togo propose des services d'incubation et d'accélération pour les startups, offrant un accompagnement personnalisé pour les aider à se développer rapidement. Cela inclut des ressources, des formations, du mentorat, ainsi qu'un soutien financier et stratégique pour transformer des idées innovantes en entreprises prospères.
                            </p>
                            {{-- <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                            </p> --}}
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Accompagnement à la création de valeur.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Realisation de tests et validation.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Accompagnement à la levée de fonts.</span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
