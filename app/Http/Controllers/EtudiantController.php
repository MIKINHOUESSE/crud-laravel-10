<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Storage;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->photo = $photoPath;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'Etudiant ajouté avec succès');
    }
    public function update_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiant.update', compact('etudiant'));
    }

    public function update_etudiant_traitement(Request $request, $id)
    {
        $etudiant = Etudiant::find($id);

        // SI une nouvelle photo est envoyée
        if ($request->hasFile('photo')) {

            // Supprimer ancienne photo
            if ($etudiant->photo) {
                Storage::disk('public')->delete($etudiant->photo);
            }

            // Enregistrer nouvelle photo
            $nouvellePhoto = $request->file('photo')->store('photos', 'public');

            // Mettre à jour la colonne photo
            $etudiant->photo = $nouvellePhoto;
        }

        // Mettre à jour les autres champs
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;

        $etudiant->save();

        return redirect('/etudiant');
    }
    public function delete_etudiant($id)
    {
        $etudiants = Etudiant::find($id);
        $etudiants->delete();
        return redirect('/etudiant')->with('status', 'Etudiant supprimé avec succès');
    }
}