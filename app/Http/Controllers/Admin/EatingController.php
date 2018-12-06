<?php

namespace App\Http\Controllers\Admin;

use App\Models\Day;
use App\Models\Eating;
use App\Traits\ControllerValidateMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class EatingController extends \LaravelAdmin\Controllers\BaseAdminController
{
    use ControllerValidateMethods;

    public function update(Request $request, $id)
    {
        $model = $this->model::findOrFail($id);
        $model->eating_type_id = $request->eating_type_id;
        $model->day_id = $request->day_id;

        $rules = $this->model::find($id)->validatorRules($request);
        $validator = Validator::make(Input::all(), $rules);

        if (!$this->isValid($validator)){
            return back()->withInput()->withErrors($validator);
        };

        $dishes_sync_data = []; //Массив в который добавляем данные по синхронизации связей
        foreach (explode(',', $request['dishes-select-ids']) as $key => $dish_id) {
            // Полученные из скрытого инпута ids в заданном порядке берем и указываем им параметр sort
            // При синхронизации связи в таблице укажется параметр sort
            $dishes_sync_data[intval($dish_id)] = ['sort' => $key];
        }
        $model->dishes()->sync($dishes_sync_data);
        $model->save();

        return redirect(route('day.edit', $model->day_id));
    }

    public function create()
    {
        $day = Day::findOrFail(Input::get('day_id'));
        return view()->first(["admin.{$this->name}.create", "admin::{$this->name}.create", 'admin::base.create'], [
            'name' => $this->name,
            'action' => $this->action,
            'model' => new $this->model,
            'day' => $day
        ]);
    }

    public function edit($id = null)
    {
        $model = $this->model::findOrFail($id);
        $day = Day::findOrFail($model->day->id);
        return view()->first(["admin.{$this->name}.edit", "admin::{$this->name}.edit", 'admin::base.edit'], [
            'name' => $this->name,
            'action' => $this->action,
            'model' => $model,
            'day' => $day
        ]);
    }

    public function destroy($id)
    {
        $model = $this->model::findOrFail($id);
        $day_id = $model->day_id;
        $model->delete();
        return redirect(route('day.edit', $day_id));
    }

    public function store(Request $request)
    {
        $model = new $this->model;
        $rules = $model->validatorRules($request);
        $validator = Validator::make(Input::all(), $rules);

        if (!$this->isValid($validator)){
            return back()->withInput()->withErrors($validator);
        };

        $model = $this->model::create($request->all());
        session()->flash('flash_success', 'Успешно создано!');
        return redirect(route('eating.edit', $model->id));
    }
}
