@extends('layouts.main')

@section('main')
    
    <!-- Image de fond (femme qui mange le burger)-->
    <img class="img-main" src="/img/fond-main.jpg" alt="">



    @include('sections.formres')

    <!-- Petit bloc d'avis -->
    <div class="avis-card" data-aos="zoom-in" data-aos-duration="1200">
        <div class="container text-avis-size">
            <p class="text-end mt-3"><i class='bx bx-calendar'></i><span class="date-avis">02/12/21</span></p>
            <p class="name-avis-people"><img src="/img/icons/ui-face.png" width="32px" class="mr-1 ml-1 "
                    alt="face people"> Juliette Helrente - Manager OC <br> <span
                    class="citation-avis-people fst-italic ml-5">"Un gain de temps considérable."</span><span><img
                        src="/img/icons/stars-avis-people.png" width="80px" class="ml-5" alt="avis people"></span>
            </p>
        </div>
    </div>
    </div>

    <!-- bloc main principale aka bloc two -->
    <div class="bloc-two">
        <!-- Carousel avec plusieurs images de repas -->
        <div class="container-fluid">
            <img class="img-fluid carousel-img" src="/img/multi-menu.png" width="100%">
        </div>

        @include('sections.presentation')
        @include('sections.dailyspecials')
    </div>
@endsection