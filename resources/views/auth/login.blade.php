@extends('layouts.frontend')

@section('content')
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <!-- left -->
                    <div
                        class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold">Bienvenue sur comacademie</h2>
                                <p class="mb-0 h6 fw-light">La plus grande communauté d'aide pédagogique des Comores</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="assets/images/element/02.svg" class="mt-5" alt="">
                            <!-- Info -->
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                <!-- Avatar group -->
                                <ul class="avatar-group mb-2 mb-sm-0">
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                            alt="avatar">
                                    </li>
                                </ul>
                                <!-- Content -->
                                <p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ étudiants nous ont rejoints, c'est
                                    maintenant votre tour.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-8 m-auto">
                                <!-- Title -->
                                <span class="mb-0 fs-1">👋</span>
                                <h1 class="fs-2">Connexion sur comacademie !</h1>
                                <p class="lead mb-4">Veuillez vous connecter avec votre compte.</p>

                                <!-- Form START -->
                                <form method="POST" action="{{ route('login') }}">
                                    <!-- Email -->
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email" class="form-label">E-mail | Username | Téléphone *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                                            <input type="email" name="email"
                                                class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail"
                                                id="email">
                                        </div>
                                        @error('email')
                                            <div class="text-danger">
                                                <div class="text-danger">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Mot de passe *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3 @error('password') is-invalid @enderror "><i
                                                    class="fas fa-lock"></i></span>
                                            <input type="password" name="password"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                placeholder="Mot de passe" id="password">
                                        </div>
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <!-- Check box -->
                                    <div class="mb-4 d-flex justify-content-between mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" name="remember" class="form-check-input"
                                                id="remember_me">
                                            <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <div class="text-primary-hover">
                                                <a href="{{ route('password.request') }}" class="text-secondary">
                                                    <u>Mot de passe oublié ?</u>
                                                </a>
                                            </div>
                                        @endif

                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="submit">Connexion</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->

                                <!-- Social buttons and divider -->
                                <div class="row">
                                    <!-- Divider with text -->
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or
                                        </p>
                                    </div>

                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="#" class="btn bg-google mb-2 mb-xxl-0"><i
                                                class="fab fa-fw fa-google text-white me-2"></i>Login with Google</a>
                                    </div>
                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="#" class="btn bg-facebook mb-0"><i
                                                class="fab fa-fw fa-facebook-f me-2"></i>Login with Facebook</a>
                                    </div>
                                </div>

                                <!-- Sign up link -->
                                <div class="mt-4 text-center">
                                    <span>Vous n'êtes pas encore inscrit ? <a
                                            href="{{ route('register') }}">M'inscrir</a></span>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
    </main>
@endsection



{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
