<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Oeuvre;
use Illuminate\Http\Request;

class OeuvreController extends Controller
{
    public function liste()
    {
        $oeuvres = Oeuvre::all();

        return view('admin.oeuvre.list',[
            'oeuvres' => $oeuvres
        ]);
    }

    public function ajouter()
    {
        $categories = Categorie::all();

        return view('admin.oeuvre.create',[
            'categories' => $categories
        ]);
    }

    public function ajouter_traitement(Request $request)
    {
        Oeuvre::create($request->all());

        return redirect()->route('admin.oeuvre.liste');
    }

    public function modifier($id)
    {
        $oeuvres = Oeuvre::findOrFail($id);
        return view('admin.oeuvre.edit',[
            'oeuvres' => $oeuvres
        ]);
    }
    public function modifier_traitement(Request $request, $id)
    {
        $oeuvres = Oeuvre::findOrFail($id);

        $oeuvres->update($request->all());
        $oeuvres->save();
        return redirect()->route('admin.oeuvre.liste');
    }

    public function supprimer(Request $request, $id)
    {
        $article = Oeuvre::findOrFail($id);

        $article->delete();
        return redirect()->route('admin.oeuvre.liste')->with('success', 'Oeuvre supprimer avec succès.');
    }
}
