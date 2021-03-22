
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
    $a = "";
    $b="";
    
    if (isset($_POST['subSumar'])){
        $a =  $_POST['txtN1'];
        $b = $_POST['txtN2'];
        
        if($a>0){
            $x = -$b/$a;
            echo $x;
            
        }elseif ($a== 0){
            echo "indefinido";
        }else{
            echo "infinito";
        }
    }
    
    
    
    ?>
    <form action="proyecto.php methd="POST">
    	Numero 1? <input type="text" name="txtN1" size="10" value"<?php echo $numero1;?>" />
		Numero 2? <input type="text" name="txtN2" size="10" value"<?php echo $numero2;?>" />
		<input type="submit" value="Sumar" name="subSumar" />
	</form>
</body>
</html>