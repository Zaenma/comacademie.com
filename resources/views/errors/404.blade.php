@extends('layouts.frontend')



@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    {{-- <main>
        <section class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-5 text-danger">Oh ! il semble que vous vous êtes perdu</h2>
                        <!-- Image -->
                        <img src="{{ asset('assets/images/element/error404-01.svg') }}" class="h-200px h-md-400px mb-4"
                            alt="">
                        <!-- Title -->
                        <h1 class="display-1 text-danger mb-0">404</h1>
                        <!-- Subtitle -->

                        <!-- info -->
                        <p class="mb-4">Soit il y a eu un problème, soit cette page n'existe plus..</p>
                        <!-- Button -->
                        <a href="/" class="btn btn-primary mb-0">Retourner à la page d'acceuil</a>
                    </div>
                </div>
            </div>
        </section>
    </main> --}}

    <main>
        <section class="pt-0 pt-lg-5 position-relative overflow-hidden my-auto">

            <!-- SVG decoration -->
            <figure class="position-absolute bottom-0 start-0">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-warning opacity-5"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                    </path>
                </svg>
            </figure>
            <!-- SVG decoration -->
            <figure class="position-absolute top-0 end-0 d-none d-xl-block">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-danger opacity-3"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                    </path>
                </svg>
            </figure>

            <div class="container position-relative">
                <div class="row g-5 align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <!-- Title -->
                        <h1 class="mt-4 mt-lg-0">Nous sommes en train de construire quelque chose de génial !</h1>
                        <!-- info -->
                        <p>Hé, vous ! Comacademie arrive bientôt. Nous faisons de notre mieux pour lancer cette section et
                            nous reviendrons bientôt.
                        </p>
                        <!-- Progress bar -->
                        <div class="overflow-hidden mt-4">
                            <p class="mb-1 h6 fw-light text-start">Launch progress</p>
                            <div class="progress progress-md progress-percent-bg bg-light">
                                <div class="progress-bar progress-bar-striped bg-info aos" data-aos="slide-right"
                                    data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                    role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                    style="width:36%">
                                    <span class="progress-percent text-white">36%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter -->
                        <form class="mt-4">
                            <!-- Info -->
                            <h6>M'avertir du lancement de la section</h6>
                            <div class="bg-body border rounded-2 p-2">
                                <!-- Input subscribe -->
                                <div class="input-group">
                                    <input class="form-control border-0 me-1" type="email" placeholder="Enter your email">
                                    <button type="button" class="btn btn-blue mb-0 rounded-2">Me notifié !</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-7 text-center">
                        <!-- Image -->
                        <img src="assets/images/element/coming-soon.svg" class="h-300px h-sm-400px h-md-500px h-xl-700px"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
