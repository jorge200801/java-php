
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; ">
    <title>JSP Page</title>
    <style>
        input[type=text], input[type=submit], select {
        
            text-aling:center;
            border-radius: 10px;
            border: 1px solid #39c;
        
        
        
        }
    
    
    
    </style>>
</head>
<body>
    <?php
        $numero1="";
        $numero2="";
        $suma = "";
        $mensaje="";
        
        if (isset($_POST['subSumar'])){
            $numero1 = $_POST['txtN1'];
            $numero2 = $_POST['txtN2'];
            if (is_numeric($numero1) && is_numeric($numero2)){
                $suma = $numero1 + $numero2;
            }else {
                $numero1="";
                $numero2="";
                $suma = "";
                $mensaje="";
                $mensaje="Datos Incorrectos";
                
            }
        }


    ?>
    <form action="proyecto.php methd="POST">
    	Numero 1? <input type="text" name="txtN1" size="10" value"<?php echo $numero1;?>" />
		Numero 2? <input type="text" name="txtN2" size="10" value"<?php echo $numero2;?>" />
		Resultado: <input type="text" name="txtR" size="10" value"<?php echo $suma;?>" disabled/>
		Mensaje: <input type="text" name="txtR" size="15" value"<?php echo $mensaje;?>" disabled/>
		<input type="submit" value="Sumar" name="subSumar" />
	</form>
</body>
</html>




