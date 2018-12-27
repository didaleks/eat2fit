<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;
use App\Traits\BaseMethods;

class Dish extends Page
{
    use BaseMethods;

    protected $fillable = [
        'name',
        'published',
        'fields',
        'content',
    ];

    public function formFields()
    {
        $fields = [
            [
                'name' => 'name',
                'type' => 'input',
                'label' => 'Название'
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
                'name' => 'content',
                'type' => 'editor',
                'label' => 'Текст'
            ]
        ];


        return $fields;
    }

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'published' => 'boolean'
        ];
    }

    public function eatings()
    {
        return $this->belongsToMany('App\Models\Eating');
    }

    public function diets()
    {
        $diets = collect([]);
        foreach ($this->eatings()->get() as $eating)
            $diets->push($eating->day()->first()->diet()->first());
        return $diets->filter();
    }
}
