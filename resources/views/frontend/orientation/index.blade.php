@extends('layouts.frontend')


@php
    $titre = 'Comacademie - Orientation - Guide pédagogique';
    $metaDescription = 'Nous travaillons pour vous aider à naviguer dans les choix cruciaux liés à votre avenir académique et professionnel. Peu importe où vous en êtes dans votre parcours éducatif – collège, lycée, université – nous sommes là pour vous accompagner. Grâce à nos ressources, conseils pratiques et informations éclairantes, nous souhaitons vous aider à identifier vos passions et à forger un avenir épanouissant.';
@endphp




@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- ======================= Main Content START -->
        <section class="pb-0 pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Title and Info START -->
                        <div class="row">
                            <!-- Avatar and Share -->
                            <div class="col-lg-3 align-items-center mt-4 mt-lg-5 order-2 order-lg-1">
                                <div class="text-lg-center">
                                    <!-- Author info -->
                                    <div class="position-relative">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xxl">
                                            <img class="avatar-img rounded-circle"
                                                src="{{ asset('assets/images/avatar/09.png') }}" alt="avatar">
                                        </div>
                                        <a href="https://zaenma.com/" target="_blank"
                                            class="h5 stretched-link mt-2 mb-0 d-block">Halidi
                                            Amirddine
                                            Zaenma</a>
                                        <p class="mb-2">Ingénieur Informatique</p>
                                    </div>
                                    <!-- Info -->
                                    {{-- <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item d-lg-block my-lg-2">Nov 15, 2021</li>
                                        <li class="list-inline-item d-lg-block my-lg-2">5 min read</li>
                                        <li class="list-inline-item badge text-bg-orange"><i
                                                class="far text-white fa-heart me-1"></i>266</li>
                                        <li class="list-inline-item badge text-bg-info"><i class="far fa-eye me-1"></i>2K
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="col-lg-9 order-1">

                                <h1 class="mt-2 mb-0 display-5">Nous vous guidons tout au long de votre carrière</h1>
                                <!-- Info -->

                                <p class="mt-2" style="font-size: 18px">Naviguer dans
                                    les choix cruciaux liés à
                                    votre avenir académique et professionnel. Peu importe où vous en êtes dans votre
                                    parcours éducatif – collège, lycée, université – nous
                                    sommes là pour vous accompagner. Grâce à nos ressources, conseils pratiques et
                                    informations éclairantes, nous souhaitons vous aider à identifier vos passions et à
                                    forger un avenir épanouissant. </p>
                                <p class="mb-0 mb-lg-3" style="font-size: 18px">Que vous envisagiez les différentes séries
                                    du BEPC, que vous vous
                                    prépariez pour le Baccalauréat, ou que vous exploriez le monde des spécialités
                                    universitaires, nos informations complètes vous guideront dans des choix informés.
                                    L'éducation est la clé
                                    pour bâtir un avenir brillant, et nous sommes ravis de faire partie de votre voyage. Que
                                    vous décidiez de votre filière, prépariez votre transition professionnelle, ou exploriez
                                    de nouvelles opportunités, la section Orientation vous accompagnera à chaque étape.
                                    Préparez-vous à découvrir des conseils, des témoignages inspirants et des informations
                                    essentielles pour vous guider vers la voie qui vous convient le mieux. Votre succès est
                                    entre vos mains, et nous sommes honorés d'en faire partie.
                                </p>
                            </div>
                        </div>
                        <!-- Title and Info END -->

                        {{-- <!-- Video START -->
                        <div class="row mt-4">
                            <div class="col-xl-10 mx-auto">
                                <!-- Card item START -->

                                <div class="card overflow-hidden h-sm-300px h-lg-400px h-xl-500px rounded-3 text-center"
                                    style="background-image:url(assets/images/element/orientation.svg); background-position: center left; background-size: cover;">
                                    <!-- Card Image overlay -->
                                    <div class="bg-overlay bg-dark opacity-4"></div>


                                </div>
                                <!-- Card item END -->
                            </div>
                        </div>
                        <!-- Video END --> --}}

                        <!-- Quote and content START -->
                        <div class="row mt-4">
                            <h1>Niveau BEPC</h1>
                            <!-- Content -->
                            <div class="col-12 mt-4 mt-lg-0">
                                <p><span class="dropcap h6 mb-0 px-2">A</span> près avoir obtenu votre Brevet d'Étude du
                                    Premier Cycle (BEPC), vous avez maintenant l'opportunité de choisir la série qui
                                    correspond le mieux à vos intérêts et à vos aspirations. Voici un aperçu des différentes
                                    séries et filières disponibles, ainsi que leurs avantages et matières dominantes :</p>
                                <!-- List -->

                                <div class="mt-5">

                                    <h3><i class="fas fa-check-circle text-success me-2"></i>Série
                                        Scientifique (S)</h3>
                                    <p class="mx-5" style="font-size: 17px">La série scientifique est idéale pour les
                                        passionnés de sciences et de mathématiques. Elle prépare aux études supérieures en
                                        sciences, en médecine, en ingénierie et dans d'autres domaines techniques. Les
                                        matières dominantes comprennent les mathématiques, la physique, la chimie et la
                                        biologie. Cette série ouvre la porte à des carrières passionnantes dans la
                                        recherche, la médecine, l'ingénierie et bien d'autres.</p>
                                    <h3><i class="fas fa-check-circle text-success me-2"></i>Série Littéraire (L)</h3>
                                    <p class="mx-5" style="font-size: 17px">Si vous êtes attiré par la littérature, la
                                        langue, la philosophie et les arts, la série littéraire pourrait être votre choix
                                        idéal. Elle prépare aux études de lettres, langues, arts, sciences humaines et
                                        sociales. Les matières dominantes incluent la littérature, la philosophie, les
                                        langues étrangères et les arts. Cette série ouvre la voie à des carrières dans
                                        l'enseignement, la communication, le journalisme, l'édition et plus encore.</p>
                                    <h3><i class="fas fa-check-circle text-success me-2"></i>Série Économique et Sociale
                                        (ES)</h3>
                                    <p class="mx-5" style="font-size: 17px">La série ES s'adresse aux apprenants
                                        intéressés par l'économie, la
                                        sociologie et les sciences sociales. Elle prépare aux études en économie, gestion,
                                        sciences sociales et politiques. Les matières dominantes incluent les sciences
                                        économiques, les mathématiques, la sociologie et l'histoire-géographie. Cette série
                                        ouvre des perspectives professionnelles dans la gestion, la finance, la sociologie
                                        et l'administration.</p>
                                    <h3><i class="fas fa-check-circle text-success me-2"></i>Série Technologique (STT)</h3>
                                    <p class="mx-5" style="font-size: 17px">Si vous avez un penchant pour la technologie,
                                        la série technologique
                                        offre différentes options comme STT Génie Civil, STT Génie Électrique, etc. Les
                                        matières dominantes varient en fonction de la spécialité choisie. Cette série
                                        prépare aux métiers techniques et technologiques.</p>
                                </div>


                                <p class="mb-0" style="font-size: 17px">Prenez le temps de réfléchir à vos intérêts, à vos
                                    compétences et à vos
                                    objectifs futurs. Chaque série offre des avantages uniques et ouvre des portes vers des
                                    opportunités diverses. N'hésitez pas à vous renseigner davantage sur les programmes
                                    d'études, les débouchés et les exigences spécifiques à chaque série.</p>
                            </div>


                        </div>

                        <hr>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Main Content END -->
        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Subject START -->
        <section>
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="mb-0">Explorer les Possibilités de chaque série</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <p style="font-size: 18px">
                        Chaque série offre des avantages spécifiques et permet aux élèves de se spécialiser dans des
                        domaines correspondant à leurs intérêts. N'oubliez pas de considérer vos passions, vos aptitudes et
                        vos objectifs professionnels avant de prendre votre décision. Les études supérieures dans ces
                        domaines ouvrent des portes vers des carrières passionnantes et significatives.
                    </p>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Card -->
                        <div class="card bg-warning bg-opacity-50 p-4 overflow-hidden h-100">
                            <!-- Card header -->

                            <!-- Card body -->
                            <div class="card-body p-0 mt-3">
                                <!-- Title -->
                                <h4 class="mb-2"><a
                                        href="{{ route('orientation.formationparserie', Str::slug('Série Scientifique (S)')) }}"
                                        class="stretched-link">Série
                                        Scientifique (S)</a></h4>

                                <!-- Image -->
                                <img src="{{ asset('assets/images/element/scientifique.svg') }}" class="opacity-5 mb-n5"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <!-- Card -->
                        <div class="card bg-purple bg-opacity-50 p-4 overflow-hidden h-100">

                            <div class="card-body p-0 mt-3">
                                <!-- Title -->
                                <h4 class="mb-2"><a
                                        href="{{ route('orientation.formationparserie', Str::slug('Série Littéraire (L)')) }}"
                                        class="stretched-link">Série Littéraire (L)</a></h4>
                                {{-- <h6 class="lead">54 Lessons</h6> --}}
                                <!-- Image -->
                                <img src="{{ asset('assets/images/element/primary-school.svg') }}" class="opacity-5 mb-n5"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <!-- Card -->
                        <div class="card bg-orange bg-opacity-50 p-4 overflow-hidden h-100">

                            <div class="card-body p-0 mt-3">
                                <!-- Title -->
                                <h4 class="mb-2"><a
                                        href="{{ route(
                                            'orientation.formationparserie',
                                            Str::slug('Série Économique et Sociale
                                                                                                                        (ES)'),
                                        ) }}"
                                        class="stretched-link">Série Économique et Sociale
                                        (ES)</a></h4>
                                {{-- <h6 class="lead">70 Lessons</h6> --}}
                                <!-- Image -->
                                <img src="{{ asset('assets/images/element/high-school.svg') }}" class="opacity-5 mb-n5"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <!-- Card -->
                        <div class="card bg-info bg-opacity-50 p-4 overflow-hidden h-100">
                            <!-- Card header -->

                            <!-- Card body -->
                            <div class="card-body p-0 mt-3">
                                <!-- Title -->
                                <h4 class="mb-2 "><a
                                        href="{{ route('orientation.formationparserie', Str::slug('Série Technologique (STT)')) }}"
                                        class="stretched-link"> Série Technologique (STT)</a>
                                </h4>
                                <!-- Image -->
                                <img src="{{ asset('assets/images/element/technologie.svg') }}" class="opacity-5 mb-n5"
                                    alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- =======================
                                                                                                                                                                                                                                                                                             
                                                                                                                                                                                                                                                                                    Subject END -->

        <!-- =======================
                                                                                                                                                                                                                                                                            Top Listed START -->
        <section>
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="mb-0">Félicitations pour avoir obtenu votre Baccalauréat !</h2>
                    </div>
                </div>


                <p style="font-size: 20px">Maintenant, vous êtes prêt à poursuivre vos études
                    supérieures et à façonner votre avenir professionnel. Découvrez les options passionnantes qui s'offrent
                    à vous en fonction de votre série.</p>

                <!-- Courses START -->
                <div class="row">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                        <div class="tiny-slider-inner pb-1" data-autoplay="true" data-arrow="true" data-edge="2"
                            data-dots="false" data-items="4" data-items-lg="3" data-items-md="2" data-items-xs="1">


                            @foreach ($formations as $formation)
                                <!-- Card START -->

                                @php
                                    switch ($formation->serie_associe_formation) {
                                        case 'Série Scientifique (S)':
                                            $serie = 'S';
                                            break;
                                        case 'Série Littéraire (L)':
                                            $serie = 'L';
                                            break;
                                        case 'Série Sciences Économiques et Sociales (SE)':
                                            $serie = 'SE';
                                            break;
                                        case 'Série Technologique (STT)':
                                            $serie = 'STT';
                                            break;
                                        default:
                                            # code...
                                            break;
                                    }
                                @endphp

                                <div>
                                    <div class="card border bg-transparent h-100">
                                        <!-- Image -->
                                        <img src="{{ asset($formation->image_formation) }}" class="card-img-top"
                                            alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal"><a
                                                    href="{{ route('formation.show', ['formation' => $formation->id, Str::slug($formation->titre_formation)]) }}"
                                                    class="stretched-link">{{ $formation->titre_formation }}</a></h5>
                                            <div class="d-sm-flex justify-content-between align-items-center">
                                                <h6 class="mb-0">Série <span
                                                        class="text-orange">{{ $serie }}</span> </h6>
                                                <a href="{{ route('formation.show', ['formation' => $formation->id, Str::slug($formation->titre_formation)]) }}"
                                                    class="btn btn-link p-0 mb-0">Voir<i
                                                        class="bi bi-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card START -->
                            @endforeach

                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
                <!-- Courses END -->

            </div>
        </section>
        <!-- =======================
                                                                                                                                                                                                                                                                            Top Listed END -->
        <section>
            <div class="container" style="font-size: 18px">

                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="mb-0">En conclusion</h2>
                    </div>
                </div>


                <p>Notre section d'orientation est conçue pour vous guider dans le processus important de
                    choix académiques et professionnels. Nous comprenons que prendre des décisions concernant votre avenir
                    peut être à la fois passionnant et complexe. Notre objectif est de vous fournir des informations
                    approfondies pour vous aider à prendre des décisions éclairées et à choisir la voie qui correspond le
                    mieux à vos intérêts et ambitions.
                </p>

                <p>

                    Que vous soyez intéressé par les sciences, les arts, l'agriculture ou d'autres domaines, nous vous
                    offrons des conseils pratiques et des ressources pour vous aider à naviguer dans cette phase décisive.
                    Quelle que soit la série que vous choisissez ou les formations que vous envisagez, rappelez-vous que
                    vous êtes au cœur de votre propre voyage. Nous sommes ici pour vous soutenir tout au long de cette étape
                    importante et pour vous encourager à poursuivre vos aspirations avec confiance et détermination.
                </p>

                <p>
                    Votre avenir est une toile vierge à remplir avec vos rêves et objectifs. Nous sommes ravis de faire
                    partie de ce voyage avec vous, en vous fournissant des informations essentielles pour vous aider à
                    façonner un avenir prometteur et épanouissant.
                </p>
            </div>
        </section>


        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Inner part START -->
        {{-- <section class="pt-4">
            <div class="container">

                <!-- Instructor list START -->
                <div class="row g-4 justify-content-end">

                    <!-- Card item START -->
                    <div class="col-lg-10 col-xl-6">
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/avatar/09.png') }}" class="rounded-3"
                                        alt="...">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                            <div>
                                                <h5 class="card-title mb-0"><a href="" target="_blank">Halidi
                                                        Amirddine Zaenma</a>
                                                </h5>
                                                <p class="small mb-2 mb-sm-0">Fondateur de
                                                    comacademie</p>
                                            </div>
                                            <span class="h6 fw-light">4.6<i
                                                    class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">Un passionné des TIC, qui met à
                                            profit ses compétences et ses connaissances pour offrir une expérience
                                            d'apprentissage exceptionnelle en fournissant continuellement des solutions
                                            innovantes.</p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <h6 class="text-orange mb-0">Ingénieur Informatique</h6>

                                            <!-- Social button -->
                                            <ul class="list-inline mb-0 mt-3 mt-sm-0">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Instructor list END -->
            </div>
        </section> --}}
        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Inner part END -->
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
