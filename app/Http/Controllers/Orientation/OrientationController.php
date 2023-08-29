<?php

namespace App\Http\Controllers\Orientation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Orientation\Formation;

class OrientationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return view('frontend.orientation.index', compact('formations'));
    }


    public function formationParSerie($serie)
    {
        switch ($serie) {
            case 'serie-scientifique-s':
                $formations = Formation::where('serie_associe_formation', 'Série Scientifique (S)')->get();
                break;

            case 'serie-economique-et-sociale-es':
                $formations = Formation::where('serie_associe_formation', 'Série Sciences Économiques et Sociales (SE)')->get();
                break;

            case 'serie-technologique-stt':
                $formations = Formation::where('serie_associe_formation', 'Série Technologique (STT)')->get();
                break;

            case 'serie-litteraire-l':
                $formations = Formation::where('serie_associe_formation', 'Série Littéraire (L)')->get();
                break;
            default:
                $formations = Formation::all();
                break;
        }
        return view('frontend.orientation.serie', compact('formations'));
    }
    public function bepc()
    {
        return view('frontend.orientation.bepc');
    }

    public function bac()
    {
        return view('frontend.orientation.bac');
    }

    public function licence()
    {
        return view('frontend.orientation.licence');
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
    public function store(Request $request)
    {
        //
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
