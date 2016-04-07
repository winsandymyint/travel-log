<?php
    if(isset($_GET["id"]))
    {
        $vid= $_GET["id"];
        include("../db.php");
        $str="delete from visit where Visitid=$vid";
        $res=mysql_query($str,$con);
        if(res){
            header("Location:index.php");
        }else{
            header("Location:index.php");
            // header("Location:allInsert.php?errorno=3");
        }
    }else{
        echo "not set";
    }
 ?>