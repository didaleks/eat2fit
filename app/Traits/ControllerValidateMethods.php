<?php namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

trait ControllerValidateMethods
{
    public function isValid($validator)
    {
        if ($validator->fails())
        {
            $this->generateFlashes($validator);
            return false;
        }
        return true;
    }

    public function generateFlashes($validator)
    {
        $errors = [];
        foreach ($validator->errors()->all() as $error)
            $errors[$error] = $error;

        $info =  implode('</br>', $errors);
        session()->flash('flash_error', $info);
    }

    public function update(Request $request, $id)
    {
        $rules = $this->model::findOrFail($id)->validatorRules($request);
        $validator = Validator::make(Input::all(), $rules);

        if (!$this->isValid($validator)){
            return back()->withInput()->withErrors($validator);
        };

        $this->model::findOrFail($id)->fill($request->all())->save();
        session()->flash('flash_success', 'Успешно обновлено!');
        return redirect($this->redirectTo);
    }


    public function store(Request $request)
    {
        $model = new $this->model;
        $rules = $model->validatorRules($request);
        $validator = Validator::make(Input::all(), $rules);

        if (!$this->isValid($validator)){
            return back()->withInput()->withErrors($validator);
        };

        $this->model::create($request->all());
        session()->flash('flash_success', 'Успешно создано!');
        return redirect($this->redirectTo);
    }

}