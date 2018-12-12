<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Traits\ControllerValidateMethods;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class FeedbackController extends Controller
{
    use ControllerValidateMethods;

    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Feedback();
        if ($data['type'] == 'question') {
            $model->fill($data);
            if ($model->save())
                return response('Спасибо за Ваш вопрос. Мы с Вами скоро свяжемся.')->setStatusCode(200);
        }

        $validator = Validator::make($data, $model->validatorRules($data), $model->validatorMessages($data));
        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->all() as $error)
                $errors[$error] = $error;

            $info =  implode('</br>', $errors);
            return response($info)->setStatusCode(400);
        } else {
            $model->fill($data);
            if ($model->save())
                return response('Спасибо за Вашу обратную связь. Мы с Вами скоро свяжемся.')->setStatusCode(200);

            return response('Something went wrong, try again later.');
        }
    }

}
