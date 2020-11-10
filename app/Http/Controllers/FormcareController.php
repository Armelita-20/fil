<?php

namespace App\Http\Controllers;

use App\CareWash;
use Illuminate\Http\Request;

class FormcareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $care = CareWash::all();
        return view('pagedashbord/liste-carewash', compact('care'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagedashbord/formcare');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $care = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'lieu' => 'required|max:255',
            'tel' => 'required|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
            'photo' => 'required',
            ]);

            $care =CareWash::create($care);
            $care->photo = $request->photo->store('photo', 'public');
            $care->update();
            return back()->with('success', 'Carewash créer avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $care = CareWash::find($request->id);
        return view('pagedashbord/editer-carewash', compact('care'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $care = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'lieu' => 'required|max:255',
            'tel' => 'required|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
            'photo' => 'required',
            ]);

            CareWash::whereId($id)->update($care);
            $care = CareWash::find($id);
            $care->photo = $request->photo->store('photo', 'public');
            $care->save();
            return back()->with('success', 'Carewash créer avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $care = CareWash::find($request->id);
        $care->delete();
        return back()->with('success', 'Carewash supprimer avec succées');
    }
}
