<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
use App\Http\Models\Category;
use App\Http\Classes\OProduct;
use Session;

class ProductCont extends Controller
{
	

    public function store(Request $request)
    {

      
   	}


    public function edit($lm)
    {
      $product = Product::select('*')->where('lm', '=', $lm)->get();
      $categories = Category::all();
      
      return view('edit')->with('product', $product)->with('categories', $categories);
    }

    public function update(Request $request, $id)
    {

            $this->validate($request, array(
                    'name' => 'required|max:255',
                    'price' => 'required',
                    'description' => 'required',
                ));

            $data = date("Y-m-d H:i:s");
            Product::where('id', $id)
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category' => $request->category,
                'free_shipping' => (bool)$request->free_shipping,
                'updated_at' => $data
                ]);

            
           Session::flash('success', 'Product was updated successfully');
           return redirect()->route('see');
    }

    public function delete($id)
    {

      $product = Product::find($id);
      $product->delete();
       Session::flash('success', 'The product has been deleted successfully.');
        return redirect()->route('see');
    }
}
