<?php
namespace es\ucm\fdi\aw;

/**
 * Clase que mantiene el estado global de la aplicación.
 */
class Application
{
	private static $instancia;

	/**
	 * Almacena si la Aplicacion ya ha sido inicializada. modificado!!
	 * 
	 * @var boolean
	 */
	private $inicializada = false;
	
	/**
	 * Permite obtener una instancia de <code>Aplicacion</code>.
	 * 
	 * @return Application Obtiene la única instancia de la <code>Aplicacion</code>
	 */
	public static function getSingleton() 
	{
		if ( ! self::$instancia instanceof self) 
		{
			self::$instancia = new self;
		}

		return self::$instancia;
	}

	/**
	 * Evita que se pueda instanciar la clase directamente.
	 */
	private function __construct() 
	{

	}
	
	/**
	 * Inicializa la aplicación.
	 * 
	 */
	public function init()
	{
        if ( ! $this->inicializada ) 
		{
    		session_start();

			$this->inicializada = true;
        }
	}
	
	/**
	 * Cierre de la aplicación.
	 */
	public function shutdown()
	{
		// Liberar recursos
	    // Cerrar conexiones a BBDD
	}
}