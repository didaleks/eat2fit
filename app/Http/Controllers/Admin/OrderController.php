<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Traits\ControllerValidateMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class OrderController extends \LaravelAdmin\Controllers\MenuController
{
    public function index()
    {
        return view()->first(["admin.{$this->name}.index", "admin::{$this->name}.index", 'admin::base.index'], [
            'name' => $this->name,
            'action' => $this->action,
            'models' => $this->model::orderBy('created_at', 'desc')->paginate(50)
        ]);
    }
}
