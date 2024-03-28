<?php

namespace App\Http\Controllers;

use App\Helpers_password\PasswordHelper;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use App\Models\CryptoMonnaie;

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

        // Création d'un nouvel utilisateur avec les données validées et le mot de passe haché
        $user = User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => $hashedPassword['bcrypt'], // Utilisation de bcrypt
        ]);

        // Redirection avec un message de succès
        return redirect()->route('users.index')->with('success', 'Utilisateur ajouté avec succès');
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
