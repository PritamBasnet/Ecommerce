<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::simplePaginate(15);
        return view('backend.pages.category.read',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->category = ucwords($request['category']);
        $category->slug = ucwords(Str::slug($request->slug,'-'));
        $save = $category->save();
        if (!$save)
        {
            return redirect()->back()->with('oops','We Could Store Category');
        }
        else
        {
            return redirect()->back()->with('success','Category Store Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $category = Category::find($id);
        if (is_null($category))
        {
            return redirect()->back()->with('oops','Category is Missing');
        }
        else
        {
            return view('backend.pages.category.edit',compact('category'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        $category = Category::find($id);
        $category->category = ucwords($request['category']);
        $category->slug = ucwords(Str::slug($request->slug,'-'));
        $save = $category->update();
        if (!$save)
        {
            return redirect()->back()->with('oops','Something Went worng');
        }
        else
        {
            return redirect('/admin/dashboard/category/read')->with('success','Category Updated Successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        $category = Category::find($id);
        if(is_null($category))
        {
            return redirect()->back()->with('oops','Category is missing');
        }
        else
        {
            $category->delete();
            return redirect()->back()->with('error','Category Delted');
        }
    }
}
