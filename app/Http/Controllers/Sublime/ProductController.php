<?php

namespace App\Http\Controllers\Sublime;

use App\Http\Controllers\Controller;
use App\Models\Sublime\Category;
use App\Models\Sublime\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($cat, $product_id)
    {
        $item = Products::where('id', $product_id)->first();

        return view('sublime.show', ['item' => $item]);
    }

    public function category(Request $request, $cat_alias)
    {
        $cat = Category::where('alias', $cat_alias)->first();

        $paginate = 4;

        $products = Products::where('category_id', $cat->id)->paginate($paginate);

        if (isset($request->orderBy))
        {
            if ($request->orderBy == 'default')
            {
                $products = Products::where('category_id', $cat->id)->orderBy('price')->paginate($paginate);
            }

            if ($request->orderBy == 'price-low-high')
            {
                $products = Products::where('category_id', $cat->id)->orderBy('price')->paginate($paginate);
            }

            if ($request->orderBy == 'price-high-low')
            {
                $products = Products::where('category_id', $cat->id)->orderBy('price')->paginate($paginate);
            }

            if ($request->orderBy == 'name-a-z')
            {
                $products = Products::where('category_id', $cat->id)->orderBy('price')->paginate($paginate);
            }

            if ($request->orderBy == 'name-z-a')
            {
                $products = Products::where('category_id', $cat->id)->orderBy('price')->paginate($paginate);
            }
        }

        if ($request->ajax())
        {
            return view('sublime.ajax.ajax', ['products' => $products])->render();
        }

        return view('sublime.categories', ['cat' => $cat, 'products' => $products]);
    }
}
