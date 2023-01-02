<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Session;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::all();
      return view('product',['products'=>$product]);
    }
    public function detail($id)
    {
        $data= Product::find($id);
        return view('detail',['detail'=>$data]);
    }
    public function search(Request $request)
    {
        
         $data=Product::where('name','like','%'.$request->input('query').'%')->get();

         return view('search',['products'=>$data]);
   }
   public function addToCart(Request $request)

   {
    if($request->session()->has('user'))
    {
      $cart=new Cart;
      $cart->user_id= $request->session()->get('user')['id'];
      $cart->product_id=$request->product_id;
      $cart->save();
      return redirect('/login');

    }
    
   }
  public function cartItem()
  {
    $userId =Session()->get('user')['id'];
    return Cart::where('user_id',$userId)->count();
  }
}