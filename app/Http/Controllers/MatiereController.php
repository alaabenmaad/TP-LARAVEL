<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatiereController extends Controller
{
    public function index()
    {
        /*
        $matieres = [
            ['Code' => 'algo', 'Libelle' => 'algorithmique', 'Coefficient' => '3'],
            ['Code' => 'DevWeb', 'Libelle' => 'Developpemnt Web', 'Coefficient' => '3'],
        ];
        */
        //$matieres = DB::table('matiere')->get();
        //$matieres = DB::select('select * from matiere');
        $matieres = Matiere::all();
        return view('matiere', compact('matieres'));
    }

    public function store()
    {
        //DB::insert('insert into matiere (code, libelle, Coefficient) values (?, ?, ?)', ['algo', 'algorithmique', '3']);
        //DB::insert('insert into epreuve (date, lieu, code) values (?, ?, ?)', ['DevWeb', 'Developpemnt Web', '3']);
        $mat = new Matiere;
        $mat->code = "2CN";
        $mat->libelle = "2cnnnn";
        $mat->Coefficient = "2";

        $mat->save();

        return redirect('matiere');
    }

    public function findbyidmat()
    {
        //$eps = App\Models\Matiere::where('code', '2CN')->epreuves();
         //$eps = App\Models\Matiere::find(1)->epreuves();
         //$eps = App\Models\Matiere::epreuves()->where('code', '2CN')->first();
         //$eps = App\Models\Matiere::where('code', '2CN')->first()->epreuves()->get()
        
    }
}
