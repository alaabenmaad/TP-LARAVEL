<?php

namespace App\Http\Controllers;

use App\Models\Epreuve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class EpreuveController extends Controller
{
    public function index()
    {
        /*
        $epreuves = [
            ['Date' => '23/09/2019', 'Lieu' => '110', 'Code' => 'Algo'],
            ['Date' => '24/09/2019', 'Lieu' => '112 ', 'Code' => 'Dev Web'],
        ];

        return view('epreuve', compact('epreuves'));
        */
        //$epreuves = DB::select('select * from epreuve');

        $epreuves = Epreuve::query()->select()->get();

        return view('epreuve', compact('epreuves'));
    }

    public function store(Request $req)
    {
        //DB::insert('insert into epreuve (date, lieu, code) values (?, ?, ?)', ['23/09/2019', '110', 'Algo']);
        //DB::insert('insert into epreuve (date, lieu, code) values (?, ?, ?)', ['24/09/2019', '112', 'Dev Web']);
        /*
        $ep = new Epreuve;
        $ep->date = "20/20/2020";
        $ep->lieu = "salle 999";
        $ep->code = "2CN";
        $ep->codemat = 1;
        $ep->save();
        return redirect('epreuve');
        */
        $req->validate([
            'matiere_id' => 'required|max:25',
            'date' => 'required',
            'lieu' => 'required',
        ]);


        return view('epForm', compact('errors'));
    }

    //$eps = App\Models\Epreuve::find(1)->matiere()->first()->libelle;

    //$eps = App\Models\Epreuve::find(1)->matiere()->where('code', '2CN')->first();
    //$eps = App\Models\Epreuve::where('codemat', '1')->first();
}
