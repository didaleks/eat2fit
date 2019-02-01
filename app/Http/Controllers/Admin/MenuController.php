<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Traits\ControllerValidateMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class MenuController extends \LaravelAdmin\Controllers\MenuController
{
    use ControllerValidateMethods;
}
