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
        $rules = $model->validatorRules($data);

        if (isset($request->type) && $request->type == 'free_pay') {
            unset($rules['address']);
            unset($rules['shipping_datetime']);
        }

        $validator = Validator::make($data, $rules, $model->validatorMessages($data));
        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->all() as $error)
                $errors[$error] = $error;

            $info =  implode('</br>', $errors);

            return response($info)->setStatusCode(400);
        } else {
            $cartController = new CartController();
            $model->fill($data);
            $model->cart = json_encode($cartController->get());
            if ($model->save())
                return response()->json([
                    'status' => 'true',
                    'cart' => json_encode($model->cart),
                    'order_number' => $model->id
                ]);

            return response('Something went wrong, try again later.');
        }
    }

}
