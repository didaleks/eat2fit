<?php

namespace App\Models;

use App\Traits\BaseMethods;
use LaravelAdmin\Models\Page;

class Diet extends Page
{
    use BaseMethods;

    protected $fillable = [
        'name',
        'published',
        'behavior',
        'days_count',
        'price',
        'test_price',
        'slug',
        'sort',
        'calories',
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
                'label' => '*Название'
            ],
            [
                'name' => 'published',
                'type' => 'checkbox',
                'label' => 'Опубликован'
            ],
            [
                'name' => 'slug',
                'type' => 'input',
                'label' => 'Slug(может быть сформирован автоматически)'
            ],
            'image' => [
                'name' => 'fields[image]',
                'type' => 'image',
                'label' => 'Картинка на странице рациона'
            ],
            'preview' => [
                'name' => 'fields[preview]',
                'type' => 'image',
                'label' => 'Картинка на превью в каталоге'
            ],
            [
                'name' => 'content',
                'type' => 'editor',
                'label' => 'Текст'
            ],
            [
                'name' => 'days_count',
                'type' => 'number',
                'label' => '*Количество дней'
            ],
            [
                'name' => 'price',
                'type' => 'number',
                'label' => '*Минимальная цена за один обычный день'
            ],
            [
                'name' => 'test_price',
                'type' => 'number',
                'label' => 'Цена за один тестовый день'
            ],
            [
                'name' => 'calories',
                'type' => 'number',
                'label' => '*Среднее число килокалорий в день(от 500 до 6000)'
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
            'price' => 'required|integer|between:0,99999',
            'calories' => 'integer|between:500,6000',
            'fields' => 'array',
        ];
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
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
        return $this->hasMany('App\Models\Day')->orderBy('number');
    }

    public function daysNumbers()
    {
        return $this->days()->pluck('number');
    }

    public function daysList()
    {
        $days = $this->days()->get()->sortBy('number');
        $days_list = collect([]);
        for ($i = 1; $i <= $this->days_count; $i++) {
            $days_list->push(
                [
                    'number' => $i,
                    'id' => $days->contains('number', $i) ? $days->where('number', $i)->first()->id : null
                ]
            );
        }
        return $days_list->sortBy('number');
    }

    public function weeksCount()
    {
        $daysCount = $this->days_count;
        $weeksCount = $daysCount / 7;
        if ($weeksCount - floor($weeksCount) > 0) {
            $weeksCount++;
        }
        return intval($weeksCount);
    }

    public function getWeek(int $weekNum)
    {
        $lastDayNum = $weekNum * 7;
        $firstDayNum = $lastDayNum - 6;
        return $this->days()->whereBetween('number',array($firstDayNum,$lastDayNum))->orderBy('number')->with('eatings.dishes')->get();
    }

    public function parent()
    {

    }

    public function childrens()
    {

    }

    public function fullUrl()
    {
        return '/' . 'catalog/' . trim($this->slug, '/');
    }

    /**
     * Синхронизизирует связи
     */
    public function syncCategories()
    {
        $data = request()->all();
        if (array_key_exists('categories', $data)) {
            $this->categories()->sync($data['categories']);
        }
    }

    /**
     * Проверяет наличие связи между 2мя моделями
     * @param $category
     * @return mixed
     */
    public function hasCategory($category)
    {
        return $this->categories->contains($category);
    }

    public function getTestPriceAttribute($value)
    {
        return (empty($value)?$this->price:$value);
    }

    public function getPrice($qty) {
        return (intval($qty) == 1)? $this->test_price : $this->price;
    }
}
