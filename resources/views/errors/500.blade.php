@extends('layouts.frontend')


@section('content')
    <main>
        <section class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-5 text-danger">Oh ! Une erreur est survenu</h2>
                        <!-- Image -->
                        <img src="assets/images/element/error404-01.svg" class="h-200px h-md-400px mb-4" alt="">
                        <!-- Title -->
                        <h1 class="display-1 text-danger mb-0">500</h1>
                        <!-- Subtitle -->

                        <!-- info -->
                        <p class="mb-4">Soit il y a eu un problème, soit cette page n'existe plus..</p>
                        <!-- Button -->
                        <a href="/" class="btn btn-primary mb-0">Retourner à la page d'acceuil</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
