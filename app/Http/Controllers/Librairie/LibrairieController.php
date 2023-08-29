<?php

namespace App\Http\Controllers\Librairie;

use App\Http\Controllers\Controller;
use App\Models\Librairie\Categorie;
use App\Models\Librairie\Livre;
use Illuminate\Http\Request;

class LibrairieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::all();
        return view('backend.admin.livre.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $livres = new Livre();
        return view('backend.admin.livre.add', compact('livres'));
    }

    private function valideLivre(Request $request, Livre $livre)
    {
        $valideLivre = $request->validate([]);
        dd($request, $livre, $valideLivre);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $livre = new Livre();
        return $this->valideLivre($request, $livre);
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
