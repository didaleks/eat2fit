<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;
use App\Traits\BaseMethods;

class Extra extends Diet
{
    use BaseMethods;

    protected $fillable = [
        'name',
        'sort',
        'published',
        'fields',
        'price',
    ];

    public function formFields()
    {
        $fields = [
            [
                'name' => 'name',
                'type' => 'input',
                'label' => '*Название'
            ],
            [
                'name' => 'published',
                'type' => 'checkbox',
                'label' => 'Опубликован'
            ],
            'image' => [
                'name' => 'fields[image]',
                'type' => 'image',
                'label' => 'Картинка'
            ],
            [
                'name' => 'price',
                'type' => 'number',
                'label' => '*Цена'
            ],
        ];


        return $fields;
    }

    public function validatorRules($data)
    {
        return [
            'published' => 'boolean',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|between:0,99999',
            'fields' => 'array',
        ];
    }

    public function getPrice($qty) {
        return $this->price;
    }

}
