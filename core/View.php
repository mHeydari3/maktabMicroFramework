<?php
namespace App\core;

use App\core\Application;

class View {

    public function renderView($view ,array $array)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);
        return str_replace('{{content}}', $viewContent, $layoutContent);
        // require_once Application::$ROOT . "/../view/$view.php";
    }
    protected function layoutContent()
    {
        ob_start();
        require_once Application::$ROOT . "/../view/layout/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view )
    {
        ob_start();
        require_once Application::$ROOT . "/../view/$view.php";
        return ob_get_clean();
    }

}

