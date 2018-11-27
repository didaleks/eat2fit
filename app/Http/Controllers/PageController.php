<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    public function show(Request $request, $url = '/')
    {
        if ($url != '/')
            $url = '/' . $url;
        $model = Page::where(['published' => 1, 'url' => $url])->first();


        if (!$model)
            abort(404, 'Страница не найдена');

        $params = [
            'model' => $model,
            //'products_liked' => Product::liked()
        ];
        $view = (isset($model->behavior) && !empty($model->behavior)) ? "page.behaviors.".$model->behavior :  "page.behaviors.default";
        return view($view, $params);
    }

}
