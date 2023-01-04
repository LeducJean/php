<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exo1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>





<div>
       
<?php echo "<h1>coucou je suis pres et vous ?</h1>";

try {

    $ipserver ="192.168.65.231";
    $nomBase = "Ledcuuc Jean";
    $loginPrivilege ="SiteWeb";
    $passPrivilege ="SiteWeb";

    $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    $requete = "select * from Patient";

    $resultat = $GLOBALS["pdo"]->query($requete);
    //resultat est du coup un objet de type PDOStatement


    if ($resultat->rowCount() > 0) {
        while($tab = $resultat->fetch()){
            echo "le nom est :".$tab["nom"]." le prenom est : ".$tab["prenom"]." id : ".$tab["id"]."<br>";
        }
    }


} catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}





?> 
        
    </div>
    




</body>
</html>