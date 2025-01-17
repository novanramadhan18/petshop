<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function index()
    {
        return view(view: 'global.home');
    }

    public function consultation()
    {
        return view(view: 'global.consultation');
    }

    public function shop()
    {
        return view(view: 'global.shop');
    }

    public function about()
    {
        return view(view: 'global.about');
    }
    
    public function contact()
    {
        return view(view: 'global.contact');
    }
}
