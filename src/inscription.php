<?php
$mysqli = new mysqli("db", "root", "example", "company1");

//-----------------------------------------------------------------
if (isset ($_POST['valider'])){
    //On récupère les valeurs entrées par l'utilisateur :
    $email=$_POST['email'];
    $psw=$_POST['psw'];
    $psw_repeat=$_POST['psw-repeat'];
     connectMaBase();

    //On prépare la commande sql d'insertion
    $sql = 'INSERT INTO inscription VALUES("","'.$email.'","'.$psw.'","'.$psw_repeat.'")'; 

    /*on lance la commande (mysql_query) et au cas où, 
    on rédige un petit message d'erreur si la requête ne passe pas (or die) 
    (Message qui intègrera les causes d'erreur sql)*/
    mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 

    // on ferme la connexion
    mysql_close();
}


//------------------------------------------------------------------

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire d'inscription</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>

<body>

<form action="inscription.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>S'inscrire</h1>
    <p>Veuillez remplir ce formulaire pour créer un compte.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw_repeat"><b>Répéter le mot de passe</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>En créant un compte, vous acceptez notre <a href="term.php" style="color:dodgerblue">Conditions et confidentialité</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Envoyer</button>
    </div>
  </div>
</form>
<script src="demo.js"></script>

</body>
</html>
