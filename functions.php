<?php

function dd($dump) {
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';    
}

function view($view, $data = []) {
    extract($data);
    require 'views/template/app.php';

}

?>