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
                                <p class="mb-0 h6 fw-light">Apprenons chaque jour quelque chose de nouveau !</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="assets/images/element/02.svg" class="mt-5" alt="">
                            <!-- Info -->
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                <ul class="avatar-group mb-2 mb-sm-0">
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                            src="assets/images/avatar/01.jpg" alt="avatar"></li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                            src="assets/images/avatar/02.jpg" alt="avatar"></li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                            src="assets/images/avatar/03.jpg" alt="avatar"></li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                            src="assets/images/avatar/04.jpg" alt="avatar"></li>
                                </ul>
                                <!-- Content -->
                                <p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ apprénants nous ont rejoints, c'est maintenant
                                    à votre tour.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-8 m-auto">
                                <!-- Title -->
                                <img src="assets/images/element/03.svg" class="h-40px mb-2" alt="">
                                <h2>Ouvrez votre compte !</h2>
                                <p class="lead mb-4">Ravi de vous voir ! Veuillez vous inscrire avec votre compte.</p>

                                <!-- Form START -->
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div class="mb-4">
                                        <label for="name" class="form-label">Nom complet *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                                            <input type="text" name="name"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                placeholder="Nom complet" id="name">
                                        </div>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="email" class="form-label">E-mail | Pseudo | Téléphone *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                                            <input type="email" name="email"
                                                class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail"
                                                id="email">
                                        </div>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Mot de passe *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                                            <input type="password" name="password"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                placeholder="*********" id="inputPassword5">
                                        </div>
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="mb-4">
                                        <label for="password_confirmation" class="form-label">Confirm Password *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                                            <input type="password" name="password_confirmation"
                                                class="form-control border-0 bg-light rounded-end ps-1"
                                                placeholder="*********" id="password_confirmation">
                                        </div>
                                        @error('password_confirmation')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Check box -->
                                    <div class="mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-1">
                                            <label class="form-check-label" for="checkbox-1">By signing up, you agree to
                                                the<a href="#"> terms of service</a></label>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="submit">Inscription</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->

                                <!-- Social buttons -->
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
                                                class="fab fa-fw fa-google text-white me-2"></i>Inscription avec google</a>
                                    </div>
                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="#" class="btn bg-facebook mb-0"><i
                                                class="fab fa-fw fa-facebook-f me-2"></i>Inscription avec facebook</a>
                                    </div>
                                </div>

                                <!-- Sign up link -->
                                <div class="mt-4 text-center">
                                    <span>Avez-vous déjà un compte x?<a href="{{ route('login') }}">Connexion</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
