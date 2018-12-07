<?php


namespace App\Models;
use Illuminate\Support\Facades\Session;

class Cart
{
    public $items;

    //I mean $totalQuantity
    public $totalQt = 0; //Количество дней из всех рационов в корзине
    public $totalItemsQt = 0; //Количество рационов в корзине
    public $totalPrice = 0; //Цена за все дни
    public $shippingPrice = 1000; //Цена доставки

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQt = $oldCart->totalQt;
            $this->totalItemsQt = $oldCart->totalItemsQt;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }


    public function set($item, $id, int $count)
    {
        $storedItem = ['qty' => $count, 'price' => $item->price, 'item' => $item];

        if ($this->items && array_key_exists($id, $this->items)) {
            $storedItem = $this->items[$id];
            $storedItem['qty'] = $count;
            $storedItem['price'] = $item->price * $storedItem['qty'];
        }

        $this->items[$id] = $storedItem;
        $this->totalQt = $this->getTotalQt();
        $this->totalItemsQt = $this->getTotalItemsQt();
        $this->totalPrice = $this->getTotalPrice();
    }

    public function remove($id)
    {
        if ($this->items && array_key_exists($id, $this->items)) {
            unset($this->items[$id]);
        }

        $this->totalQt = $this->getTotalQt();
        $this->totalItemsQt = $this->getTotalItemsQt();
        $this->totalPrice = $this->getTotalPrice();
    }

    public function getTotalQt()
    {
        return array_sum(array_column($this->items, 'qty'));
    }

    public function getTotalItemsQt()
    {
        return count($this->items);
    }

    /**
     * Цена продуктов
     * @return float|int
     */
    public function getTotalPrice()
    {
        $summ = 0;
        foreach ($this->items as $diet) {
            $summ += ($diet['qty'] * $diet['item']->price);
        };
        return $summ;
    }

    /**
     * Цена продуктов с доставкой
     * @return int
     */
    public function getFullPrice()
    {
        return intval($this->getTotalPrice() + $this->shippingPrice);
    }

    public static function getCountItems()
    {
        return Session::has('cart') ? count(Session::get('cart')->items) : 0;
    }


}