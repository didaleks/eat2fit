<?php

namespace App\Http\Controllers\Admin;

use App\Models\Day;
use App\Models\Diet;
use App\Traits\ControllerValidateMethods;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DayController extends \LaravelAdmin\Controllers\BaseAdminController
{
    use ControllerValidateMethods;

    public function create()
    {
        return view()->first(["admin.{$this->name}.create", "admin::{$this->name}.create", 'admin::base.create'], [
            'name' => $this->name,
            'action' => $this->action,
            'model' => new $this->model,
            'diet' => Diet::findOrFail(Input::get('diet_id')),
            'number' => Input::get('number')
        ]);
    }

    public function edit($id = null)
    {
        $model = $this->model::findOrFail($id);
        return view()->first(["admin.{$this->name}.edit", "admin::{$this->name}.edit", 'admin::base.edit'], [
            'name' => $this->name,
            'action' => $this->action,
            'model' => $model,
            'diet' => $model->diet,
            'number' => $model->number
        ]);
    }

    public function store(Request $request)
    {
        $model = new Day();
        $rules = $model->validatorRules($request);
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            $errors = [];
            foreach ($validator->errors()->all() as $error)
                $errors[$error] = $error;

            $info =  implode('</br>', $errors);

            session()->flash('flash_error', $info);
            return back();
        }

        $model->fill($request->all())->save();
        session()->flash('flash_success', 'День успешно создан!');
        return redirect(route('day.edit', $model->id));
    }


}
