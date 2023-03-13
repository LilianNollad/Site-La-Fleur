<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="..\style.css" media="screen" type="text/css" />
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 </head>
 <body style='background:#fff;'>
     <!-- Navbar (sit on top) -->
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
 <div id="content">
 <br>
 <br>
 <br>
 
 <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
 
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if(isset($_GET['deconnexion']))
 { 
 if($_GET['deconnexion']==true)
 { 
 session_unset();
 header("location:login.php");
 }
 }
 else if($_SESSION['pseudo'] !== ""){
 $user = $_SESSION['pseudo'];
 // afficher un message
 echo "<br>Bonjour $user, vous êtes connectés";
 }
 ?>
 
 </div>
 </body>
</html>