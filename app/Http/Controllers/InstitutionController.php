<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\Category;
use App\Models\Subcategory;


class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $institutions=Institution::where('institution','like','%'.$search.'%')->get();
            return view('institutions.index')
                ->with('institutions', $institutions);
        }
        else
        {
            $institutions=Institution::get();
            return view('institutions.index')
                ->with('institutions', $institutions);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();
        $subcategories=Subcategory::get();
        return view('institutions.create')
            ->with('categories', $categories)
            ->with('subcategories', $subcategories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $institutions=new Institution([
            'institution'=>$request->institution,
            'acronym'=>$request->acronym,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        $institutions->category()->associate(Category::find($request->category_id));
        $institutions->subcategory()->associate(Subcategory::find($request->subcategory_id));

        $institutions->save();

        return redirect()->route('institution.index')
            ->with('success','Institución creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $institution=Institution::find($id);
        return view('institutions.show', compact('institution'));
    }

    /**
     * Show the form for editing the specified resource.       ************ FALTA MODIFICAR LAS VISTAS **********
     */
    public function edit(string $id)
    {
        $institution=Institution::find($id);
        $categories=Category::get();
        $subcategories=Subcategory::get();
        return view('institutions.update', compact('institution','categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $institution=Institution::find($id);

        $institution->update([
            $institution->institution=$request->institution,
            $institution->acronym=$request->acronym,
            $institution->description=$request->description,
            $institution->category->category=$request->category_id,
            $institution->subcategory->subcategory=$request->subcategory_id,
            $institution->status=$request->status,
        ]);

        return redirect()
            ->route('institution.index')
            ->with('success','Institución actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $institution=Institution::find($id);
        $institution->delete();
        return redirect()
            ->route('institution.index')
            ->with('danger','Institución eliminada correctamente');
    }
}
