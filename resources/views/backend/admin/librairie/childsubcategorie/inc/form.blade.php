@php
    use App\Helpers\Helpers;
    
@endphp



<!-- Form START -->
<div class="row g-3">
    <h5 class="mb-0">Personal information</h5>



    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Choisir la catégorie à associer<span class="text-danger"> *</span></h6>
            </div>
            <div class="col-lg-8">
                <select name="categorie_id" id="categorySelect"
                    onchange="getSubcategories(this, '/admin/childsubcategories/', 'subcategorySelect')"
                    class="form-select js-choice z-index-9 rounded-3 border-0 bg-light" aria-label=".form-select-sm"
                    required>

                    @if ($childsubcategorie->id != null)
                        <option selected value="{{ $childsubcategorie->categorie_id }}">
                            {{ App\Models\Librairie\Categorie::find($childsubcategorie->categorie_id)->categorie_nom }}
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



    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Choisir la catégorie à associer<span class="text-danger"> *</span></h6>
            </div>


            <div class="col-lg-8">
                <select name="subcategorie_id" id="subcategorySelect"
                    onchange="getSubcategories(this, '/admin/childsubcategories/', 'subcategorySelect')"
                    class="form-select js-choic z-index-9 rounded-3 border-0 bg-light" aria-label=".form-select-sm"
                    required>

                </select>
                @error('subcategorie_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>



    <!-- Last name -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Titre du childsubcategorie <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <input type="text" name="childsubcategorie_nom"
                    class="form-control @error('childsubcategorie_nom') is-invalid @enderror" id="childsubcategorie_nom"
                    value="{{ old('childsubcategorie_nom', $childsubcategorie->childsubcategorie_nom) }}">

                @error('childsubcategorie_nom')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>


    <!-- Home address -->
    <div class="col-12">
        <div class="row g-xl-0">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Description du childsubcategorie <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <textarea class="form-control" name="childsubcategorie_description" rows="3" placeholder="">{{ old('childsubcategorie_description', $childsubcategorie->childsubcategorie_description) }}</textarea>

                @error('childsubcategorie_description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- City -->
    <div class="col-12">
        <div class="row g-xl-0 align-items-center">
            <div class="col-lg-4">
                <h6 class="mb-lg-0">Status de la childsubcategorie <span class="text-danger">*</span></h6>
            </div>
            <div class="col-lg-8">
                <select name="childsubcategorie_status"
                    class="form-select js-choice z-index-9 rounded-3 border-0 bg-light" aria-label=".form-select-sm">
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
