<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;

class Diet extends Page
{
    protected $fillable = [
        'name',
        'published',
        'behavior',
        'days_count',
        'slug',
        'content',
        'fields',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'published' => 'boolean',
        'fields' => 'array'
    ];

    public $logFields = [
        'name',
        'published',
        'parent_id',
        'days_count',
        'sort',
        'slug',
        'content',
        'fields',
        'meta_title',
        'meta_description',
        'meta_keywords'
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
            [
                'name' => 'slug',
                'type' => 'input',
                'label' => 'Slug'
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
            ],
            [
                'name' => 'days_count',
                'type' => 'number',
                'label' => 'Количество дней'
            ],
            'meta_title',
            'meta_description',
            'meta_keywords',
        ];


        return $fields;
    }



    public function validatorRules($data)
    {
        return [
            'published' => 'boolean',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'days_count' => 'required|integer|between:1,60',
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

    public function days()
    {
        return $this->hasMany('App\Models\Day');
    }

    public function parent()
    {

    }

    public function childrens()
    {

    }
}
