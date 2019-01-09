<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Diet;
use App\Models\Page;
use Illuminate\Support\Facades\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $models = Diet::published()->latest()->with('categories')->get();
        $categories = Category::all();
        if (!$models)
            abort(404, 'Страница не найдена');

        return view('page.behaviors.catalog', [
            'model' => Page::where('slug', 'catalog')->first(),
            'models' => $models,
            'categories' => $categories,
        ]);
    }

    public function show(Request $request, $url = '/')
    {
        if ($url != '/')
            $url = '/catalog/' . $url;

        $model = Diet::published()->where(['url' => $url])->with('days.eatings.dishes', 'days.eatings.eating_type')->first();
        $catalogPage = Page::where('slug', 'catalog')->first();

        if (!$model or !$catalogPage)
            abort(404, 'Страница не найдена');
        return view('page.behaviors.diet', [
            'model' => $model,
            'weeksCount' => $model->weeksCount(),
            'catalogPage' => $catalogPage
        ]);
    }

}
