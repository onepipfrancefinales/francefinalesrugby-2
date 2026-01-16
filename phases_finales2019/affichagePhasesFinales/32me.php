
<?php
	if (isset($_GET['division'])) $division = $_GET['division']; else $division = 110;

if ($annee == 2025) {
  echo "<table class=\"borderNone\">";
    echo "<tr>";
  if ($division == 170 || $division == 175) {
?>
        <td class="titreReg"> <a href="pagePhaseFinale.php?division=170&annee=<?php echo $annee; ?>">Régionale 1</td>
        <td class="titreReg"> <a href="pagePhaseFinale.php?division=175&annee=<?php echo $annee; ?>">Promotion Régionale 1</td>
  <?php
  } else if ($division == 180 || $division == 185) {
  ?>
        <td class="titreReg"> <a href="pagePhaseFinale.php?division=180&annee=<?php echo $annee; ?>">Régionale 2</td>
        <td class="titreReg"> <a href="pagePhaseFinale.php?division=185&annee=<?php echo $annee; ?>">Promotion Régionale 2</td>
  <?php
  } else if ($division == 190 || $division == 195) {
  ?>
        <td class="titreReg "> <a href="pagePhaseFinale.php?division=190&annee=<?php echo $annee; ?>">Régionale 3</td>
        <td class="titreReg "> <a href="pagePhaseFinale.php?division=195&annee=<?php echo $annee; ?>">Promotion Régionale 3</td>
<?php
  }
  echo "</tr>";
  echo "</table>";
}
?>



<table  class="width2000" >
  <?php if ($annee == 2025)  {
    ?>

<tr> 
    <td  colspan="18" class = "size5 center bold styleArial" >Championnnat de France <?php echo $annee; ?><br><?php echo $nomDivision; ?></td>
  </tr>
<?php

}
?>


  <tr> 
    <td  colspan="18" class = "backgroundOrange" ></td>
  </tr>
 <tr> 
       <?php 
    // message info de haut de page
    
   // require 'infoMessages.php';  
    // mise en évidence des clubs qualifiés
      require 'fichierQualifies.php';
       ?>

    <td class="coin5-32BarrageFed3 colorWhite width100PC" > 
        <?php if (substr($type,0,1)== 7 and $annee > 2021){?>
        <a href="javascript:ouvrirPopup('barrages.php?annee=<?php echo $annee; ?>&division=7260','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=330, height=600, menubar=no')">Barrages accès aux 32me<br />
        </a> 
      <?php } ?>
    </td>
    <td colspan ="17">
      
    </td>
  </tr>
  <tr>
<td colspan ="18">
    <p class="size4">
<?php
if ($division == 170 & $annee == 2025) 
  echo "Les équipes en jaunes évolueront la saison prochaine en fédérale 3. Les 2 meilleurs parcours
 parmi les équipes de couleur blanche gagneront le droit d'évoluer en Fédérale 3 la saison prochaine. ";
?>
</p>
</td>


  </tr>
  <tr> 
    <td class="coin5"> 32me de finale </td>
    <td colspan="2"></td>
    <td class="coin5"> 16me de finale </td>
    <td colspan="2"></td>
    <td class="coin5">8me de finale </td>
    <td colspan="2"></td>
    <td class="coin5">Quarts de finale </td>
    <td colspan="2"></td>
    <td class="coin5">Demi finale </td>
    <td colspan="2"></td>
    <td class="coin5">Finale </td>
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td class="dates"><?php echo $D32ME;?></td>
    <td colspan="2"></td>
    <td class="dates"><?php echo $D16ME;?></td>
    <td colspan="2"></td>
    <td class="dates"><?php echo $D8ME;?></td>
    <td colspan="2"></td>
    <td class="dates"><?php echo $D4ME;?></td>
    <td colspan="2"></td>
    <td class="dates"><?php echo $D2ME;?></td>
    <td colspan="2"></td>
    <td class="dates"><?php echo $D1ME;?></td>
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td colspan="18"></td>
  </tr>
 
  <tr> 
    <td class="coin4-32"><?php if ($qualif3201 == true){;?>
      <span style = color:yellow><?php  echo $clubA3201 ;?></span><?php }  else {
      echo $clubA3201;
    } ?> - <?php echo $clubA3202;?>  
    </td>
    <td class="coin4pts-32">
      <?php echo $A3201." - ".$A3202;  ?>
    </td>
    <td ></td>
    <td class="coin4"><?php if ($qualif1601 == true){;?>
      <span style = color:yellow><?php echo $clubA1601; ?></span><?php } else {
      echo $clubA1601;
    } ?></td>

    
    <td class="coin4pts"><?php echo $A1601;?></td>
    <td rowspan="4"><img class="width8 height80" src="../../images/accolade.png" alt="accolade"></td>
    <td colspan="2"></td>
    <td rowspan="8"><img class="width8 height163" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="9"></td>
  </tr>
  <tr> 
    
    <td class="coin4-32"><?php if ($qualif3203 == true){;?>
      <span style = color:yellow><?php  echo $clubA3203 ;?></span><?php } else {
      echo $clubA3203;
    } ?> - <?php echo $clubA3204 ;?></td>
    <td class="coin4pts-32"><?php echo $A3203." - ".$A3204;?></td>
    <td ></td>
    <td class="coin4"><?php if ($qualif1602 == true){;?>
      <span style = color:yellow><?php echo $clubA1602; ?></span><?php } else {
      echo $clubA1602;
    } ?></td>
    <td class="coin4pts"><?php echo $A1602;?></td>
    <td class="coin4"><?php if ($qualif8001 == true){;?>
      <span style = color:yellow><?php echo $clubA8001; ?></span><?php } else {
      echo $clubA8001;
    } ?></td>
    <td class="coin4pts"><?php echo $A8001;?></td>
    <td colspan="9"></td>
  </tr>
  
  <tr> 
    <td class="coin4-32"><?php if ($qualif3205 == true){;?>
      <span style = color:yellow><?php echo $clubA3205 ;?></span><?php } else {
      echo $clubA3205;
    }?> - <?php echo $clubA3206;?>
    </td>
    <td class="coin4pts-32"><?php echo $A3205." - ".$A3206;?>
    </td>
    <td ></td>
    <td class="coin4"><?php if ($qualif1603 == true){;?>
      <span style = color:yellow><?php echo $clubA1603; ?></span><?php } else {
      echo $clubA1603;
    } ?></td>
    <td class="coin4pts"><?php echo $A1603;?></td>
    <td class="coin4"><?php if ($qualif8002 == true){;?>
      <span style = color:yellow><?php echo $clubA8002; ?></span><?php } else {
      echo $clubA8002;
    } ?></td>
    <td class="coin4pts"><?php echo $A8002;?></td>
    <td colspan="2"></td>
    <td rowspan="12"><img class="width8 height236" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="6"></td>
  </tr>
 
 
  <tr> 
    <td class="coin4-32"><?php if ($qualif3207 == true){;?>
      <span style = color:yellow><?php echo $clubA3207 ;?></span><?php } else {
      echo $clubA3207;
    }?> - <?php echo $clubA3208;?></td>
    <td class="coin4pts-32"><?php echo $A3207." - ".$A3208;?></td>
    <td ></td>
    <td class="coin4"><?php if ($qualif1604 == true){;?>
      <span style = color:yellow><?php echo $clubA1604; ?></span><?php } else {
      echo $clubA1604;
    } ?></td>
    <td class="coin4pts"><?php echo $A1604;?></td>
    <td colspan="2"></td>
    <td class="coin4"><?php if ($qualif4001 == true){;?>
      <span style = color:yellow><?php echo $clubA4001; ?></span><?php } else {
      echo $clubA4001;
    } ?></td>
    <td class="coin4pts"><?php echo $A4001;?></td>
    <td colspan="6"></td>
  </tr>
  <tr> 
    <td class="coin5-32"><?php if ($qualif3209 == true){;?>
      <span style = color:yellow><?php echo $clubA3209 ;?></span><?php } else {
      echo $clubA3209;
    }?> - <?php if ($qualif3210 == true){;?>
      <span style = color:yellow><?php echo $clubA3210 ;?></span><?php } else {
      echo $clubA3210;
    }?>
      
	   </td>
    <td class="coin5pts-32"><?php echo $A3209;?> - <?php echo $A3210;?></td>
    <td ></td>
    <td class="coin5"><?php if ($qualif1605 == true){;?>
      <span style = color:yellow><?php echo $clubA1605; ?></span><?php } else {
      echo $clubA1605;
    } ?></td>
    <td class="coin5pts"><?php echo $A1605;?></td>
    <td rowspan="4"><img class="width8 height80" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td class="coin4"><?php if ($qualif4002 == true){;?>
      <span style = color:yellow><?php echo $clubA4002; ?></span><?php } else {
      echo $clubA4002;
    } ?></td>
    <td class="coin4pts"><?php echo $A4002;?></td>
    <td colspan="6"></td>
  </tr>
  <tr> 
    <td class="coin5-32"><?php if ($qualif3211 == true){;?>
      <span style = color:yellow><?php echo $clubA3211 ;?></span><?php } else {
      echo $clubA3211;
    }?> - <?php echo $clubA3212;?></td>
    <td class="coin5pts-32"><?php echo $A3211." - ".$A3212;?></td>
    <td ></td>
    <td class="coin5"><?php if ($qualif1606 == true){;?>
      <span style = color:yellow><?php echo $clubA1606; ?></span><?php } else {
      echo $clubA1606;
    } ?></td>
    <td class="coin5pts"><?php echo $A1606;?></td>
    <td class="coin4"><?php if ($qualif8003 == true){;?>
      <span style = color:yellow><?php echo $clubA8003; ?></span><?php } else {
      echo $clubA8003;
    } ?></td>
	<td class="coin4pts"><?php echo $A8003;?></td>
    <td colspan="2"></td>
    <td colspan="6"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
      <?php if ($qualif3213 == true){;?>
      <span style = color:yellow><?php echo $clubA3213 ;?></span><?php } else {
      echo $clubA3213;
    }?> - <?php echo $clubA3214 ;?>
     
    </td>
    <td  class="coin5pts-32">
      <?php echo $A3213." - ".$A3214;?>
    </td>
    <td ></td>
    <td class="coin5">
     <?php if ($qualif1607 == true){;?>
      <span style = color:yellow><?php echo $clubA1607; ?></span><?php } else {
      echo $clubA1607;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1607;?>
    </td>
    <td class="coin4">
      <?php if ($qualif8004 == true){;?>
      <span style = color:yellow><?php echo $clubA8004; ?></span><?php } else {
      echo $clubA8004;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8004;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td rowspan="20"><img class="width8 height426" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
      <?php if ($qualif3215 == true){;?>
      <span style = color:yellow><?php echo $clubA3215 ;?></span><?php } else {
      echo $clubA3215;
    }?> - <?php echo $clubA3216;?>
    </td>
    <td class="coin5pts-32">
      <?php echo $A3215." - ".$A3216;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1608 == true){;?>
      <span style = color:yellow><?php echo $clubA1608; ?></span><?php } else {
      echo $clubA1608;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1608;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td class="coin4">
       <?php if ($qualif2001 == true){;?>
      <span style = color:yellow><?php echo $clubA2001; ?></span><?php } else {
      echo $clubA2001;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A2001;?>
    </td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4-32">
      <?php if ($qualif3217 == true){;?>
      <span style = color:yellow><?php echo $clubA3217 ;?></span><?php } else {
      echo $clubA3217;
    }?> - <?php echo $clubA3218 ;?>
      
    </td>
    <td class="coin4pts-32">
      <?php echo $A3217." - ".$A3218;?>
    </td>
    <td ></td>
    <td class="coin4">
      <?php if ($qualif1609 == true){;?>
      <span style = color:yellow><?php echo $clubA1609; ?></span><?php } else {
      echo $clubA1609;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1609;?>
    </td>
    <td rowspan="4"><img class="width8 height80" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td rowspan="8"><img class="width8 height163" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td class="coin4">
      <?php if ($qualif2002 == true){;?>
      <span style = color:yellow><?php echo $clubA2002; ?></span><?php } else {
      echo $clubA2002;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A2002;?>
    </td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4-32">
       <?php if ($qualif3219 == true){;?>
      <span style = color:yellow><?php echo $clubA3219 ;?></span><?php } else {
      echo $clubA3219;
    }?> - <?php if ($qualif3220 == true){;?>
      <span style = color:yellow><?php echo $clubA3220 ;?></span><?php } else {
      echo $clubA3220;
    }?>
    </td>
    <td class="coin4pts-32">
      <?php echo $A3219." - ".$A3220;?>
    </td>
    <td ></td>
    <td class="coin4">
     <?php if ($qualif1610 == true){;?>
      <span style = color:yellow><?php echo $clubA1610; ?></span><?php } else {
      echo $clubA1610;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1610;?>
    </td>
    <td class="coin4">
     <?php if ($qualif8005 == true){;?>
      <span style = color:yellow><?php echo $clubA8005; ?></span><?php } else {
      echo $clubA8005;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8005;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4-32">
       <?php if ($qualif3221 == true){;?>
      <span style = color:yellow><?php echo $clubA3221 ;?></span><?php } else {
      echo $clubA3221;
    }?> - <?php echo $clubA3222;?>
    </td>
    <td class="coin4pts-32">
      <?php echo $A3221." - ".$A3222;?>
    </td>
    <td ></td>
    <td class="coin4">
      <?php if ($qualif1611 == true){;?>
      <span style = color:yellow><?php echo $clubA1611; ?></span><?php } else {
      echo $clubA1611;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1611;?>
    </td>
    <td class="coin4">
      <?php if ($qualif8006 == true){;?>
      <span style = color:yellow><?php echo $clubA8006; ?></span><?php } else {
      echo $clubA8006;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8006;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin4-32">
       <?php if ($qualif3223 == true){;?>
      <span style = color:yellow><?php echo $clubA3223 ;?></span><?php } else {
      echo $clubA3223;
    }?> - <?php echo $clubA3224;?>
    </td>
    <td class="coin4pts-32">
      <?php echo $A3223." - ".$A3224;?>
    </td>
    <td ></td>
    <td class="coin4">
     <?php if ($qualif1612 == true){;?>
      <span style = color:yellow><?php echo $clubA1612; ?></span><?php } else {
      echo $clubA1612;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1612;?>
    </td>
    <td colspan="2"></td>
    <td class="coin4">
      <?php if ($qualif4003 == true){;?>
      <span style = color:yellow><?php echo $clubA4003; ?></span><?php } else {
      echo $clubA4003;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A4003;?>
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
      <?php if ($qualif3225 == true){;?>
      <span style = color:yellow><?php echo $clubA3225 ;?></span><?php } else {
      echo $clubA3225;
    }?> - <?php echo $clubA3226;?>
      
    </td>
    <td class="coin5pts-32">
      <?php echo $A3225." - ".$A3226;?>
    </td>
    <td ></td>
    <td class="coin5">
     <?php if ($qualif1613 == true){;?>
      <span style = color:yellow><?php echo $clubA1613; ?></span><?php } else {
      echo $clubA1613;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1613;?>
    </td>
    <td rowspan="4"><img class="width8 height80" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td class="coin4">
      <?php if ($qualif4004 == true){;?>
      <span style = color:yellow><?php echo $clubA4004; ?></span><?php } else {
      echo $clubA4004;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A4004;?>
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
       <?php if ($qualif3227 == true){;?>
      <span style = color:yellow><?php echo $clubA3227 ;?></span><?php } else {
      echo $clubA3227;
    }?> - <?php echo $clubA3228;?>
    </td>
    <td class="coin5pts-32">
      <?php echo $A3227." - ".$A3228;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1614 == true){;?>
      <span style = color:yellow><?php echo $clubA1614; ?></span><?php } else {
      echo $clubA1614;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1614;?>
    </td>
    <td class="coin4">
     <?php if ($qualif8007 == true){;?>
      <span style = color:yellow><?php echo $clubA8007; ?></span><?php } else {
      echo $clubA8007;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8007;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
       <?php if ($qualif3229 == true){;?>
      <span style = color:yellow><?php echo $clubA3229 ;?></span><?php } else {
      echo $clubA3229;
    }?> - <?php echo $clubA3230;?>
     
    </td>
    <td class="coin5pts-32">
      <?php echo $A3229." - ".$A3230;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1615 == true){;?>
      <span style = color:yellow><?php echo $clubA1615; ?></span><?php } else {
      echo $clubA1615;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1615;?>
    </td>
    <td class="coin4">
     <?php if ($qualif8008 == true){;?>
      <span style = color:yellow><?php echo $clubA8008; ?></span><?php } else {
      echo $clubA8008;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8008;?>
    </td>
    <td colspan="5"></td>
    <td class="coin4">
      <?php if ($qualif1001 == true){;?>
      <span style = color:yellow><?php echo $clubA1001; ?></span><?php } else {
      echo $clubA1001;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1001;?>
    </td>
    <td ></td>
  </tr>
  <tr> 
    <td class="coin5-32">
       <?php if ($qualif3231 == true){;?>
      <span style = color:yellow><?php echo $clubA3231 ;?></span><?php } else {
      echo $clubA3231;
    }?> - <?php echo $clubA3232;?>
    </td>
    <td class="coin5pts-32">
      <?php echo $A3231." - ".$A3232;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1616 == true){;?>
      <span style = color:yellow><?php echo $clubA1616; ?></span><?php } else {
      echo $clubA1616;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1616;?>
    </td>
    <td colspan="2"></td>
    <td colspan="5"></td>
    <td class="coin4">
     <?php if ($qualif1002 == true){;?>
      <span style = color:yellow><?php echo $clubA1002; ?></span><?php } else {
      echo $clubA1002;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1002;?>
    </td>
    <td ></td>
  </tr>
  <tr> 
    <td class="coin4-32">
       <?php if ($qualif3233 == true){;?>
      <span style = color:yellow><?php echo $clubA3233 ;?></span><?php } else {
      echo $clubA3233;
    }?> - <?php echo $clubA3234;?>
    </td>
    <td class="coin4pts-32">
      <?php echo $A3233." - ".$A3234;?>
    </td>
    <td ></td>
    <td class="coin4">
      <?php if ($qualif1617 == true){;?>
      <span style = color:yellow><?php echo $clubA1617; ?></span><?php } else {
      echo $clubA1617;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1617;?>
    </td>
    <td rowspan="4"><img class="width8 height80" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td rowspan="8"><img class="width8 height163" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="5"></td>
    <td ></td>
    <td ></td>
    <td ></td>
  </tr>
  <tr> 
    <td class="coin4-32">
       <?php if ($qualif3235 == true){;?>
      <span style = color:yellow><?php echo $clubA3235 ;?></span><?php } else {
      echo $clubA3235;
    }?> - <?php echo $clubA3236;?>
    </td>
    <td class="coin4pts-32">
      <?php echo $A3235." - ".$A3236;?>
    </td>
    <td ></td>
    <td class="coin4">
      <?php if ($qualif1618 == true){;?>
      <span style = color:yellow><?php echo $clubA1618; ?></span><?php } else {
      echo $clubA1618;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1618;?>
    </td>
    <td class="coin4">
      <?php if ($qualif8009 == true){;?>
      <span style = color:yellow><?php echo $clubA8009; ?></span><?php } else {
      echo $clubA8009;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8009;?>
    </td>
    <td colspan="5"></td>
    <td colspan="3" class="titre">
      <?php echo "Champion de France ".$annee;?>
    </td>
  </tr>

  <tr> 
    <td class="coin4-32">
       <?php if ($qualif3237 == true){;?>
      <span style = color:yellow><?php echo $clubA3237 ;?></span><?php } else {
      echo $clubA3237;
    }?> - <?php echo $clubA3238;?>
    </td>
    <td class="coin4pts-32">
      <?php echo $A3237." - ".$A3238;?>
    </td>
    <td ></td>
    <td class="coin4">
     <?php if ($qualif1619 == true){;?>
      <span style = color:yellow><?php echo $clubA1619; ?></span><?php } else {
      echo $clubA1619;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1619;?>
    </td>
    <td class="coin4">
      <?php if ($qualif8010 == true){;?>
      <span style = color:yellow><?php echo $clubA8010; ?></span><?php } else {
      echo $clubA8010;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8010;?>
    </td>
    <td colspan="2"></td>
    <td rowspan="12"><img class="width8 height236" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td colspan="3" class="titre">
      <?php echo $nomDivision;?>
    </td>
  </tr>
 
 
 
 
  <tr> 
    <td class="coin4-32">
        <?php if ($qualif3239 == true){;?>
      <span style = color:yellow><?php echo $clubA3239 ;?></span><?php } else {
      echo $clubA3239;
    }?> - <?php echo $clubA3240;?>
    </td>
    <td class="coin4pts-32">
      <?php echo $A3239." - ".$A3240;?>
    </td>
    <td ></td>
    <td class="coin4">
      <?php if ($qualif1620 == true){;?>
      <span style = color:yellow><?php echo $clubA1620; ?></span><?php } else {
      echo $clubA1620;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1620;?>
    </td>
    <td colspan="2"></td>
    <td class="coin4">
     <?php if ($qualif4005 == true){;?>
      <span style = color:yellow><?php echo $clubA4005; ?></span><?php } else {
      echo $clubA4005;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A4005;?>
    </td>
    <td colspan="2"></td>
    <td colspan="3" rowspan="6" class="marginAuto"><img class="width150 height150" src="../../images/blasons200_200/<?php echo $idEquipeCourt;?>.gif" alt="blason du champion"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
        <?php if ($qualif3241 == true){;?>
      <span style = color:yellow><?php echo $clubA3241 ;?></span><?php } else {
      echo $clubA3241;
    }?> - <?php echo $clubA3242;?>
     
    </td>
    <td class="coin5pts-32">
      <?php echo $A3241." - ".$A3242;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1621 == true){;?>
      <span style = color:yellow><?php echo $clubA1621; ?></span><?php } else {
      echo $clubA1621;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1621;?>
    </td>
    <td rowspan="4"><img class="width8 height80" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td class="coin4">
      <?php if ($qualif4006 == true){;?>
      <span style = color:yellow><?php echo $clubA4006; ?></span><?php } else {
      echo $clubA4006;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A4006;?>
    </td>
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
        <?php if ($qualif3243 == true){;?>
      <span style = color:yellow><?php echo $clubA3243 ;?></span><?php } else {
      echo $clubA3243;
    }?> - <?php echo $clubA3244;?>
    </td>
    <td class="coin5pts-32">
      <?php echo $A3243." - ".$A3244;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1622 == true){;?>
      <span style = color:yellow><?php echo $clubA1622; ?></span><?php } else {
      echo $clubA1622;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1622;?>
    </td>
    <td class="coin4">
     <?php if ($qualif8011 == true){;?>
      <span style = color:yellow><?php echo $clubA8011; ?></span><?php } else {
      echo $clubA8011;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8011;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
        <?php if ($qualif3245 == true){;?>
      <span style = color:yellow><?php echo $clubA3245 ;?></span><?php } else {
      echo $clubA3245;
    }?> - <?php echo $clubA3246;?>
    </td>
    <td class="coin5pts-32">
      <?php echo $A3245." - ".$A3246;?>
    </td>
    <td ></td>
    <td class="coin5">
    <?php if ($qualif1623 == true){;?>
      <span style = color:yellow><?php echo $clubA1623; ?></span><?php } else {
      echo $clubA1623;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1623;?>
    </td>
    <td class="coin4">
     <?php if ($qualif8012 == true){;?>
      <span style = color:yellow><?php echo $clubA8012; ?></span><?php } else {
      echo $clubA8012;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8012;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
        <?php if ($qualif3247 == true){;?>
      <span style = color:yellow><?php echo $clubA3247 ;?></span><?php } else {
      echo $clubA3247;
    }?> - <?php echo $clubA3248;?>
    </td>
    <td class="coin5pts-32">
      <?php echo $A3247." - ".$A3248;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1624 == true){;?>
      <span style = color:yellow><?php echo $clubA1624; ?></span><?php } else {
      echo $clubA1624;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1624;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td class="coin4">
     <?php if ($qualif2003 == true){;?>
      <span style = color:yellow><?php echo $clubA2003; ?></span><?php } else {
      echo $clubA2003;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A2003;?>
    </td>
  </tr>
  <tr> 
    <td  class="coin4-32">
        <?php if ($qualif3249 == true){;?>
      <span style = color:yellow><?php echo $clubA3249 ;?></span><?php } else {
      echo $clubA3249;
    }?> - <?php echo $clubA3250;?>
    
    </td>
    <td class="coin4pts-32">
      <?php echo $A3249." - ".$A3250;?>
    </td>
    <td ></td>
    <td class="coin4">
     <?php if ($qualif1625 == true){;?>
      <span style = color:yellow><?php echo $clubA1625; ?></span><?php } else {
      echo $clubA1625;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1625;?>
    </td>
    <td rowspan="4"><img  class="width8 height80" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td rowspan="8"><img class="width8 height163" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td class="coin4">
      <?php if ($qualif2004 == true){;?>
      <span style = color:yellow><?php echo $clubA2004; ?></span><?php } else {
      echo $clubA2004;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A2004;?>
    </td>
  </tr>
  <tr> 
    <td class="coin4-32">
       <?php if ($qualif3251 == true){;?>
      <span style = color:yellow><?php echo $clubA3251 ;?></span><?php } else {
      echo $clubA3251;
    }?> - <?php echo $clubA3252;?>
    </td>
    <td class="coin4pts-32">
      <?php echo $A3251." - ".$A3252;?>
    </td>
    <td ></td>
    <td class="coin4">
      <?php if ($qualif1626 == true){;?>
      <span style = color:yellow><?php echo $clubA1626; ?></span><?php } else {
      echo $clubA1626;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1626;?>
    </td>
    <td class="coin4">
     <?php if ($qualif8013 == true){;?>
      <span style = color:yellow><?php echo $clubA8013; ?></span><?php } else {
      echo $clubA8013;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8013;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3"></td>
  </tr>


  <tr> 
    <td class="coin4-32">
        <?php if ($qualif3253 == true){;?>
      <span style = color:yellow><?php echo $clubA3253 ;?></span><?php } else {
      echo $clubA3253;
    }?> - <?php echo $clubA3254;?>
      
    </td>
    <td class="coin4pts-32">
      <?php echo $A3253." - ".$A3254;?>
    </td>
    <td ></td>
    <td class="coin4">
     <?php if ($qualif1627 == true){;?>
      <span style = color:yellow><?php echo $clubA1627; ?></span><?php } else {
      echo $clubA1627;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1627;?>
    </td>
    <td class="coin4">
     <?php if ($qualif8014 == true){;?>
      <span style = color:yellow><?php echo $clubA8014; ?></span><?php } else {
      echo $clubA8014;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8014;?>
    </td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="3" rowspan="2" class="champ"><?php echo $champion;?></td>
   
  </tr>


  <tr> 
    <td class="coin4-32">
        <?php if ($qualif3255 == true){;?>
      <span style = color:yellow><?php echo $clubA3255 ;?></span><?php } else {
      echo $clubA3255;
    }?> - <?php echo $clubA3256;?>
    </td>
    <td class="coin4pts-32">
      <?php echo $A3255." - ".$A3256;?>
    </td>
    <td ></td>
    <td class="coin4">
     <?php if ($qualif1628 == true){;?>
      <span style = color:yellow><?php echo $clubA1628; ?></span><?php } else {
      echo $clubA1628;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A1628;?>
    </td>
    <td colspan="2"></td>
    <td class="coin4">
      <?php if ($qualif4007 == true){;?>
      <span style = color:yellow><?php echo $clubA4007; ?></span><?php } else {
      echo $clubA4007;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A4007;?>
    </td>
    <td colspan="3"></td>
    <td colspan="3" ></td>
  </tr>
  <tr> 
    <td class="coin5-32">
        <?php if ($qualif3257 == true){;?>
      <span style = color:yellow><?php echo $clubA3257 ;?></span><?php } else {
      echo $clubA3257;
    }?> - <?php echo $clubA3258;?>
      
    </td>
    <td class="coin5pts-32">
      <?php echo $A3257." - ".$A3258;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1629 == true){;?>
      <span style = color:yellow><?php echo $clubA1629; ?></span><?php } else {
      echo $clubA1629;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1629;?>
    </td>
    <td rowspan="4"><img class="width8 height80" src="../../images/accolade.png"  alt="accolade"></td>
    <td colspan="2"></td>
    <td class="coin4">
      <?php if ($qualif4008 == true){;?>
      <span style = color:yellow><?php echo $clubA4008; ?></span><?php } else {
      echo $clubA4008;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A4008;?>
    </td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
        <?php if ($qualif3259 == true){;?>
      <span style = color:yellow><?php echo $clubA3259 ;?></span><?php } else {
      echo $clubA3259;
    }?> - <?php echo $clubA3260;?>
    </td>
    <td class="coin5pts-32">
      <?php echo $A3259." - ".$A3260;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1630 == true){;?>
      <span style = color:yellow><?php echo $clubA1630; ?></span><?php } else {
      echo $clubA1630;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1630;?>
    </td>
    <td class="coin4">
      <?php if ($qualif8015 == true){;?>
      <span style = color:yellow><?php echo $clubA8015; ?></span><?php } else {
      echo $clubA8015;
    } ?>
    </td>
    <td class="coin4pts">
      <?php echo $A8015;?>
    </td>
    <td colspan="2"></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
  </tr>
  <tr> 
    <td  class="coin5-32">
        <?php if ($qualif3261 == true){;?>
      <span style = color:yellow><?php echo $clubA3261 ;?></span><?php } else {
      echo $clubA3261;
    }?> - <?php echo $clubA3262;?>
    </td>
    <td  class="coin5pts-32">
      <?php echo $A3261." - ".$A3262;?>
    </td>
    <td  ></td>
    <td  class="coin5">
      <?php if ($qualif1631 == true){;?>
      <span style = color:yellow><?php echo $clubA1631; ?></span><?php } else {
      echo $clubA1631;
    } ?>
    </td>
    <td  class="coin5pts">
      <?php echo $A1631;?>
    </td>
    <td  class="coin4">
    <?php if ($qualif8016 == true){;?>
      <span style = color:yellow><?php echo $clubA8016; ?></span><?php } else {
      echo $clubA8016;
    } ?>
    </td>
    <td  class="coin4pts">
      <?php echo $A8016;?>
    </td>
    <td colspan="9"></td>
  </tr>
  <tr> 
    <td class="coin5-32">
        <?php if ($qualif3263 == true){;?>
      <span style = color:yellow><?php echo $clubA3263 ;?></span><?php } else {
      echo $clubA3263;
    }?> - <?php echo $clubA3264;?>
    </td>
    <td class="coin5pts-32">
      <?php echo $A3263." - ".$A3264;?>
    </td>
    <td ></td>
    <td class="coin5">
      <?php if ($qualif1632 == true){;?>
      <span style = color:yellow><?php echo $clubA1632; ?></span><?php } else {
      echo $clubA1632;
    } ?>
    </td>
    <td class="coin5pts">
      <?php echo $A1632;?>
    </td>
    <td colspan="2"></td>
    <td colspan="9"></td>
  </tr>
  <tr> 
    <td colspan="18"></td>
  </tr>
  <tr> 
    <td colspan="18" class="backgroundOrange"></td>
  </tr>
</table>

