<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\BaseMethods;

class Page extends \LaravelAdmin\Models\Page
{
    use BaseMethods;

    public function formFields()
    {
        switch ($this->behavior) {
            case "demo":
                $fields = [
                    [
                        'name' => 'name',
                        'type' => 'input',
                        'label' => 'Название'
                    ],
                    [
                        'name' => 'behavior',
                        'type' => 'readonly ',
                        'label' => 'Тип'
                    ],
                    [
                        'name' => 'published',
                        'type' => 'checkbox',
                        'label' => 'Опубликован'
                    ],
                    [
                        'name' => 'slug',
                        'type' => 'input',
                        'label' => 'Url'
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
                    'meta_title',
                    'meta_description',
                    'meta_keywords',
                ];
                break;
            case "about":
                $fields = [
                    [
                        'name' => 'name',
                        'type' => 'input',
                        'label' => 'Название'
                    ],
                    [
                        'name' => 'behavior',
                        'type' => 'input ',
                        'readonly' => 'readonly',
                        'label' => 'Behavior(todo скрыть потом)'
                    ],
                    [
                        'name' => 'published',
                        'type' => 'checkbox',
                        'label' => 'Опубликован'
                    ],
                    [
                        'name' => 'url',
                        'type' => 'input',
                        'readonly' => 'readonly',
                        'label' => 'URL'
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
                    'slides' =>  [
                        'name' => 'fields[images]',
                        'type' => 'multi_images',
                        'multi' => true,
                        'label' => 'Лицензии'
                    ],
                    'team' =>  [
                        'name' => 'fields[team]',
                        'type' => 'multi_team',
                        'multi' => true,
                        'label' => 'Блок "Команда"'
                    ],
                    'partners' =>  [
                        'name' => 'fields[partners]',
                        'type' => 'multi_images',
                        'multi' => true,
                        'label' => 'Логотипы партнеров'
                    ],
                    [
                        'name' => 'content',
                        'type' => 'editor',
                        'label' => 'Текст'
                    ],
                    'meta_title',
                    'meta_description',
                    'meta_keywords',
                ];
                break;
            case "shipping":
                $fields = [
                    [
                        'name' => 'name',
                        'type' => 'input',
                        'label' => 'Название'
                    ],
                    [
                        'name' => 'behavior',
                        'type' => 'readonly ',
                        'label' => 'Тип'
                    ],
                    [
                        'name' => 'published',
                        'type' => 'checkbox',
                        'label' => 'Опубликован'
                    ],
                    [
                        'name' => 'slug',
                        'type' => 'input',
                        'label' => 'Url'
                    ],
                    [
                        'name' => 'content',
                        'type' => 'editor',
                        'label' => 'Общий текст'
                    ],
                    'shipping-text' =>  [
                        'name' => 'fields[shipping-text]',
                        'type' => 'editor',
                        'label' => 'Доставка'
                    ],
                    'paying-text' =>  [
                        'name' => 'fields[paying-text]',
                        'type' => 'editor',
                        'label' => 'Способы оплаты'
                    ],
                    'meta_title',
                    'meta_description',
                    'meta_keywords',
                ];
                break;
            case "main":
                $fields = [
                    [
                        'name' => 'name',
                        'type' => 'input',
                        'label' => 'Название'
                    ],
                    [
                        'name' => 'behavior',
                        'type' => 'readonly ',
                        'label' => 'Тип'
                    ],
                    [
                        'name' => 'published',
                        'type' => 'checkbox',
                        'label' => 'Опубликован'
                    ],
                    [
                        'name' => 'slug',
                        'type' => 'input',
                        'label' => 'Url'
                    ],
                    [
                        'name' => 'content',
                        'type' => 'editor',
                        'label' => '???'
                    ],
                    'slides' =>  [
                        'name' => 'fields[slides]',
                        'type' => 'multi_slides_extended',
                        'multi' => true,
                        'label' => 'Слайды'
                    ],
                    'team' =>  [
                        'name' => 'fields[feedbacks]',
                        'type' => 'multi_feedback',
                        'multi' => true,
                        'label' => 'Блок "Отзывы"'
                    ],
                    'meta_title',
                    'meta_description',
                    'meta_keywords',
                ];
                break;
            default:
                $fields = [
                    [
                        'name' => 'name',
                        'type' => 'input',
                        'label' => 'Название'
                    ],
                    [
                        'name' => 'behavior',
                        'type' => 'input ',
                        'readonly' => 'readonly',
                        'label' => 'Behavior(todo скрыть потом)'
                    ],
                    [
                        'name' => 'published',
                        'type' => 'checkbox',
                        'label' => 'Опубликован'
                    ],
                    [
                        'name' => 'url',
                        'type' => 'input',
                        'readonly' => 'readonly',
                        'label' => 'URL'
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
                    'meta_title',
                    'meta_description',
                    'meta_keywords',
                ];
        }

        return $fields;
    }
}
