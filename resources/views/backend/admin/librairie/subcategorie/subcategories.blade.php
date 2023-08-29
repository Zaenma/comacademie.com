@extends('layouts.admin.layouts')


@php
    use App\Helpers\Helpers;
    
@endphp


@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                        Page Banner START -->

        <section class="position-relative overflow-hidden pt-xl-5">

            <div class="container position-relative"
                style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover;">
                <!-- Top country START -->
                <div class="row g-4">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('subcategories.create') }}" class="btn btn-primary"> <i class="fa fa-plus"
                                aria-hidden="true"></i> Ajouter une
                            sous-catégories</a>
                    </div>
                    <div class="col-xl-12">
                        <div class="row g-4">


                            @foreach (Helpers::categories() as $categorie)
                                @if (Helpers::subcategories($categorie->id)->count() != 0)
                                    @foreach (Helpers::subcategories($categorie->id) as $subcategorie)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="card card-body shadow p-2">
                                                <div class="d-flex align-items-center">

                                                    <h5 class="ms-3 mb-0"> <a
                                                            href="{{ route('subcategories.edit', $subcategorie->id) }}"
                                                            class="stretched-link">
                                                            {{ $categorie->categorie_nom }}
                                                            <i class="fa fa-angle-right mx-3" aria-hidden="true"></i>
                                                            {{ $subcategorie->subcategorie_nom }}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                            <!-- Country item -->
                        </div> <!-- Row END -->
                    </div>
                </div>
                <!-- Top country END -->
            </div>
        </section>



    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
