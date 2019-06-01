<?php
$val=  strtolower("PREMIUM");

switch($val){
    case "basic":{
        echo "<b>Plan básico.</b>";
        break;
    }
    case "premium":{
        echo "<b>Plan premium.</b>";
        break;
    }
    default:{
        echo "<b>opción inválida</b>";
    }
}

?>