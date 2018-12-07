<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Traits\ControllerValidateMethods;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    use ControllerValidateMethods;

    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Order();
        $validator = Validator::make($data, $model->validatorRules($data), $model->validatorMessages($data));
        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->all() as $error)
                $errors[$error] = $error;

            $info =  implode('</br>', $errors);
            dd($info);
            return response($info)->setStatusCode(400);
        } else {
            $cartController = new CartController();
            $model->fill($data);
            $model->cart = $cartController->getJsonData();
            if ($model->save())
                return response('Спасибо за заказ. Мы с Вами скоро свяжемся.')->setStatusCode(200);

            return response('Something went wrong, try again later.');
        }
    }

}
