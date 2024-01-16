<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\Division;


class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $divisions=Division::where('division','like','%'.$search.'%')->get();
            return view('divisions.index')
                ->with('divisions', $divisions);
        }
        else
        {
            $divisions=Division::get();
            return view('divisions.index')
                ->with('divisions', $divisions);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $institutions=Institution::get();
        return view('divisions.create')->with('institutions', $institutions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $divisions=new Division([
            'division'=>$request->division,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        $divisions->institution()->associate(Institution::find($request->institution_id));

        $divisions->save();

        return redirect()->route('division.index')
            ->with('success','División creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $division=Division::find($id);
        return view('divisions.show', compact('division'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $division=Division::find($id);
        $institutions=Institution::get();
        return view('divisions.update', compact('division','institutions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $division=Division::find($id);

        $division->update([
            $division->division=$request->division,
            $division->description=$request->description,
            $division->institution->institution=$request->institution_id,
            $division->status=$request->status,
        ]);

        return redirect()
            ->route('division.index')
            ->with('success','División actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $division=Division::find($id);
        $division->delete();
        return redirect()
            ->route('division.index')
            ->with('danger','División eliminada correctamente');
    }
}
