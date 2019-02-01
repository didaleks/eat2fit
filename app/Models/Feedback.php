<?php

namespace App\Models;

use App\Traits\BaseMethods;
use App\Traits\ControllerValidateMethods;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use BaseMethods;

    protected $table = 'feedbacks';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'type'
    ];

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'string|max:255|regex:/^.+@.+$/i',
            'phone' => 'required|string|max:255',
            'privacy-policy' => 'required|accepted'
        ];
    }

    public function validatorMessages($data)
    {
        return [
            'name.required' => 'Имя обязательно для заполнения',
            'email.required' => 'Email обязателен для заполнения',
            'phone.required' => 'Телефон обязателен для заполнения',
            'privacy-policy.accepted' => 'Необходимо согласиться с условиями обработки данных'
        ];
    }

}
