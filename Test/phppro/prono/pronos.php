<html>
<body>
   <table width="100%" border="0" align="center" height="100%">
        <tr>
            <td colspan="2" align="center">
                <?php include("haut.inc.php"); ?>
            </td>
        </tr>
        <tr>
            <td width="22%" align="center" valign="top" height="70">
                <font face="Verdana" size="2" color="#3b487f"><b>phpproeague</b></font>
            </td>
            <td width="78%" align="center" valign="top">
                <?php include("pronos.inc.htm"); ?>
            </td>
        </tr>
        <tr>
            <td width="22%" align="center" valign="top">
                <?php include("menu.inc.php"); ?>
                <?php //include("menu.inc.php3"); 
                ?>
            </td>
            <td width="78%" align="center" valign="top" height="100%">
                <?php
                echo "test1";
                include("pronos1.php");
                  echo "test2";?>
                
            </td>
        </tr>
        <tr>
            <td width="100%" colspan="2">xxxxx
                <?php // include("bas.inc.php"); 
                ?>
                <?php // include("bas.inc.php3"); 
                ?>
            </td>
        </tr>
    </table>
</body>
</html>