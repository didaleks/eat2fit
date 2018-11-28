<?php

namespace App\Http\Controllers;

use App\Traits\ControllerValidateMethods;
use Illuminate\Support\Facades\Request;

class FeedbackController extends Controller
{
    use ControllerValidateMethods;

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
