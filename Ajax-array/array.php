<?php
    include_once("conexao.php");

    $sql="SELECT cliente_fat FROM painelajofer LIMIT 1";

    $resultado = mysqli_query($conn, $sql);
    $rowArr = mysqli_fetch_assoc($resultado);

    $sql2="SELECT CONHECIMENTO   FROM painelajofer LIMIT 1";

    $resultado2 = mysqli_query($conn, $sql2);
    $rowArr2 = mysqli_fetch_assoc($resultado2);


    echo $rowArr['cliente_fat']."%".$rowArr2['CONHECIMENTO']

?>