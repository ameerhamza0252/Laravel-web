<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::get();
        return view('product/products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Pname' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Quantity' => 'required'
        ]);
        $file = $request->file('image');
        $file_name = $file->getClientOriginalName();
        $data['image'] = $file_name;
        $file->move('uploads', $file_name);
        $productInfo = products::create($data);
        return redirect(url ('products'))->with('message','product added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = products::get();
        return view('product/Home', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = products::find($id);
        return view('product/editproduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Pname'=>'required',
            'Price'=>'required',
            'Description' => 'required',
            'Quantity' => 'required'
        ]);
        $products = products::find($id);
        $products->Pname = $request->get('Pname');
        $products->Price = $request->get('Price');
        $products->Description = $request->get('Description');
        $products->Quantity = $request->get('Quantity');
        if ($request->has('image')) {
            $file =$request->file('image');
            $file_name = $file->getClientOriginalName();
            $products['image'] = $file_name;
            $file->move('uploads', $file_name);
        }
        else {
            $product['image'] = $products->image;
        }
        $products->update();
        return redirect(url('products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = products::find($id);
        $products->delete();
        return redirect(url ('products'))->with('message','product deleted');
    }
}
