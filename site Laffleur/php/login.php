
<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="..\style.css" media="screen" type="text/css" />
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 </head>
 <body style='background:#fff;'>
 <div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="..\Laffleur2.html" class="w3-bar-item w3-button"><b>Société</b> Laffleur</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="..\bulbes\Bulbes.html" class="w3-bar-item w3-button">Bulbes</a>
      <a href="..\rosiers\Rosiers.html" class="w3-bar-item w3-button">Rosiers</a>
      <a href="..\massifs\Massifs.html" class="w3-bar-item w3-button">plantes à massifs</a>
    </div>
  </div>
</div>
<php?
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "";
$BDD['db'] = "db";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
?>
<div id="container">
 <!-- zone de connexion -->
 
 <form action="verification.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

 <input type="submit" id='submit' value='LOGIN' >
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 </form>
 </div>
</body>
</html>