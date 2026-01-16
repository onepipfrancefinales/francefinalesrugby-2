<?php
//***********************************************************************/
// phpidfeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpidfeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpidfeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>

<br /><font class=phpidf><?php echo ADMIN_MINI_1; ?></mysql_fetch_array><br /><br />
<table class=phpidf width="80%">
            <tr>
              <td class=phpidf2 align=center><?php echo ADMIN_MINI_24; ?></td>
              </tr><tr><td>

<?php

if (isset($_POST['typemini'])) {$typemini=$_POST['typemini'];} else {$typemini='';}
if (isset($_POST['champmini'])) {$champmini=$_POST['champmini'];} else {$champmini='';}
if (isset($_POST['nb_dessusmini'])) {$nb_dessusmini=$_POST['nb_dessusmini'];} else {$nb_dessusmini='';}
if (isset($_POST['nb_dessousmini'])) {$nb_dessousmini=$_POST['nb_dessousmini'];} else {$nb_dessousmini='';}
if (isset($_POST['presentationmini'])) {$presentationmini=$_POST['presentationmini'];} else {$presentationmini='';}
if (isset($_POST['lienmini'])) {$lienmini=$_POST['lienmini'];} else {$lienmini='';}
if (isset($_POST['cheminmini_admin'])) {$cheminmini_admin=$_POST['cheminmini_admin'];} else {$cheminmini_admin='';}
if (isset($_POST['classmini'])) {$classmini=$_POST['classmini'];} else {$classmini='';}

if (!isset($_POST['champmini']) and !isset($_POST['typemini']))
{
echo "<table class=tablephpidf2 cellspacing=\"0\" align=center width=\"100%\">";
echo "<tr><td>";


echo "<form method=\"post\" action=\"\">";

echo "<tr><td class=phpidf3>".ADMIN_MINI_2."</td>";
echo "<td class=phpidf3><select name=\"presentationmini\">";
echo "<option value=\"\"></option>";
echo "<option value=\"1\">".ADMIN_MINI_22."</option>";
echo "<option value=\"2\">".ADMIN_MINI_23."</option>";
echo "</select> ";

$general=GENERAL;
$domicle=DOMICILE;
$exterieur=EXTERIEUR;
$attaque=ATTAQUE;
$defense=DEFENSE;
$diff=GOALDIFF;

// $idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result=$idconnect->query("SELECT max(id) FROM phpidf_championnats");
//$result=mysql_query ($query);
$row = mysqli_fetch_array($result);
$champ=$row[0];
echo "<a href=\"#\" onclick=\"window.open('../consult/miniseul.php?typemini=$general&champmini=$row[0]&nb_dessusmini=2&nb_dessousmini=2&presentationmini=1&lienmini=oui&classmini=0','Mini','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=300,height=450');return false;\">".ADMIN_MINI_12." (".ADMIN_MINI_22.")</a> ";
echo "<a href=\"#\" onclick=\"window.open('../consult/miniseul.php?typemini=$general&champmini=$row[0]&nb_dessusmini=2&nb_dessousmini=2&presentationmini=2&lienmini=oui&classmini=0','Mini','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=300,height=450');return false;\">".ADMIN_MINI_12." (".ADMIN_MINI_23.")</a>";
$champ=$row[0];
echo "</td></tr>";


echo "<tr><td width=\"50%\" class=phpidf4>".ADMIN_MINI_3."</td><td width=\"50%\" class=phpidf4><select name=\"typemini\">";
echo "<option value=\"\"></option>";
echo "<option value=\"$general\">".GENERAL."</option>";
echo "<option value=\"$domicle\">".DOMICILE."</option>";
echo "<option value=\"$exterieur\">".EXTERIEUR."</option>";
echo "<option value=\"$attaque\">".ATTAQUE."</option>";
echo "<option value=\"$defense\">".DEFENSE."</option>";
echo "<option value=\"$diff\">".GOALDIFF."</option>";
echo "</select></td></tr>";


echo "<tr><td class=phpidf3>".ADMIN_MINI_4."</td><td class=phpidf3><select name=\"champmini\">";
echo "<option value=\"\" align=\"center\"> </option>";

 //$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result=$idconnect->query("SELECT phpidf_divisions.nom, phpidf_saisons.annee, phpidf_championnats.id
FROM phpidf_championnats, phpidf_divisions, phpidf_saisons
WHERE phpidf_championnats.id_division=phpidf_divisions.id
AND phpidf_championnats.id_saison=phpidf_saisons.id
ORDER BY phpidf_saisons.annee DESC, phpidf_championnats.id");
//$result=mysql_query($query);

           while ($row = mysqli_fetch_array($result))
           {
               echo ("<option value=\"$row[2]\">$row[0]\n $row[1]/". ($row[1]+1)."\n");
               echo ("</option>\n");
           }

echo "</select></td></tr>";



echo "<tr><td class=phpidf4>".ADMIN_MINI_15."</td>";
echo "<td class=phpidf4>";
echo "<input type=\"radio\" value=\"oui\" checked name=\"lienmini\">".ADMIN_RENS_17." ";
echo "<input type=\"radio\" value=\"non\" name=\"lienmini\">".ADMIN_RENS_18." </td></tr>";

echo "<tr>";
echo "<td class=phpidf4><input type=\"radio\" value=\"0\" checked name=\"classmini\">".ADMIN_MINI_17."</td><td class=phpidf4></td></tr>";
echo "<tr><td class=phpidf4>".ADMIN_MINI_5."</td>";
echo "<td class=phpidf4><input type=\"text\" name=\"nb_dessusmini\" size=2 maxlength=2></td></tr>";

echo "<tr><td class=phpidf4>".ADMIN_MINI_14."</td>";
echo "<td class=phpidf4><input type=\"text\" name=\"nb_dessousmini\" size=2 maxlength=2></td></tr>";

echo "<tr>";
echo "<td class=phpidf3><input type=\"radio\" value=\"1\" name=\"classmini\">".ADMIN_MINI_18." ";
echo "<a href=\"#\" onclick=\"window.open('../consult/miniseul.php?typemini=$general&champmini=$champ&presentationmini=1&nb_dessousmini=0&nb_dessusmini=0&classmini=1&lienmini=oui','Mini','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=300,height=450');return false;\">".ADMIN_MINI_12." (".ADMIN_MINI_22.")</a> ";
echo "<a href=\"#\" onclick=\"window.open('../consult/miniseul.php?typemini=$general&champmini=$champ&presentationmini=2&nb_dessousmini=0&nb_dessusmini=0&classmini=1&lienmini=oui','Mini','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=300,height=450');return false;\">".ADMIN_MINI_12." (".ADMIN_MINI_23.")</a> ";


echo "</td><td class=phpidf3></td></tr>";

$button=ADMIN_MINI_6;
echo "<input type=\"hidden\" name=\"page\" value=\"mini_classement\">";
echo "</table><br /><br /><center><input type=\"submit\" value=\"$button\" ></center>";
echo "</form>";
}

else
{
echo "<table align=\"center\" cellspacing=\"0\" width=\"100%\">";
$champ1 = "$"."champmini";
$type1 = "$"."typemini";
$nb_dessus1 = "$"."nb_dessusmini";
$nb_dessous1 = "$"."nb_dessousmini";
$presentation1 = "$"."presentationmini";
$lien1 = "$"."lienmini";
$class1 = "$"."classmini";

echo "<tr><td class=phpidf3>".ADMIN_MINI_13." </td>";
echo "<td class=phpidf3><textarea readonly name=\"code_ajouter\" rows=\"7\" cols=\"50\" onclick=\"this.focus();this.select()\">";
echo "&lt;iframe src=&quot;".$phpidfEAGUE_RACINE."consult/miniseul.php?";
echo "\nchampmini=$champmini&typemini=$typemini";
if (!$classmini==1)
{
echo "\n&nb_dessusmini=$nb_dessusmini&nb_dessousmini=$nb_dessousmini";
}
echo "\n&presentationmini=$presentationmini&lienmini=$lienmini";
echo "\n&classmini=$classmini&quot; frameborder=&quot;no&quot; ";
echo "\nheight=&quot;410&quot; width=&quot;250&quot;&gt;&lt;/iframe&gt;";

echo "</textarea></td>";



echo "<td class=phpidf3>";
echo "<a href=\"#\" onclick=\"window.open('../consult/miniseul.php?typemini=$typemini&champmini=$champmini&nb_dessusmini=$nb_dessusmini&nb_dessousmini=$nb_dessousmini&presentationmini=$presentationmini&lienmini=$lienmini&classmini=$classmini','Mini','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=300,height=500');return false;\">".ADMIN_MINI_12."</a> ";
echo "</td></tr>";
echo "<td class=phpidf3>".ADMIN_MINI_7."</td><td class=phpidf3>";
if ($champmini==''){echo ADMIN_MINI_8;}
if ($typemini==''){echo "<br />".ADMIN_MINI_9;}
if ($presentationmini==''){echo "<br />".ADMIN_MINI_10;}
if (!$classmini=='1' and $nb_dessusmini==''){echo "<br />".ADMIN_MINI_19."";}
if (!$classmini=='1' and $nb_dessousmini==''){echo "<br />".ADMIN_MINI_20."";}
if ($champmini=='' or $typemini=='' or $presentationmini=='') {echo "<br />".ADMIN_MINI_11;}
else {echo ADMIN_MINI_21;}
echo "</td><td class=phpidf3></td></tr></table>";

}

?>
</tr></td></table><br /><br /></body>
</html>
