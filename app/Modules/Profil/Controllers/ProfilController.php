<?php

namespace App\Modules\Profil\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Profil\Models\Profil;

class ProfilController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Profil::class);
    }

    public function index()
    {
        //
    }

    public function store()
    {
        //
    }
}
