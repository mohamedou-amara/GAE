

<! DOCTYPE html>



<html>
    
    
    <head>
     <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" >
        <title> Authentification  </title>
    </head>
    
  <body>
      
      
       <header>
        
        <div class="wrapper">
        
            <img src="image/ensa%20logo.png">
            

            
            <div class="clear"></div>
        </div>
           
           
        
    </header>
    
    <section id="main-image">
        
        <div class="log">
          
              <div id="formContent">
                                                       <!-- titre du tableau -->
                     <h2 class="active"> SE CONECTER </h2>
                     

                                                        <!-- logo -->
                     <div class="logo">
                     <img src="image/logo-vertical-ensate-300x108.png" />
                     </div>

                                                      <!-- formulaire login -->
                     
                     <form action ="" method="post">
                     <input type="text" id="login" class="fadeIn second" name="login" placeholder="Email" pattern="[a-zA-Z]+.[a-zA-Z]+@uae.ac.ma" required="required">
                      <input type="password" id="password" class="fadeIn third" name="passwd" placeholder="mot de passe" required="required">
                      <input type="submit" class="fadeIn fourth" value="Conecter" name="connecter">
                     </form>

                                                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                    <a class="underlineHover" href="#contact"> Mot de passe oublier?</a>
                    </div>

         </div>
        
        </div>
    
    
    </section>


      <footer>
         <div class="wrapper">
            
              <div class="foot">
               <ul>
                  <li><a href="https://www.facebook.com/ENSA.TETOUAN.Page.Officielle/"><img src="image/facebook.png"></a></li>
                   <li><a href="https://twitter.com/EnsaTetouan"><img src="image/twitter--v1.png"></a></li>
                   <li><a href="https://www.instagram.com/ensate_officiel/"><img src="image/instagram-logo-png-2429.png"></a></li>
                   <li><a href="https://www.linkedin.com/company/ensa-tetouan/"><img src="image/linkedin.png"></a></li>
                  </ul>
             </div>
              <h5>ENSA Tétoun<span class="orange"> 2021.</span> </h5>
        </div>    
        
    </footer>
          
      
    </body>
    
          <?php

    $connection =mysqli_connect("localhost", "root","", "ENSA"); 
      if($_POST)
      {
       $Email = $_POST["login"];
       $password = $_POST["passwd"];
       $query = mysqli_query($connection,"SELECT * FROM users WHERE email='$Email' AND password = '$password'");
          $verification=mysqli_num_rows($query);
		if($verification == 1){
			if($query){
                $connecter = mysqli_fetch_assoc($query);
               header("location: acueil.php");
			 
	         }
          else{
		
		echo "verifier votre login ou mot de passe " ; 
		}}
      }
      ?>
    
    
</html>