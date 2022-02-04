<?php

if (isset($_POST(['name'])) && !empty($_POST(['email']))){

    $name = addcslashes($_POST(['name']));
    $senha = addcslashes($_POST(['senha']));

}


?>