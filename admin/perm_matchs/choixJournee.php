
<script language="JavaScript">
<!--
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

<select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
  <option selected>S&eacute;lectionner une Journ&eacute;e</option>
  <option value="/admin/perm_matchs/permut1.php?journee=1&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>01</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=2&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>02</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=3&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>03</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=4&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>04 </b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=5&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>">05</option>
  <option value="/admin/perm_matchs/permut1.php?journee=6&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>06</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=7&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>">07</option>
  <option value="/admin/perm_matchs/permut1.php?journee=8&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>08</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=9&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>09</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=10&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>10</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=11&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>11</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=12&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>12</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=13&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>13</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=14&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>14</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=15&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>15</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=16&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>16</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=17&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>17</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=18&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>18</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=19&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>19</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=20&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>20</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=21&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>21</b></option>
  <option value="/admin/perm_matchs/permut1.php?journee=22&comite=<?php echo $comite; ?>&id=<?php echo $id; ?>"><b>22</b></option>
  
</select>
 