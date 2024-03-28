<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Account;
use App\Models\Cotation;
use App\Models\CryptoMonnaie;
use App\Models\News;
use App\Models\Purchase;
use App\Models\Sell;
use App\Models\Transaction;
use App\Models\Wallet;

class UserController extends Controller
{
    // Afficher les détails de l'utilisateur
    public function show($userId)
    {
        $user = User::find($userId);

        if ($user) {
            return view('profile.profile', ['user' => $user]);
        } else {
            abort(404);
        }
    }

    // Acheter et vendre des cryptos
    public function buySell()
    {
        // Récupérer la liste des cryptos disponibles
        $cryptos = CryptoMonnaie::all();

        return view('profile.partials.achat-vente', ['cryptos' => $cryptos]);
    }

    // Envoyer des cryptos
    public function send()
    {
        // Logique pour envoyer des cryptos
        // Par exemple, récupérer les informations de l'utilisateur connecté
        $userId = auth()->user()->id;
        $userWallet = Wallet::where('user_id', $userId)->first();

        // Charger la vue avec les informations nécessaires
        return view('profile.partials.envois', ['userWallet' => $userWallet]);
    }

    // Échanger des cryptos
    public function exchange()
    {
        // Logique pour échanger des cryptos
        // Par exemple, récupérer la liste des cryptos disponibles pour l'échange
        $cryptos = CryptoMonnaie::all();

        return view('profile.partials.echange', ['cryptos' => $cryptos]);
    }

    // Recevoir des cryptos
    public function receive()
    {
        // Logique pour recevoir des cryptos
        // Par exemple, récupérer l'historique des transactions de l'utilisateur connecté
        $userId = auth()->user()->id;
        $transactions = Transaction::where('user_id', $userId)->get();

        return view('profile.partials.recevoir', ['transactions' => $transactions]);
    }

    // Consulter la liste des news
    public function listNews()
    {
        // Récupérer la liste des actualités
        $articles = News::all();

        return view('profile.partials.news', ['articles' => $articles]);
    }
}