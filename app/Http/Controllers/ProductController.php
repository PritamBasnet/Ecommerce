<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::simplePaginate(15);
        return view('backend.pages.product.read',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'slug' => 'required|same:name|unique:products,slug',
            'image' => 'required|image',
            'category_id' => 'required',
            'description' => 'required',
        ]);
        // echo "<pre>";
        // print_r($request->all());
        $product = new Product();
        $product->name = ucwords($request['name']);
        $product->slug = ucwords(Str::slug($request->slug,'-'));
        $product->price = $request['price'];
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('product/images/',$fileName);
            $product->image = $fileName;
        }
        $product->category_id = $request['category_id'];
        $product->discount = $request['discount'];
        $product->description = $request['description'];
        $product->featured = $request['featured'];
        $save = $product->save();
        if(!$save)
        {
            return redirect()->back()->with('');
        }
        else
        {
            return redirect()->back()->with('success','Product Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $product = Product::find($id);
        if (is_null($product))
        {
            return redirect()->back()->with('');
        }
        else
        {
            return view('backend.pages.product.edit',compact('product'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'slug' => 'required|same:name|unique:products,slug',
            'image' => 'required|image',
            'category_id' => 'required',
            'description' => 'required',
        ]);
        $product = Product::find($id);
        if (is_null($product))
        {
            return redirect()->back()->with('');
        }
        else
        {
            $product->name = ucwords($request['name']);
            $product->slug = ucwords(Str::slug($request->slug,'-'));
            $product->price = $request['price'];
            if ($request->hasFile('image'))
            {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time().'.'.$extension;
                $file->move('product/images/',$fileName);
                $product->image = $fileName;
            }
            $product->category_id = $request['category_id'];
            $product->discount = $request['discount'];
            $product->description = $request['description'];
            $product->featured = $request['featured'];
            $save = $product->update();
            if(!$save)
            {
                return redirect()->back()->with('');
            }
            else
            {
                return redirect('/admin/dashboard/product/read')->with('success','Product Update Successfully');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $product = Product::find($id);
        if (is_null($product))
        {
            return redirect()->back()->with('');
        }
        else
        {
            $product->delete();
            return redirect()->back()->with('error','Product Delted');
        }
    }
}
