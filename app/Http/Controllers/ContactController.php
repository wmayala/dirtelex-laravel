<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Institution;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Division;

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
        $institutions=Institution::get();                            /////////////// TERMINAR FUNCIONES EN CONTACTO
        $divisions=Division::get();
        return view('contacts.create')
            ->with('institutions', $institutions)
            ->with('divisions', $divisions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contacts=new Contact([
            'contact'=>$request->contact,
            'position'=>$request->position,
            'code'=>$request->code,
            'phone'=>$request->phone,
            'extension'=>$request->extension,
            'mobile'=>$request->mobile,
            'fax'=>$request->fax,
            'email'=>$request->email,
            'specialFeature'=>$request->specialFeature,
            'clarification'=>$request->clarification,
            'address'=>$request->address,
            'typeContact'=>$request->typeContact,
            'language'=>$request->language,
            'status'=>$request->status,
        ]);
        $contacts->category()->associate(Category::find($request->category_id));
        $contacts->subcategory()->associate(Subcategory::find($request->subcategory_id));
        $contacts->division()->associate(Division::find($request->division_id));
        $contacts->institution()->associate(Institution::find($request->institution_id));

        $contacts->save();
        //dd($contacts);
        return redirect()->route('contact.index')
            ->with('success','Contacto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact=Contact::find($id);
        return view('contacts.show', compact('contact'));
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
