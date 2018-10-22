<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;

class Dish extends Page
{
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
            'image' =>  [
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

    public function eatings()
    {
        return $this->belongsToMany('App\Models\Eating');
    }
}
