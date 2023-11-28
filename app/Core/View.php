<?php

/* Essa classe vai gerenciar as views da nossa aplicação
 */


namespace Core;

class View{
    private $view; /* private -> só consegue acessar ele de dentro da classe, public -> Consegue acessar do lado de fora tbm, protected -> Consegue acessar ele e seus filhos, mas só de dentro*/

    private $template;

    public function __construct($view,$template){
        $this->view = $view; /* Este objeto recebe a na sua view a view que o usuário passou */
        $this->template = $template;
    }


    public function show(){
        require $this->template; /*require -> carrega um arquivo mesma que ele já tenha sido carregado - Se ele não achar o arquivo ele dá erro / require_once -> carrega um arquivo apenas se le não foi carregado / include -> se ele não achar o arquivo, ele continua o código*/
    }
}