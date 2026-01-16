<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<br />
<br>
<br>
<?php
$comite=$_GET['comite'];
$baseDonnees=$comite.''."_clmnt_cache";
$mini=$_GET['mini'];

echo $mini;
echo $baseDonnees;

$max=$mini+8;
echo $max;
?>
<br/>
<br />

<?php
require("../connection3.php");

for ($i=$mini ; $i< $max ; $i++)
{
				$query = "	SELECT NOM, POINTS, PEN
				FROM $baseDonnees
				WHERE ID_CHAMP = $i ORDER BY POINTS DESC";
				$result = mysql_query($query) or die (mysql_error());
						 while($row = mysql_fetch_array($result))
							{                             
							 $equipe= $row[0];
							 $points = $row[1];
							 $bonus = $row[2];
							 echo $equipe.', '.$bonus.', '.$points;
							 ?>
							<br>
							<?php
							}

							?>
<br>
<?php
}

?>
</body>
</html>
