<?php

/* Essa classe vai gerenciar as views da nossa aplicação
 */


namespace Core;

class View{
    private $view; /* private -> só consegue acessar ele de dentro da classe, public -> Consegue acessar do lado de fora tbm, protected -> Consegue acessar ele e seus filhos, mas só de dentro*/

    private $template;

    private $data;


    public function __construct($view,$template = TEMPLATE_DEFAULT, $data = []){
        $this->view = $view; /* Este objeto recebe na sua view a view que o usuário passou */
        $this->template = $template;
        $this->data = $data;
    }

    private function createStringRequireView()
    {
        $view = preg_replace("(\.view.php$)", '', $this->view);
        $view = str_replace(".", '/', $view);
        return VIEWS_PATH."/".$this->view.".view.php";// return VIEWS_PATH."/".$view.".php";
    }

    private function createStringRequireTemplate()
    {
        $template = preg_replace("(\.template.php$)", '', $this->template);
        $template = str_replace(".", '/', $template);
        return TEMPLATES_PATH."/".$this->template.".template.php";// return VIEWS_PATH."/".$view.".php";
    }

    public function __set($name, $value){
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return (isset($this->data[$name])) ? $this->data[$name] : null;
    }

    private function getTemplateConfigs(){
        return Configs::getConfig('templates');
    }

    public function show($data = [])
    {
        $data = array_merge($this->data, $data);
        extract($data);
        $template = $this->getTemplateConfigs();
        require $this->createStringRequireView();// require $this->view
        $view = ob_get_clean();
        require $this->createStringRequireTemplate(); /*require -> carrega um arquivo mesma que ele já tenha sido carregado - Se ele não achar o arquivo ele dá erro / require_once -> carrega um arquivo apenas se ele não foi carregado / include -> se ele não achar o arquivo, ele continua o código*/
    }
}