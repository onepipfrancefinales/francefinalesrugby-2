<?php
require("../data_connect.php");
if(is_array($_POST['id22'])) 
	{
	$connexion = mysql_connect("$hostname", "$login", "$password");
    if ($connexion)
	{
	if (mysql_select_db("$database", $connexion))
	{
	foreach ($_POST['id22'] as $id => $id22) 
	{
	$tps = ( $_POST['tps'][ $id ] );
	$sql = "UPDATE phpl_compo SET tps='$tps' WHERE id='$id22'";
	mysql_query($sql)or die ("pas possible" );	
	if(!$sql)
	{
	$ALERT = "NON !";
	}
	else
	{
	$ALERT = "OK !";
	}
	}
	}
	mysql_close($connexion);
    }
	}
	else
	{
	echo " ";
	} 
?>
<script language="Javascript">
window.location=
<?php 
$champ=$_POST['champ'];
$id_journee=$_POST['id_journee'];
$numero=$_POST['numero'];
echo"window.location='$PHPLEAGUE_RACINE/admin/index.php?page=championnat&action=tps&champ=$champ&id_journee=$id_journee&numero=$numero'";
?>
</script>