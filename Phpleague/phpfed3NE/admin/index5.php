<?php
//***********************************************************************/
// phpfed3NEeague : gestionnaire de championnat                         */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed3NEeague.univert.org                                    */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed3NEeague.univert.org/forum          */
//                                                                      */
//***********************************************************************/
?>
<html>
<head>
  <meta http-equiv="Content-Language" content="fr">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>phpfed3NEeague - Administration</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body topmargin="0" leftmargin="0" class="phpfed3NE">
  <br><br>
  <?php
  $champ = $_GET['champ'];
  $championnat = $_GET['champ'];

  require("../config.php");
  require("fonctions.php");
  ouverture();
  ?>

  <div class="center">
    <?php

    if (isset($_GET['action'])) {
      $action = $_GET['action'];
    }
    include("championnat5.php");

    if (substr($championnat, 2, 1) == 1)
      $poule = substr($championnat, -1);
    else
      $poule = substr($championnat, -1) + 8;

    if (substr($champ, 3, 1) == 1) {
      $champ = 991161;
    } else {
      $champ = 991261;
    }
    ?>  
    
  </div> 

  <script language="javascript">
location="../../../smart/171.php?champ=<?php echo $champ; ?>&comite=fed3NE&bddComite=fed3NE&comite2=fed3GS&ancre=<?php echo "#".$poule; ?>"; 

</script>
<!--
<meta http-equiv="refresh" content="0;URL=../../../smart/171.php?champ=<?php echo $champ; ?>&comite=fed3NE&bddComite=fed3NE&comite2=fed3GS&ancre=<?php echo "#" . $poule; ?>">                    
  -->
</body>
</html>