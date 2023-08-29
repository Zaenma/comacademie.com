<?php

namespace App\Helpers;

use App\Models\Librairie\Categorie;
use App\Models\Librairie\Childsubcategorie;
use App\Models\Librairie\Subcategorie;

class Helpers
{
    /**
     * Récupérer tous les champs d'un model
     *
     * @return void
     */
    public static function categories()
    {
        return Categorie::all();
    }

    public static function categorie_nom(int $id)
    {
        return Categorie::find($id);
    }


    /**
     * Récupérer tous les champs d'un model
     *
     * @return void
     */
    public static function dataModel(string $model)
    {
        return $model::all();
    }

    public static function subcategories($categorie_id)
    {
        return Subcategorie::where('categorie_id', $categorie_id)->get();
    }

    public static function childsubcategories($subcategorie_id)
    {
        return Childsubcategorie::where('subcategorie_id', $subcategorie_id)->get();
    }
}
