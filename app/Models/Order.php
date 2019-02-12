<?php

namespace App\Models;

use App\Traits\BaseMethods;
use App\Traits\ControllerValidateMethods;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use LaravelAdmin\Models\Settings;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    use BaseMethods;

    protected $fillable = [
        'cart',
        'name',
        'phone',
        'email',
        'address',
        'shipping_datetime',
        'payment_type',
        'type',
        'summ',
        'message',
        'coupon'
    ];

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|regex:/^.+@.+$/i',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'shipping_datetime' => 'required|string|max:500',
            'privacy-policy' => 'required|accepted'
        ];
    }

    public function validatorMessages($data)
    {
        return [
            'name.required' => 'Имя обязательно для заполнения',
            'email.required' => 'Email обязателен для заполнения',
            'phone.required' => 'Телефон обязателен для заполнения',
            'address.required' => 'Проверьте данные адреса доставки',
            'shipping_datetime.required' => 'Проверьте данные даты и времени доставки',
            'privacy-policy.accepted' => 'Необходимо согласиться с условиями обработки данных'
        ];
    }

    public function getPaymentTypeAttribute($value)
    {
        switch ($value) {
            case 'personally':
                return "Лично курьеру";
                break;
            case 'online':
                return "Онлайн платеж";
                break;
            default:
                return "";
        }
    }

    public function sendMailAdmin($model)
    {
        $data = array('model'=>$model);
        if ($model->isFreePay()) {
            $view = 'emails.admin_mail_free_pay';
            $subject = 'Новая свободная оплата №'. $model->id;
        } else {
            $view = 'emails.admin_mail';
            $subject = 'Новый заказ №'. $model->id .' со страницы Корзина';
        }
        try {
            Mail::send($view, $data, function($message) use ($model, $subject) {
                $settings = new Settings;
                $message
                    ->to($settings->admin_email)
                    ->subject($subject);
                $message->from(config('mail.username'),config('app.name'));
            });
        } catch (\Exception $e) {dd($e);}
    }

    public function sendMailUser($model)
    {
        $data = array('model'=>$model);
        try {
            Mail::send('emails.customer_mail', $data, function($message) use ($model) {
                $subject = 'Формирование заказа №'. $model->id .' на сайте '.config('app.name');
                $message->to($model->email)
                    ->subject($subject);
                $message->from(config('mail.username'),config('app.name'));
            });
        } catch (\Exception $e) {}
    }

    public function isFreePay()
    {
        return ($this->type == 'free_pay');
    }



}
