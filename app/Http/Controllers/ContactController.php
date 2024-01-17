<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $contacts=Contact::where('contact','like','%'.$search.'%')->get();
            return view('contacts.index')
                ->with('contacts', $contacts);
        }
        else
        {
            $contacts=Contact::get();
            return view('contacts.index')
                ->with('contacts', $contacts);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();                            /////////////// TERMINAR FUNCIONES EN CONTACTO
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
