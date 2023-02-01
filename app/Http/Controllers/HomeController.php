<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends homepageController
{//another commit
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

}
