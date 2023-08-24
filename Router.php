<?php

namespace MVC;
class Router {
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url , $fn) {
        $this->rutasGET[$url] = $fn;
    }
    public function post($url , $fn) {
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas() {
        $currentUrl = $currentUrl = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];

        if($metodo === 'GET') {
            $fn = $this->rutasGET[$currentUrl] ?? null;
        } else {
            $fn = $this->rutasPOST[$currentUrl] ?? null;
        }

        if($fn) {
            // La funcion existe
            call_user_func($fn, $this);
        } else {
            echo "Pagina no encontrada";
        }
    }

    // Muestra una vista
    public function render($view, $datos = []) {
        foreach($datos as $key => $value) {
            $$key = $value;
        }

        $direccion = '/views/' . $view. '.php';

        ob_start();

        include __DIR__ . $direccion;
        $contenido = ob_get_clean();
        include __DIR__ . "/views/layout.php";
    }
}