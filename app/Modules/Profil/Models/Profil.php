<?php

namespace App\Modules\Profil\Models;

use Database\Factories\ProfilFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profil extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return ProfilFactory::new();
    }
}
