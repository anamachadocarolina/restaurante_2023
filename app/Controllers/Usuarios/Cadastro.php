<?php

namespace Controllers\Usuarios;
use Core\Controller;
use Core\View;
use Core\Request;


class Cadastro extends Controller{

    public function index(){
        $view = new View('usuarios.cadastro');
        $view->setTitle('Cadastro de Usuário')->show();
    }

    public function save(Request $request){
        pre($request->all());
    }

    public function find(Request $request){
        pre($request->all());
    }
}