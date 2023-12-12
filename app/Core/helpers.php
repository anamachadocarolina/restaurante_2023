<?php  //simplifica chamada de classes

if(!function_exists('pre')){
    function pre($data){
        echo '<pre>';
        print_r($data);
        echo '</pre><hr>';
    }
}

