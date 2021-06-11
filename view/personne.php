<?php
include 'controller/person.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
foreach ($persons as $key => $value){
    ?><h2><?php echo (strtoupper($value->getName()))?></h2><?php
    ?><h3><?php echo ($value->getFirstname())?></h3><?php
    ?><p><?php echo ($value->getage())?> ans</p><?php
    ?><p>Annèe de naissance : <?php echo ($value->getYearOfBirth())?></p><?php
    }
?>
    
</body>
</html>
