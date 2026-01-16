<?php
//echo "reel : ".$effectifReel;
//echo "joueurs : ".$effectifJoueurs;
for ($i=1; $i<=$effectifReel; $i++) 
{
if (isset ($_POST['M'.$i])) ${"M".$i} = $_POST['M'.$i]; else ${"M".$i} = "";
}

?>

  
<table width="900" border="1" cellspacing="0"  cellpadding="0" align="left" height="500">
  <tr> 
    <td height="41" width="13" bordercolor="#000000" bgcolor="#000000"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <font color="#FFFFFF">A</font></font></b></div>
    </td>
    <td colspan="3" height="41" bordercolor="#000000"> 
      <div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"> 
        <?php echo $clubA;?>
        </font></b></div>
    </td>
    <td rowspan="2" height="73" bgcolor="#CCCCCC" bordercolor="#000000" width="17"> 
      <div align="center"></div>
    </td>
    <td height="41" width="14" bgcolor="#000000" bordercolor="#000000"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <font color="#FFFFFF">B</font></font></b></div>
    </td>
    <td height="41" colspan="3" bgcolor="#FFFFFF" bordercolor="#000000"> 
      <div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"> 
        <?php	 echo $clubB;	?>
        </font></b></div>
    </td>
    <td rowspan="2" height="73" bgcolor="#CCCCCC" bordercolor="#000000" width="24"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td height="367" rowspan="16" bordercolor="#000000" width="13"><font size="2" face="Arial, Helvetica, sans-serif"> 
      </font> </td>
    <td width="27" height="25" bordercolor="#000000"> 
      <div id="Taille"> 
        <div align="center">N&deg; </div>
      </div>
    </td>
    <td width="186" height="25" bordercolor="#000000"> 
      <div id="Taille">NOM (lettres capitales)</div>
    </td>
    <td width="138" height="25" bordercolor="#000000"> 
      <div id="Taille">N&deg;de licence</div>
    </td>
    <td height="380" bgcolor="#FFFFFF" bordercolor="#000000" rowspan="16" width="14"> 
      <div align="center"></div>
      <font face="Arial, Helvetica, sans-serif" size="1"> </font><font face="Arial, Helvetica, sans-serif" size="1"> 
      </font></td>
    <td height="25" width="27" bgcolor="#FFFFFF" bordercolor="#000000"> 
      <div id="Taille"> 
        <div align="right">N&deg; </div>
      </div>
    </td>
    <td height="25" width="186" bgcolor="#FFFFFF" bordercolor="#000000"> 
      <div id="Taille">NOM lettres capitales) </div>
    </td>
    <td height="25" width="138" bgcolor="#FFFFFF" bordercolor="#000000"> 
      <div id="Taille"> N&deg;de licence </div>
    </td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 1</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php
		  
for ($i=1 ; $i<24 ; $i++)
{
if (isset (${"joueur".$i})) ${"joueur".$i} = ${"joueur".$i}; else ${"joueur".$i}="";
if (isset (${"nLicence".$i})) ${"nLicence".$i} = ${"nLicence".$i}; else ${"nLicence".$i}="";
if (isset (${"idPerso".$i})) ${"idPerso".$i} = ${"idPerso".$i}; else ${"idPerso".$i}="";
}




?>
        <?php  //***********    Nom et licence du joueur N°1    ************
		  

		for ($i=1; $i<=$effectifReel ; $i++)
			{
			if (${"M".$i}==1)
					{
					$joueur1=$tabJoueur[$i-1];
					$idPerso1= $i;
					$nLicence1=$tabLicence[$i-1];
					}
			}
			echo $joueur1;?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence1; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">1</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" height="22" > 
      <div id="Taille"> 2</div>
    </td>
    <td width="186" height="22" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°2    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			if (${"M".$i}==2)
					{
					$joueur2=$tabJoueur[$i-1];
					$idPerso2= $i;
					$nLicence2=$tabLicence[$i-1];
					}
			}
			 echo $joueur2;
			 ?>
      </div>
    </td>
    <td width="138" height="22" > 
      <div id="Taille"> 
        <?php echo $nLicence2; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" height="22" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" height="22" > 
      <div id="Taille">2</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" height="22" ></td>
    <td width="138" bgcolor="#FFFFFF" height="22" ></td>
    <td width="24" bgcolor="#CCCCCC" height="22" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 3</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  
//***********    Nom et licence du joueur N°3    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			
			if (${"M".$i}==3)
					{
					$joueur3=$tabJoueur[$i-1];
					$idPerso3= $i;
					$nLicence3=$tabLicence[$i-1];
					}
		}
			 echo $joueur3;
			?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence3; ?>
      </div>
    </td>
    <td width="17"  bgcolor="#CCCCCC">&nbsp;</td>
    <td width="27"  bgcolor="#FFFFFF"> 
      <div id=Taille">3</div>
    </td>
    <td width="186"  bgcolor="#FFFFFF"></td>
    <td width="138"  bgcolor="#FFFFFF"></td>
    <td width="24"  bgcolor="#CCCCCC"></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 4</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°4    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
				if (${"M".$i}==4)
					{
					$joueur4=$tabJoueur[$i-1];
					$idPerso4= $i;
					$nLicence4=$tabLicence[$i-1];
					}
			}
			 echo $joueur4;?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence4; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">4</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 5</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°5    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==5)
					{
					$joueur5=$tabJoueur[$i-1];
					$idPerso5= $i;
					$nLicence5=$tabLicence[$i-1];
					}
		}
		 echo $joueur5;
		 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence5; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">5</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 6</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°6    ************
				for ($i=1; $i<=$effectifReel ; $i++)
					{
						if (${"M".$i}==6)
						{
						
						
						//$joueur6=${"nom".$i};
						$idPerso6= $i;
						//$nLicence6=${"licence".$i};
						$joueur6=$tabJoueur[$i-1];
						$nLicence6=$tabLicence[$i-1];
						}
					}
				 echo $joueur6;
				 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence6; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">6</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 7</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°7    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			
			if (${"M".$i}==7)
					{
					$joueur7=$tabJoueur[$i-1];
					$idPerso7= $i;
					$nLicence7=$tabLicence[$i-1];
					}
			}
			 echo $joueur7;
			 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence7; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">7</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 8</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°8    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			if (${"M".$i}==8)
					{
					$joueur8=$tabJoueur[$i-1];
					$idPerso8= $i;
					$nLicence8=$tabLicence[$i-1];
					}
			}
			 echo $joueur8;
			 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence8; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">8</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 9</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°9    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			
			if (${"M".$i}==9)
					{
					$joueur9=$tabJoueur[$i-1];
					$nLicence9=$tabLicence[$i-1];
					$idPerso9= $i;
					}
			}
		 echo $joueur9;
		 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence9; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">9</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 10</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°10    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			if (${"M".$i}==10)
					{
					$joueur10=$tabJoueur[$i-1];
					$nLicence10=$tabLicence[$i-1];
					$idPerso10= $i;
					}
			}
		
			 echo $joueur10;
			 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence10; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">10</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 11</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°11   ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==11)
					{
					$joueur11=$tabJoueur[$i-1];
					$nLicence11=$tabLicence[$i-1];
					$idPerso11= $i;
					}
			
		}
 		echo $joueur11;
 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence11; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">11</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 12</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°12    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==12)
					{
					$joueur12=$tabJoueur[$i-1];
					$idPerso12= $i;
					$nLicence12=$tabLicence[$i-1];
					}
		}
		 echo $joueur12;
		 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence12; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">12</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" height="20" > 
      <div id="Taille"> 13</div>
    </td>
    <td width="186" height="20" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°13    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			if (${"M".$i}==13)
					{
					$joueur13=$tabJoueur[$i-1];
					$idPerso13= $i;
					$nLicence13=$tabLicence[$i-1];
					}
			}
			 echo $joueur13;
			 ?>
      </div>
    </td>
    <td width="138" height="20" > 
      <div id="Taille"> 
        <?php echo $nLicence13; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" height="20" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" height="20" > 
      <div id="Taille">13</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" height="20" ></td>
    <td width="138" bgcolor="#FFFFFF" height="20" ></td>
    <td width="24" bgcolor="#CCCCCC" height="20" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 14</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°14    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			if (${"M".$i}==14)
					{
					$joueur14=$tabJoueur[$i-1];
					$idPerso14= $i;
					$nLicence14=$tabLicence[$i-1];
					}
			}
			 echo $joueur14;?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence14; ?>
      </div>
    </td>
    <td width="17"  bgcolor="#CCCCCC">&nbsp;</td>
    <td width="27"  bgcolor="#FFFFFF"> 
      <div id="Taille">14</div>
    </td>
    <td width="186"  bgcolor="#FFFFFF"></td>
    <td width="138"  bgcolor="#FFFFFF"></td>
    <td width="24"  bgcolor="#CCCCCC"></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 15</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°15    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==15)
					{
					$joueur15=$tabJoueur[$i-1];
					$idPerso15= $i;
					$nLicence15=$tabLicence[$i-1];
					}
		}
		 echo $joueur15;?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence15; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">15</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr valign="middle" align="center"> 
    <td rowspan="8" bordercolor="#000000" height="192" width="13">&nbsp; </td>
    <td width="27"  bordercolor="#000000"> 
      <div id="Taille"> 16</div>
    </td>
    <td width="186"  bordercolor="#000000"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°16    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			if (${"M".$i}==16)
					{
					$joueur16=$tabJoueur[$i-1];
					$idPerso16= $i;
					$nLicence16=$tabLicence[$i-1];
					}
			}
			 echo $joueur16;?>
      </div>
    </td>
    <td width="138"  bordercolor="#000000"> 
      <div id="Taille"> 
        <?php echo $nLicence16; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC"  bordercolor="#000000">&nbsp;</td>
    <td rowspan="8" bgcolor="#FFFFFF"  bordercolor="#000000" width="14">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF"  bordercolor="#000000"> 
      <div id="Taille">16</div>
    </td>
    <td width="186" bgcolor="#FFFFFF"  bordercolor="#000000"></td>
    <td width="138" bgcolor="#FFFFFF"  bordercolor="#000000"></td>
    <td width="24" bgcolor="#CCCCCC"  bordercolor="#000000"></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" height="18" > 
      <div id="Taille"> 17</div>
    </td>
    <td width="186" height="18" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°17    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==17)
					{
					$joueur17=$tabJoueur[$i-1];
					$idPerso17= $i;
					$nLicence17=$tabLicence[$i-1];
					}
		}
		 echo $joueur17;
		 ?>
      </div>
    </td>
    <td width="138" height="18" > 
      <div id="Taille"> 
        <?php echo $nLicence17; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" height="18" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" height="18" > 
      <div id="Taille">17</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" height="18" ></td>
    <td width="138" bgcolor="#FFFFFF" height="18" ></td>
    <td width="24" bgcolor="#CCCCCC" height="18" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 18</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°18    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==18)
					{
					$joueur18=$tabJoueur[$i-1];
					$idPerso18= $i;
					$nLicence18=$tabLicence[$i-1];
					}
		}
		 echo $joueur18;
		 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence18; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">18</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 19</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°19    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==19)
					{
					$joueur19=$tabJoueur[$i-1];
					$nLicence19=$tabLicence[$i-1];
					$idPerso19= $i;
					}
		}
		 echo $joueur19;
		 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence19; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">19</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 20</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°20    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==20)
					{
					$joueur20=$tabJoueur[$i-1];
					$nLicence20=$tabLicence[$i-1];
					$idPerso20= $i;
					}
		}
		 echo $joueur20;
		 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence20; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id=Taille>20</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 21</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°21    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==21)
					{
					$joueur21=$tabJoueur[$i-1];
					$nLicence21=$tabLicence[$i-1];
					$idPerso21= $i;
					}
		}
		 echo $joueur21;
		 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence21; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">21</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" > 
      <div id="Taille"> 22</div>
    </td>
    <td width="186" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°22    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==22)
					{
					$joueur22=$tabJoueur[$i-1];
					$nLicence22=$tabLicence[$i-1];
					$idPerso22= $i;
					}
		}
		 echo $joueur22;
		 ?>
      </div>
    </td>
    <td width="138" > 
      <div id="Taille"> 
        <?php echo $nLicence22; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF" > 
      <div id="Taille">22</div>
    </td>
    <td width="186" bgcolor="#FFFFFF" ></td>
    <td width="138" bgcolor="#FFFFFF" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr bordercolor="#000000" valign="middle" align="center"> 
    <td width="27" bgcolor="#CCCCCC" > 
      <div id="Taille"> 23</div>
    </td>
    <td width="186" bgcolor="#CCCCCC" > 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°23    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==23)
					{
					$joueur23=$tabJoueur[$i-1];
					$nLicence23=$tabLicence[$i-1];
					$idPerso23= $i;
					}
		}
		 echo $joueur23;
		 ?>
      </div>
    </td>
    <td width="138" bgcolor="#CCCCCC" > 
      <div id="Taille"> 
        <?php echo $nLicence23; ?>
      </div>
    </td>
    <td width="17" bgcolor="#CCCCCC" >&nbsp;</td>
    <td width="27" bgcolor="#CCCCCC" > 
      <div id="Taille">23</div>
    </td>
    <td width="186" bgcolor="#CCCCCC" ></td>
    <td width="138" bgcolor="#CCCCCC" ></td>
    <td width="24" bgcolor="#CCCCCC" ></td>
  </tr>
  <tr valign="middle" align="center"> 
    <td colspan="2"  bordercolor="#000000">&nbsp;</td>
    <td colspan="2"  bordercolor="#000000"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
        <b> </b>Capitaine :<b> </b> N&deg; <b> 
        <?php  echo $capitaine; ?>
        </b><b> </b></font></div>
    </td>
    <td width="17" bgcolor="#CCCCCC"  bordercolor="#000000">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF"  bordercolor="#000000">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF"  bordercolor="#000000"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Capitaine 
        : N&deg;</font></div>
    </td>
    <td width="24" bgcolor="#CCCCCC"  bordercolor="#000000">&nbsp;</td>
  </tr>
</table>
<?php //echo $feuilleA ; ?>
<?php
/*

 $doubleBase = $_GET['doubleBase'];
 
 if ($doubleBase == 0)
 {
 
 
	 $sql2 = "UPDATE $bdfeuilleA
			   SET  equipe_dom='$equipeA',equipe_ext='$equipeB',N1='$idPerso1',N2='$idPerso2',N3='$idPerso3',N4='$idPerso4',N5='$idPerso5',
																N6='$idPerso6',N7='$idPerso7',N8='$idPerso8',N9='$idPerso9',N10='$idPerso10',
																N11='$idPerso11',N12='$idPerso12',N13='$idPerso13',N14='$idPerso14',N15='$idPerso15',
																N16='$idPerso16',N17='$idPerso17',N18='$idPerso18',N19='$idPerso19',N20='$idPerso20',
																N21='$idPerso21',N22='$idPerso22',N23='$idPerso23'
			WHERE id = $code_match " ;
	 
		$requete = mysql_query( $sql2 )   ;
 }
 else
 {
 		
		//echo "<br />";
		//echo $connect; echo "<br />";
		//echo $comite; echo "<br />";
		

	require ("../../../$connect.php");	
	$bdfeuilleA = "php".''.$comite.''."_feuilleA";
	$requete = "SELECT connectInvitee, comiteInvite
				FROM $bdfeuilleA 
				WHERE id=$code_match";
							$result = mysql_query($requete) or die(mysql_error());
							while($row = mysql_fetch_array($result))
							{    
							$connectEquipeInvitee ="$row[0]";
							$comiteEquipeInvitee ="$row[1]";
							}
	//echo $connectEquipeInvitee;						
	//echo $comiteEquipeInvitee;						
			
	if ($equipe == $equipeA)
			{
			$connectA = $connect;
			$comiteA = $comite;
			$connectB = $connectEquipeInvitee;
			$comiteB = $comiteEquipeInvitee;
			}
		else
			{
			$connectB = $connect;
			$comiteB = $comite;
			$connectA = $connectEquipeInvitee;
			$comiteA = $comiteEquipeInvitee;
			}

	require ("../../../$connectA.php");	
	$bdfeuilleA = "php".''.$comiteA.''."_feuilleA";
	
	$sql2 = "UPDATE $bdfeuilleA
			   SET  equipe_dom='$equipeA',equipe_ext='$equipeB', 
			   		N1='$idPerso1',N2='$idPerso2',N3='$idPerso3',N4='$idPerso4',N5='$idPerso5',
					N6='$idPerso6',N7='$idPerso7',N8='$idPerso8',N9='$idPerso9',N10='$idPerso10',
					N11='$idPerso11',N12='$idPerso12',N13='$idPerso13',N14='$idPerso14',N15='$idPerso15',
					N16='$idPerso16',N17='$idPerso17',N18='$idPerso18',N19='$idPerso19',N20='$idPerso20',
					N21='$idPerso21',N22='$idPerso22',N23='$idPerso23'
					
			WHERE id = $code_match " ;
	 
		$requete = mysql_query( $sql2 )   ;	
	 


//*** transfert des données en base   ******

for ($i=1; $i<100; $i++)
{

if (empty(${"idPerso".$i})) 
	{
 	${"idPerso".$i}='0';
	}
}
		
	$bdfeuilleA = "php".''.$comite.''."_feuilleA";
	
	$sql2 = "UPDATE $bdfeuilleA
			   SET  equipe_dom='$equipeA',equipe_ext='$equipeB', 
			   		N1='$idPerso1',N2='$idPerso2',N3='$idPerso3',N4='$idPerso4',N5='$idPerso5',
					N6='$idPerso6',N7='$idPerso7',N8='$idPerso8',N9='$idPerso9',N10='$idPerso10',
					N11='$idPerso11',N12='$idPerso12',N13='$idPerso13',N14='$idPerso14',N15='$idPerso15',
					N16='$idPerso16',N17='$idPerso17',N18='$idPerso18',N19='$idPerso19',N20='$idPerso20',
					N21='$idPerso21',N22='$idPerso22',N23='$idPerso23'
			
			WHERE id = $code_match " ;
	 
		$requete = mysql_query( $sql2 )   ;
 
 
 */
 
?>

