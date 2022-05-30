<?php
$mysquli = new mysqli ("localhost", "root", "", "base_bayard");

$cosa=$_POST['cosa'];
$opt=$_POST['opt'];
$fecha= $_POST['fecha'];
$inasistencia=$_POST['inasistencia'];


$sql="INSERT INTO `registro_inasistencia`(`curso`, `alumno`,`fecha`, `inasistencia`) VALUES ('[$cosa]','[$opt]', '[$fecha]','[$inasistencia]')";
$query= mysqli_query($mysquli,$sql);

if($query){
    Header("Location: asistencia1.php");
    
}else {
}
?>