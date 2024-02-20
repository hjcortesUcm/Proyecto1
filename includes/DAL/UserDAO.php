<?php
namespace es\ucm\fdi\aw;

require_once __DIR__.'/../DTO/UserDTO.php';

class UserDAO
{
    public static function GetUser($userName)
    {
        // TODO: cargar el usuario desde la BD

        $result = false;

        if ($userName == "user")
        {
            $user = new UserDTO("user", "nombre usuario", "userpass", "usuario");

            $result = $user;
        }
        else if ($userName == "admin")
        {
            $user = new UserDTO("admin", "nombre administrador", "adminpass", "administrador");

            $result = $user;
        }

        return $result;
    }
}
