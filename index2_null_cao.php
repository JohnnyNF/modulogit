<?php 



switch($door) { 
    case 1: 
        echo "Você está entrando pela porta errada."; 
            break; 
    case 2: 
    case 3:
        echo "Você está entrando por uma porta certa."; 
            break;
    default: 
        echo "Você não escolheu nenhuma porta válida."; 
            break;
        }