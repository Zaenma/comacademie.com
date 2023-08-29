<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2023 10:26:25 GMT -->

<head>
    <title>{{ $titre ?? 'Comacadmie - guide ' }}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Halidi Amirddine Zaenma">
    <meta name="description"
        content="{{ $metaDescription ?? 'Comacademie - La plateforme éducative complète dédiée à l\'excellence de l\'éducation aux Comores. Découvrez notre bibliothèque, participez au forum, accédez aux cours et exercices, et testez vos connaissances avec nos Quiz interactifs. Rejoignez-nous pour une expérience d\'apprentissage enrichissante et collaborative.' }}">


    <meta name="Reply-to" content="">
    <meta name="keywords" content="" />

    <!-- Open Graph tags -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $ogUrl ?? 'https://comacademie.com/' }}" />
    <meta property="og:site_name" content="{{ $ogSiteName ?? 'Comacadmie - guide pédagogique' }}" />
    {{-- <meta property="og:image" content="{{ asset('storage/' . $ogImage) }}" /> --}}
    {{-- <meta property="og:image:secure_url" content="{{ asset('storage/' . $ogImageSecureURL) }}" /> --}}
    {{-- <meta property="og:image:alt" content="{{ $ogImageAlt }}" /> --}}
    <meta property="og:locale" content="fr_FR" />
    <meta property="fb:app_id" content="2037456957" />
    <meta property="article:publisher" content="https://www.facebook.com/zaaenma/" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="{{ config('app.url') }}" />

    {{-- <meta property="twitter:url" content="{{ $twitterUrl }}" />
    <meta property="twitter:title" content="{{ $twitterTitle }}" />
    <meta property="twitter:description" content="{{ $twitterDescription }}" />
    <meta property="twitter:creator" content="@ZaaEnMa" />
    <meta property="twitter:image" content="{{ asset('storage/' . $twitterImage) }}" />
    <meta property="twitter:image:src" content="{{ asset('storage/' . $twitterImageSrc) }}" />
    <meta property="twitter:player" content="{{ asset('storage/' . $twitterPlayer) }}" />
    <meta property="twitter:player:stream" content="{{ asset('storage/' . $twitterPlayerStream) }}" /> --}}

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/comlogo.png') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7N7LGGGWT1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7N7LGGGWT1');
    </script>

</head>

<body>

    @include('frontend.inc.header')


    @yield('content')


    @include('frontend.inc.footer')

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>

    <!-- Template Functions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>


    @yield('js')

</body>

</html>
