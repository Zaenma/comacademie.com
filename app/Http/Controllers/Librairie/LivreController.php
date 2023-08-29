<?php

namespace App\Http\Controllers\Librairie;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Librairie\Livre;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Librairie\Subcategorie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Models\Librairie\Childsubcategorie;
use Illuminate\Support\Facades\Session;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::all();

        // dd($livres);
        return view('backend.admin.livre.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $livre = new Livre();

        return view('backend.admin.livre.add', compact('livre'));
    }

    public function getByCategory($categorie_id)
    {
        $subcategories = Subcategorie::where('categorie_id', $categorie_id)->get();
        return response()->json($subcategories);
    }

    public function getBysubcategory($subcategorie_id)
    {
        $subcategories = Childsubcategorie::where('subcategorie_id', $subcategorie_id)->get();
        return response()->json($subcategories);
    }


    /**
     * Une fonction qui permet de valider le formulaire d'ajout d'un livre 
     * et l'ajouter dans la base de données 
     *
     * @param Request $request
     * @param Livre $livre
     * @return void
     */
    private function valideLivre(Request $request, Livre $livre)
    {
        $livreValide = $request->validate([
            'livre_categorie_id' => 'required|integer',
            'livre_subcategorie_id' => 'integer',
            'livre_childsubcategorie_id' => 'integer',
            'livre_page_garde' => 'required_if:isNew,true|mimes:png,jpg,jpeg',
            'livre_pdf' => 'required_if:isNew,true|mimes:pdf',
            'livre_titre' => 'required|string',
            'livre_langue' => 'string',
            'livre_description' => 'required|string',
        ]);


        $livre_nom = hexdec(uniqid());

        if ($request->file('livre_page_garde')) {
            $livre_page_garde = $request->file('livre_page_garde');



            $path = 'assets/images/page_garde/';

            $livre_page_garde_name = $livre_nom . '.' . $livre_page_garde->getClientOriginalExtension();

            $livre_page_garde->move(public_path($path), $livre_page_garde_name);

            $livre->livre_page_garde = $path . $livre_page_garde_name;
        }

        if ($request->file('livre_pdf')) {

            $livre_pdf = $request->file('livre_pdf');

            $livre_pdf_nom = $livre_nom . '.' . $livre_pdf->getClientOriginalExtension();

            if ($livre_pdf->getSize() > 5000000) {

                Session::flash('message', 'On a pas pu publié le livre. Veillez contacter l\'administrateur pour plus d\'autorisations');
            } else {
                $path = 'assets/pdf/';
                $livre_pdf->move(public_path($path), $livre_pdf_nom);
            }

            $livre->livre_pdf = $path . $livre_pdf_nom;
        }

        $livre->livre_categorie_id = $livreValide['livre_categorie_id'];
        $livre->livre_subcategorie_id = $livreValide['livre_subcategorie_id'] ?? null;
        $livre->livre_childsubcategorie_id = $livreValide['livre_childsubcategorie_id'] ?? null;
        $livre->livre_titre = $livreValide['livre_titre'];
        $livre->livre_langue = $livreValide['livre_langue'];
        $livre->livre_description = $livreValide['livre_description'];


        $livre->save();

        return redirect()->route('livres.index');
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
    public function show(Livre $livre)
    {

        // Hash::check($value, $hashedValue);
        return view('frontend.livre.show', compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livre $livre)
    {
        return view('backend.admin.livre.edit', compact('livre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livre $livre)
    {
        return $this->valideLivre($request, $livre);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



    /**
     * ------------------------------------------------------------------------
     */

    /**
     * La fonction qui permet de télécharger un document 
     *
     * @param [type] $livre
     * @return void
     */
    public function telecharger($livre)
    {
        // Vérifiez ici l'authentification de l'utilisateur (le middleware 'auth' s'en chargera généralement)
        // Si l'utilisateur n'est pas connecté, il ne pourra pas atteindre cette méthode.

        // Récupérez le livre depuis la base de données en utilisant l'ID
        $livre = Livre::findOrFail($livre);

        // Définir le chemin complet du fichier PDF
        // $cheminFichier = public_path($livre->livre_pdf);

        $chemin = str_replace('\\', '/', public_path($livre->livre_pdf));

        // Vérifier si le fichier existe
        if (!File::exists($chemin)) {
            return redirect()->route('comacademie.index'); // Gérer le cas où le fichier n'existe pas
        }

        $livre->livre_telecharegement = $livre->livre_telecharegement + 1;

        $livre->save();


        // Télécharger le fichier PDF avec le nom souhaité
        return Response::download($chemin, 'comacademie-' . $livre->livre_titre . '.pdf');
    }
}
