@extends('layouts.frontend')


@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                            Page content START -->
        <section class="pt-5">
            <div class="container" data-sticky-container>
                <div class="row g-4 g-sm-5">

                    <!-- Left sidebar START -->
                    <div class="col-xl-4">
                        <div data-sticky data-margin-top="80" data-sticky-for="992">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-xl-12">

                                    <!-- Card START -->
                                    <div class="card shadow">
                                        <!-- Image -->
                                        <div class="rounded-3">
                                            <img src="{{ asset($livre->livre_page_garde) }}" class="card-img-top"
                                                alt="book image">
                                        </div>

                                        <!-- Card body -->
                                        <div class="card-body pb-3">
                                            <!-- Buttons and price -->
                                            <div class="text-center">
                                                <!-- Buttons -->


                                                {{-- <a href="{{ asset($livre->livre_pdf) }}"
                                                        download="comacademie-{{ $livre->livre_titre }}"
                                                        class="btn btn-success-soft mb-2 mb-sm-0 me-00 me-sm-3"><i
                                                            class="bi bi-cart3 me-2"></i>Télécharger</a> --}}

                                                <a href="{{ route('livre.telecharger', $livre->id) }}"
                                                    class="btn btn-success-soft mb-2 mb-sm-0 me-00 me-sm-3"><i
                                                        class="fa fa-download" aria-hidden="true"></i> Télécharger</a>

                                                <a href="#" class="btn btn-light mb-0"> <i class="fa fa-share"
                                                        aria-hidden="true"></i> Partager</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card END -->

                                </div>
                            </div> <!-- Row End -->
                        </div>
                    </div>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-8">

                        <!-- Title -->
                        <h1 class="mb-4">{{ $livre->livre_titre }}</h1>

                        <!-- Rating -->
                        <div class="d-flex align-items-center mb-4">
                            <h2 class="me-3 mb-0">4.5</h2>
                            <div>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i
                                            class="fas fa-star-half-alt text-warning"></i></li>
                                </ul>
                                <p class="mb-0 small mt-n1">Reviews from our buyers</p>
                            </div>
                        </div>

                        <!-- Price Item START -->
                        <ul class="list-inline mb-4">
                            <!-- Price -->
                            <li class="list-inline-item">
                                <input type="radio" class="btn-check" name="options" id="option1" checked>
                                <label class="btn btn-success-soft-check" for="option1">
                                    <span class="mb-2 h6 fw-light">Téléchargement</span>
                                    <!-- Price and discount -->
                                    <span class="d-flex align-items-center">
                                        <span class="mb-0 h5 me-2 text-success">
                                            {{ $livre->livre_telecharegement }}</span>

                                    </span>
                                </label>
                            </li>

                        </ul>
                        <!-- Price Item END -->

                        <!-- Content -->
                        {!! $livre->livre_description !!}

                        <!-- Additional info -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <!-- List START -->
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item px-0">
                                        <span class="h6 fw-light"><i
                                                class="bi fa-fw bi-calendar-fill text-primary me-2"></i>Publié le
                                            :</span>
                                        <span class="h6">{{ $livre->created_at->format('d/m/Y') }}</span>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <span class="h6 fw-light"><i
                                                class="bi fa-fw bi-translate text-primary me-2"></i>Langue :</span>
                                        <span class="h6">{{ $livre->livre_langue }}</span>
                                    </li>
                                </ul>
                                <!-- List END -->
                            </div>

                            <div class="col-md-6">
                                <!-- List START -->
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item px-0">
                                        <span class="h6 fw-light"><i
                                                class="bi fa-fw bi-person-circle text-primary me-2"></i>Publié par :</span>
                                        <span class="h6">Amirddine Zaenma</span>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <span class="h6 fw-light"><i
                                                class="bi fa-fw bi-bag-fill text-primary me-2"></i>Téléchargé par :</span>
                                        <span class="h6">{{ $livre->livre_telecharegement }}</span> personnes
                                    </li>
                                    <li class="list-group-item px-0">
                                        <span class="h6 fw-light"><i
                                                class="bi fa-fw bi-star-fill text-primary me-2"></i>Rating/Review:</span>
                                        <span class="h6">4.5 (568)</span>
                                    </li>
                                </ul>
                                <!-- List END -->
                            </div>
                        </div>


                        <!-- Book detail START -->
                        <div class="col-12">
                            <!-- Tabs START -->
                            <ul class="nav nav-pills nav-pills-bg-soft px-3" id="book-pills-tab" role="tablist">
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-0 active" id="book-pills-tab-1" data-bs-toggle="pill"
                                        data-bs-target="#book-pills-1" type="button" role="tab"
                                        aria-controls="book-pills-1" aria-selected="true">Auteur</button>
                                </li>
                                <!-- Tab item -->
                                <li class="nav-item me-2 me-sm-4" role="presentation">
                                    <button class="nav-link mb-0" id="book-pills-tab-2" data-bs-toggle="pill"
                                        data-bs-target="#book-pills-2" type="button" role="tab"
                                        aria-controls="book-pills-2" aria-selected="false">Commantaires</button>
                                </li>
                            </ul>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class="tab-content pt-4 px-3" id="book-pills-tabContent">
                                <!-- Content START -->
                                <div class="tab-pane fade show active" id="book-pills-1" role="tabpanel"
                                    aria-labelledby="book-pills-tab-1">
                                    <div class="row g-4">
                                        <div class="col-md-3">
                                            <img src="assets/images/instructor/08.jpg" class="rounded-3" alt="">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-sm-flex justify-content-sm-between">

                                                <!-- Title -->
                                                <div class="mb-3">
                                                    <h3 class="mb-0">{{ $livre->livre_auteur ?? 'Non indiqué' }}</h3>
                                                    {{-- <span>Publisher</span> --}}
                                                </div>

                                                <!-- Social icon -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a class="mb-0 me-1 text-facebook" href="#"><i
                                                                class="fab fa-fw fa-facebook-f"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="mb-0 me-1 text-instagram-gradient" href="#"><i
                                                                class="fab fa-fw fa-instagram"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="mb-0 me-1 text-twitter" href="#"><i
                                                                class="fab fa-fw fa-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="mb-0 text-linkedin" href="#"><i
                                                                class="fab fa-fw fa-linkedin-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Content -->
                                            <P class="mt-3 mt-sm-0 mb-0">Pas de détails</P>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class="tab-pane fade" id="book-pills-2" role="tabpanel"
                                    aria-labelledby="book-pills-tab-2">
                                    <!-- Review START -->
                                    <div class="row mb-4">
                                        <h4 class="mb-4">Tous commentaires</h4>

                                        <!-- Student review END -->

                                        <!-- Leave Review START -->
                                        <div class="mt-2">
                                            <h5 class="mb-4">Laisser un commentaire</h5>
                                            <form class="row g-3">
                                                <!-- Name -->
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="inputtext"
                                                        placeholder="Name" aria-label="First name">
                                                </div>
                                                <!-- Email -->
                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" placeholder="Email"
                                                        id="inputEmail4">
                                                </div>
                                                <!-- Rating -->
                                                <div class="col-12">
                                                    <select id="inputState2" class="form-select  js-choice">
                                                        <option selected="">★★★★★ (5/5)</option>
                                                        <option>★★★★☆ (4/5)</option>
                                                        <option>★★★☆☆ (3/5)</option>
                                                        <option>★★☆☆☆ (2/5)</option>
                                                        <option>★☆☆☆☆ (1/5)</option>
                                                    </select>
                                                </div>
                                                <!-- Message -->
                                                <div class="col-12">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your review" rows="3"></textarea>
                                                </div>
                                                <!-- Button -->
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mb-0">Publier le
                                                        commentaire</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Leave Review END -->

                                    </div>
                                    <!-- Content END -->

                                    <!-- Content START -->
                                    <div class="tab-pane fade" id="book-pills-3" role="tabpanel"
                                        aria-labelledby="book-pills-tab-3">


                                        <h1>Bientôt...</h1>


                                    </div>
                                    <!-- Content END -->
                                </div>
                                <!-- Tab contents END -->
                            </div>
                            <!-- Book detail END -->
                        </div>
                        <!-- Main content END -->
                    </div> <!-- Row END -->
                </div>
        </section>
        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                            Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
