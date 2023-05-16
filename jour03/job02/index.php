<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
        for ($caracter = 0; $caracter < strlen($str); $caracter += 2){
        echo $str[$caracter];
    }
 
    ?>
</body>
</html>