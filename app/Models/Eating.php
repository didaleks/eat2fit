<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;

class Eating extends Page
{
    protected $attributes = [];

    protected $fillable = [
        'name',
        'slug',
        'sort'
    ];


    public $logFields = [
        'name',
        'slug'
    ];

    public function formFields()
    {
        $fields = [
            [
                'name' => 'eating_type_id',
                'type' => 'select',
                'options' => $this->select_eating_types(),
                'label' => 'Тип приема пищи'
            ],
            [
                'name' => 'day_id',
                'type' => 'input',
                'custom' => ['readonly'],
                'label' => 'Номер дня'
            ],
        ];


        return $fields;
    }


    public function day()
    {
        return $this->belongsTo('App\Models\Day');
    }

    public function eating_type()
    {
        return $this->belongsTo('App\Models\EatingType');
    }

    public function dishes()
    {
        return $this->belongsToMany('App\Models\Dish');
    }

    public function select_eating_types()
    {
        $types = [];
        foreach (EatingType::all() as $type) {
            $types[$type->id] = $type->name;
        }
        ksort($types);

        return $types;
    }
}
