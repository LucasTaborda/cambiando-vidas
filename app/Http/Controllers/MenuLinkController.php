<?php

namespace App\Http\Controllers;

use App\Models\MenuLink;
use Illuminate\Http\Request;

class MenuLinkController extends Controller
{
    public function index()
    {
        $menuLinks = MenuLink::all();
        return view('menu-links.index', compact('menuLinks'));
    }
}
