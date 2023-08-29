@extends('layouts.admin.layouts')



@section('content')
    <!-- Page main content START -->
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="h3 mb-2 mb-sm-0">Ajouter une catégorie</h1>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row g-5 justify-content-between">
                    <!-- Admission form START -->
                    <div class="col-md-12 mx-auto">
                        <!-- Title -->


                        <form action="{{ route('categorie.insert') }}" method="post" class="needs-validation" novalidate>

                            @csrf

                            @include('backend.admin.categorie.form')



                            <!-- Button -->
                            <div class="col-12 text-sm-end">
                                <button class="btn btn-primary mb-0">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- Admission form END -->
                </div>
            </div>
        </section>


    </div>
    <!-- Page main content END -->
@endsection



@section('css')
@endsection



@section('js')
    <script src="https://cdn.tiny.cloud/1/5lkvnma23tj48r67q2rfxyor06rzv8pv30wt63zdurss4rhl/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            height: '300px',
            skin: 'oxide-dark',
            content_css: 'dark'
        });
    </script>
@endsection
