@extends('master.master')
@section('content')
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
      <section class="py-0">
        <div class="swiper theme-slider min-vh-100" data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url({{asset('img/back2.jpg')}});"></div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>Le Burkina Faso mise sur la recherche</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>1,6 milliard FCFA destinés au financement des  projets pour la lutte contre le coronavirus, les maladies infectieuses, ..</p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-warning mt-3" href="{{route('contact')}}">Contacter Nous<span class="fas fa-chevron-right ms-2"></span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-zanim-timeline="{}">
              <div class="bg-holder" style=background-image:url({{asset('img/back5.jpg')}});"></div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>Protection de l'environnement</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>Bitatoré,une technologie mise au point par les chercheurs dans le cadre de la politique de préservation de l’environnement et d’allégemebt  des tâches ménagères des femmes.</p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-warning mt-3" href="{{route('contact')}}">Contacter Nous<span class="fas fa-chevron-right ms-2"></span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="swiper-nav">
            <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
            <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
          </div>
        </div>
      </section>
       <!-- <section> begin ============================-->
       <section class="bg-100">
          <div class="container">
            <div class="text-center mb-6">
              <h3 class="fs-2 fs-md-3">Actualités</h3>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
            <div class="row g-4">
              <div class="col-md-6 col-lg-4">
                <div class="card"><a href="{{route('news')}}"><img class="card-img-top" src="{{asset('img/fem.jpg')}}" alt="Featured Image" /></a>
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden"><a href="{{route('news')}}">
                        <h5 data-zanim-xs='{"delay":0}'>  Recherches au niveau des maladies vectorielles</h5>
                      </a></div>
                    <div class="overflow-hidden">
                      <p class="text-500" data-zanim-xs='{"delay":0.1}'>Par Léa Paré/Toé</p>
                    </div>
                    <div class="overflow-hidden">
                      <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Prix de la meilleure
 femme chercheure dans le domaine 
des maladies vectorielles.</p>
                    </div>
                    <div class="overflow-hidden">
                      <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="{{route('news')}}">Lire Plus<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card"><a href="{{route('news')}}"><img class="card-img-top" src="{{asset('img/actu1.jpg')}}" alt="Featured Image" /></a>
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden"><a href="{{route('news')}}">
                        <h5 data-zanim-xs='{"delay":0}'> Recherches au niveau de la santé</h5>
                      </a></div>
                    <div class="overflow-hidden">
                      <p class="text-500" data-zanim-xs='{"delay":0.1}'> Par Pr Abdoulaye  Diabaté</p>
                    </div>
                    <div class="overflow-hidden">
                      <p class="mt-3" data-zanim-xs='{"delay":0.2}'>
 membre de la prestigieuse 
Académie Africaine des Sciences</p>
                    </div>
                    <div class="overflow-hidden">
                      <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="{{route('news')}}">Lire Plus<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card"><a href="{{route('news')}}"><img class="card-img-top" src="{{asset('img/4-3943-adebb.jpg')}}" alt="Featured Image" /></a>
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden"><a href="{{route('news')}}">
                        <h5 data-zanim-xs='{"delay":0}'> Recherches au niveau des sciences Humaines</h5>
                      </a></div>
                    <div class="overflow-hidden">
                      <p class="text-500" data-zanim-xs='{"delay":0.1}'>Virginie W. Yaméogo</p>
                    </div>
                    <div class="overflow-hidden">
                      <p class="mt-3" data-zanim-xs='{"delay":0.2}'>, prix de la meilleure 
présentation scientifique des résultats 
de projet changement climatique.</p>
                    </div>
                    <div class="overflow-hidden">
                      <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="{{route('news')}}">Lire Plus<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary py-6 text-center text-md-start">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md">
              <h4 class="text-white mb-0">Si vous avez des préoccupations ... <br class="d-md-none" />Nous sommes disponible 24/7</h4>
            </div>
            <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill" href="contact.html">Contacter Nous</a></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-center">
        <div class="container">
          <div class="text-center">
            <h3 class="fs-2 fs-md-3">Domaines</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/sd.jpg')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Sciences De la Santé</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Les recherches dans le domaine de la santé prend de l'ampleur dans notre grace aux centres et  instituts de recherche.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/agro.jpg')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Agronomie</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>
L'agronomie est la science de l'agriculture.Ces recherches font des merveillles</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/bio.jpg')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Biologie</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>La biologie a trouvé sa place au Burkina Faso grace aux instituts et des centres de recherche ainsi que dans des laboratoires de biologie médicale.

</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/cp.jpg')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Mathématiques-Physiques-Chimie</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Les mathématiques , les  physiques et la chimie ont évolués au Burkina Faso avec les recherches des grands chercheurs comme Pr Frédéric OUATTARA </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/5.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Sciences et Techniques de l'Ingéniorat</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Les recherches dans la technique de l'ingéniorat permet d'améliorer les conditions de vie des burkinabés</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <!--   
            <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/icons/data-analytics.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Logistic Consulting</h5>
                </div>
             <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We work buy side and sell side to give our clienrts hard hitting answers and focus hard on best opportunities.</p>
                </div>
              </div>
              -->
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary">
        <div class="container">
          <div class="row align-items-center text-white">
            <div class="col-lg-4">
              <div class="border border-2 border-warning p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h4 class="text-white" data-zanim-xs='{"delay":0}'> En cas de besoin </h4>
                </div>
                <div class="overflow-hidden">
                  <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Veuillez nous contacter</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
              <h5 class="text-white">Veuillez entrer vos informations</h5>
              <form class="mt-4" method="post">
                <div class="row">
                  <div class="col-6"><input class="form-control" type="hidden" name="to" value="username@domain.extension" /><input class="form-control" type="text" placeholder="Your Name" aria-label="Votre nom" /></div>
                  <div class="col-6"><input class="form-control" type="text" placeholder="Votre numéro" aria-label="Phone Number" /></div>
                  <div class="col-6 mt-4"><input class="form-control" type="text" placeholder="Message" aria-label="Subject" /></div>
                  <div class="col-6 mt-4"><button class="btn btn-warning w-100" type="submit">Envoyer</button></div>
                </div>
              </form>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 text-center">
        <div class="container">
          <div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3">Chercheurs ayant publié récemment des articles</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-4    ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/pr.jpg')}}" alt="Reenal Scott" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Pr Frédéric OUATTARA</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Docteur en physique — Géophysique — Heliophysique </h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Au plan de la recherche, le Pr Frédéric OUATTARA est auteur d’une centaine de publications scientifiques. <!--S’agissant des distinctions, Il a obtenu en 2018 « le Prix Afrique pour l’Excellence de la Recherche en Physique Spatiale » de l’Union Américaine de Géophysique (AGU) à Washington DC, faisant de lui un membre de cette structure mondiale. Il est aussi membre de la Société Burkinabé de Physique, de la Société Ouest Africaine de Physique ; de l’African Geoscience Society et de l’Académie nationale des sciences, des arts et des lettres du Burkina Faso (ANSAL-BF). --></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/dr.jpg')}}" alt="Lily Anderson" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Dr Nonlo_Kadidia_DRABO</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Chercheur en énergie renouvellable à l'IRSAT</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'> Dr Nonlo_Kadidia_DRABO est la prémiere femme ayant soutenue en physique dans le domaine de la metéorologie de l'espace </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/drp.jpg')}}" alt="Thomas Anderson" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>SAVADOGO	Paul Windinpsidi</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Directeur de Recherche</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Dr Paul SAVADOGO, chercheur à l'INERA, spécialiste des questions environnementales c'est à dire les l'eau et les sols.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4   ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/nac.jpg')}}" alt="Legartha Mantana" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Dr Pindé Souleymane 	</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Docteur en 
                      génétique
                    </h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Dr Pindé Souleymane est le premier doctorant à s’intéresser à la caractéristique génétique des poules locales .</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4   ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/emile.jpg')}}" alt="John Snow" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'> Dr DIALLA	Basga Emile	</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Maître de Recherche</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Dr DIALLA	Basga Emile	est Maître de Recherche CAMES en Sociologie rurale à l'Institut des Sciences des Sociétés au CNRST.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4   ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/Ali.jpg')}}" alt="Ragner Lothbrok" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'> Dr SOME SOMDA	Minimalo Alice	</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Chargé de Recherche</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Dr SOME SOMDA	Minimalo Alice première femme docteure en philosophie du Burkina Faso. <!--Elle est membre du Laboratoire de philosophie (LAPHI) à l’Université Joseph Ki-Zerbo.--> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->


      <!-- ============================================-->
     

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



@endsection