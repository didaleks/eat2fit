<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\Page;
use Illuminate\Support\Facades\Request;

class DietController extends Controller
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
            $url = '/' . $url;
        $model = Page::where(['published' => 1, 'url' => $url])->first();


        if (!$model)
            abort(404, 'Страница не найдена');

        $params = [
            'model' => $model
        ];
        $view = (isset($model->behavior) && !empty($model->behavior)) ? "page.behaviors.".$model->behavior :  "page.behaviors.default";
        return view($view, $params);
    }

}
