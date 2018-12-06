<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ControllerValidateMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FeedbackController extends \LaravelAdmin\Controllers\BaseAdminController
{
    use ControllerValidateMethods;
}
