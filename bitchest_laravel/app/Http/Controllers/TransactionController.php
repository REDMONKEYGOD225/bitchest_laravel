<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TransactionController extends Controller
{
    // Méthode pour recharger le solde du compte en euros
    public function rechargerSolde(Request $request)
    {
        // Récupérer le montant du rechargement et la devise depuis le formulaire
        $montantRechargement = $request->input('montant');
        $devise = $request->input('devise');

        if ($devise === 'FCFA') {
            // Convertir le montant en euros en utilisant le taux de conversion
            $tauxConversionFCFAToEUR = 655.90; // Exemple de taux de conversion (à remplacer par le vrai taux)
            $montantRechargementEuros = $montantRechargement / $tauxConversionFCFAToEUR;
        } else {
            // Le montant est déjà en euros
            $montantRechargementEuros = $montantRechargement;
        }

        // Récupérer l'utilisateur actuellement connecté
        $user = Auth::user();

        // Mettre à jour le solde de l'utilisateur en ajoutant le montant rechargé
        $user->sold += $montantRechargementEuros;
        $user->save();

        // Rediriger l'utilisateur avec un message de confirmation
        return redirect()->route('dashboard')->with('success', 'Solde rechargé avec succès.');
    }
}
