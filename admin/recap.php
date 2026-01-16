<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
</head>
<body>
<div id="text">Liste de votre s&eacute;lection :</div><br>
<table align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" width="600"> 
	<tbody>
		<tr bgcolor="#cccccc">
			 <td width="29">
				&nbsp;
			 </td>
			
			<td width="157">
				Comite / Comp&eacute;tititon
			</td> 
			
			<td valign="middle" width="311"> 
				Division</div> 
			</td>
			
			<td width="93"> 
			 </td> 
		 </tr> 
	</tbody>
</table>

<div align="center"> 
<table border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" width="600"> 
	<tr> 
				<?php 
				for ($i=1; $i<6; $i++)
				{
				?> 
		
		<td width="29">
				<?php echo $i;?>
		</td> 
		
		<td width="157">
					<?php 
						if ($comite=="comite1" or $comite=="comite2" or $comite=="comite3" or $comite=="comite4" or $comite=="comite5") 
							echo "-"; 
						else 
							echo $comite; 
					?>
		</td> 
		
		<td width="311">
		<?php 
		if ($comite=="comite1" or $comite=="comite2" or $comite=="comite3" or $comite=="comite4" or $comite=="comite5") 
			echo "-"; 
		else 
			echo $division; 
		?>
		</td>
		
		<td bgcolor="#000000" width="93"> 
			<a href="bdEffacer.php?id=<?php echo $id; ?>&comite=<?php echo $comite; ?>">Supprimer</a>
		</td>
	</tr>
<?php
}
?>
</table>
 </div>
 <?php  mysql_close(); ?>
 </body></html>