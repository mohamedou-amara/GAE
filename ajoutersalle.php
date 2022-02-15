<!DOCTYPE html>

<html>

    <head>
           <title> Administrateur</title>
           <meta charset="utf-8">
           <link rel="stylesheet" href="stile3.css">
           
    </head>
    
    <body>
      
 
        
          <div class="bar"> </div>
          <div class="titre"> <h2>Ajouter salle</h2></div>
          
           <div class="row">
           <div>
               <center>
               <form id="affect" method="post" action="" class="affect">
                   
                       
                   <div>
                       <label for="Numero">Numero<span class="bleu"> *</span></label>
                       <input type="text" id="Numero" name="numero" class="form-control" placeholder="numero de la salle" required="required" class="inp">
                        <p class="comment"> </p>
                       </div>
                       
                       
                    <div>
                       <label for="etage">Etage<span class="bleu"> *</span></label>
                       <input type="text" id="etage" name="etage" class="form-control" placeholder="Etage de la salle" required="required">
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
  $num=$_POST['numero'];
  $etage=$_POST['etage'];   

    
    $connection->query("INSERT INTO salle ( nom,etage) VALUES ('$num','$etage')") or die($connection->error);
}
?>
    
         
    
    </body>