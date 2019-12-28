<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    	/**
    	 * [__construct description]
    	 */
    	public function __construct()
    	{
    		 $this->middleware('auth');
    	}
    	/**
    	 * [index description]
    	 * @return [type] [description]
    	 */
    	public function index()
    	{
    		$product['product'] = Product::all();
    
    		return view("product.products",$product);
    	}
    	/**
    	 * [create description]
    	 * @return [type] [description]
    	 */
    	public function create()
    	{
    		return view('product.create');
    	}
    	/**
    	 * [store description]
    	 * @param  Request $request [description]
    	 * @return [type]           [description]
    	 */
    	public function store(Request $request)
    	{
    		$product = Product::create(['product_name' => $request->product,'qty' => $request->qty]);
    		if($product->id){
    			return redirect('/product');
    		}
    	}
    	/**
    	 * [update description]
    	 * @param  [type]  $id      [description]
    	 * @param  Request $request [description]
    	 * @return [type]           [description]
    	 */
    	public function update($id,Request $request)
    	{
    		$product = Product::find($id);
    		$updateArray['id'] = $product->id;
    		$updateArray['product_name'] = $product->product_name;
    		$updateArray['qty'] = $product->qty;
    		return view('product.update',$updateArray);
    	}
    	/**
    	 * [edit description]
    	 * @param  Request $request [description]
    	 * @return [type]           [description]
    	 */
    	public function edit(Request $request)
    	{

    		$product = Product::find($request->id);
			$product->product_name = $request->product;
			$product->qty = $request->qty;
			$isUpdated = $product->save();

			if($isUpdated){
				return redirect('/product');	
			}
			
    	}
    	/**
    	 * [delete description]
    	 * @return [type] [description]
    	 */
    	public function delete($id){
    		$product = Product::find($id);	 
			$product->delete(); 
    		return redirect('/product');
    	}
}
