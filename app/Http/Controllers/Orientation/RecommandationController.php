<?php

namespace App\Http\Controllers\Orientation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Orientation\Formation;
use App\Models\Orientation\Recommandation;

class RecommandationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Formation $formation)
    {
        $recommandation = new Recommandation();

        $recommandation->formation_id = $formation->id;

        $recommandation->user_id = Auth::user()->id;

        $recommandation->contenu = $request->input('recommandation');

        $recommandation->save();


        return redirect()->back()->with('success', 'Votre recommandation est en examination, elle sera publiée dans un instant.');
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
