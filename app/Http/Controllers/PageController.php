<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{

    public function show(Request $request, $url = '/')
    {
        $insta = $this->getInsta();
        if ($url != '/')
            $url = '/' . $url;
        $model = Page::where(['published' => 1, 'url' => $url])->first();


        if (!$model)
            abort(404, 'Страница не найдена');

        $params = [
            'model' => $model,
            'insta' => $insta
        ];
        $view = (isset($model->behavior) && !empty($model->behavior)) ? "page.behaviors.".$model->behavior :  "page.behaviors.default";
        return view($view, $params);
    }

    public function getInsta()
    {
        if ($insta = Cache::get('insta', []))
            return $insta;

        try {
            $client = new \czPechy\instagramProfileCrawler\Client('_eat2fit_');
            $profile = $client->getProfile();
            foreach($profile->getMedia() as $k => $media) {
                if ($k >= 6)
                    break;

                $insta[$k]['link'] = $media->toArray()['link'];
                $insta[$k]['thumbnail'] = $media->toArray()['thumbnail'];
            }
            Cache::put('insta', $insta, 180);
        } catch (\Exception $e) {
            $insta = [];
        }

        return $insta;
    }

}
