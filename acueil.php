<!doctype html>

<html>

<head>
    <title>Acceuil</title>
    <link rel="stylesheet" href="style2.css" >
    </head>

    <body>
    
    <header>
        
        <div class="wrapper">
        
            <img src="image/ensa%20logo.png">
            
        <nav>
        
        <ul>    
            
        <li> <a href="affectation.php"> affectation </a></li>
            
        <li><a href="ajoutersalle.php"> salle </a></li>
         
        <li><a href="ajoutermodule.php"> Module </a></li>
        
        <li><a href="ajouterprofesseur.php"> proffesseur </a></li>   
            
        </ul>
            
        </nav>
            
            <div class="clear"></div>
       
        </div>
           
        </header>
        <?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ENSA";
    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    $result = $connection->query("SELECT * FROM Affectation ") or die($connection->error); ?>
    
        <h1>etat actueil des affectation</h1>
        
        <table class="tableau">
       <thead>     
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>telephone</th>
            <th>departement</th>
            <th>module</th>
            <th>date</th>
            <th>salle</th>
            <th>Editer</th>
            </tr>
      
        </thead>
        <?php
            while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telephone']; ?></td>
            <td><?php echo $row['departement']; ?></td>
            <td><?php echo $row['module']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['salle']; ?></td>
            <td><a href="affectation.php?edit=<?php echo $row['id'];?>" class="bottona">Modifier</a>
             <a href="Editer.php?delete=<?php echo $row['id'];?>" class="bottonb">Supprimer</a>   
            </td>
            </tr>     
            <?php endwhile;?>
        </table>
        
        
<?php
    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?>
    
      
        
        <?php if($update == true):
            
              include("affectation.php");
            
        ?>
        
        <?php endif ?>
    

        
    </body>
    
    
</html>