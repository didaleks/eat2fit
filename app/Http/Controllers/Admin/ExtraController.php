<?php

namespace App\Http\Controllers\Admin;

use App\Models\Day;
use App\Models\Diet;
use App\Traits\ControllerValidateMethods;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExtraController extends \LaravelAdmin\Controllers\BaseAdminController
{
    use ControllerValidateMethods;

    public function index()
    {
        return view()->first(["admin.{$this->name}.index", "admin::{$this->name}.index", 'admin::base.index'], [
            'name' => $this->name,
            'action' => $this->action,
            'models' => $this->model::orderBy('sort')->paginate(50)
        ]);
    }
}
