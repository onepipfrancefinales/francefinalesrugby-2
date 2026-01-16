<table width="900" border="0">
  <tr>
    <td>
       <div id="TITRE">JUGES DE TOUCHE</div>
    </td>
  </tr>
</table>
<table width="900" border="1" cellspacing="0" cellpadding="0">
  <tr bordercolor="#000000" valign="middle"> 
    <td width="163" height="24"> 
      <div class="TailleGauche">
		 	Nom : 
		 </div>
    </td>
    <td width="215" height="24">
      	<div class="TailleGauche">
	   		Pr&eacute;nom :
	 	</div>
	</td>
    <td width="215" height="24">
	<div class="TailleGauche">Nom: 
     	<span  class="Taillebold">      <?php  echo $nomJugeB;?></span>
     </div>
	 </td>
    <td width="172" height="24"><font face="Arial, Helvetica, sans-serif" size="2">Pr&eacute;nom 
      :   <span  class="Taillebold">
      <?php echo $prenomJugeB;?></span>
      </font> </td>
 </tr>
 <tr bordercolor="#000000" valign="middle"> 
    <td width="163" height="16"> 
      	<div class="TailleGauche">
			T&eacute;l: 
      	</div>
	</td>
    <td width="215" height="16"> 
      <div class="TailleGauche">
			N&deg;licence : 
		</div>
	</td>
    <td width="215" height="16"> 
     	<div class="TailleGauche">
			T&eacute;l: 
      	</div>
	</td>
    <td width="172" height="16"> 
      	<div class="TailleGauche"> N&deg;licence : 
        	<?php  echo substr($licenceJugeB,0,4).' '.substr($licenceJugeB,4,2).' '.substr($licenceJugeB,6,1).' '.substr($licenceJugeB,-6);?>
      	</div>
      </td>
  </tr>
</table>

