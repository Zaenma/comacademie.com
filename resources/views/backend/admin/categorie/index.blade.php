@extends('layouts.admin.layouts')


@section('content')
    <style>
        /* The Modal (background) */
        .modal {
            /* display: none; */
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            /* z-index: 1; */
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            /* overflow: auto; */
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */

        }

        /* Modal Content */
        .modal-content {
            /* background-color: #fefefe; */
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            transition: transform 0.3s ease-out;
        }

        /* Animation d'avertissement */
        .animate-warning {
            animation: shake 0.5s;
            /* Durée et nom de l'animation */
        }

        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateX(-5px);
            }

            100% {
                transform: translateX(0);
            }
        }
    </style>
    <!-- Page main content START -->
    <div class="page-content-wrapper">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Total des livres <span
                        class="badge bg-orange bg-opacity-10 text-orange">{{ $categories->total() }}</span></h1>
                <a href="{{ route('categorie.create') }}" class="btn btn-sm btn-primary mb-0">Publier un livre</a>
            </div>
        </div>

        <!-- Card START -->
        <div class="bg-transparent">

            <!-- Card header START -->
            <div class="mb-2">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">

                    <!-- Search bar -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control bg-body" type="search" placeholder="Search" aria-label="Search">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>

                    <!-- Select option -->
                    <div class="col-md-3">
                        <!-- Short by filter -->
                        <form>
                            <select class="form-select js-choice border-0 z-index-9" aria-label=".form-select-sm">
                                <option value="">Sort by</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Accepted</option>
                                <option>Rejected</option>
                            </select>
                        </form>
                    </div>
                </div>
                <!-- Search and select END -->
            </div>
            <!-- Card header END -->


            <!-- Card body START -->
            <div class="card-body">
                <!-- Course table START -->
                <div class="table-responsive border-0 rounded-3">
                    <!-- Table START -->
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Titre du livre</th>
                                <th scope="col" class="border-0">Instructor</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>

                            @foreach ($categories as $categorie)
                                <tr>

                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">

                                            <!-- Title -->
                                            <h6 class="table-responsive-title mb-0 ms-2">
                                                <a href="#" class="stretched-link">{{ $categorie->categorie_nom }}</a>
                                            </h6>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="{{ route('show.categorie', $categorie->id) }}"
                                            class="btn btn-sm btn-success me-1 mb-1 mb-md-0">Edit</a>

                                        <button class="btn btn-sm btn-danger mb-0 btn-delete" id="myBtn"
                                            data-id="{{ $categorie->id }}">Delete</button>
                                    </td>
                                </tr>

                                @include('backend.admin.categorie.delete')
                            @endforeach
                            <!-- Table row -->

                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                </div>
                <!-- Course table END -->
            </div>
            <!-- Card body END -->

            {{ $categories->links('pagination::bootstrap-5') }}


        </div>
        <!-- Card END -->
    </div>
@endsection



@section('js')
    <script>
        // Sélectionnez tous les boutons avec la classe "btn-delete"


        // var btnDeleteList = document.querySelectorAll('.btn-delete');

        // btnDeleteList.forEach(function(btn) {
        //     var dataId = btn.dataset.id;

        //     btn.addEventListener('click', function() {
        //         // Afficher la boîte modale
        //         var myModal = document.getElementById('modal-' + dataId);
        //         myModal.show();

        //         // Gérer l'événement de clic du bouton de suppression dans la modale
        //         document.getElementById('confirmDelete').addEventListener('click', function() {
        //             // Exécutez ici l'action de suppression en fonction de "dataId"
        //             console.log('Suppression de l\'élément avec data-id : ' + dataId);

        //             // Fermer la boîte modale après avoir terminé
        //             myModal.hide();
        //         });
        //     });
        // });


        // const modal = document.getElementsByClassName('boite-modal')

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        var btnDeleteList = document.querySelectorAll('.btn-delete');

        btnDeleteList.forEach(element => {
            element.addEventListener('click', function() {

                var dataId = element.dataset.id;
                var modal = document.getElementById('modal-' + dataId);

                modal.style.display = "block";
                modal.classList.add('animate-warning');

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                    modal.classList.remove('animate-warning');
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        modal.classList.remove('animate-warning');
                    }
                }

                console.log(modal);
            });
        });






        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            const id = this.dataset.id;

            // Get the modal
            var modal = document.getElementById("modal-" + id);

            console.log(modal);

            modal.style.display = "block";

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>
@endsection
