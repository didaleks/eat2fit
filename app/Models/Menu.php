<?php

namespace App\Models;


class Menu extends \LaravelAdmin\Models\Menu
{
//  todo Если особых изменений не будет, то можно подумать над тем чтобы вовсе удалить эту модель


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
                'name' => 'parent_id',
                'type' => 'select',
                'label' => 'Родительская страница',
                'options' => self::where('id', '!=', $this->id)->get()->pluck('name', 'id')->prepend('', '')->toArray()
            ],
            [
                'name' => 'sort',
                'type' => 'input',
                'readonly' => 'readonly',
                'label' => 'Сортировка'
            ],
            [
                'name' => 'page_id',
                'type' => 'select',
                'label' => 'Страница',
                'options' => Page::pluck('name', 'id')->prepend('', '')->toArray()
            ],
            [
                'name' => 'url',
                'type' => 'hidden',
                'label' => 'Url'
            ],
        ];

        return $fields;
    }

    public function childrensPublished()
    {
        return $this->childrens()->where('published', 1)->get();
    }

    public function page()
    {
        return $this->belongsTo('App\Models\Page');
    }
}
