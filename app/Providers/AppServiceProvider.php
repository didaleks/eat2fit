<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;// Importing DuskServiceProvider class
use Illuminate\Support\Facades\Blade;
use App\Models\Menu;
use App\Models\Page;
use LaravelAdmin\Models\Settings;
use Illuminate\Pagination\Paginator;

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

            $topMenu = Menu::where(['parent_id' => 1, 'published' => 1])->get();
            view()->share('topMenu', $topMenu);

            $settings = new Settings;
            view()->share('settings', $settings);

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
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
    }
}
