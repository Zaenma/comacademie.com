 @php
     use App\Helpers\Helpers;
     
     // dd(Helpers::subcategories(4));
     
 @endphp



 <!-- Form START -->
 <div class="row g-3">
     <h5 class="mb-0">Personal information</h5>

     <!-- City -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Catégorie du livre <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <select name="livre_categorie_id"
                     class="form-select js-choice z-index-9 rounded-3 border-0 bg-light @error('livre_categorie_id') is-invalid @enderror"
                     aria-label=".form-select-sm"
                     onchange="getSubcategories(this, '/admin/livre/categorie/', 'subcategorySelect', 'subcategorie_nom')">


                     @if ($livre->id)
                         <option value="{{ App\Models\Librairie\Categorie::find($livre->livre_categorie_id)->id }}"
                             selected>
                             {{ App\Models\Librairie\Categorie::find($livre->livre_categorie_id)->categorie_nom }}
                         </option>
                         {{-- <option value="{{ Helpers::categorie_nom($livre->id)->id }}" selected>
                             {{ Helpers::categorie_nom($livre->id)->categorie_nom }}
                         </option> --}}
                     @else
                         <option selected>Choisir la catégorie du livre</option>
                     @endif

                     @foreach (Helpers::categories() as $categorie)
                         <option value="{{ $categorie->id }}">{{ $categorie->categorie_nom }}</option>
                     @endforeach

                 </select>
                 @error('livre_categorie_id')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <!-- State -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Sous catégorie</h6>
             </div>
             <div class="col-lg-8">
                 <select name="livre_subcategorie_id" id="subcategorySelect"
                     onchange="getSubcategories(this, '/admin/livre/subcategorie/', 'childsubcategorySelect', '.childsubcategorie_nom')"
                     class="form-select js-choic z-index-9 rounded-3 border-0 bg-light @error('livre_subcategorie_id') is-invalid @enderror"
                     aria-label=".form-select-sm">


                     @if ($livre->id && $livre->livre_subcategorie_id != null)
                         <option
                             value="{{ App\Models\Librairie\Subcategorie::find($livre->livre_subcategorie_id)->id }}"
                             selected>
                             {{ App\Models\Librairie\Subcategorie::find($livre->livre_subcategorie_id)->nom }}
                         </option>
                     @endif

                 </select>
                 @error('livre_subcategorie_id')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <!-- Country -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Domaine</h6>
             </div>
             <div class="col-lg-8">
                 <select class="form-select z-index-9 rounded-3 border-0 bg-light" id="childsubcategorySelect"
                     name="livre_childsubcategorie_id" aria-label=".form-select-sm">

                     @if ($livre->id && $livre->livre_childsubcategorie_id != null)
                         <option
                             value="{{ App\Models\Librairie\Childsubcategorie::find($livre->livre_childsubcategorie_id)->id }}"
                             selected>
                             {{ App\Models\Librairie\Childsubcategorie::find($livre->livre_childsubcategorie_id)->nom }}
                         </option>
                     @endif
                 </select>

                 @error('livre_childsubcategorie_id')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <!-- First name -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Page de garde <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <input type="file" value="{{ old('livre_page_garde', $livre->livre_page_garde) }}"
                     name="livre_page_garde" class="form-control @error('livre_page_garde') is-invalid @enderror"
                     id="livre_page_garde" required>

                 @error('livre_page_garde')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Livre en pdf <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <input type="file" value="{{ old('livre_pdf', $livre->livre_pdf) }}" name="livre_pdf"
                     class="form-control @error('livre_pdf') is-invalid @enderror" id="livre_pdf" required>

                 @error('livre_pdf')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>


     <!-- Last name -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Titre du livre <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <input type="text" name="livre_titre"
                     class="form-control @error('livre_titre') is-invalid @enderror" id="livre_titre"
                     value="{{ old('livre_titre', $livre->livre_titre) }}">
                 @error('livre_titre')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <!-- Last name -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Auteur du livre <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <input type="text" name="livre_auteur"
                     class="form-control @error('livre_auteur') is-invalid @enderror" id="livre_auteur"
                     value="{{ old('livre_auteur', $livre->livre_auteur) }}">
                 @error('livre_auteur')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <!-- Last name -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Langue du livre <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <input type="text" name="livre_langue"
                     class="form-control @error('livre_langue') is-invalid @enderror" id="livre_langue"
                     value="{{ old('livre_langue', $livre->livre_langue) }}">
                 @error('livre_langue')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>


     <!-- Home address -->
     <div class="col-12">
         <div class="row g-xl-0">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Description du livre <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <textarea class="form-control" name="livre_description" rows="3" placeholder="">{{ old('livre_description', $livre->livre_description) }}</textarea>
                 @error('livre_description')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>



 </div>
 <!-- Form END -->
