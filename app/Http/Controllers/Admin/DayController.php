<?php

namespace App\Http\Controllers\Admin;

use App\Models\Diet;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class DayController extends \LaravelAdmin\Controllers\BaseAdminController
{
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
        $model = new $this->model;
        $model->diet_id = $request->get('diet_id');
        $model->number = $request->get('number');
        $model->save();
        return redirect(route('day.edit', $model->id));
    }

}
