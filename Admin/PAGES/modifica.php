<?php
session_start();
if(!isset($_SESSION["esiste"]))
    header('Location: ../../index.php');
$t=false;
$arr=array();
for($i=1;$i<=9;$i++)
{
    if(isset($_POST["categoria".$i]))
    {
        $t=true;
        $arr[]=$i;
    }else{
    }
}

if($t){
    if(isset($_POST["ID"]) && isset($_POST["nome"]) && isset($_POST["descrizione"]) && isset($_POST["costo"]))
    {
        function multiexplode ($delimiters,$string) {
   
            $ready = str_replace($delimiters, $delimiters[0], $string);
            $launch = explode($delimiters[0], $ready);
            return  $launch;
        }

        include "db_connect.php";
        $ID=mysqli_real_escape_string($conn,$_POST["ID"]);
        $nome=mysqli_real_escape_string($conn,$_POST["nome"]);
        $nome=str_replace(array("\\r","\\n","'")," ",$nome);
        $descrizione=mysqli_real_escape_string($conn,$_POST["descrizione"]);
        $descrizione=str_replace(array("\\r","\\n","'")," ",$descrizione);
        $costo=multiexplode(array(",","."), str_replace(' ', '', mysqli_real_escape_string($conn,$_POST["costo"])));
        if(count($costo)==1)
            $costo=$costo[0].".00";
        else
        {
            if(strlen($costo[1])!=0)
                $costo=$costo[0].".".$costo[1][0]."0";
            else
                $costo=$costo[0].".00";
        }
        if($_POST["attiva"]=="on")
        {
            $attiva=1;
        }else{
            $attiva=0;
        }
        $sql = "UPDATE Alimenti SET Nome='$nome',Ingredienti='$descrizione',Costo='$costo',Usata='$attiva' WHERE ID=$ID; ";
    
        if ($conn->query($sql) === TRUE) {
        }

        $sql = "DELETE FROM CategorieAlimenti WHERE ID_Alimenti=$ID";
        if ($conn->query($sql) === TRUE) {
        }

        $sql="";
        for($i=0;$i<count($arr);$i++)
        {
            $agg=$arr[$i];
            $sql .= "INSERT INTO CategorieAlimenti (ID_Alimenti, ID_Categorie) VALUES ('$ID', '$agg');"; 
        }
        if ($conn->multi_query($sql) === TRUE) {
        }
              
        $conn->close();
    }
}

header('Location: ../index.php');
?>