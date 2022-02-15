<!DOCTYPE html>

<html>

    <head>
           <title> Administrateur</title>
           <meta charset="utf-8">
           <link rel="stylesheet" href="stile3.css">
           
    </head>
    
    <body>
      
 
        
          <div class="bar"> </div>
          <div class="titre"> <h2>Ajouter proffesseur</h2></div>
          
           <div class="row">
           <div>
               <center>
               <form id="affect" method="post" action="" class="affect">
                   
                       
                   <div>
                       <label for="firstname">prenom<span class="bleu"> *</span></label>
                       <input type="text" id="firstname" name="firstname" class="form-control" placeholder=" prenom" required="required" class="inp">
                        <p class="comment"> </p>
                       </div>
                       
                   <div>
                       <label for="name">nom<span class="bleu"> *</span></label>
                       <input type="text" id="name" name="name" class="form-control" placeholder="nom" required="required" class="inp">
                       <p class="comment"> </p>
                       </div>
                       
                   <div >
                       <label for="email">Email<span class="bleu"> *</span></label>
                       <input type="email" id="email" name="email" class="form-control" placeholder="xxxxx@uae.ac.ma" pattern="[a-zA-Z]+.[a-zA-Z]+@uae.ac.ma" required="required">
                         <p class="comment"> </p>
                       </div>
                       
                   <div >
                       <label for="phone">Téléphone<span class="bleu"> *</span></label>
                       <input type="tel" id="phone" name="phone" class="form-control" placeholder="+212xxxxxxxxxx" required="required">
                        <p class="comment"> </p>
                       </div>
                       
                          <div>
                       
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
    $prenom= $_POST['name'];
    $Email=$_POST['email'];
    $Tel=$_POST['phone'];
    
    $connection->query("INSERT INTO professeur (nom, prenom, email, numerotelephone) VALUES ('$nom','$prenom','$Email','$Tel')") or die($connection->error);
}
?>
    
         
    
    </body>