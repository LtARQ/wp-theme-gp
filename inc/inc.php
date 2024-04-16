<?php

echo "File is included.";



$abc = array('name' =>'value');

foreach ($abc as $key => $value) {
    echo $key;
    echo $value;
    die;
}

?>