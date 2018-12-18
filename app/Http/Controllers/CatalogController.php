<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\Page;
use Illuminate\Support\Facades\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $models = Diet::published()->latest()->get();
        $models_vegan = Diet::vegan()->latest()->get();
        $models_protein = Diet::protein()->latest()->get();
        $models_low_cal = Diet::lowCalories()->latest()->get();
        if (!$models)
            abort(404, 'Страница не найдена');

        return view('page.behaviors.catalog', [
            'model' => Page::where('slug', 'catalog')->first(),
            'models' => $models,
            'models_vegan' => $models_vegan,
            'models_protein' => $models_protein,
            'models_low_cal' => $models_low_cal
        ]);
    }

    public function show(Request $request, $url = '/')
    {
        if ($url != '/')
            $url = '/catalog/' . $url;

        $model = Diet::published()->where(['url' => $url])->with('days.eatings.dishes', 'days.eatings.eating_type')->first();
        $weeksCount = $model->weeksCount();
        $catalogPage = Page::where('slug', 'catalog')->first();

        if (!$model or !$catalogPage)
            abort(404, 'Страница не найдена');
        return view('page.behaviors.diet', [
            'model' => $model,
            'weeksCount' => $weeksCount,
            'catalogPage' => $catalogPage
        ]);
    }

}
