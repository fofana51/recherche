@extends('master.master')
@section('content')
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
@endsection