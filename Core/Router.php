<?php
class Router {
    public function run() {
        // Pega a URL digitada. Se estiver vazia, entende que é a raiz ('/')
        $url = isset($_GET['url']) ? $_GET['url'] : '/';

        if ($url == '/' || $url == 'home') {
            $controller = new InicialController();
            $controller->index();
        } else {
            echo "Página não encontrada!";
        }
    }
}