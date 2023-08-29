<?php

namespace App\Models\Orientation;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Formation.php
    public function recommandations()
    {
        return $this->hasMany(Recommandation::class);
    }

    // Recommandation.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
