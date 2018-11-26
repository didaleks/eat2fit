<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;

class Category extends Page
{
    protected $fillable = [
        'name',
        'published',
        'slug',
        'description',
    ];

    protected $attributes = [
        'fields' => '{}'
    ];

    protected $casts = [
        'published' => 'boolean'
    ];

    public function diets()
    {
        return $this->belongsToMany('App\Models\Diet');
    }

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
            [
                'name' => 'slug',
                'type' => 'input',
                'label' => 'Slug'
            ],
            [
                'name' => 'description',
                'type' => 'input',
                'label' => 'Текст'
            ]
        ];


        return $fields;
    }

    public function validatorRules($data)
    {
        return [
            'published' => 'boolean',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'fields' => 'array',
        ];
    }

    public function setSlugAttribute($value)
    {
        if ($value != '/')
            $value = str_slug($value) ?: str_slug($this->attributes['name']);

        while (self::where([['id', '<>', $this->id], ['slug', '=', $value]])->count()) {
            if (!preg_match('~^(.+-)(\d+)$~', $value))
                $value = $value . '-1';
            else
                $value = preg_replace_callback('~^(.+-)(\d+)$~', function ($data) {
                    return $data[1] . ($data[2] + 1);
                }, $value);
        }

        $this->attributes['slug'] = $value;
    }

    public function parent()
    {

    }

    public function childrens()
    {

    }
}
