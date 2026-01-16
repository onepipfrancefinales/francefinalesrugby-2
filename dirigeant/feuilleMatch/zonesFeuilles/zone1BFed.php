<?php
//echo "reel : ".$effectifReel;
//echo "joueurs : ".$effectifJoueurs;
for ($i=1; $i<= 100; $i++) 
{
if (isset ($_POST['M'.$i])) ${"M".$i} = $_POST['M'.$i]; else ${"M".$i} = "";
}

?>
<table width="900" border="1" cellspacing="0"  cellpadding="0" align="left" height="500">
  <tr> 
    <td height="41" width="18" bordercolor="#000000" bgcolor="#000000"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <font color="#FFFFFF">A</font> </font></b></div>
    </td>
    <td colspan="3" height="41" bordercolor="#000000"> 
      <div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"> 
        <?php echo $clubA;?>
        </font></b></div>
    </td>
    <td colspan="3" height="41" bgcolor="#CCCCCC" bordercolor="#000000"> 
      <div align="center">Type<br>
        Qualif </div>
    </td>
    <td height="38" bgcolor="#CCCCCC" bordercolor="#000000" rowspan="2" width="33"> 
      <div align="center"></div>
    </td>
    <td height="41" width="19" bgcolor="#000000" bordercolor="#000000"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
        <font color="#FFFFFF">B</font> </font></b></div>
    </td>
    <td height="41" colspan="3" bgcolor="#FFFFFF" bordercolor="#000000"> 
      <div align="center">Equipe <b>:<font face="Arial, Helvetica, sans-serif"> 
        <?php	 echo $clubB;	?>
        </font></b></div>
    </td>
    <td colspan="3" height="41" bgcolor="#CCCCCC" bordercolor="#000000"> 
      <div align="center">Type<br>
        Qualif </div>
    </td>
    <td height="38" bgcolor="#CCCCCC" bordercolor="#000000" rowspan="2" width="29"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td height="384" rowspan="16" bordercolor="#000000" width="18"><font size="2" face="Arial, Helvetica, sans-serif"> 
      </font> 
      <div align="center"> <font size="1" face="Arial, Helvetica, sans-serif"> 
        </font></div>
    </td>
    <td width="16" height="24" bordercolor="#000000"> 
      <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;</font></div>
    </td>
    <td width="144" height="24" bordercolor="#000000"> 
      <div id="Taille">NOM (lettres capitales)</div>
    </td>
    <td width="183" height="24" bordercolor="#000000"> 
      <div id="Taille">N&deg;de licence</div>
    </td>
    <td width="18" height="24" bgcolor="#CCCCCC" bordercolor="#000000"> 
      <div id="Taille">A</div>
    </td>
    <td width="18" height="24" bgcolor="#CCCCCC" bordercolor="#000000"> 
      <div id="Taille">B</div>
    </td>
    <td width="21" height="24" bgcolor="#CCCCCC" bordercolor="#000000"> 
      <div id="Taille">C</div>
    </td>
    <td height="384" bgcolor="#FFFFFF" bordercolor="#000000" rowspan="16" width="19"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        <b><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font></b> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        <b><font size="1" face="Arial, Helvetica, sans-serif"> </font></b><b><font size="1" face="Arial, Helvetica, sans-serif"> 
        </font></b> </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        <b><font size="1" face="Arial, Helvetica, sans-serif"> </font></b><b><font size="1" face="Arial, Helvetica, sans-serif"> 
        </font></b> </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        <b><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font></b> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        <b><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font></b> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
    </td>
    <td height="24" width="17" bgcolor="#FFFFFF" bordercolor="#000000"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif">N&deg;</font></div>
    </td>
    <td height="24" width="166" bgcolor="#FFFFFF" bordercolor="#000000"> 
      <div id="Taille">NOM (lettres capitales)</div>
    </td>
    <td height="24" width="146" bgcolor="#FFFFFF" bordercolor="#000000"> 
      <div id="Taille">N&deg;de licence</div>
    </td>
    <td height="24" width="21" bgcolor="#CCCCCC" bordercolor="#000000"> 
      <div id="Taille">A</div>
    </td>
    <td height="24" width="18" bgcolor="#CCCCCC" bordercolor="#000000"> 
      <div id="Taille">B</div>
    </td>
    <td height="24" width="20" bgcolor="#CCCCCC" bordercolor="#000000"> 
      <div id="Taille">C</div>
    </td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="24" valign="middle"> 
      <div id="Taille">1</div>
    </td>
    <td width="144" height="24" valign="top"> 
      <div align="center"> <font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="24" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille">1</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" height="24" valign="middle"> 
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
			echo $joueur1;
			?>
      </div>
    </td>
    <td width="146" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence1; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="24"> 
      <div id="Taille">2</div>
    </td>
    <td width="144" valign="top" height="24"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" valign="top" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille">2</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="24"> 
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
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille"> 
        <?php echo $nLicence2; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="24" valign="middle"> 
      <div id="Taille">3</div>
    </td>
    <td width="144" height="24" valign="top"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="24" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle"> 
      <div id="Taille">3</div>
    </td>
    <td width="166" height="24" bgcolor="#FFFFFF" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°3    ************
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
    <td width="146" height="24" bgcolor="#FFFFFF" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence3; ?>
      </div>
    </td>
    <td width="21" height="24" bgcolor="#CCCCCC" valign="middle">&nbsp;</td>
    <td width="18" height="24" bgcolor="#CCCCCC" valign="middle">&nbsp;</td>
    <td width="20" height="24" bgcolor="#CCCCCC" valign="middle">&nbsp;</td>
    <td width="29" height="24" bgcolor="#CCCCCC" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="25"> 
      <div id="Taille">4</div>
    </td>
    <td width="144" valign="top" height="25"> 
      <div align="center"></div>
    </td>
    <td width="183" valign="top" height="25">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="25"> 
      <div id="Taille">4</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="25"> 
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
			echo $joueur4;
			?>
        <font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="25"> 
      <div id="Taille"> 
        <?php echo $nLicence4; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="25">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="25">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="25">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="25">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="27"> 
      <div id="Taille">5</div>
    </td>
    <td width="144" valign="top" height="27"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="183" valign="top" height="27">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="27"> 
      <div id="Taille">5</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="27"> 
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
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="27"> 
      <div id="Taille"> 
        <?php echo $nLicence5; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="27">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="27">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="27">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="27">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="3"> 
      <div id="Taille">6</div>
    </td>
    <td width="144" valign="top" height="3"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="183" valign="top" height="3">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="3"> 
      <div id="Taille">6</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="3"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°6    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==6)
					{
					$joueur6=$tabJoueur[$i-1];
					$idPerso6= $i;
					$nLicence6=$tabLicence[$i-1];
					}
			}
			echo $joueur6;
			?>
      </div>
    </td>
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="3"> 
      <div id="Taille"> 
        <?php echo $nLicence6; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="3">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="3">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="3">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="3">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="24"> 
      <div id="Taille">7</div>
    </td>
    <td width="144" valign="top" height="24"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" valign="top" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille">7</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="24"> 
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
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille"> 
        <?php echo $nLicence7; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="24" valign="middle"> 
      <div id="Taille">8</div>
    </td>
    <td width="144" height="24" valign="top"> </td>
    <td width="183" height="24" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille">8</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" height="24" valign="middle"> 
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
        <font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="146" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence8; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="24"> 
      <div id="Taille">9</div>
    </td>
    <td width="144" valign="top" height="24"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" valign="top" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille">9</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°9    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			if (${"M".$i}==9)
					{
					$joueur9=$tabJoueur[$i-1];
					$idPerso9= $i;
					$nLicence9=$tabLicence[$i-1];
					}
			}
			echo $joueur9;
			?>
      </div>
    </td>
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille"> 
        <?php echo $nLicence9; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="24"> 
      <div id="Taille">10</div>
    </td>
    <td width="144" valign="top" height="24"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" valign="top" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" ></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille">10</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°10    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
			if (${"M".$i}==10)
					{
					$joueur10=$tabJoueur[$i-1];
					$idPerso10= $i;
					$nLicence10=$tabLicence[$i-1];
					}
			}
			echo $joueur10;
			?>
      </div>
    </td>
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille"> 
        <?php echo $nLicence10; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="2" valign="middle"> 
      <div id="Taille">11</div>
    </td>
    <td width="144" height="2" > </td>
    <td width="183" height="2"></td>
    <td width="18" bgcolor="#CCCCCC" height="2"></td>
    <td width="18" bgcolor="#CCCCCC" height="2"></td>
    <td width="21" bgcolor="#CCCCCC" height="2"></td>
    <td width="33" bgcolor="#CCCCCC" height="2"></td>
    <td width="17" bgcolor="#FFFFFF" height="2" valign="middle"> 
      <div id="Taille">11</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" height="2" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°11   ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
			if (${"M".$i}==11)
					{
					$joueur11=$tabJoueur[$i-1];
					$idPerso11= $i;
					$nLicence11=$tabLicence[$i-1];
					}
			}
			echo $joueur11;
			?>
      </div>
    </td>
    <td width="146" bgcolor="#FFFFFF" height="2" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence11; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="2" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="2" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="2" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="2" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="20" valign="middle"> 
      <div id="Taille">12</div>
    </td>
    <td width="144" height="20" valign="top"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="20" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" height="20" valign="middle"> 
      <div id="Taille">12</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" height="20" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°12    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		if (${"M".$i}==12)
			{
					{
					$joueur12=$tabJoueur[$i-1];
					$idPerso12= $i;
					$nLicence12=$tabLicence[$i-1];
					}
			}
			echo $joueur12;
			?>
        <font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="146" bgcolor="#FFFFFF" height="20" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence12; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="20" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="20" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="20" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="20" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="24"> 
      <div id="Taille">13</div>
    </td>
    <td width="144" valign="top" height="24"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" valign="top" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille">13</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°13    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		if (${"M".$i}==13)
			{	
					{
					$joueur13=$tabJoueur[$i-1];
					$idPerso13= $i;
					$nLicence13=$tabLicence[$i-1];
					}
			}
			echo $joueur13;
			?>
        <font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille"> 
        <?php echo $nLicence13; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="24" valign="middle"> 
      <div id="Taille">14</div>
    </td>
    <td width="144" height="24" valign="top"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="24" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle"> 
      <div id="Taille">14</div>
    </td>
    <td width="166" height="24" bgcolor="#FFFFFF" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°14    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		if (${"M".$i}==14)
			{
					{
					$joueur14=$tabJoueur[$i-1];
					$idPerso14= $i;
					$nLicence14=$tabLicence[$i-1];
					}
			}
			echo $joueur14;
			?>
        <font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="146" height="24" bgcolor="#FFFFFF" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence14; ?>
      </div>
    </td>
    <td width="21" height="24" bgcolor="#CCCCCC" valign="middle">&nbsp;</td>
    <td width="18" height="24" bgcolor="#CCCCCC" valign="middle">&nbsp;</td>
    <td width="20" height="24" bgcolor="#CCCCCC" valign="middle">&nbsp;</td>
    <td width="29" height="24" bgcolor="#CCCCCC" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="24" valign="middle"> 
      <div id="Taille">15</div>
    </td>
    <td width="144" height="24" valign="top"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="24" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille">15</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°15    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		if (${"M".$i}==15)
			{
					{
					$joueur15=$tabJoueur[$i-1];
					$idPerso15= $i;
					$nLicence15=$tabLicence[$i-1];
					}
			}
			echo $joueur15;
			?>
        <font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="146" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence15; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="middle" align="center" rowspan="8" bordercolor="#000000" height="192" width="18"> 
      <div align="center"><font size="1"></font></div>
    </td>
    <td width="16" valign="middle" height="24" bordercolor="#000000"> 
      <div id="Taille">16</div>
    </td>
    <td width="144" valign="top" height="24" bordercolor="#000000"> 
      
    </td>
    <td width="183" valign="top" height="24" bordercolor="#000000">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td rowspan="8" bgcolor="#FFFFFF" valign="middle" height="192" bordercolor="#000000" width="19"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="1"><font size="1"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></font></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></div>
    </td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="24" bordercolor="#000000"> 
      <div id="Taille">16</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="24" bordercolor="#000000"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°16    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		if (${"M".$i}==16)
			{
					{
					$joueur16=$tabJoueur[$i-1];
					$idPerso16= $i;
					$nLicence16=$tabLicence[$i-1];
					}
			}
			echo $joueur16;
			?>
      </div>
    </td>
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="24" bordercolor="#000000"> 
      <div id="Taille"> 
        <?php echo $nLicence16; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="24" bordercolor="#000000">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="24" bordercolor="#000000">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="24" bordercolor="#000000">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="24" bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="24"> 
      <div id="Taille">17</div>
    </td>
    <td width="144" valign="top" height="24"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" valign="top" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille">17</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°17    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		if (${"M".$i}==17)
				{
					{
					$joueur17=$tabJoueur[$i-1];
					$idPerso17= $i;
					$nLicence17=$tabLicence[$i-1];
					}
			}
			echo $joueur17;
			?>
        <font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille"> 
        <?php echo $nLicence17; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" valign="middle" height="24"> 
      <div id="Taille">18</div>
    </td>
    <td width="144" valign="top" height="24"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" valign="top" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille">18</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°18    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		if (${"M".$i}==18)
				{
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
    <td width="146" bgcolor="#FFFFFF" valign="middle" height="24"> 
      <div id="Taille"> 
        <?php echo $nLicence18; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" valign="middle" height="24">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="24" valign="middle"> 
      <div id="Taille">19</div>
    </td>
    <td width="144" height="24" valign="top"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="24" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille">19</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°19    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		if (${"M".$i}==19)
				{
					{
					$joueur19=$tabJoueur[$i-1];
					$idPerso19= $i;
					$nLicence19=$tabLicence[$i-1];
					}
			}
			echo $joueur19;
			?>
      </div>
    </td>
    <td width="146" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence19; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="24" valign="middle"> 
      <div id="Taille">20</div>
    </td>
    <td width="144" height="24" valign="top"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="24" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille">20</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°20    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
				if (${"M".$i}==20)
							{
							$joueur20=$tabJoueur[$i-1];
							$idPerso20= $i;
							$nLicence20=$tabLicence[$i-1];
							}
			}
			echo $joueur20;
			?>
      </div>
    </td>
    <td width="146" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence20; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="24" valign="middle"> 
      <div id="Taille">21</div>
    </td>
    <td width="144" height="24" valign="top"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="24" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille">21</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°21    ************
		for ($i=1; $i<=$effectifReel ; $i++)
			{
				if (${"M".$i}==21)
							{
							$joueur21=$tabJoueur[$i-1];
							$idPerso21= $i;
							$nLicence21=$tabLicence[$i-1];
							}
			}
			echo $joueur21;
			?>
      </div>
    </td>
    <td width="146" bgcolor="#FFFFFF" height="24" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence21; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="20" valign="middle"> 
      <div id="Taille">22</div>
    </td>
    <td width="144" height="20" valign="top"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="20" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="20"></td>
    <td width="18" bgcolor="#CCCCCC" height="20"></td>
    <td width="21" bgcolor="#CCCCCC" height="20"></td>
    <td width="33" bgcolor="#CCCCCC" height="20"></td>
    <td width="17" bgcolor="#FFFFFF" height="20" valign="middle"> 
      <div id="Taille">22</div>
    </td>
    <td width="166" bgcolor="#FFFFFF" height="20" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°22    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
				if (${"M".$i}==22)
							{
							$joueur22=$tabJoueur[$i-1];
							$idPerso22= $i;
							$nLicence22=$tabLicence[$i-1];
							}
			}
			echo $joueur22;
			?>
        <font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="146" bgcolor="#FFFFFF" height="20" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence22; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="20" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="20" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="20" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="20" valign="middle">&nbsp;</td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="16" height="24" valign="middle" bgcolor="#CCCCCC"> 
      <div id="Taille">23</div>
    </td>
    <td width="144" height="24" valign="top" bgcolor="#CCCCCC"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
        </b></font></div>
    </td>
    <td width="183" height="24" valign="top" bgcolor="#CCCCCC">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="18" bgcolor="#CCCCCC"></td>
    <td width="21" bgcolor="#CCCCCC"></td>
    <td width="33" bgcolor="#CCCCCC"></td>
    <td width="17" bgcolor="#CCCCCC" height="24" valign="middle"> 
      <div id="Taille">23</div>
    </td>
    <td width="166" bgcolor="#CCCCCC" height="24" valign="middle"> 
      <div id="Taillebold"> 
        <?php  //***********    Nom et licence du joueur N°23    ************
		for ($i=1; $i<=$effectifReel ; $i++)
		{
				if (${"M".$i}==23)
							{
							$joueur23=$tabJoueur[$i-1];
							$idPerso23= $i;
							$nLicence23=$tabLicence[$i-1];
							}
			}
			echo $joueur23;
			?>
        <font face="Arial, Helvetica, sans-serif"></font></div>
    </td>
    <td width="146" bgcolor="#CCCCCC" height="24" valign="middle"> 
      <div id="Taille"> 
        <?php echo $nLicence23; ?>
      </div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="24" valign="middle">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2" height="24" bordercolor="#000000">&nbsp;</td>
    <td colspan="2" height="24" bordercolor="#000000" valign="top"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
        Capitaine : N&deg; <b> </b></font></div>
    </td>
    <td width="18" bgcolor="#CCCCCC" height="24" bordercolor="#000000" valign="top">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="24" bordercolor="#000000" valign="top">&nbsp;</td>
    <td width="21" bgcolor="#CCCCCC" height="24" bordercolor="#000000" valign="top">&nbsp;</td>
    <td width="33" bgcolor="#CCCCCC" height="24" bordercolor="#000000" valign="top">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF" height="24" bordercolor="#000000">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF" height="24" bordercolor="#000000"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Capitaine 
        :<b> </b> N&deg; 
        <?php echo $capitaine; ?>
        <b> </b><b> </b></font></div>
    </td>
    <td width="21" bgcolor="#CCCCCC" height="24" bordercolor="#000000">&nbsp;</td>
    <td width="18" bgcolor="#CCCCCC" height="24" bordercolor="#000000">&nbsp;</td>
    <td width="20" bgcolor="#CCCCCC" height="24" bordercolor="#000000">&nbsp;</td>
    <td width="29" bgcolor="#CCCCCC" height="24" bordercolor="#000000">&nbsp;</td>
  </tr>
</table>

<?php

/*
if (isset ($_GET['doubleBase'])) $doubleBase = $_GET['doubleBase'];else $doubleBase = "";
 
 if ($doubleBase == 0)
 {
	 $sql = "UPDATE $bdfeuilleB
				SET  equipe_dom='$equipeA',equipe_ext='$equipeB',
				N1='$idPerso1',N2='$idPerso2',N3='$idPerso3',N4='$idPerso4',N5='$idPerso5',
				N6='$idPerso6',N7='$idPerso7',N8='$idPerso8',N9='$idPerso9',
				N10='$idPerso10',N11='$idPerso11',N12='$idPerso12',N13='$idPerso13',N14='$idPerso14',N15='$idPerso15',
				N16='$idPerso16',N17='$idPerso17',N18='$idPerso18',N19='$idPerso19',N20='$idPerso20',N21='$idPerso21',
				N22='$idPerso22',N23='$idPerso23',
				capitaine='$capitaine'
					
			  WHERE id = $code_match " ;
	 
		$requete = mysql_query( $sql )   ;
 }
 else
 {
 
	
	$bdfeuilleB = "php".''.$comite.''."_feuilleB";
	$requete = "SELECT connectInvitee, comiteInvite
				FROM $bdfeuilleB 
				WHERE id=$code_match";
							$result = mysql_query($requete) or die(mysql_error());
							while($row = mysql_fetch_array($result))
							{    
							$connectEquipeInvitee ="$row[0]";
							$comiteEquipeInvitee ="$row[1]";
							}
	//echo $connectEquipeInvitee;						
	//echo $comiteEquipeInvitee;						
			
	if ($equipe == $equipeB)
			{
			$connectB = $connect;
			$comiteB = $comite;
			$connectA = $connectEquipeInvitee;
			$comiteA = $comiteEquipeInvitee;
			}
		else
			{
			$connectA = $connect;
			$comiteA = $comite;
			$connectB = $connectEquipeInvitee;
			$comiteB = $comiteEquipeInvitee;
			}
	
	$bdfeuilleB = "php".''.$comiteA.''."_feuilleB";
	
	 $sql2 = "UPDATE $bdfeuilleB

			   SET  equipe_dom='$equipeA',equipe_ext='$equipeB', 
			   		N1='$idPerso1',N2='$idPerso2',N3='$idPerso3',N4='$idPerso4',N5='$idPerso5',
					N6='$idPerso6',N7='$idPerso7',N8='$idPerso8',N9='$idPerso9',N10='$idPerso10',
					N11='$idPerso11',N12='$idPerso12',N13='$idPerso13',N14='$idPerso14',N15='$idPerso15',
					N16='$idPerso16',N17='$idPerso17',N18='$idPerso18',N19='$idPerso19',N20='$idPerso20',
					N21='$idPerso21',N22='$idPerso22',N23='$idPerso23'
					
			WHERE id = $code_match " ;
	 
		$requete = mysql_query( $sql2 )   ;
	 
*/

//*** transfert des données en base
/*
for ($i=1; $i<100; $i++)
{

if (empty(${"idPerso".$i})) 
	{
 	${"idPerso".$i}='0';
	}
}

*/


/*


	 $bdfeuilleB = "php".''.$comite.''."_feuilleB";
	 
	echo $bdfeuilleB;
	echo $code_match;
	echo $idPerso1;
	
	
	  $req = $bdd->prepare('UPDATE $bdfeuilleB
							SET N1 =:idPerso1
							
							WHERE  id =:code_match');
		   
	 $req->execute(array(
						'idPerso1' => $idPerso1,
						'code_match' => $code_match
						));		   
*/			
/*
//$reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo()));

			SET  	N1='$idPerso1',N2='$idPerso2',N3='$idPerso3',N4='$idPerso4',N5='$idPerso5',
					N6='$idPerso6',N7='$idPerso7',N8='$idPerso8',N9='$idPerso9',N10='$idPerso10',
					N11='$idPerso11',N12='$idPerso12',N13='$idPerso13',N14='$idPerso14',N15='$idPerso15',
					N16='$idPerso16',N17='$idPerso17',N18='$idPerso18',N19='$idPerso19',N20='$idPerso20',
					N21='$idPerso21',N22='$idPerso22',N23='$idPerso23'
			WHERE id = '$code_match' ') ;
			
	// or die(print_r($bdd->errorInfo()))
	//	$requete = mysql_query( $sql2 )   ;
*/
?>
