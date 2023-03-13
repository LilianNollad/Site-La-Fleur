<php?
  $BDD = array();
  $BDD['host'] = "localhost";
  $BDD['user'] = "root";
  $BDD['pass'] = "";
  $BDD['db'] = "db";
?>
<php?
$i=0;
			while (($i<count($_SESSION["reference"])) && ($_SESSION["reference"][$i]!=$_GET["refPdt"]))
			{
				$i++;
			}
			if ($i==count($_SESSION["reference"]))
			{
				$_SESSION["reference"][$i]=$_GET["refPdt"];
				$_SESSION["quantite"][$i]=$_GET["quantite"];
			}
			else
			{
				$_SESSION["quantite"][$i]+=$_GET["quantite"];
			}
?>
<php?
echo "Vous avez commandé ";
?>