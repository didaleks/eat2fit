**Заполнение БД**

php artisan tinker </br>

$diets = factory(\App\Models\Diet::class, 1)->create();

*To run tests:*

`php artisan dusk`

*Разгон проекта:*

git clone

composer install

npm i

CREATE DATABASE eat_development  ENCODING 'UTF8' LC_COLLATE = 'ru_RU.UTF-8' LC_CTYPE = 'ru_RU.UTF-8' TEMPLATE = template0;

fill .env

envoy run db:pull

envoy run public:pull

**Deploy** 


deploy prod:

`envoy run deploy --env=production`

deploy stage:

`envoy run deploy`

**Прочее**

Шаблон: https://livedemo00.template-help.com/wt_61252_v1/index.html 
