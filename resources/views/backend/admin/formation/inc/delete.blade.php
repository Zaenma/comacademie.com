<!-- The Modal -->
<div id="modal-{{ $formation->id }}" class="modal">

    <!-- Modal content -->
    <div class="modal-content d-flex justify-content-between">

        <div class="">
            <h1 class="text-danger">Attention</h1>
        </div>

        <hr>

        <div class="text-center m-auto">
            <p style="font-size: 25px" class="text-danger">Voulez-vous vraiment supprimer la formation intitulée </p>
            <h1>{{ $formation->titre_formation }} ?</h1>

        </div>

        <hr>

        <div class="d-flex justify-content-between">

            <button class="close btn btn-secondary text-primary">Anuller</button>

            <form action="{{ route('formation.destroy', $formation->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-white">Supprimer la formation</button>
            </form>
        </div>

    </div>

</div>
