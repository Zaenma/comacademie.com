@php
    use App\Helpers\Helpers;
    
@endphp



<!-- Form START -->
<div class="row g-3">
    <h5 class="mb-0">Personal information</h5>

    <!-- City -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Choisir la catégorie à associer<span class="text-danger"> *</span></h6>
            </div>
            <div class="col-lg-8">
                <select name="categorie_id" id="categorie_id"
                    class="form-select js-choice z-index-9 rounded-3 border-0 bg-light" aria-label=".form-select-sm"
                    required>

                    @if ($subcategorie->id != null)
                        <option selected value="{{ $subcategorie->categorie_id }}">
                            {{ App\Models\Librairie\Categorie::find($subcategorie->categorie_id)->categorie_nom }}
                        </option>
                    @else
                        <option selected>Choisir une catégorie</option>
                    @endif

                    @foreach (Helpers::categories() as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->categorie_nom }}</option>
                    @endforeach

                </select>
                @error('categorie_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <!-- Last name -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Titre du subcategorie <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" name="subcategorie_nom"
                    class="form-control @error('subcategorie_nom') is-invalid @enderror" id="subcategorie_nom"
                    value="{{ old('subcategorie_nom', $subcategorie->subcategorie_nom) }}">

                @error('subcategorie_nom')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>


    <!-- Home address -->
    <div class="col-12">
        <div class="row g-xl-0">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Description du subcategorie <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <textarea class="form-control" name="subcategorie_description" rows="3" placeholder="">{{ old('subcategorie_description', $subcategorie->subcategorie_description) }}</textarea>

                @error('subcategorie_description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- City -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Status de la subcategorie <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <select name="subcategorie_status" class="form-select js-choice z-index-9 rounded-3 border-0 bg-light"
                    aria-label=".form-select-sm">
                    <option value="Active" selected>Active </option>
                    <option value="Inactive">Inactive </option>

                </select>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

</div>
<!-- Form END -->
