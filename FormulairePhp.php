<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo Formulaire en PHP</title>
</head>
<body>
Résultat du Formulaire : <br>
Société = <?php echo $_GET["Societe"]?> <br>
Contact = <?php echo $_REQUEST["Contact"]?> <br>
Adresse = <?php echo $_REQUEST["Adresse"]?> <br>
Code Postal = <?php echo $_REQUEST["CodPos"]?> <br>
Ville = <?php echo $_REQUEST["Ville"]?> <br>
E-Mail = <?php echo $_REQUEST["Mail"]?> <br>
Télépone = <?php echo $_REQUEST["Phone"]?> <br>
Technologies = <?php echo $_REQUEST["Choix"]?>

<?php
//$Client_Data = file_get_contents("php://input");

//echo "$Client_Data";
?>

</body>
</html>