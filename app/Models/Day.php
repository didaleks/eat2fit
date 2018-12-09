<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;
use App\Traits\BaseMethods;
use Illuminate\Validation\Rule;

class Day extends Page
{
    use BaseMethods;

    protected $fillable = [
        'diet_id',
        'number'
    ];

    protected $attributes = [];

    public function diet()
    {
        return $this->belongsTo('App\Models\Diet');
    }

    public function eatings()
    {
        return $this->hasMany('App\Models\Eating');
    }

    /**
     * Нельзя создать 2 одинаковых дня для одного рациона
     * @param $data
     * @return array
     */
    public function validatorRules($data)
    {
        return [
            'diet_id' => 'required',
            'number' => Rule::unique('days')->where(function ($query) use ($data) {
                return $query->where('diet_id', $data->diet_id);
            })
        ];
    }

    public function formFields()
    {
        $fields = [
            [
                'name' => 'diet_id',
                'type' => 'input',
                'label' => 'diet id'
            ],
            [
                'name' => 'number',
                'type' => 'input',
                'label' => 'Номер дня'
            ]
        ];
        return $fields;
    }

    /**
     * Должен возвращать EatingTypes,
     * которых еще нет у текущего дня
     * @param null $current_eating
     * @return mixed
     */
    public function dropDownEatingTypes($current_eating = null)
    {
        $eating_type_ids = $this->eatingTypes()->pluck('id')->all();
        $filtered_ids = EatingType::pluck('id')->filter(function ($value, $key) use ($eating_type_ids) {
            return !in_array($value, $eating_type_ids);
        });
        $plucked = EatingType::whereIn('id', $filtered_ids)->get();
        //Если передан текущий eating то смотрим его тип и добавляем в список
        if (!empty($current_eating) && $current_eating->eating_type != null) {

            $plucked->push($current_eating->eating_type);
        }
        return $plucked->sortBy('sort');
    }

    public function getEatingsIdsAttribute()
    {
        return $this->eatings()->pluck('id');
    }

    public function eatingTypes()
    {
        $eating_types = collect([]);
        foreach ($this->eatings as $eating) {
            $eating_types->push($eating->eating_type);
        }
        return $eating_types->sortBy('sort');
    }

    public function dayWeekNum()
    {
        return ($this->number <= 7)? $this->number : $this->number % 7;
    }

    public function hasAllEatingTypes()
    {
        $ids = $this->eatingTypes()->pluck('id')->all();
        $filtered_ids = EatingType::getAllIds()->filter(function ($value) use ($ids) {
            return !in_array($value,$ids);
        });
        return $filtered_ids->count() ? false : true;
    }
}
