<table width="900" border="0">
  <tr>
    <td>
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">DIRIGEANT 
        DELEGUE AUX OPERATIONS DE CONTROLE ANTI-DOPAGE DE L'ASSOCIATION LOCALE</font></b></div>
    </td>
  </tr>
</table>
<table width="900" border="1" cellspacing="0" cellpadding="0">
  <tr valign="middle" bordercolor="#000000"> 
    <td width="369" height="24"><div class="TailleGauche">Nom 
      :
		<span class="Taillebold">
      <?php echo $nomDopage;?></span>
      
      </div></td>
    <td width="275" height="24"><div class="TailleGauche">Pr&eacute;nom: 
     <span class="Taillebold"> <?php	  echo ucfirst(strtolower($prenomDopage));	?></span>
     
      </div></td>
    <td width="248" height="24"><div class="TailleGauche">N&deg;licence: 
      <?php echo substr($licenceDopage,0,4).' '.substr($licenceDopage,4,2).' '.substr($licenceDopage,6,1).' '.substr($licenceDopage,-6); 
   
?>
      </div></td>
  </tr>
</table>

