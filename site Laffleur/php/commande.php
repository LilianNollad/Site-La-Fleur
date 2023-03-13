<html>
<head><meta charset="utf-8"> </head>
<body>
    <form action="panier.php" method="post">
<?php 
       $BDD = array();
       $BDD['host'] = "localhost";
       $BDD['user'] = "root";
       $BDD['pass'] = "";
       $BDD['db'] = "db";
       $mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
?>
<p>
<select name="reference">
          <option value="a">reference</option>
          <option value="b">B01</option>
          <option value="c">B02</option>
          <option value="d">B03</option>
          <option value="b">R01</option>
          <option value="c">R02</option>
          <option value="d">R03</option>
          <option value="b">P01</option>
          <option value="c">P02</option>
          <option value="d">P03</option>
     </select>

     <select name="quantité">
          <option value="a">quantité</option>
          <option value="b">1</option>
          <option value="c">2</option>
          <option value="d">3</option>
          <option value="b">4</option>
          <option value="c">5</option>
          <option value="d">6</option>
          <option value="b">7</option>
          <option value="c">8</option>
          <option value="d">9</option>
          <option value="d">10</option>
     </select>

     <input type="submit" value="Envoyer" title="valider pour aller à la page sélectionnée" />
</p>
</form>


