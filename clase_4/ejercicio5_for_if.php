<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo de repeticion For If</title>
    <style>
        .estilo_par{
            color:red;
        }
        .estilo_impar{
            color:green;
        }
        </style>
</head>
<body>
  <?php  
for($x = 0 ; $x <= 100 ; $x++){
   
    if($x % 2 == 0){
        print "<p class = 'estilo_par'> $x </p>";
    }else{
        print "<p class = 'estilo_impar'> $x </p>";
    }
}

?>
</body>
</html>