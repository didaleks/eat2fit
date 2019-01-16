<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Diet;
use App\Models\Extra;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = $this->get();
        $model = new Page();
        $model->name = 'Корзина';
        return view('page.behaviors.cart', [
            'cart' => $cart,
            'model' => $model
        ]);
    }

    public function get()
    {
        if (Session::has('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return $cart;
        } else {
            return null;
        }
    }

    public function getJsonData() {
        $data = $this->get()->items;
        $data['extras'] = $this->get()->extras;
        return json_encode($data);
    }

    public function set(Request $request, $id, $days_count)
    {
        $is_extra = $this->isExtra($request);
        $item = ($is_extra)? Extra::find($id) : Diet::find($id);
        $oldCart = $this->get();
        $cart = new Cart($oldCart);
        $cart->set($item, $item->id, $days_count, $is_extra);
        $request->session()->put('cart', $cart);
        return $this->getJsonData();
    }

    public function remove(Request $request, $id)
    {
        $is_extra = $this->isExtra($request);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        ($is_extra)? $cart->removeExtra($id) : $cart->remove($id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function clear()
    {
        Session::forget('cart');
    }

    public function isExtra(Request $request) {
        if(strpos($request->getRequestUri(), 'extra')){
            return true;
        };
        return false;
    }
}
