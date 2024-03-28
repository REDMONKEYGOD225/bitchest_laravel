<?php

namespace App\Helpers_password;

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
}
