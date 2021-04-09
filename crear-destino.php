<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="guardar-destino.php" method="GET">
    ciudadOrigen    <br>
            <select name="ciudadOrigen">
            <option value="Manizales">Manizales</option>
            <option value="Bogota">Bogota</option>
            <option value="Cali">Cali</option>
            <option value="Medellin">Medellin</option> 
        </select> <br><br>  
    ciudadDestino   <br>
            <select name="ciudadDestino">
            <option value="Manizales">Manizales</option>
            <option value="Bogota">Bogota</option>
            <option value="Cali">Cali</option>
            <option value="Medellin">Medellin</option> 
        </select> <br><br>   
    Acompañantes    <input type="text" name="Acompañantes"> <br> <br> 
             <input type="submit" value="guardar destino">
   </form>
</body>
</html>