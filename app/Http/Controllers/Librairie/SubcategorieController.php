<?php

namespace App\Http\Controllers\Librairie;

use App\Http\Controllers\Controller;
use App\Models\Librairie\Subcategorie;
use Illuminate\Http\Request;

class SubcategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategorie::all();

        return view('backend.admin.librairie.subcategorie.subcategories', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subcategorie = new Subcategorie();
        return view('backend.admin.librairie.subcategorie.add', compact('subcategorie'));
    }

    private function subcategorieSave(Request $request, Subcategorie $subcategorie)
    {
        $subcategorieValide = $request->validate([
            'categorie_id' => 'integer|required',
            'subcategorie_nom' => 'required|string',
            'subcategorie_description' => 'required',
            'subcategorie_status' => 'string'
        ]);

        $subcategorie->categorie_id = $subcategorieValide['categorie_id'];
        $subcategorie->nom = $subcategorieValide['subcategorie_nom'];
        $subcategorie->subcategorie_slug = hash('sha1', $subcategorieValide['subcategorie_nom'] . $subcategorieValide['categorie_id']);
        $subcategorie->subcategorie_description = $subcategorieValide['subcategorie_description'];
        $subcategorie->subcategorie_status = $subcategorieValide['subcategorie_status'];

        $subcategorie->save();


        $notification = [
            'alert-type' => 'info',
            'message' => 'La sous catégorie a été bien ajouté.'
        ];

        return redirect()->back()->with($notification);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subcategorie = new Subcategorie();

        return $this->subcategorieSave($request, $subcategorie);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategorie $subcategorie)
    {
        return view('backend.admin.librairie.subcategorie.edit', compact('subcategorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategorie $subcategorie)
    {
        return $this->subcategorieSave($request, $subcategorie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
