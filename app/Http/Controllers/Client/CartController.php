<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
            $this->product = $product;
    }
 
    /* Function Handle Add Cart */
    public function addCart(Request $request, $id)
    {
        $product = $this->product->findOrFail($id);
        $product['quantity'] = $request->product_quantity;

        $cart = [];
        $cart[] = $product;
        
        if(Session::has('cart')){
            $cartOld = Session::get("cart");
            $cartNew = array_merge($cartOld, $cart);
            Session::put("cart", $cartNew);
        }else{
            Session::put("cart", $cart);
        }

        return redirect()->back();
    }

    /* Function Handle Buy Now */
    public function buyNow(Request $request, $id)
    {
        $product = $this->product->findOrFail($id);
        $product['quantity'] = $request->product_quantity;

        $cart = [];
        $cart[] = $product;
        
        if(Session::has('cart')){
            $cartOld = Session::get("cart");
            $cartNew = array_merge($cartOld, $cart);
            Session::put("cart", $cartNew);
        }else{
            Session::put("cart", $cart);
        }

        return redirect()->route('client.cart.showCart');
    }

    /* Function Handle Show Cart */
    public function showCart() {
        $handle_money = [];
        $total_product = Session::get("cart");

        foreach ($total_product as $item) {
            $handle_money[] = ($item->price) * ($item->quantity);
        }

        $total_money = array_sum($handle_money);
        return view('client.cart.show', compact('total_product', 'total_money'));
    }

    /* Function Handle Delete Cart */
    public function deleteCart($id) {
        $total_product = Session::get("cart");
        
        foreach ($total_product as $key => $item) {
            if($item->id == $id){
                unset($total_product[$key]);
            }else{
                $cartNew[] = $item ;
            }
        }
        $cartNew = count($total_product) > 0 ? array_values($cartNew) : [];
        Session::put("cart", $cartNew);

        return redirect()->back();
    }
}
