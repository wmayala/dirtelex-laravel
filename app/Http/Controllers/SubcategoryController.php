<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $subcategories=Subcategory::where('subcategory','like','%'.$search.'%')->get();
            return view('subcategories.index')
                ->with('subcategories', $subcategories);
        }
        else
        {
            $subcategories=Subcategory::get();
            return view('subcategories.index')
                ->with('subcategories', $subcategories);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();
        return view('subcategories.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subcategories=new Subcategory([
            'subcategory'=>$request->subcategory,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        $subcategories->category()->associate(Category::find($request->category_id));

        $subcategories->save();

        return redirect()->route('subcategory.index')
            ->with('success','Subcategoría creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subcategory=Subcategory::find($id);
        return view('subcategories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subcategory=Subcategory::find($id);
        $categories=Category::get();
        return view('subcategories.update', compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subcategory=Subcategory::find($id);

        $subcategory->update([
            $subcategory->subcategory=$request->subcategory,
            $subcategory->description=$request->description,
            $subcategory->category->category=$request->category_id,
            $subcategory->status=$request->status,
        ]);

        return redirect()
            ->route('subcategory.index')
            ->with('success','Subcategoría actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategory=Subcategory::find($id);
        $subcategory->delete();
        return redirect()
            ->route('subcategory.index')
            ->with('danger','Subcategoría eliminada correctamente');
    }
}
