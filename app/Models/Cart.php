<?php


namespace App\Models;
use Illuminate\Support\Facades\Session;

class Cart
{
    public $items;
    public $extras = [];
    public $totalQt = 0; //Количество дней из всех рационов в корзине (totalQuantity)
    public $totalItemsQt = 0; //Количество рационов в корзине
    public $totalPrice = 0; //Цена за все дни
    public $totalFullPrice = 0; //Цена за все дни + доставка
    public $shippingPrice = 1000; //Цена доставки

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->extras = $oldCart->extras;
            $this->totalQt = $oldCart->totalQt;
            $this->totalItemsQt = $oldCart->totalItemsQt;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalFullPrice = $this->getFullPrice();
        }
    }


    public function set($item, $id, int $count, $is_extra = false)
    {
        $storedItem = ['qty' => $count, 'price' => $item->getPrice($count) * $count, 'item' => $item];

        if ($is_extra) {
            if ($this->extras && array_key_exists($id, $this->extras)) {
                $storedItem = $this->extras[$id];
                $storedItem['qty'] = $count;
                $storedItem['price'] = $item->getPrice($count) * $count;
            }
            $this->extras[$id] = $storedItem;
        } else {
            if ($this->items && array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
                $storedItem['qty'] = $count;
                $storedItem['price'] = $item->getPrice($count) * $count;
            }
            $this->items[$id] = $storedItem;
        }

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

    public function removeExtra($id)
    {
        if ($this->extras && array_key_exists($id, $this->extras)) {
            unset($this->extras[$id]);
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
        foreach (array_merge($this->items,$this->extras) as $item) {
            $price = $item['item']->getPrice($item['qty']);
            $summ += ($item['qty'] * $price);
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