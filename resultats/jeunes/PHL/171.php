<?php $id=$_GET['id']; ?>
<?php $comite="phpphl";?> 
<?php $comiteNom="Phliponeau";?>

<!DOCTYPE html>
<html>
<head>
<title>Championnat territorial <?php echo $comiteNom; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../calendrier.css"/>
</head>

<body >

<table width="700"   height="800">
  <tr> 
    <td class="pub" rowspan="2" valign="top" > 
      <p >      <?php include("../../pub3.php");?>      </p>
      <p >      <?php include("../../pub6.php"); ?>     </p>
    </td>
    <td class="pub" colspan="2" height="22" > 
       <?php include("../../pub5.php"); ?> 
    </td>
  </tr>
  <tr> 
    <td height="1076" width="581" valign="top" > 
      <p>
		 <script type="text/javascript" language="javascript">
		 function twFermer() {
		 window.close();
		 }
		 </script>
        </p>
        <form>
       
        	<table class="tab4" width="540" align="center" >
				<tr> 
					<td class="tab3" width="260">                 
						<input type="button" value="Imprimer le classement" onClick="window.print()" name="Bouton2">                 
					</td>
					<td class="tab3" width="264">                  
						<input type="button" onClick="twFermer()" value="Fermer la fen&ecirc;tre" name="button2">
					</td>
             	 </tr>
            </table>
            <br />
        <h1>Championnat territorial <br /> <?php echo $comiteNom; ?></h1>
        </form>	 
		<br /> 
		<P>
			<object data="http://francefinalesrugby.franceserv.com/Phpleague/<?php echo $comite; ?>/consult/classement123.php?champ=<?php echo $id; ?>"
				frameborder="no" height="800" width="600"" type="text/html" align="top"   />
			 </object>
        </p> 
		<form>
			<table class="tab4" width="540" >
			  <tr> 
                <td class="tab3" width="260">                   
                    <input type="button" value="Imprimer le classement" onClick="window.print()" name="Bouton2">                  
                </td>
                <td class="tab3" width="264">                 
                    <input type="button" onClick="twFermer()" value="Fermer la fen&ecirc;tre" name="button2">                
                </td>
              </tr>
            </table>
      </form>
       <br />
   		</td>
    	
		<td class="pub" rowspan="2" valign="top" > 
      	<p>  <?php include("../../pub3.php");?> </p>
      	<p>  <?php include("../../pub6.php");?> </p>
     	</td>
  </tr>
	  <tr class="pub"> 
			<td colspan="2"> 
			  <?php include("../../pub7.php"); ?>
			</td>
	  </tr>
</table>
	</body>
</html>
