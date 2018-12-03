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
        if (!Session::has('cart')){
            return null;
        } else {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return $cart;
        }
    }


    public function add(Request $request, $id, $days_count = 7)
    {
        $diet = Diet::find($id);
        $oldCart =$request->session()->has('cart') ? $request->session()->get('cart') : null;
//        dd($request->session()->get('cart'));
        $cart = new Cart($oldCart);
        $cart->add($diet, $diet->id, $days_count);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }




    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
