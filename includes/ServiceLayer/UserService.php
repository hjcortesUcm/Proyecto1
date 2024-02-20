<?php
namespace es\ucm\fdi\aw;

require_once __DIR__.'/../DAL/UserDAO.php';

class UserService
{
    public static function login($nombreUsuario, $password)
    {
        $user = UserDAO::GetUser($nombreUsuario);
        
        if ($user && $user->Password() === $password) 
        {
            return $user;
        }

        return false;
    }
}