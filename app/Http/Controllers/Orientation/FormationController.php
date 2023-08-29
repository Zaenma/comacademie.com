<?php

namespace App\Http\Controllers\Orientation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Orientation\Formation;
use Intervention\Image\Facades\Image;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return view('backend.admin.formation.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formation = new Formation();
        return view('backend.admin.formation.add', compact('formation'));
    }

    public function valideFormation(Request $request, $formation)
    {
        $formationValide = $request->validate([
            'titre_formation' => 'string|required',
            'statut_formation' => 'required',
            'serie_associe_formation' => 'string|required',
            'image_formation' => 'required_if:isNew,true|mimes:png,jpg,svg,jpeg,gif',
            'description_formation' => 'required',

        ]);


        $formation_image_nom = hexdec(uniqid());

        $path = 'assets/images/formation/';

        if (File::exists($path . $formation->image_formation)) {
            File::delete($path . $formation->image_formation);
        }

        if ($request->file('image_formation')) {
            $image_formation = $request->file('image_formation');

            $image_formation_name = $formation_image_nom . '.' . $image_formation->getClientOriginalExtension();

            Image::make($image_formation)->resize(600, 450)->save($path . $image_formation_name);

            $formation->image_formation = $path . $image_formation_name;
        }

        $formation->titre_formation = $formationValide['titre_formation'];
        $formation->statut_formation = $formationValide['statut_formation'];
        $formation->serie_associe_formation = $formationValide['serie_associe_formation'];
        $formation->description_formation = $formationValide['description_formation'];

        $formation->save();
        return redirect()->back()->with('success', "La formation à été ajouté avec succès");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formation = new Formation();
        return $this->valideFormation($request, $formation);
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        $formationsBySerie = Formation::where('statut_formation', 'active')->get();

        $formations = Formation::with('recommandations.user')->find($formation);


        return view('frontend.orientation.show', compact('formation', 'formations', 'formationsBySerie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formation $formation)
    {
        return view('backend.admin.formation.edit', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formation $formation)
    {
        return $this->valideFormation($request, $formation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {

        if (File::exists($formation->image_formation)) {
            File::delete($formation->image_formation);
        }

        $formation->delete();

        return redirect()->back()->with('success', "La formation à été supprimé avec succès.");
    }
}
