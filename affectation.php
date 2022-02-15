<!DOCTYPE html>

<html>

    <head>
           <title> Administrateur</title>
           <meta charset="utf-8">
           <link rel="stylesheet" href="stile3.css">
           
    </head>
    
    <body>
      
     
        
        
          <div class="bar"> </div>
          <div class="titre"> <h2>affectation des exames</h2></div>
          
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
                       <label for="departement">Departement<span class="bleu"> *</span></label>
                       <input type="text" id="departement" name="departement" class="form-control" placeholder="Département" required="required">
                        <p class="comment"> </p>
                       </div> 
                       
                    <div >
                       <label for="module">Module<span class="bleu"> *</span></label>
                       <input type="text" id="module" name="module" class="form-control" placeholder="Module" required="required">
                        <p class="comment"> </p>
                       </div>
                       
                    <div >
                       <label for="date">Date<span class="bleu"> *</span></label>
                       <input type="date" id="date" name="date" class="form-control" placeholder="Date" required="required">
                        <p class="comment"> </p>
                       </div>
                       
                    <div >
                       <label for="salle">Salle<span class="bleu"> *</span></label>
                       <input type="number" id="salle" name="salle" class="form-control" placeholder="Salle">
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
        
        session_start();
        
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
    $Depart=$_POST['departement'];
    $Module=$_POST['module'];
    $Date=$_POST['date'];
    $Salle=$_POST['salle'];
    

    
    $connection->query("INSERT INTO Affectation (nom, prenom, email, telephone, departement, module, date, salle) VALUES ('$nom','$prenom',' $Email','$Tel','$Depart','$Module','$Date','$Salle')") or die($connection->error);
    
    
}
?>

    
         
    
    </body>