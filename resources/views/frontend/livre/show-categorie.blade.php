@extends('layouts.frontend')


@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
                                                                                                                                                                                                                            Page Banner START -->

        <section class="position-relative overflow-hidden pt-xl-5">

            <!-- Svg decoration -->
            <figure class="position-absolute top-0 end-0 me-n5 mt-5">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-purple opacity-2"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                    </path>
                </svg>
            </figure>

            <!-- Svg decoration -->
            <figure class="position-absolute bottom-0 start-0 me-5 d-none d-lg-block">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-warning opacity-3"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                    </path>
                </svg>
            </figure>

            <div class="">
            </div>
            <div class="container position-relative mt-5"
                style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover;">
                <!-- Top country START -->
                <h5><a href="">{{ $categorie->categorie_nom }}</a></h5>

            </div>
        </section>


        @if ($livres->count() === 0)
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <!-- Main content START -->
                        <div class="col-12">

                            <!-- Search option START -->
                            <div class="row mb-4 align-items-center">

                                <!-- Title -->
                                <div class="col-12">
                                    <h5 class="mb-0">Les livres de cette section ne sont pas encore disponibre</h5>
                                    <h5 class="my-5 text-info">A très bientôt...</h5>
                                </div>
                            </div>
                            <!-- Search option END -->
                        </div>
                        <!-- Main content END -->
                    </div><!-- Row END -->
                </div>
            </section>
        @else
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <!-- Main content START -->
                        <div class="col-12">

                            <!-- Search option START -->
                            <div class="row mb-4 align-items-center">

                                <!-- Title -->
                                <div class="col-md-4">
                                    <h5 class="mb-0">Les meilleurs de l'année</h5>
                                </div>



                            </div>
                            <!-- Search option END -->


                            <!-- Book Grid START -->
                            <div class="row g-4">
                                @foreach ($livres as $livre)
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="card shadow h-100">
                                            <div class="position-relative">
                                                <!-- Image -->
                                                <img src="{{ asset($livre->livre_page_garde) }}" class="card-img-top"
                                                    alt="book image">
                                                <!-- Overlay -->
                                                <div class="card-img-overlay d-flex z-index-0 p-3">
                                                    <!-- Card overlay Top -->
                                                    <div class="w-100 mb-auto d-flex justify-content-end">
                                                        <!-- Card format icon -->
                                                        <div class="icon-md bg-dark rounded-circle fs-5">
                                                            <a href="#" class="text-white"><i
                                                                    class="bi bi-file-earmark-pdf"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body px-3">
                                                <!-- Title -->
                                                <h5 class="card-title mb-0">

                                                    <a href="{{ route('livre.show', ['livre' => $livre->id, Str::slug($livre->livre_titre)]) }}"
                                                        class="stretched-link">{{ $livre->livre_titre }}</a>
                                                </h5>
                                            </div>

                                            <!-- Card footer -->
                                            <div class="card-footer pt-0 px-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="h6 fw-light mb-0">{{ 'Zaenma' }}</span>
                                                    <!-- Price -->
                                                    <h5 class="text-success mb-0">Gratuit</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                @endforeach


                                <!-- Pagination END -->
                                {{ $livres->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                        <!-- Main content END -->
                    </div><!-- Row END -->
                </div>
            </section>
        @endif


    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
