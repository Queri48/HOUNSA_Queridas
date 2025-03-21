<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Oeuvre;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function liste()
    {
        $categories = Categorie::all();

        return view('admin.categorie.list',[
            'categories' => $categories
        ]);
    }

    public function ajouter()
    {
        return view('admin.categorie.create',[
            'categories' => $categories
        ]);
    }

    public function ajouter_traitement(Request $request)
    {
        Categorie::create($request->all());
        return redirect()->route('admin.categorie.liste');
    }

    public function modifier($id)
    {
        $categories = Categorie::findOrFail($id);

        return view('admin.categorie.edit',[
            'categories' => $categories
        ]);
    }

    public function modifier_traitement(Request $request, $id)
    {
        $categories = Categorie::findOrFail($id);

        $categories->update($request->all());
        $categories->save();
        return redirect()->route('admin.categorie.liste');
    }

    public function supprimer(Request $request, $id)
    {
        $article = Categorie::findOrFail($id);

        $article->delete();
        return redirect()->route('admin.categorie.liste')->with('success', 'Categorie supprimer avec succès.');
    }
}
