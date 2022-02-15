<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ENSA";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(isset($_POST['Envoyer']))
{
    $nom= $_POST['firstname'];
    $prenom= $_POST['name'];
    $Email=$_POST['email'];
    $Tel=$_POST['phone'];
    $Depart=$_POST['departement'];
    $Module=$_POST['module'];
    $Date=$_POST['date'];
    $Salle=$_POST['salle'];
    
    $connection->query("INSERT INTO Affectation (nom, prenom, email, telephone, departement, module, date, salle) VALUES ('$nom','$prenom',' $Email','$Tel','$Depart','$Module','$Date','$Salle')") or die($connection->error);
}
?>


