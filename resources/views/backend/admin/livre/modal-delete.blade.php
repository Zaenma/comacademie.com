<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content d-flex justify-content-between">

        <div class="">
            <h1 class="text-danger">Attention</h1>
        </div>
        <div class="">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <hr>

        <div class="text-center m-auto">
            <h1>Attention</h1>

        </div>

        <hr>

        <div class="d-flex justify-content-between">

            <button class="close btn btn-secondary text-primary">Anuller</button>

            <form action="" method="post">
                @csrf
                <button class="btn btn-danger text-white">Supprimer</button>
            </form>
        </div>

    </div>

</div>
