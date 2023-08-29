<?php

namespace App\Models\Orientation;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommandation extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Recommandation.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
