<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class DietController extends \LaravelAdmin\Controllers\BaseAdminController
{
    public function update(Request $request, $id)
    {
        $rules = $this->model::find($id)->validatorRules($request);
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        $model = $this->model::findOrFail($id)->fill($request->all());
        $model->days_count = intval($request->days_count);
        $model->save();
        return redirect($this->redirectTo);
    }

}
