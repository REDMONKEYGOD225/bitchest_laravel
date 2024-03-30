<?php

namespace App\Helpers_password;
use App\Models\User;

class PasswordHelper
{
    // Méthode pour hasher le mot de passe avec bcrypt
    public static function bcrypt($password)
    {
        return bcrypt($password);
    }

    // Méthode pour hasher le mot de passe avec Hash::make
    public static function hashMake($password)
    {
        return \Illuminate\Support\Facades\Hash::make($password);
    }

    // Méthode pour hasher le mot de passe avec les deux méthodes simultanément
    public static function hashBoth($password)
    {
        return [
            'bcrypt' => bcrypt($password),
            'hashMake' => \Illuminate\Support\Facades\Hash::make($password)
        ];
    }

    public static function generateTemporaryPassword($length = 8)
    {
        // Caractères autorisés pour le mot de passe temporaire
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';

        // Générer le mot de passe aléatoire
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $password;
    }

    // Méthode pour sauvegarder le mot de passe dans la base de données
    public static function savePassword($userId, $newPassword)
    {
        // Récupérer l'utilisateur depuis la base de données
        $user = User::find($userId);

        // Vérifier si l'utilisateur existe
        if ($user) {
            // Mettre à jour le mot de passe de l'utilisateur
            $user->password = self::hashBoth($newPassword); // Utiliser la méthode hashMake pour hasher le nouveau mot de passe
            $user->save(); // Sauvegarder les modifications
            return true; // Retourner true si la sauvegarde est réussie
        }

        return false; // Retourner false si l'utilisateur n'existe pas
    }
}
