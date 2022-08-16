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
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="#!">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="contact.html">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
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
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="#!">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="contact.html">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
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
                <div class="card"><a href="news/news.html"><img class="card-img-top" src="{{asset('img/9.jpg')}}" alt="Featured Image" /></a>
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden"><a href="news/news.html">
                        <h5 data-zanim-xs='{"delay":0}'>Tax impacts of lease mean accounting change</h5>
                      </a></div>
                    <div class="overflow-hidden">
                      <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Paul O'Sullivan</p>
                    </div>
                    <div class="overflow-hidden">
                      <p class="mt-3" data-zanim-xs='{"delay":0.2}'>HMRC released a consultation document to flag some potential tax impacts that a forthcoming change...</p>
                    </div>
                    <div class="overflow-hidden">
                      <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card"><a href="news/news.html"><img class="card-img-top" src="{{asset('img/10.jpg')}}" alt="Featured Image" /></a>
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden"><a href="news/news.html">
                        <h5 data-zanim-xs='{"delay":0}'>What brexit means for data protection law</h5>
                      </a></div>
                    <div class="overflow-hidden">
                      <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Enrico Ambrosi</p>
                    </div>
                    <div class="overflow-hidden">
                      <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Assuming that the referendum is not ignored completely, there are two possible futures for the UK...</p>
                    </div>
                    <div class="overflow-hidden">
                      <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card"><a href="news/news.html"><img class="card-img-top" src="{{asset('img/11.jpg')}}" alt="Featured Image" /></a>
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden"><a href="news/news.html">
                        <h5 data-zanim-xs='{"delay":0}'>The growing meanace of social engineering fraud</h5>
                      </a></div>
                    <div class="overflow-hidden">
                      <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Robson</p>
                    </div>
                    <div class="overflow-hidden">
                      <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Social engineering involves the collection of information from various sources about a target...</p>
                    </div>
                    <div class="overflow-hidden">
                      <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
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
                <div class="overflow-hidden"><img src="{{asset('img/icons/sharing.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creative Support</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We transform brands, grow businesses, and tell brand and product stories in a most creative way.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/icons/mail.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creating Experiences</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We cover a large range of creative platforms and digital projects with one purpose: to create experiences.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/icons/target.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Product Consulting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We guide you through the pipelines that generate new products with higher potential and lower risk.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/icons/world-globe.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Business Boosting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We provide energy-efficient and environmentally conservative solutions to our clients to boost their business.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/icons/money.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Strategic Approach</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Based on solid strategic framework and real, relevant research, we create prototypes, not presentations.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="{{asset('img/icons/data-analytics.png')}}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Logistic Consulting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We work buy side and sell side to give our clienrts hard hitting answers and focus hard on best opportunities.</p>
                </div>
              </div>
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
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-3.jpg')}}" alt="Reenal Scott" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Reenal Scott</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Advertising Consultant</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-4.jpg')}}" alt="Lily Anderson" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Lily Anderson</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Activation Consultant</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Lily leads Elixir UK and oversees the company’s Customer Operations teams supporting millions ofr users.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
              <div class="card h-100"><img class="card-img-top" src="assets/img/portrait-5.jpg" alt="Thomas Anderson" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Thomas Anderson</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Change Management Consultant</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As the VP of People, Thomas’s focus lies in the development and optimization of talent retention.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4   ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-6.jpg')}}" alt="Legartha Mantana" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Legartha Mantana</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Brand Management Consultant</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As General Counsel of Elixir, Tony oversees global legal activities and policies across all aspects.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4   ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-7.jpg')}}" alt="John Snow" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>John Snow</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Analyst</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>John has overseen the meteoric growth while protecting scaling its uniquely creative and culture.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4   ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-1.jpg')}}" alt="Ragner Lothbrok" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <h5 data-zanim-xs='{"delay":0}'>Ragner Lothbrok</h5>
                  </div>
                  <div class="overflow-hidden">
                    <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Consultant</h6>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Ragner, SVP of Engineering, oversees Elixir’s vast engineering organization which drives the core programming.</p>
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