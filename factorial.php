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
    $n="";
    $factor="";
        
        if (isset($_POST['subSumar'])){
            $n="";  $_POST['txtN1'];
            $factor = $_POST['txtN2'];
            
            if($factor<=0){
                echo "El nuemro no es valido";
                
            }else{
                
                for($i=1;$i<=$n;$i++){
                    
                    $factor=$factor*$n;
                    
                };
                return $factor;
            };
        }
    
    
    
    ?>
    <form action="proyecto.php methd="POST">
    	Numero? <input type="text" name="txtN1" size="10" value"<?php echo $n;?>" />
		
		<input type="submit" value="Sumar" name="subSumar" />
	</form>
</body>
</html>
