        <?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ENSA";
    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    
    $update = false;    

    if(isset($_GET['delete']))
    {
      $id = $_GET['delete'];
      $connection->query("DELETE FROM Affectation WHERE id=$id") or die($connection->error); 
    }
    if(isset($GET['edit']))
    {
        $id = $_GET['edit'];
        $update = true;
        $result = $connection->query("SELECT * FROM Affectation WHERE id=$id")or die(connection->error());
        if(count($result)==1){
            $row = $result->fetch_array;
            $nom = $row['nom'];
            $prnom=$row['prenom']; 
            $Email=$row['email']; 
            $telephone=$row['telephone']; 
            $depart=$row['departement'];
            $module= $row['module']; 
            $date= $row['date']; 
            $salle=  $row['salle'];
        }
    }
 ?>
  <!DOCTYPE html>
  





<html>
  
      <head>
 <style>
h1
{
    font-family: 'crete round',sans-serif;
    font-size: 45px;
    color: #444;
    font-size: bold;
    text-transform: uppercase;
    text-align:center;
    border-bottom: 0.5px solid #5fbae9;
    margin-bottom: 10px;
}
</style>
      </head>

      <body>
      
          <h1>le contact a ete supprimer avec succees !!!!!</h1>
      
      </body>
</html>