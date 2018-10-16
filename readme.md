**Заполнение БД**

php artisan tinker </br>

$diets = factory(\App\Models\Diet::class, 1)->create(); - здесь колбеками создадутся дни в количестве days_count