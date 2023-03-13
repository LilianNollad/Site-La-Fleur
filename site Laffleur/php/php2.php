
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
<title>
premier script php
</title>
</head>
<body>
<?php
if (empty($_POST["familier"]))
{
	$message="salut";
 
}
else
{
	$message="bonjour";
}
switch($_POST["politesse"])
{
	case 1 : $message = $message." "."Mademoiselle";
	    break;
	case 2 : $message = $message." "."Madame";
	    break;
	case 3 : $message = $message." "."Monsieur";
	    break;
}
$message = $message." ".$_POST["prenom"];
echo $message;
?>


</body>





</html>