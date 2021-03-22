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
    $c="";
    
    if (isset($_POST['subSumar'])){
        $a = $_POST['txtN1'];
        $b = $_POST['txtN2'];
        $c = $_POST['txtN3'];
        
        $neg = -1;
        
        $menosb = $b * $neg;
        $oper1 = pow($b,2);
        $oper2 = 4*$a*$c;
        $resta = $oper1-$oper2;
        $raiz = pow($resta,(1/2));
        $dosa = 2*$a;
        
        $result1 = ($menosb + $raiz)/$dosa;
        $result2 = ($menosb - $raiz)/$dosa;
        
        echo"X<sub>1</sub> = $result1<br>";
        echo"X<sub>2</sub> = $result2"; 
    
    
    
    ?>
    <form action=2ndo_Grado.php methd="POST">
    	Numero 1? <input type="text" name="txtN1" size="10" value"<?php echo $a;?>" />
		Numero 2? <input type="text" name="txtN2" size="10" value"<?php echo $b;?>" />
		Numero 3? <input type="text" name="txtN3" size="10" value"<?php echo $c;?>" />
		<input type="submit" value="Sumar" name="subSumar" />
	</form>
</body>
</html>
