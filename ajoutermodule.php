<!DOCTYPE html>

<html>

    <head>
           <title> Administrateur</title>
           <meta charset="utf-8">
           <link rel="stylesheet" href="stile3.css">
           
    </head>
    
    <body>
      
 <?php?>
        
          <div class="bar"> </div>
          <div class="titre"> <h2>Ajouter module</h2></div>
          
           <div class="row">
           <div>
               <center>
               <form id="affect" method="post" action="" class="affect">
                   
                       
                   <div>
                       <label for="Module">Nom<span class="bleu"> *</span></label>
                       <input type="text" id="Module" name="firstname" class="form-control" placeholder="proffesseur" required="required" class="inp">
                        <p class="comment"> </p>
                       </div>
                       
                       
                    <div>
                       <label for="Prof">professeur<span class="bleu"> *</span></label>
                       <input type="text" id="Prof" name="professeur" class="form-control" placeholder="professeur" required="required">
                        <p class="comment"> </p>
                       </div> 
                       
                                              
                    <div >
                       <label for="module">Departement<span class="bleu"> *</span></label>
                       <input type="text" id="Departement" name="Departement" class="form-control" placeholder="Salle">
                        <p class="comment"> </p>
                       </div>
                       
                    <div >
                       
                        <input type="submit" class="button1" value="Envoyer" name="Envoyer">
                        
                       </div>   
                      
                
               
               </form>
                </center>
               </div>
          
          
          </div>
        
<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ENSA";
    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(isset($_POST['Envoyer']))
{
    $nom= $_POST['firstname'];
    $Prof=$_POST['professeur'];
    $Depart=$_POST['Departement'];
    
    $connection->query("INSERT INTO module (nom,professeur,departement) VALUES ('$nom',' $Prof','$Depart')") or die($connection->error);
}
?>
    
         
    
    </body>