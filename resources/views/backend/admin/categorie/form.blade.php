 <!-- Form START -->
 <div class="row g-3">
     <h5 class="mb-0">Personal information</h5>


     <!-- Last name -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Titre du categorie <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <input type="text" name="categorie_nom"
                     class="form-control @error('categorie_nom') is-invalid @enderror" id="categorie_nom"
                     value="{{ old('categorie_nom', $categorie->categorie_nom) }}">

                 @error('categorie_nom')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>


     <!-- Home address -->
     <div class="col-12">
         <div class="row g-xl-0">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Description du categorie <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <textarea class="form-control" name="categorie_description" rows="3" placeholder="">{{ old('categorie_description', $categorie->categorie_description) }}</textarea>

                 @error('categorie_description')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <!-- City -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Status de la categorie <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <select name="categorie_status" class="form-select js-choice z-index-9 rounded-3 border-0 bg-light"
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
