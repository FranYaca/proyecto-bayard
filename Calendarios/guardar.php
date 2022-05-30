<?php

$mysquli = new mysqli ("localhost", "root", "", "base_bayard");


   if(isset($_POST['enviar'])){
       if(strlen($_POST['evento'])>=1){
           $fecha = $_POST ['fecha'];
           $evento = $_POST ['evento'];
           $descripcion = $_POST ['descripcion'];
           $save = "INSERT INTO `calendario1`(`Fecha`, `Evento`, `Descripcion`) VALUES ('$fecha','$evento','$descripcion')";
           $resultado=mysqli_query($mysquli, $save);
        
        if($resultado){
            header('Calendario1.php');
        } else {
            echo "error";
        }
        }; 
        
       
    }
    
    






?>