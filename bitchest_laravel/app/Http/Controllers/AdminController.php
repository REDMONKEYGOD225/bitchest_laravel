<?php

namespace App\Http\Controllers;

use App\Helpers_password\PasswordHelper;
use App\Mail\TemporaryPasswordEmail;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use App\Models\CryptoMonnaie;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    // Ajouter un nouvel utilisateur à la base de données
    public function addUser(Request $request)
    {
        // Validation des données reçues du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Hachage du mot de passe en utilisant PasswordHelper
        $hashedPassword = PasswordHelper::hashBoth($validatedData['password']);

        // Création d'un nouvel utilisateur avec les données validées
    $user = User::create([
        'name' => $validatedData['name'],
        'username' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' => PasswordHelper::hashBoth($validatedData['password']), 
        'sold' => 500, // Crédit initial de 500 euros
    ]);

        // Créditer le compte de l'utilisateur de 500 euros
        $user->sold += 500; // Ajouter 500 euros au solde de l'utilisateur
        $user->save(); // Sauvegarder les modifications du solde

        // Redirection avec un message de succès
        return redirect()->route('users.index')->with('success', 'Utilisateur ajouté avec succès et crédité de 500 euros.');

        // Génération du mot de passe temporaire
        $temporaryPassword = PasswordHelper::generateTemporaryPassword();

        // Envoyer le mot de passe temporaire à l'administrateur par e-mail
        Mail::raw('Voici le mot de passe temporaire généré : ' . $temporaryPassword, function ($message) {
            $message->to('adresse_email_administrateur@example.com')->subject('Mot de passe temporaire généré');
        });

        // Redirection vers la page de confirmation
        return view('confirmation', ['temporaryPassword' => $temporaryPassword]);

        // Récupérer l'adresse e-mail de l'utilisateur depuis la base de données
        $userEmail = $user->email;

        // Récupérer l'utilisateur depuis la base de données en utilisant son adresse e-mail
        $user = User::where('email', $userEmail)->first();


        // Vérifier si l'utilisateur existe
        if ($user) {
            // Envoyer l'e-mail à l'utilisateur avec le mot de passe temporaire
            Mail::to($user->email)->send(new TemporaryPasswordEmail($temporaryPassword));
        } else {
             // Gérer le cas où l'utilisateur n'existe pas ou n'a pas d'e-mail enregistré
        return redirect()->back()->with('error', 'adresse email introuvable');
        }
    }

    // Voir la liste des utilisateurs présents dans la base de données
    public function showUsers()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    // Supprimer un utilisateur dans la base de données
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès');
    }

    // Modifier les données d'un utilisateur dans la base de données
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès');
    }

    // Ajouter une news dans la base de données
    public function addNews(Request $request)
    {
        // Votre logique pour ajouter une nouvelle news
    }

    // Voir la liste des news de la base de données
    public function showNews()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    // Voir la liste des cryptos du site ainsi que leurs cours actuels et les courbes
    public function showCryptoCurrencies()
    {
        $cryptos = CryptoMonnaie::all();
        // Ajoutez votre logique pour récupérer les cours actuels et les courbes
        return view('admin.crypto.index', compact('cryptos'));
    }
}
