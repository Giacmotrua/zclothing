<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        $bannerTop = Products::withType('top')->inRandomOrder()->first();
        $bannerBottom = Products::withType('bottom')->inRandomOrder()->first();
        $bannerAccessory = Products::withType('accessory')->first();
        $top = Products::withType('top')->inRandomOrder()->take(8)->get();
        $bottom = Products::withType('bottom')->inRandomOrder()->take(4)->get();
        $accessory = Products::withType('accessory')->inRandomOrder()->take(4)->get();
        return view('frontend.home.index', compact('bannerTop', 'bannerBottom', 'bannerAccessory', 'top', 'bottom', 'accessory'));
    }
}
