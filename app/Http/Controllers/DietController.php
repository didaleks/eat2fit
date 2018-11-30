<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\Page;
use Illuminate\Support\Facades\Request;

class DietController extends Controller
{
    public function index(Request $request)
    {
        $models = Diet::published()->get();
        if (!$models)
            abort(404, 'Страница не найдена');

        return view('page.behaviors.catalog', [
            'models' => $models,
            'model' => Page::where('slug', 'catalog')->first()
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
