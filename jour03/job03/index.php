<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
    $str = "I'm sorry Dave I'm afraid I can't do that.";
    $caractere = str_split($str);
    foreach ($caractere as $cara){
        if (in_array(strtolower($cara),array("a","e","i","o","u"))) {
            echo $cara;
        }
    }
 
    ?>
</body>
</html>