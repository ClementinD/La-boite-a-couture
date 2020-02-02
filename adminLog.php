<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>

    <link rel="stylesheet" href="css default/adminLog.css">
    <script src="js script/adminLog.js"></script>
    

  </head>
  <body>
    <main>
      <p id="undo"><a href="index.php"><span id="fleche">←</span>  Retour </a></p>
      <h1 id="Titre">Interface de connexion Admin</h1>

      <p id="erreurConnexion"></p><!-- volontairement vide -->




      <div class="button">
        <input type="text" name="" placeholder="Login" id="login"> <br>
        <input type="password" name="" placeholder="Password" id="password"><br>
        <input type="submit" name="Login" id="Login" value="Connexion" onclick='wipe()'>
      </div>


    </main>
  </body>
</html>
