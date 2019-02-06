<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\Menu;
use App\Models\Page;
use LaravelAdmin\Models\Settings;
use Illuminate\Pagination\Paginator;
use App\Models\Cart;
use Illuminate\Support\Facades\Cache;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!app()->runningInConsole()) {

            Blade::directive('pageUrl', function ($id) {
                return "<?php echo App\Models\Page::getUrl({$id}); ?>";
            });

            $topMenu = Menu::where(['parent_id' => 1, 'published' => 1])->with(['childrens', 'childrens.page', 'page'])->get();
            view()->share('topMenu', $topMenu);

            view()->share('cartItemsCount', Cart::getCountItems());

            $settings = new Settings;
            view()->share('settings', $settings);

            $insta = $this->getInsta();
            view()->share('insta', $insta);

            if (!starts_with(request()->path(), 'admin'))
                Paginator::defaultView('pagination::default');

        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        if ($this->app->environment('local', 'testing')) {
//            $this->app->register(DuskServiceProvider::class);
//        }
    }

    public function getInsta()
    {
        if ($insta = Cache::get('insta', []))
            return $insta;

        try {
            $client = new \czPechy\instagramProfileCrawler\Client('_eat2fit_');
            $profile = $client->getProfile();
            foreach($profile->getMedia() as $k => $media) {
                if ($k >= 9)
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
