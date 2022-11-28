<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatiererController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = DB::select('select * from matiere');
        return view('matiere', compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|max:25',
            'libelle' => 'required',
            'coff' => 'required',

        ]);


        $mat = new Matiere;
        $mat->code = $request->input('code');
        $mat->libelle = $request->input('libelle');
        $mat->Coefficient = $request->input('coff');
        $mat->save();
        return redirect()->route('matiere');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mat = Matiere::find($id)->first();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'code' => 'required|max:25',
            'libelle' => 'required',
            'coff' => 'required',

        ]);

        $mat = Matiere::find($id);
        $mat->libelle = $request->input('libelle');
        $mat->Coefficient = $request->input('coff');
        $mat->save();
        return redirect('/matierees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = Matiere::find($id)->first();
        $mat->delete();
        return redirect()->route('matiere');

    }
}
