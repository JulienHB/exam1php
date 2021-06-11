<?php include 'controller/testForm.php';

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
        if(!empty($msg)):
    ?>
        <p><?php echo $msg; ?></p>
    <?php
    endif;?>

<form action="?action=form" method="post">
    <p>
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" />
    </p>
    <p>
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" />
    </p>
    <p>
        <label for="age">Age</label>
        <input type="text" id="age" name="age" />
    </p>
    <p>
        <label for="entreprise">Entreprise</label>
        <input type="text" id="entreprise" name="entreprise" />
    </p>
    <p>
        <label for="email">E-mail</label>
        <input type="text" id="email" name="email" />
    </p>
    <p>
        <input type="submit" name="send" value="Créer !" />
    </p>
</form>



    
</body>
</html>