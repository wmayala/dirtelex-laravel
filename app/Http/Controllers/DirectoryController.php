<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Institution;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Division;

class DirectoryController extends Controller
{
    public function contacts_dir(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $contacts=Contact::where('contact','like','%'.$search.'%')->get();
            return view('directory.contacts_dir')
                ->with('contacts', $contacts);
        }
        else
        {
            $contacts=Contact::get();
            return view('directory.contacts_dir')
                ->with('contacts', $contacts);
        }
    }

    public function institutions_dir(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $institutions=Institution::where('institution','like','%'.$search.'%')->get();
            return view('directory.institutions_dir')
                ->with('institutions', $institutions);
        }
        else
        {
            $institutions=Institution::get();
            return view('directory.institutions_dir')
                ->with('institutions', $institutions);
        }
    }

    public function categories_dir(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $categories=Category::where('category','like','%'.$search.'%')->get();
            return view('directory.categories_dir')
                ->with('categories', $categories);
        }
        else
        {
            $categories=Category::get();
            return view('directory.categories_dir')
                ->with('categories', $categories);
        }
        return view('directory.categories_dir');
    }

    public function subcategories_dir(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $subcategories=Subcategory::where('subcategory','like','%'.$search.'%')->get();
            return view('directory.subcategories_dir')
                ->with('subcategories', $subcategories);
        }
        else
        {
            $subcategories=Subcategory::get();
            return view('directory.subcategories_dir')
                ->with('subcategories', $subcategories);
        }
    }

    public function divisions_dir(Request $request)
    {
        if($request)
        {
            $search=$request->input('search');
            $divisions=Division::where('division','like','%'.$search.'%')->get();
            return view('directory.divisions_dir')
                ->with('divisions', $divisions);
        }
        else
        {
            $divisions=Division::get();
            return view('directory.divisions_dir')
                ->with('divisions', $divisions);
        }
    }
}
