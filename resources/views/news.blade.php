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

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100">
        <div class="container">
          <div class="overflow-hidden mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div data-zanim-xs='{"delay":0}'><a class="d-inline-block text-500" href="#!">Léa Paré/Toé</a>, &nbsp;<a class="d-inline-block text-500" href="#!">Aout 24, 2022</a></div>
            <h4 data-zanim-xs='{"delay":0.1}'>Recherches au niveau des maladies vectorielles</h4>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="card mb-6"> <img class="card-img-top" src="{{asset('img/fem.jpg')}}" alt="new image" />
                <div class="card-body p-5">
                  <p class="dropcap">La troisième lauréate, Léa Paré/Toé de l’IRSS, est la meilleure femme chercheure dans le domaine des maladies à transmission vectorielle. « Nous avons obtenu le prix africain de la meilleure femme chercheure dans le domaine des maladies à transmission vectorielle. C’est un prix qui est décerné par l’Association panafricaine de la lutte anti-vectorielle », a-t-elle indiqué.

À l’entendre, leurs recherches sont essentiellement concentrées sur comment connecter la science avec les bénéficiaires des résultats scientifiques. « Donc en travaillant à comprendre les préoccupations et les attentes des communautés par rapport à tous ces résultats de recherches qui sortent de nos laboratoires, c’est de faire en sorte qu’il y ait une appropriation de nos résultats scientifiques », a-t-elle soutenu.
                </div>
              </div>
              <div class="card">
                <div class="card-body p-5">
                  <div class="pt-5">
                    <h4>Leave A Comment</h4>
                    <form class="mt-4">
                      <div class="row">
                        <div class="col-12"><input class="form-control bg-white" type="text" placeholder="Your Name" aria-label="Your Name" /></div>
                        <div class="col-12 mt-4"><input class="form-control bg-white" type="email" placeholder="Email" aria-label="Email" /></div>
                        <div class="col-12 mt-4"><textarea class="form-control bg-white" rows="10" placeholder="Leave your comment here..." aria-label="Leave your comment here"></textarea></div>
                        <div class="col-12 mt-4"><button class="btn btn-primary" type="Submit">Submit Comment</button></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
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