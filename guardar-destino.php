<?php
    $ciudadOrigen = $_REQUEST ["ciudadOrigen"];
    $ciudadDestino = $_REQUEST ["ciudadDestino"];
    $Acompañantes = $_REQUEST ["Acompañantes"];

    //1.conectar a la base de datos
    $host = "localhost";
    $dbname = "aeropueto_db_2021_1";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //2.preparar la sentencia SQL
    $sql ="INSERT INTO destino (Id_Destino, ciudadOrigen, ciudadDestino, Acompañantes) VALUES (NULL, '$ciudadOrigen', '$ciudadDestino', '$Acompañantes')";
    //3. prepara SQL sentencia
    $q = $cnx->prepare($sql);
    //4. Ejecuto SQL sentencia
    $result = $q->execute();

    if($result){
        echo "El destino se ha guardado";
    }
    else{
        echo "El destino no se guardo $ciudadOrigen";
    }
?>