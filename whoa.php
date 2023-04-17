<?php
   $Con = mysqli_connect("localhost", "root", "", "controlvehicular30 f");
   $SQL = "INSERT INTO OFICIALES VALUES('12','1','1','1','1')";
   $Result = mysqli_query($Con, $SQL);
    //Formas de hacer "INSERT"
   // Implicita - INSERT INTO [TABLE NAME] VALUES("Valor1","Valor2","ValorN"...)
   // Explicita - INSERT INTO [TABLE NAME] (Atributo1, Atributo2, AtributoN, ...) VALUES("Valor1","Valor2","ValorN"...)

    

    $r = mysqli_close($Con);
    print_r($r);

?>