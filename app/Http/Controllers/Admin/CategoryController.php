<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ControllerValidateMethods;

class CategoryController extends \LaravelAdmin\Controllers\BaseAdminController
{
    use ControllerValidateMethods;

    public function index()
    {
        return view()->first(["admin.{$this->name}.index", "admin::{$this->name}.index", 'admin::base.index'], [
            'name' => $this->name,
            'action' => $this->action,
            'models' => $this->model::sorted()->paginate(50)
        ]);
    }
}
