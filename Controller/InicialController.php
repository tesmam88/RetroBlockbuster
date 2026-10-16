<?php
class InicialController {
    public function index() {
        // Aqui ele finaliza o processo e "puxa" a sua tela HTML para exibir
        require 'View/Inicial/index.php';
    }
}