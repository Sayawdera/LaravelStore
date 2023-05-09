<?php

namespace App\Http\Controllers\Sublime;

use App\Http\Controllers\Controller;
use App\Models\Sublime\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $porduct = Products::orderBy('created_at')->take(8)->simplePaginate(8);

        return view('sublime.index', ['products' => $porduct]);
    }
}
