**Заполнение БД**

php artisan tinker </br>

$diets = factory(\App\Models\Diet::class, 1)->create();

To run tests:

`php artisan dusk`

**Deploy** 


deploy prod:

`envoy run deploy --env=production`

deploy stage:

`envoy run deploy`
