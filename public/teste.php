<?php

use Models\Config;
use Models\Produto;

require_once('../app/application.php');

$model = new Produto(1);
//$model->save(['name'=>'Root_User', 'value'=>'Joaquim']);
$model->delete();

all($model);


function all($model){
    $configs = $model->all();
    array_walk($configs, function($config){
    echo $config->id . " | " . $config->nome . " | " . $config->valor_un . "<hr>"; 
    });
}



// all($model->where('id','>',30));

// defined($config->name)  || define($config->name, $config->value);

// echo VERSION;