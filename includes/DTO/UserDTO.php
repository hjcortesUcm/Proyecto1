<?php
namespace es\ucm\fdi\aw;

class UserDTO
{
    private $id;

    private $nombreUsuario;

    private $nombre;

    private $password;

    private $rol;

    public function __construct($nombreUsuario, $nombre, $password, $rol)
    {
        $this->nombreUsuario= $nombreUsuario;
        $this->nombre = $nombre;
        $this->password = $password;
        $this->rol = $rol;
    }

    public function Id()
    {
        return $this->id;
    }

    public function NombreUsuario()
    {
        return $this->nombreUsuario;
    }

    public function Nombre()
    {
        return $this->nombre;
    }

    public function Password()
    {
        return $this->password;
    }

    public function Rol()
    {
        return $this->rol;
    }
}
