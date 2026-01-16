<?php
 if (isset($_GET['division'])) $division=$_GET['division'];else $division="pas id connu";
 if (isset($_GET['comite'])) $comite=$_GET['comite'];else $comite="pas id connu";
 if (isset($_GET['annee'])) $annee=$_GET['annee'];else $annee="pas id connu";
$bdcomiteClub = $comite.''."_clubs";
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
huitiemeEtBarrages2019 ($bdcomiteClub, $division, $annee)
													
?> 
<p><b>Oppositions</b></p>
<p><font color="#F0f0f0">Barrages 8me </font></p>
<div class="equipeB1" > 
        <?php  echo $clubA1601;?>
    </div>
	<div class="coinB4"  > 
        <?php echo $clubA8001;?>
    </div>

	<div class="equipeB1" > 
        <?php  echo $clubA1602;?>
    </div>
	  
	<div class="coinB4"  > 
	  <?php  echo $clubA8002;?>
      </div>
<br/><br/>
	<div class="equipeVide" > 
        <?php  echo $clubA1603;?>
    </div>
	<div class="coinB4"  > 
        <?php echo $clubA8003;?>
    </div>

	<div class="equipeVide" > 
        <?php  echo $clubA1604;?>
    </div>
	  
	<div class="coinB4"  > 
	  <?php  echo $clubA8004;?>
      </div>
  
<br/><br/>
	<div class="equipeB1" > 
        <?php  echo $clubA1603;?>
    </div>
	<div class="coinB4"  > 
        <?php echo $clubA8005;?>
    </div>

	<div class="equipeB1" > 
        <?php  echo $clubA1604;?>
    </div>
	  
	<div class="coinB4"  > 
	  <?php  echo $clubA8006;?>
      </div>

<br/><br/>
	<div class="equipeVide" > 
        <?php  echo $clubA1605;?>
    </div>
	<div class="coinB4"  > 
        <?php echo $clubA8007;?>
    </div>

	<div class="equipeVide" > 
        <?php  echo $clubA1602;?>
    </div>
	  
	<div class="coinB4"  > 
	  <?php  echo $clubA8008;?>
      </div>	
	
<br/><br/>	
	<div class="equipeB1" > 
        <?php  echo $clubA1605;?>
    </div>
	<div class="coinB4"  > 
        <?php echo $clubA8009;?>
    </div>

	<div class="equipeB1" > 
        <?php  echo $clubA1606;?>
    </div>
	  
	<div class="coinB4"  > 
	  <?php  echo $clubA8010;?>
      </div>
<br/><br/>

	<div class="equipeVide" > 
        <?php  echo $clubA1602;?>
    </div>
	<div class="coinB4"  > 
        <?php echo $clubA8001;?>
    </div>

	<div class="equipeVide" > 
        <?php  echo $clubA1602;?>
    </div>
	  
	<div class="coinB4"  > 
	  <?php  echo $clubA8012;?>
      </div>	
	
<br/><br/>

	<div class="equipeB1" > 
        <?php  echo $clubA1607;?>
    </div>
	<div class="coinB4"  > 
        <?php echo $clubA8013;?>
    </div>

	<div class="equipeB1" > 
        <?php  echo $clubA1608;?>
    </div>
	  
	<div class="coinB4"  > 
	  <?php  echo $clubA8014;?>
      </div>
<br/><br/>	 
	<div class="equipeVide" > 
        <?php  echo $clubA1602;?>
    </div>
	<div class="coinB4"  > 
        <?php echo $clubA8015;?>
    </div>

	<div class="equipeVide" > 
        <?php  echo $clubA1602;?>
    </div>
	  
	<div class="coinB4"  > 
	  <?php  echo $clubA8016;?>
      </div>	
	
<br/><br/> 