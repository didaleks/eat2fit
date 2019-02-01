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
