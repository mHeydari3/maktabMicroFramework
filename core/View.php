<?php
namespace App\core;

use App\core\Application;

class View {

    public function renderView($view ,array $array = [])
    {
        
        /* foreach ($array as $key=>$value){
            $$key=$value;   
        } */
        
        $layoutContent = $this->layoutContent($array);
        $viewContent = $this->renderOnlyView($view , $array );
        echo str_replace('{{content}}', $viewContent, $layoutContent);
        // require_once Application::$ROOT . "/../view/$view.php";
    }
    protected function layoutContent($array = [])
    {
        ob_start();
        require_once Application::$ROOT . "/../view/layout/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view , $array = [])
    {
        ob_start();
        require_once Application::$ROOT . "/../view/$view.php";
        return ob_get_clean();
    }


}

