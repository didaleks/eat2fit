<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Traits\ControllerValidateMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class DietController extends \LaravelAdmin\Controllers\BaseAdminController
{
    use ControllerValidateMethods;

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

    public function edit($id = null)
    {
        return view()->first(["admin.{$this->name}.edit", "admin::{$this->name}.edit", 'admin::base.edit'], [
            'name' => $this->name,
            'action' => $this->action,
            'model' => $this->model::findOrFail($id),
            'categories' => Category::all()
        ]);
    }

}
