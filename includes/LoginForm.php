<?php
namespace es\ucm\fdi\aw;

require_once __DIR__.'/ServiceLayer/UserService.php';

class LoginForm extends Form
{
    public function __construct() {
        parent::__construct('formLogin');
    }
    
    protected function CreateFields($datos)
    {
        $nombreUsuario = '';
        if ($datos) {
            $nombreUsuario = isset($datos['nombreUsuario']) ? $datos['nombreUsuario'] : $nombreUsuario;
        }
        $html = <<<EOF
        <fieldset>
            <legend>Usuario y contraseña</legend>
            <p><label>Nombre de usuario:</label> <input type="text" name="nombreUsuario" value="$nombreUsuario"/></p>
            <p><label>Password:</label> <input type="password" name="password" /></p>
            <button type="submit" name="login">Entrar</button>
        </fieldset>
EOF;
        return $html;
    }
    

    protected function Process($datos)
    {
        $result = array();
        
        $nombreUsuario = isset($datos['nombreUsuario']) ? $datos['nombreUsuario'] : null;
                
        if ( empty($nombreUsuario) ) 
        {
            $result[] = "El nombre de usuario no puede estar vacío";
        }
        
        $password = isset($datos['password']) ? $datos['password'] : null;
        if ( empty($password) ) 
        {
            $result[] = "El password no puede estar vacío.";
        }
        
        if (count($result) === 0) 
        {
            $usuario = UserService::login($nombreUsuario, $password);

            if ( ! $usuario ) 
            {
                // No se da pistas a un posible atacante
                $result[] = "El usuario o el password no coinciden";
            } 
            else 
            {
                $_SESSION['login'] = true;
                $_SESSION['nombre'] = $nombreUsuario;
                $_SESSION['esAdmin'] = strcmp($usuario->rol(), 'administrador') == 0 ? true : false;
                $result = 'index.php';
            }
        }
        return $result;
    }
}