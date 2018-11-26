<?php namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

trait ControllerValidateMethods
{
    public function update(Request $request, $id)
    {
        $rules = $this->model::find($id)->validatorRules($request);
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
            return back()->withInput()->withErrors($validator);

        $model = $this->model::findOrFail($id)->fill($request->all());
        $model->save();
        return redirect($this->redirectTo);
    }


    public function store(Request $request)
    {
        $model = new $this->model;
        $rules = $model->validatorRules($request);
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
            return back()->withInput()->withErrors($validator);

        $this->model::create($request->all());
        return redirect($this->redirectTo);
    }

}