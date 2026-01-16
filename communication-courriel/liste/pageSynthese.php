<?php $annee = $_POST['saison'];
$comite = $_GET['comite'];
$comiteMaj=strtoupper($comite);

$annee ='2018';

mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
mysql_select_db("onepip-france_db5"); // S�lection de la base onepip

$query = " 	SELECT nom
			FROM comite
			WHERE comite='$comite' ";
			
			$result=mysql_query($query);
			while ($row=mysql_fetch_array($result))
				{
				$nomComite=$row[0];
				}


?>
<html>
	<head>
		<meta name="description"
		content="Tous les Champions de France <?php echo $annee; ?> de rugby � XV. Comp�titions pro; comp�titions f�d�rales; comp�titions territoriales; Comp�titions f�minines; comp�titions juniors et cadets">
		<meta name="keywords"
		content="Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
		<meta name="classification" content="Sport,Rugby">
		<meta name="resource-type" content="document">
		<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="author" content="Equipe Onepip">
		<meta name="robots" content="All">
		<title>Tous les Champions de FRANCE <?php echo $annee; ?></title>
		<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
		 
	</head>
<body >
<div>
  <table width="1100" height="400" align="center">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="148"> 
        <?php  include("../../page_image_al.php");  ?>
        </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000">
      <td height="26" colspan="3"><font color="#FFFFFF">
        <?php    include("../../01ligne.php");   ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
      <td height="26" colspan="3"> 
        <?php    include("../../resultats/pub12.php");  ?>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="260" bgcolor="#006699" align="center" valign="top"> 
        <p> <?php    include("../../01gauche.php");  ?></p>     
      </td>
      <td bgcolor="#FFFFFF" height="260" valign="top" width="650"> 
        <p><br />
          <font face="Arial, Helvetica, sans-serif" size="5"><b><font color="#FF0000" size="6">Suivi 
          des &eacute;quipes engag&eacute;es <br>
          en championnat de France<br>
          <br>
          <font color="#000000">comit&eacute; <?php echo $nomComite; ?></font></font></b></font></p>
        <p><br>
          <?php    
		  $terr="terr".''.$comiteMaj.''.".php";
		  include("$terr");  ?>
          <br>
        </p>
        <p><font size="6"><b><font face="Arial, Helvetica, sans-serif" color="#000000">Championnat 
          de France</font></b></font><br>
          <br>
          <?php    
		   $france="france".''.$comiteMaj.''.".php";
		  include("$france");  ?>
          <br />
          <br>
          <br>
        </p>
        <div id="titre">
          <?php include("../../pub/pub_carre.php");  ?>
          <br />
          <br />
        </div>
           
        <p>&nbsp;</p>   
      </td>
      <td height="260" bgcolor="#006699" width="225" valign="top"> 
        <p>  <?php    include("../../00droite.php");    ?>    </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="31"> 
        <div align="center">
          <table border="1" bordercolor="#006699" width="100%">
            <tbody> 
            <tr> 
              <td> 
                <?php include("../../pub/pub1.php");  ?>
              </td>
            </tr>
            <tr> 
              <td> 
                <?php include("../../bas.php"); ?>
              </td>
            </tr>
            </tbody> 
          </table>
        </div>
      </th>
    </tr>
  </table>
</div>
		<footer>
			<div id="9129-5"><script src="//ads.themoneytizer.com/s/gen.js?type=5">
			</script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5" >
			</script></div>
		</footer>
	</body>
</html>
