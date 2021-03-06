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
                        'type' => 'hidden',
                        'label' => 'Behavior'
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
                        'type' => 'hidden',
                        'label' => 'Behavior'
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
                        'type' => 'hidden',
                        'label' => 'Behavior'
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
                        'type' => 'hidden',
                        'label' => 'Behavior'
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
//                    [
//                        'name' => 'content',
//                        'type' => 'editor',
//                        'label' => 'Общий текст(нигде не используется)'
//                    ],
                    'slides' =>  [
                        'name' => 'fields[slides]',
                        'type' => 'multi_slides_extended',
                        'multi' => true,
                        'label' => 'Слайдер'
                    ],
                    'planes' =>  [
                        'name' => 'fields[planes]',
                        'type' => 'choose_plan',
                        'multi' => true,
                        'label' => 'Блок"Выберите план"'
                    ],
                    'meta_title',
                    'meta_description',
                    'meta_keywords',
                ];
                break;
            case "production":
                $fields = [
                    [
                        'name' => 'name',
                        'type' => 'input',
                        'label' => 'Название'
                    ],
                    [
                        'name' => 'behavior',
                        'type' => 'hidden',
                        'label' => 'Behavior'
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
                    'news' =>  [
                        'name' => 'fields[news]',
                        'type' => 'multi_slides_news',
                        'multi' => true,
                        'label' => 'Слайдер "Новости производства"'
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
                        'type' => 'hidden',
                        'label' => 'Behavior'
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
