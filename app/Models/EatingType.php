<?php

namespace App\Models;

use App\Traits\BaseMethods;
use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;

class EatingType extends Page
{
    use BaseMethods;

    protected $fillable = [
        'name',
        'slug',
        'sort'
    ];


    public $logFields = [
        'name',
        'slug'
    ];

    protected $attributes = [];

    public function validatorRules($data)
    {
        return [
            'name' => 'required'
        ];
    }

    public function formFields()
    {
        $fields = [
            [
                'name' => 'name',
                'type' => 'input',
                'label' => 'Название'
            ]
        ];


        return $fields;
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

}
