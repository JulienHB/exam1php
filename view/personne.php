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

    ?><h1>Employé :</h1><h2><?php echo (strtoupper($employee1->getName()))?></h2><?php
    ?><h3><?php echo ($employee1->getFirstname())?></h3><?php
    ?><p><?php echo ($employee1->getage())?> ans</p><?php
    ?><p><?php echo ($employee1->getSalary())?> € annuel</p>

    <h1>Client :</h1><h2><?php echo (strtoupper($client1->getName()))?></h2><?php
    ?><h3><?php echo ($client1->getFirstname())?></h3><?php
    ?><p><?php echo ($client1->getage())?> ans</p><?php
    ?><p>Société : <?php echo ($client1->getEntrepriseName())?></p><?php
?>
    
</body>
</html>
