<?php
function Conectar(){
    $Server = "localhost";
    $User = "root";
    $Pws = "";
    $BD = "controlvehicular30 f";
    $Con = mysqli_connect($Server, $User, $Pws, $BD);
    return $Con; // Va a retornar un objeto
}

function Ejecutar($Con, $SQL){
    $Result = mysqli_query($Con, $SQL);
    return $Result; // Va a retornar un 1, 0 (error) o la relacion
}

function Procesar(){

}

function Desconectar($Con){
    $R = mysqli_close($Con);
    return $R; // Va a regresar un 1 o un 0 (error)
}
?>



<!-- Proceso de coneccion con BD -->
<!-- 1. Conectar al SMBD
2. Seleccionarla base de datos
3. Ejecutar la consulta
4. Procesar los resultados
5. Cerrar la conexion -->



<!-- 
    Nombre: mysqli_num_rows
    Descripcion: Cuenta las filas resultantes de una consulta
    Parametro de entrada: Result
    Parametro de salida: Numero: Cantidad de elementos afectados
 -->

 <!-- 
    Ejemplo:

    include(Conexion.php);
    $SQL = "Select * from licencias "
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    /////////////////
    $Numero = mysqli_num_rows($Result);
    print($Numero);
    /////////////////
    Desconectar();
  -->


  <!-- 
    Funciones utiles:
    mysqli_affected_rows
    mysqli_num_rows
    mysqli_fetch_row
    mysqli_error
-->