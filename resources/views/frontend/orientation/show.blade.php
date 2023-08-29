@extends('layouts.frontend')


@php
    $titre = 'Formation - ' . $formation->titre_formation;
    $metaDescription = 'Nous travaillons pour vous aider à naviguer dans les choix cruciaux liés à votre avenir académique et professionnel. Peu importe où vous en êtes dans votre parcours éducatif – collège, lycée, université – nous sommes là pour vous accompagner. Grâce à nos ressources, conseils pratiques et informations éclairantes, nous souhaitons vous aider à identifier vos passions et à forger un avenir épanouissant.';
@endphp


@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Page intro START -->
        <section class="bg-light py-0 py-sm-5">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-8">
                        <!-- Badge -->
                        <h6 class="mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block">
                            {{ $formation->serie_associe_formation }}
                        </h6>
                        <!-- Title -->
                        <h1 class="text-primary">{{ $formation->titre_formation }}</h1>
                        @php
                            $premierParagraphe = Illuminate\Support\Str::before($formation->description_formation, '</p>') . '</p>';
                        @endphp

                        <div class="mb-5" style="font-size: 18px">{!! $premierParagraphe !!}</div>
                        <!-- Content -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                    class="fas fa-star text-warning me-2"></i>4.5/5.0</li>

                            @if ($formation->recommandations->count() > 1)
                                Il y a {{ $formation->recommandations->count() }} recommandations.
                                <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                        class="fas fa-user-graduate text-orange me-2"></i>{{ $formation->recommandations->count() }}
                                    recommandations
                                </li>
                            @elseif ($formation->recommandations->count() === 1)
                                <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                        class="fas fa-user-graduate text-orange me-2"></i>{{ $formation->recommandations->count() }}
                                    recommandation
                                </li>
                            @else
                                <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fa fa-comment text-orange me-2"
                                        aria-hidden="true"></i>
                                    {{ $formation->recommandations->count() }}
                                    recommandation
                                </li>
                            @endif
                            <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                    class="fas fa-signal text-success me-2"></i>Universitaire</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Page intro END -->

        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Page content START -->
        <section class="pb-0 py-lg-5">
            <div class="container">
                <div class="row">
                    <!-- Main content START -->
                    <div class="col-lg-8">
                        <div class="card shadow rounded-2 p-0">
                            <!-- Tabs START -->
                            <div class="card-header border-bottom px-4 py-3">
                                <ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1"
                                            data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button"
                                            role="tab" aria-controls="course-pills-1"
                                            aria-selected="true">Déscription</button>
                                    </li>


                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-6" data-bs-toggle="pill"
                                            data-bs-target="#course-pills-6" type="button" role="tab"
                                            aria-controls="course-pills-6" aria-selected="false">Recommandantions</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class="card-body p-4">
                                <div class="tab-content pt-2" id="course-pills-tabContent">
                                    <!-- Content START -->
                                    <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel"
                                        aria-labelledby="course-pills-tab-1">
                                        <!-- Course detail START -->
                                        <h5 class="mb-3">Déscription de la formation</h5>

                                        <div class="" style="font-size: 18px">
                                            {!! $formation->description_formation !!}
                                        </div>

                                    </div>
                                    <!-- Content END -->


                                    <!-- Content START -->
                                    <div class="tab-pane fade" id="course-pills-6" role="tabpanel"
                                        aria-labelledby="course-pills-tab-6">
                                        <!-- Review START -->
                                        <div class="row">
                                            <div class="col-12">
                                                <h5 class="mb-4">Recommander la formation</h5>
                                                @foreach ($formation->recommandations as $recommandation)
                                                    <!-- Comment item START -->
                                                    <div class="border p-2 p-sm-4 rounded-3 mb-4">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="comment-item">
                                                                <div class="d-flex mb-3">
                                                                    <!-- Avatar -->
                                                                    <div class="avatar avatar-sm flex-shrink-0">
                                                                        <a href="#"><img
                                                                                class="avatar-img rounded-circle"
                                                                                src="{{ asset('assets/images/avatar/09.png') }}"
                                                                                alt=""></a>
                                                                    </div>
                                                                    <div class="ms-2">
                                                                        <!-- Comment by -->
                                                                        <div class="bg-light p-2 rounded">
                                                                            <div class="d-flex justify-content-center">
                                                                                <div class="me-2">
                                                                                    <h6 class="mb-1 lead fw-bold"> <a
                                                                                            href="#!">
                                                                                            {{ $recommandation->user->name }}
                                                                                        </a></h6>
                                                                                    <p class="h6 mb-0">
                                                                                        {!! $recommandation->contenu !!}</p>
                                                                                </div>

                                                                                @php
                                                                                    $dateHeureDebut = \Carbon\Carbon::parse($recommandation->created_at);
                                                                                    
                                                                                    $diff = $dateHeureDebut->diff(now());
                                                                                    
                                                                                    // Formatage du résultat
                                                                                    $resultat = '';
                                                                                    
                                                                                    if ($diff->days > 0) {
                                                                                        $resultat .= $diff->days . ' j ';
                                                                                    }
                                                                                    if ($diff->h > 0) {
                                                                                        $resultat .= $diff->h . ' h ';
                                                                                    }
                                                                                    if ($diff->i > 0) {
                                                                                        $resultat .= $diff->i . ' min ';
                                                                                    }
                                                                                @endphp



                                                                                <small>{{ $resultat }}</small>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Comment react -->
                                                                        <ul class="nav nav-divider py-2 small">
                                                                            <li class="nav-item"> <a
                                                                                    class="text-primary-hover"
                                                                                    href="#"> <i
                                                                                        class="bi bi-hand-thumbs-up"></i>
                                                                                    (3)
                                                                                </a> </li>
                                                                            <li class="nav-item"> <a
                                                                                    class="text-primary-hover"
                                                                                    href="#"> <i
                                                                                        class="bi bi-hand-thumbs-down"></i>
                                                                                    (0)</a> </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- Comment item END -->
                                                @endforeach


                                                <!-- Comment box -->
                                                <div class="d-flex mb-4">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                        <a href="#"> <img class="avatar-img rounded-circle"
                                                                src="{{ asset('assets/images/avatar/09.png') }}"
                                                                alt=""> </a>
                                                    </div>

                                                    <form class="w-100" method="POST"
                                                        action="{{ route('recommandation.store', $formation->id) }}">

                                                        @csrf

                                                        <textarea name="recommandation" id="autoheighttextarea" rows="1" placeholder="Ajouter une recommandation..."></textarea>

                                                        <button class="btn btn-primary ms-2 mb-0 mt-2 float-end"
                                                            type="submit">Poster</button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Content END -->

                                </div>
                            </div>
                            <!-- Tab contents END -->
                        </div>
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-lg-4 pt-5 pt-lg-0">
                        <div class="row mb-5 mb-lg-0">
                            <div class="col-md-6 col-lg-12">
                                <!-- Video START -->
                                <div class="card shadow p-2 mb-4 z-index-9">
                                    <div class="overflow-hidden rounded-3">
                                        <img src="{{ asset($formation->image_formation) }}" class="card-img"
                                            alt="course image">
                                        <!-- Overlay -->
                                        <div class="bg-overlay bg-dark opacity-6"></div>

                                    </div>

                                    <!-- Card body -->
                                    {{-- <div class="card-body px-3">
                                        <!-- Info -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Price and time -->
                                            <div>

                                            </div>

                                            <!-- Share button with dropdown -->
                                            <div class="dropdown">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-light rounded small bg-info"
                                                    role="button" id="dropdownShare" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fas fa-fw fa-share-alt"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                                    aria-labelledby="dropdownShare">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fas fa-copy me-2"></i>Copy link</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="mt-3 d-sm-flex justify-content-sm-between">
                                            <a href="#" class="btn btn-outline-primary mb-0">Free trial</a>
                                            <a href="#" class="btn btn-success mb-0">Buy course</a>
                                        </div>
                                    </div> --}}
                                </div>
                                <!-- Video END -->

                            </div>

                            <div class="col-md-6 col-lg-12">
                                <!-- Recently Viewed START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Récemment consultés</h4>
                                    <!-- Course item START -->

                                    @foreach ($formationsBySerie->shuffle()->take(5) as $formation)
                                        <div class="row gx-3 mb-3">
                                            <!-- Image -->
                                            <div class="col-4">
                                                <img class="rounded" src="{{ asset($formation->image_formation) }}"
                                                    alt="">
                                            </div>
                                            <!-- Info -->
                                            <div class="col-8">
                                                <h6 class="mb-0"><a
                                                        href="{{ route('formation.show', ['formation' => $formation->id, Str::slug($formation->titre_formation)]) }}">{{ $formation->titre_formation }}</a>
                                                </h6>
                                                <ul
                                                    class="list-group list-group-borderless mt-1 d-flex justify-content-between">
                                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                                        <span
                                                            class="text-success">{{ $formation->serie_associe_formation }}</span>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Course item END -->

                                </div>
                                <!-- Recently Viewed END -->

                            </div>
                        </div><!-- Row End -->
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Page content END -->

        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Listed courses START -->
        <section class="pt-0">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <h3 class="mb-0">Formations recommandées pour la {{ $formation->serie_associe_formation }}</h3>
                </div>

                <div class="row">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                        <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2"
                            data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">



                            @foreach ($formationsBySerie as $form)
                                @if ($form->serie_associe_formation === $formation->serie_associe_formation)
                                    <!-- Card Item START -->
                                    <div class="pb-4">
                                        <div class="card p-2 border">
                                            <div class="rounded-top overflow-hidden">
                                                <div class="card-overlay-hover">
                                                    <img src="{{ asset($form->image_formation) }}" class="card-img-top"
                                                        alt="course image">
                                                </div>
                                                <!-- Hover element -->
                                                <div class="card-img-overlay">
                                                    <div class="card-element-hover d-flex justify-content-end">
                                                        <a href="#"
                                                            class="icon-md bg-white rounded-circle text-center">
                                                            <i class="fas fa-heart text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <!-- Badge and icon -->
                                                <div class="d-flex justify-content-between">
                                                    <!-- Rating and info -->
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <!-- Info -->
                                                        <li
                                                            class="list-inline-item d-flex justify-content-center align-items-center">
                                                            <div
                                                                class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle">
                                                                <i class="fas fa-user-graduate"></i>
                                                            </div>
                                                            <span class="h6 fw-light ms-2 mb-0">9.1k</span>
                                                        </li>
                                                        <!-- Rating -->
                                                        <li
                                                            class="list-inline-item d-flex justify-content-center align-items-center">
                                                            <div
                                                                class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle">
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="h6 fw-light ms-2 mb-0">4.5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Divider -->
                                                <hr>
                                                <!-- Title -->
                                                <h5 class="card-title"><a
                                                        href="{{ route('formation.show', ['formation' => $formation->id, Str::slug($formation->titre_formation)]) }}">{{ $form->titre_formation }}</a>
                                                </h5>
                                                <!-- Badge and Price -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="{{ route('formation.show', ['formation' => $formation->id, Str::slug($formation->titre_formation)]) }}"
                                                        class="badge bg-info bg-opacity-10 text-info"><i
                                                            class="fas fa-circle small fw-bold me-2"></i>{{ $form->serie_associe_formation }}</a>
                                                    <!-- Price -->
                                                    {{-- <h3 class="text-success mb-0">$140</h3> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Item END -->
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </section>
        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Listed courses END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection


@section('js')
    <script src="https://cdn.tiny.cloud/1/5lkvnma23tj48r67q2rfxyor06rzv8pv30wt63zdurss4rhl/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            height: '200px',
            skin: 'oxide-dark',
            content_css: 'dark'
        });
    </script>
@endsection
