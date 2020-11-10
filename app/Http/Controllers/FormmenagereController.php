<?php

namespace App\Http\Controllers;

use App\Menagere;
use App\statut;
use Illuminate\Http\Request;

class FormmenagereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menagere = Menagere::all();
        return view('pagedashbord/liste-menagere', compact('menagere'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagedashbord/formmenagere', compact('menagere'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $statut=statut::create([
            'titre'=>$request->titre,
           ]);
           $statut->save();
            $menagere=Menagere::create([
                'statut_id'=>$statut->id,
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'date'=>$request->date,
                'lieunaiss'=>$request->lieunaiss,
                'cnib'=>$request->cnib,
                'tel'=>$request->tel,
                'genre'=>$request->genre,
                'photo'=>$request->photo->store('photo', 'public'),
               ]);

            $menagere->save();
            return back()->with('success', 'menagere créer avec succes');
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

        $menagere = Menagere::find($request->id);
        return view('pagedashbord/editer-menagere', compact('menagere'));
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
        $miseajour= Menagere::find($request->id);
        $miseajour->id=$request->id;
        $miseajour->nom=$request->nom;
        $miseajour->prenom=$request->prenom;
        $miseajour->date=$request->date;
        $miseajour->lieunaiss=$request->lieunaiss;
        $miseajour->id=$request->id;
        $miseajour->cnib=$request->cnib;
        $miseajour->tel=$request->tel;
        $miseajour->statut_id=$request->statut_id;
        $miseajour->genre=$request->genre;
        $miseajour->photo=$request->photo;
        $miseajour->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $menagere = Menagere::find($request->id);
        $menagere->delete();
        return back()->with('success','Suppression reussie');
    }



}
