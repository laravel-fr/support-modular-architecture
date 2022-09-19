<?php

namespace App\Modules\Cart\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\User\Services\UserService;

class CartController extends Controller
{
    public function __construct(
        protected UserService $userService,
    ){}

    public function __invoke(Request $request)
    {
        //
    }
}
