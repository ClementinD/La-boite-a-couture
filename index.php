<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>La boite a couture</title>
    <link rel="stylesheet" href="css default/index.css">
    <link rel="stylesheet" media="screen and (max-width: 770px)" href="css_width_770px/index.css" >
  </head>
  <body >

    <header>
      <h1 id="title">La boite a couture</h1>
      <input type="submit" name="" value="connexion">
      <input type="password" name="" placeholder="Password">
      <input type="text" name="" placeholder="Login">

      <ul>
        <li>Catalogue</li>
        <li>Contact</li>
      </ul>

      <h1 id="title2">Une mercerie de qualité</h1>
      <h2 id="title3">Reconnue par ses clients</h2>
    </header>

    <main>
      <div id="titreNouveauté">

      <ul>
        <li><div class="ligne">
        </div></li>
        <li id="nouveautéLi">Les Nouveauté</li>
        <li><div class="ligne">
        </div></li>
      </ul>
    </div>

    <div class="nouveauProduit">
      <table id="table1">
        <tr>
          <td><img src="photo/product1.jfif"></td>
          <td><img src="photo/product2.jfif"></td>
          <td><img src="photo/product3.jfif"></td>
        </tr>
        <tr>
          <td><img src="photo/product1.jfif"></td>
          <td><img src="photo/product2.jfif"></td>
          <td><img src="photo/product3.jfif"></td>
        </tr>
      </table>
    </div>



    </main>

    <footer>
      <div class="first-line">
        <p id="mail"><img src="icon/icoMail15px.png"> MAIL : XXXXXXXXXXXXXX@GMAIL.COM</p>
        <p id="telephone"><img src="icon/icoTel15px.png"> TELEPHONE : XX XX XX XX XX</p>
      <!--<p id="adresse"><img src="icon/icoLoc15px.png"><span id="responsiveAdresse"> ADRESSE :<br> <span id="suiteAdresse">165  Rue de la Poste  <br>
          40600 Biscarrosse</span></span></p>-->
        <p id="adresse"><img src="icon/icoLoc15px.png"> ADRESSE : </p>
        <p id="adresseDeux">165 Rue de la Poste</p>
        <p id="adresseTrois">40600 Biscarrosse</p>
      </div>
      <p id="Admin"> <a href="adminLog.php">Admin </a></p>

      <p id="copyRight">Copyright &copy  <?php echo date("Y"); ?> Seb Clem et Mehdi</p>
    </footer>
  </body>
</html>
