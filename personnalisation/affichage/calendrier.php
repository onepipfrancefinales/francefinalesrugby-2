<?php $id=$_GET['id']; ?>
<?php $comite=$_GET['comite']; ?>



<!DOCTYPE html>  
<head>
<title>Championnat territorial <?php echo $comiteNom; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../calendrier.css"/>
</head>

<body >


<table width="1000"  height="1000">
  <tr> 
    <td class="pub" rowspan="2" valign="top" > 
      <?php include("../../pub3.php"); ?>
      <?php include("../../pub6.php");?>
 
    </td>
    <td class="pub" colspan="2" height="22" > 
      <?php    include("../../pub7.php");  ?>
    </td>
  </tr>
  <tr> 
    <td  height="250" width="581" align="center" valign="top" > <br />
      <br />
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
                <input type="button" value="Imprimer le calendrier" onClick="window.print()" name="Bouton2">
              </td>
              <td class="tab3" width="264"> 
                <input type="button" onClick="twFermer()" value="Fermer la fen&ecirc;tre" name="button2">
              </td>
            </tr>
          </table>
          <br />
            
         <h1>Calendrier</h1>
        </form>
     
      <object data="http://francefinalesrugby.franceserv.com/Phpleague/<?php echo $comite; ?>/consult/calendrier.php?champ=<?php echo $id; ?>"
frameborder="no" 
height="1700" width="800"" type="text/html" align="top"   />
        </object>
      <br>
			  <table class="tab4" width="540" align="center" >
				<tr> 
				  <td class="tab3" width="260"> 
					<input type="button" value="Imprimer le calendrier" onClick="window.print()" name="Bouton22">
				  </td>
				  <td class="tab3" width="264"> 
					<input type="button" onClick="twFermer()" value="Fermer la fen&ecirc;tre" name="button22">
				  </td>
				</tr>
			  </table>
			  <p> 
			</td>
				<td class="pub" height="315" rowspan="2" valign="top"> 
					<?php include("../../pub3.php");?>
					<?php include("../../pub6.php"); ?>
				</td>
			</tr>
			<tr > 
				<td class="pub" height="60" colspan="2"> 
					 <?php  include("../../pub5.php"); ?>    
				</td>
			</tr>
		</table>
	</body>
</html>
