<?php


namespace App\Models;
use Illuminate\Support\Facades\Session;

class Cart
{
    public $items;

    //I mean $totalQuantity

    public $totalQt = 0; //Количество дней
    public $totalPrice = 0; //Цена за все дни

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQt = $oldCart->totalQt;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }


    public function add($item, $id, int $count)
    {
        $storedItem = ['qty' => $count, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            //todo refact if in one line
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
                $storedItem['price'] = $item->price * $storedItem['qty'];
            }
        }
        $this->items[$id] = $storedItem;
//        dd($this->items);
        $this->totalQt = array_sum(array_column($this->items, 'qty'));
        $this->totalPrice += $item->price;
    }



}