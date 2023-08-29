 <!-- Form START -->
 <div class="row g-3">
     <h5 class="mb-0">Personal information</h5>



     <!-- Last name -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Titre du formation <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <input type="text" name="titre_formation"
                     class="form-control @error('titre_formation') is-invalid @enderror" id="titre_formation"
                     value="{{ old('titre_formation', $formation->titre_formation) }}">

                 @error('titre_formation')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">La série associé à la formation <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <select name="serie_associe_formation"
                     class="form-select js-choice z-index-9 rounded-3 border-0 bg-light" aria-label=".form-select-sm"
                     required>
                     <option value="{{ old('serie_associe_formation', $formation->serie_associe_formation) }}" selected>
                         {{ old('serie_associe_formation', $formation->serie_associe_formation ?? 'Sélectionner la série à associer') }}
                     </option>
                     <option value="Série Scientifique (S)">Série Scientifique (S) </option>
                     <option value="Série Littéraire (L)">Série Littéraire (L) </option>
                     <option value="Série Sciences Économiques et Sociales (SE)">Série Sciences Économiques et Sociales
                         (SE) </option>
                     <option value="Série Technologique (STT)">Série Technologique (STT) </option>

                 </select>
                 @error('serie_associe_formation')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <!-- Home address -->
     <div class="col-12">
         <div class="row g-xl-0">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Description du formation <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <textarea class="form-control" name="description_formation" rows="3" placeholder="">{{ old('description_formation', $formation->description_formation) }}</textarea>

                 @error('description_formation')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Illustration de la formation <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <input type="file" value="{{ old('image_formation', $formation->image_formation) }}"
                     name="image_formation" class="form-control @error('image_formation') is-invalid @enderror"
                     id="image_formation" required>

                 @error('image_formation')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

     <!-- City -->
     <div class="col-12">
         <div class="row g-xl-0 align-items-center">
             <div class="col-lg-4">
                 <h6 class="mb-lg-0">Status de la formation <span class="text-danger">*</span></h6>
             </div>
             <div class="col-lg-8">
                 <select name="statut_formation" class="form-select js-choice z-index-9 rounded-3 border-0 bg-light"
                     aria-label=".form-select-sm">
                     <option value="{{ old('statut_formation', $formation->statut_formation ?? 'Active') }}" selected>
                         {{ old('statut_formation', $formation->statut_formation ?? 'Active') }}
                     </option>
                     <option value="Active">Active </option>
                     <option value="Inactive">Inactive </option>

                 </select>
                 @error('statut_formation')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror
             </div>
         </div>
     </div>

 </div>
 <!-- Form END -->
