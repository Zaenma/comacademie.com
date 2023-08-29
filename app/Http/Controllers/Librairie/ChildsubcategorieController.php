<?php

namespace App\Http\Controllers\Librairie;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Librairie\Subcategorie;
use App\Models\Librairie\Childsubcategorie;

class ChildsubcategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.admin.librairie.childsubcategorie.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $childsubcategorie = new Childsubcategorie();
        return view('backend.admin.librairie.childsubcategorie.add', compact('childsubcategorie'));
    }


    public function getByCategory($categorie_id)
    {
        $subcategories = Subcategorie::where('categorie_id', $categorie_id)->get();
        return response()->json($subcategories);
    }



    private function insertChildsSubcategorie(Request $request, Childsubcategorie $childsubcategorie)
    {
        $childsubcategorieValide = $request->validate([
            'categorie_id' => 'required|integer',
            'subcategorie_id' => 'required|integer',
            'childsubcategorie_nom' => 'required|string',
            'childsubcategorie_description' => 'required|string',
            'childsubcategorie_status' => 'required|string'
        ]);


        $childsubcategorie->categorie_id = $childsubcategorieValide['categorie_id'];
        $childsubcategorie->subcategorie_id = $childsubcategorieValide['subcategorie_id'];
        $childsubcategorie->nom = $childsubcategorieValide['childsubcategorie_nom'];
        $childsubcategorie->childsubcategorie_description = $childsubcategorieValide['childsubcategorie_description'];
        $childsubcategorie->childsubcategorie_status = $childsubcategorieValide['childsubcategorie_status'];
        $childsubcategorie->childsubcategorie_slug = bcrypt(Str::slug($childsubcategorieValide['childsubcategorie_nom'] . $childsubcategorieValide['childsubcategorie_description']));

        $childsubcategorie->save();

        return redirect()->back();

        dd($request, $childsubcategorie, $childsubcategorieValide);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $childsubcategorie = new Childsubcategorie();

        return $this->insertChildsSubcategorie($request, $childsubcategorie);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
