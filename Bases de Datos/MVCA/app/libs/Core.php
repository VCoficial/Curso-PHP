<?php
/* Clase base que arma las rutas abreviadas del mvc controlador/metodo/parametro 
P.ej: medico/crearFormulaMedica/$id*/

class Core
{
    //setear los controlador, metodos y parametros iniciales del MVC
    protected $defaultController = 'Inicio';
    protected $defaultMethod = 'Index';
    protected $parameters = [];

    public function __construct()
    {
        $url = $this->getUrl(); //construye la clase y setea la url del mvc
        //1.0 verificamos si existe el controlar y lo invocamos
        if (file_exists('../app/controller/' . ucwords($url[0]) . '.php')) {
            $this->defaultController = ucwords($url[0]);
            unset($url[0]);
        }
        //invocamos al controlador
        require_once '../app/controller/' . $this->defaultController . '.php';
        $this->defaultController = new $this->defaultController;

        //2.0 invocamos el metodo correspondiente

        if (isset($url[1])) {
            if (method_exists($this->defaultController, $url[1])) {
                $this->defaultMethod = $url[1];
                unset($url[1]);
            }
        }
        //3.0 invocamos los parametros que pasemos por la url
        $this->parameters=$url ? array_values($url) : []; //si existen parametros los extrae del arreglo
        call_user_func_array([$this->defaultController,$this->defaultMethod],$this->parameters); //asigna los parametros usando una funcion callback
    }

    /* Toma la ruta de la url, la vuelve un arreglo y posteriormente en una ruta abreviada 
    *@return */
    public function getUrl()
    {
        $url = ""; // para almacenar la ruta abreviada
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return ['Inicio'];
    }
}
