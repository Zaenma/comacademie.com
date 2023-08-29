<?php

namespace App\Http\Controllers\Librairie;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Librairie\Livre;
use App\Models\Librairie\Categorie;
use App\Http\Controllers\Controller;
use App\Models\Librairie\Subcategorie;
use App\Models\Librairie\Childsubcategorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::paginate(10);

        return view('backend.admin.categorie.index', compact('categories'));
    }


    public function categorie()
    {
        $categories = Categorie::all();

        return view('frontend.librairie.categorie', compact('categories'));
    }


    public function insertCategorie(Request $request, Categorie $categorie)
    {
        $categorieValide = $request->validate([
            'categorie_nom' => 'required|string',
            'categorie_description' => 'required|string',
            'categorie_status' => 'required|string'
        ]);


        $categorie->categorie_nom = $categorieValide['categorie_nom'];
        $categorie->categorie_slug = bcrypt(Str::slug($categorieValide['categorie_nom'] . $categorieValide['categorie_description']));
        $categorie->categorie_description = $categorieValide['categorie_description'];
        $categorie->categorie_status = $categorieValide['categorie_status'];

        $categorie->save();

        $notification = [
            'alert_type' => 'success',
            'message' => 'La catégorie a été ajouté avec succès !'
        ];

        return redirect()->route('livres.categorie')->with($notification);


        dd($request, $categorie, $categorieValide);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie = new Categorie();

        return view('backend.admin.categorie.add', compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = new Categorie();

        return $this->insertCategorie($request, $categorie);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        // $categorie = Categorie::where();

        return view('backend.admin.categorie.edit', compact('categorie'));
    }

    /**
     * Display the specified resource.
     */
    public function showCategorie($categorie)
    {
        $categorie = Categorie::find($categorie);

        $livres = Livre::where('livre_categorie_id', $categorie->id)->paginate(8);

        $subcategories = Subcategorie::where('categorie_id', $categorie->id)->get();

        // dd($subcategories);


        return view('frontend.livre.show-categorie', compact('categorie', 'subcategories', 'livres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        // $categorie = Categorie::where('categorie_slug', $categorie)->firstOrFail();

        return $this->insertCategorie($request, $categorie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($categorie)
    {
        $cat = Categorie::find($categorie);



        $cat->delete();
        session()->flash('message', 'La catégorie a bien été supprimé.');
        return redirect()->back();
    }
}
