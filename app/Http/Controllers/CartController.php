<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Diet;
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
        return view('page.behaviors.cart', ['cart' => $cart]);
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
        return json_encode($this->get()->items);
    }

    public function set(Request $request, $id, $days_count)
    {
        $diet = Diet::find($id);
        $oldCart = $this->get();
        $cart = new Cart($oldCart);
        $cart->set($diet, $diet->id, $days_count);
        $request->session()->put('cart', $cart);
        return $this->getJsonData();
    }

    public function remove(Request $request, $id)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function clear()
    {
        Session::forget('cart');
    }
}
