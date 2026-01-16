<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<link type="text/css" rel="stylesheet" href="feuilledestyle.css"/>
<body >
<table width="927" border="0">
  <tr> 
    <td height="15"> 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); // Connexion � MySQL
mysql_select_db("onepip-france-db2"); // Sèlection de la base onepip

?>
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 $journeeh="$row[2]";
		 echo "<br>";
		 }


?>
      <?php if ($journeeh>1)
		 {
	?>
      <h1>  
        <?php echo " Honneur";?>
		
        </h1>
		
    </td>
  </tr>
</table>
<table width="924" border="0" cellspacing="0">
  <tr valign="top"> 
    <td width="106" height="24"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journèe :";
		  echo "<br>";
		}


?>
      </h7> </td>
    <td width="167" height="24"> 
      <h3>   <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[8]";
         echo "-";
         echo "<br>";
		}


?></h3>
    </td>
    <td width="155" height="24"> 
      <h4>   <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[8]";
		  echo "<br>";
		}

?></h4>
     </td>
    <td width="85" height="24"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "Prèvue le"; 
		  echo "<br>";
		}


?>
      </h7> </td>
    <td width="152" height="24"> 
      <h5>     <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[6]"; 
		 echo "<br>";
		}


?></h5>
     </td>
    <td width="92" height="24"> <font size="3"><font face="Arial, Helvetica, sans-serif"> 
      <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "reportèe au ";
		  echo "<br>";
		}


?>
      </h7> </font></font></td>
    <td width="153" height="24"> 
      <h6> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[3]"; 
		 echo "<br>";
		}


?>
      </h6>
      </td>
  </tr>
</table>
 
  <?php
		}
   else
   		{
		?>


  <?php
		}
		?>
<table width="927" border="0">
  <tr> 
    <td height="52"> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  $journeeph="$row[2]";
		  echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      <?php if ($journeeph>1)
		 {
	?>
      <h1> <span> 
        <?php echo " Promotion Honneur";?>
        </span></h1>
    </td>
  </tr>
</table>
<table width="924" border="0" cellspacing="0">
  <tr valign="top"> 
    <td width="106" height="25"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  $journee="$row[2]"-("$row[7]"*100); echo "$journee"; 
		  echo "me journèe :";
          echo "<br>";
		 }


?>
      </h7> </td>
    <td width="167" height="25"> 
      <h3>   <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[8]"; 
		  echo "-";
		  echo "<br>";
		}


?></h3>
    </td>
    <td width="155" height="25"> 
      <h4>  <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190' and phpcbl_journees.id_champ>'180'and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[8]";
		  echo "<br>";
		}


?></h4>
    </td>
    <td width="85" height="25"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "Prèvue le"; 
		  echo "<br>";
		}


?>
      </h7> </td>
    <td width="152" height="25"> 
      <h5>   <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[6]"; 
		  echo "<br>";
		}


?></h5>
    </td>
    <td width="92" height="25"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "reportèe au ";
		  echo "<br>";
		}


?>
      </h7> </td>
    <td width="153" height="25"> 
      <h6> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'190'and phpcbl_journees.id_champ>'180' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[3]"; 
		 echo "<br>";
		}


?>
      </h6>
    </td>
  </tr>
</table>

  <?php
		}
   else
   		{
		?>


  <?php
		}
		?>
  
<table width="927" border="0">
  <tr> 
    <td height="52"> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  $journee1="$row[2]";
		  echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      <?php if ($journee1>1)
		 {
	?>
      <h1> <span>     <?php echo " 1re Sèrie";?></span></h1>
        
    </td>
  </tr>
</table>
<table width="926" border="0" cellspacing="0">
  <tr valign="top"> 
    <td width="106" height="2"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journèe :";
		  echo "<br>";
		}


?>
      </h7> </td>
    <td width="170" height="2"> 
      <h3> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		
       
        echo "$row[8]";
        echo "-";
        echo "<br>";
		}


?>
      </h3>
    </td>
    <td width="170" height="2"> 
      <h4> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200' and phpcbl_journees.id_champ>'190'and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[8]";       
		  echo "<br>";
		}


?>
      </h4>
    </td>
    <td width="85" height="2"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 	echo "Prèvue le"; 
			echo "<br>";
		}


?>
      </h7> </td>
    <td width="152" height="2"> 
      <h5>  <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[6]"; 
		 echo "<br>";
		}


?></h5>
    </td>
    <td width="92" height="2"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "reportèe au ";
		  echo "<br>";
		 }


?>
      </h7> </td>
    <td width="153" height="2"> 
      <h6> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'200'and phpcbl_journees.id_champ>'190' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[3]"; 
		 echo "<br>";
		}

?>
      </h6>
    </td>
  </tr>
</table>

  <?php
		}
   else
   		{
		?>


  <?php
		}
		?>
 
<table width="927" border="0">
  <tr> 
    <td height="52"> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee2="$row[2]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      <?php if ($journee2>1)
		 {
	?>
      <h1> <span> 
        <?php echo " 2me Sèrie";?>
        </span></h1>
    </td>
  </tr>
</table>
<table width="924" border="0" cellspacing="0" height="25">
  <tr valign="top"> 
    <td width="106" height="25"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		$journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journèe :";
		echo "<br>";
		}


?>
      </h7></td>
    <td width="167" height="25"> 
      <h3> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[8]"; 
		 echo "-";
		 echo "<br>";
		}

?>
      </h3>
    </td>
    <td width="155" height="25"> 
      <h4> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210' and phpcbl_journees.id_champ>'200'and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[8]";
		  echo "<br>";
		}

?>
      </h4>
    </td>
    <td width="85" height="25"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "Prèvue le"; 
		echo "<br>";
		}


?>
      </h7> </td>
    <td width="152" height="25"> 
      <h5> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[6]"; 
		  echo "<br>";
		}


?>
      </h5>
    </td>
    <td width="92" height="25"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "reportèe au ";
		 echo "<br>";
		}


?>
      </h7> </td>
    <td width="153" height="25"> 
      <h6> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'210'and phpcbl_journees.id_champ>'200' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[3]"; 
		 echo "<br>";
		}


?>
      </h6>
    </td>
  </tr>
</table>
 
  <?php
		}
   else
   		{
		?>


  <?php
		}
		?>

<table width="927" border="0">
  <tr> 
    <td height="29"> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journee34="$row[2]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      <?php if ($journee34>1)
		 {
	?>
      <h1> <span> 
        <?php echo " 3me/ 4me Sèrie";?>
        </span></h1>
    </td>
  </tr>
</table>
<table width="927" border="0" cellspacing="0" height="25">
  <tr valign="top"> 
    <td width="106" height="23"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  $journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journèe :";
		echo "<br>";
		}


?>
      </h7></td>
    <td width="170" height="23"> 
      <h3> 
          <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[8]";
		 echo "-";
		 echo "<br>";
		}


?>
        </h3>
      
    </td>
    <td width="170" height="23"> 
      <h4> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230' and phpcbl_journees.id_champ>'210'and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[8]";
		 echo "<br>";
		}


?>
      </h4>
      </td>
    <td width="85" height="23"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "Prèvue le"; 
		  echo "<br>";
		}


?>
      </h7></td>
    <td width="152" height="23"> 
      <h5>    <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[6]"; 
		 echo "<br>";
		}


?></h5>
    </td>
    <td width="92" height="23"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "reportèe au ";
		  echo "<br>";
		 }


?>
      </h7></td>
    <td width="153" height="23"> 
      <h6> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ<'230'and phpcbl_journees.id_champ>'210' and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[3]"; 
		  echo "<br>";
		 }

?>
      </h6>
    </td>
  </tr>
</table>

  <?php
		}
   else
   		{
		?>


  
  <?php
		}
		?>
  
<table width="927" border="0">
  <tr> 
    <td height="52"> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 ?>
      <?php $journeer="$row[2]";?>
      <?php 
		echo "<br>";
		}

echo "<br>";	echo "<br>";
?>
      <?php if ($journeer>1)
		 {
	?>
      <h1> <span> 
        <?php echo " Rèserve";?>
        </span></h1>
    </td>
  </tr>
</table>
<table width="924" border="0" cellspacing="0" height="25">
  <tr valign="top"> 
    <td width="106" height="21"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		$journee="$row[2]"-("$row[7]"*100); echo "$journee"; echo "me journèe :";
		echo "<br>";
		}


?>
      </h7> </td>
    <td width="167" height="21"> 
       
   <h3>     <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[8]"; echo "-";
		  echo "<br>";
		}


?></h3>
        
    </td>
    <td width="155" height="21"> 
   <h4>   <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE  phpcbl_journees.id_champ>'270' and phpcbl_clubs.id+900000=phpcbl_matchs.id_equipe_ext and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and phpcbl_clubs.id+900000=phpcbl_matchs.id_equipe_ext and
 phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "$row[8]";
		  echo "<br>";
		}


?></h4>
    </td>
    <td width="85" height="21"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "Prèvue le"; 
		  echo "<br>";
		}


?>
      </h7> </td>
    <td width="152" height="21"> 
      <h5>   <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[6]"; 
		 echo "<br>";
		}


?></h5>
    </td>
    <td width="92" height="21"> <h7> 
      <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		  echo "reportèe au ";
		  echo "<br>";
		}


?>
      </h7> </td>
    <td width="153" height="21"> 
      <h6> 
        <?php
$query = "SELECT  phpcbl_matchs.id_equipe_dom, phpcbl_matchs.id_equipe_ext, phpcbl_matchs.id_journee, phpcbl_matchs.date_reelle, phpcbl_matchs.buts_dom, phpcbl_matchs.buts_ext, phpcbl_journees.date_prevue, phpcbl_journees.id_champ, phpcbl_clubs.nom, phpcbl_clubs.id FROM  phpcbl_matchs, phpcbl_journees, phpcbl_clubs WHERE phpcbl_journees.id_champ>'270' and (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.id_journee= phpcbl_journees.id and phpcbl_matchs.date_reelle != phpcbl_journees.date_prevue and
 (phpcbl_clubs.id + 900000)=phpcbl_matchs.id_equipe_dom and phpcbl_matchs.buts_dom is NULL and phpcbl_matchs.buts_ext is NULL"; // Requ�te SQL
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {    
		 echo "$row[3]"; 
		 echo "<br>";
		}


?>
      </h6>
    </td>
  </tr>
</table>

  <?php
		}
   else
   		{
		?>


  <?php
		}
		?>
  

<?php if ($journeeh+$journeeph+$journee1+$journee2+$journee34+$journeer>0)
			{
			echo "";
			}
			else
			{
			?>
  
<h1><?php echo "aucune rencontre reportè";?></h1>
  

<?php
			}
			?>

<?php

mysql_close(); // Dèconnexion de MySQL
?>
</body>
</html>
