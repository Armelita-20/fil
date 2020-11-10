<?php

namespace App\Http\Controllers;

use App\Pressing;
use Illuminate\Http\Request;

class FormpressingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pressing = Pressing::all();
        return view('pagedashbord/liste-pressing', compact('pressing'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagedashbord/formpressing', compact('pressing'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pressing = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'lieu' => 'required|max:255',
            'tel' => 'required|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
            'photo' => 'required',
            ]);

            $pressing = Pressing::create($pressing);
            $pressing->photo=$request->photo->store('photo', 'public');
            $pressing->update();
            return back()->with('success', 'Pressing créer avec succes');
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
        $pressing = Pressing::find($request->id);
        return view('pagedashbord/editer-pressing', compact('pressing'));
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
        $pressing = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'lieu' => 'required|max:255',
            'tel' => 'required|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
            'photo' => 'required',
            ]);

            Pressing::whereId($id)->update($pressing);
            return back()->with('success', 'pressing créer avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pressing = Pressing::find($request->id);
        $pressing->delete();
        return back()->with('success', 'pressing supprimer avec succées');
    }
}
