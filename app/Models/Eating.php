<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;
use App\Traits\BaseMethods;
use Illuminate\Validation\Rule;

class Eating extends Page
{
    use BaseMethods;

    protected $attributes = [];

    protected $fillable = [
        'eating_type_id',
        'day_id',
    ];


    public $logFields = [
        'eating_type_id',
        'day_id'
    ];

    public function validatorRules($data)
    {
        return [
            'day_id' => 'required',
            'eating_type_id' => Rule::unique('eatings')->where(function ($query) use ($data) {
                return $query->where('day_id', $data->day_id);
            })
        ];
    }

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
                'label' => 'ID дня'
            ],
        ];


        return $fields;
    }

    public function getNameAttribute()
    {
        return $this->eating_type->name??'';
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
        return $this->belongsToMany('App\Models\Dish')->withPivot('sort');
    }

    public function getDishesIdsAttribute()
    {
        return $this->dishes->sortBy('pivot.sort')->pluck('id')->all();
    }

    /**
     * Возвращает все Dish, но первыми идут связанные с
     * моделью и отсортированные по pivot.sort
     * @return \Illuminate\Support\Collection
     */
    public function getDishesSorted(){
        $dishes_sorted = collect([]);
        $dishes_sorted = $dishes_sorted->merge($this->dishes->sortBy('pivot.sort'));
        $filtered = Dish::all()->except($this->getDishesIdsAttribute());
        $dishes_sorted = $dishes_sorted->merge($filtered);
        return $dishes_sorted;
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
