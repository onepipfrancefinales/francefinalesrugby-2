<?php
$test=3;  // 3 pour obtenir les oppositions, une autre valeur pour les equipes
?>
 
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
<body bgcolor="#FFFFFF">
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 4px; top: 248px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b><?php require ("../connect1.php") ; ?>
	
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='3' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='192'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
		<?php
	$clubA8001=$row[0];
	
	
	?>
		 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA8001;
	}

	
	
  ?>
    
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      
	   
 <?php require ("../connect1.php") ; ?> 
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8002= $donnees['A8002'];?>
        <?php echo $A8002;?>
        <?php
}
?>
	    </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: -1px; top: 17px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        
 <?php require ("../connect1.php") ; ?> 
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='5' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='191'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
        <?php
	$clubA8002=$row[0];
	
	
	?>
		 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA8002;
	}

	
	
  ?>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      
 <?php require ("../connect1.php") ; ?> 
  <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8001= $donnees['A8001'];?>
        <?php echo $A8001;?>
        <?php
}
?>
		
		</b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 7px; top: 315px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    
	<?php require ("../connect1.php") ; ?>
	
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='3' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='192'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
    <?php
	$clubA8003=$row[0];
	
	
	?>
	 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA8003;
	}

	
	
  ?>
	
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       <?php require ("../connect1.php") ; ?>
	  <?php 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8004= $donnees['A8004'];?>
        <?php echo $A8004;?>
        <?php
}
?>
	    </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php require ("../connect1.php") ; ?>
        <?	
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='6' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='191'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
        <?php
	$clubA8004=$row[0];
	
	
	?>
        <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA8004;
	}

	
	
  ?>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
 <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8003= $donnees['A8003'];?>
        <?php echo $A8003;?>
        <?php
}
?>
	    </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 7px; top: 435px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
   <?php require ("../connect1.php") ; ?>
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='3' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='191'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
    <?php
	$clubA8005=$row[0];
	
	
	?>
	 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA8005;
	}

	
	
  ?>
	
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
     <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8006= $donnees['A8006'];?>
        <?php echo $A8006;?>
        <?php
}
?>
	    </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php require ("../connect1.php") ; ?>
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='6' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='192'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
        <?php
	$clubA8006=$row[0];
	
	
	?>
	 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA8006;
	}

	
	
  ?>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
     <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8005= $donnees['A8005'];?>
        <?php echo $A8005;?>
        <?php
}
?>
	    </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 8px; top: 506px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php require ("../connect1.php") ; ?>
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='4' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='191'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
    <?php
	$clubA8007=$row[0];
	
	
	?>
	 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA8007;
	}

	
	
  ?>
	
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8008= $donnees['A8008'];?>
        <?php echo $A8008;?>
        <?php
}
?>
		</b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php require ("../connect1.php") ; ?>
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='5' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='192'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
        <?php
	$clubA8008=$row[0];
	
	
	?>
	 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA8008;
	}

	
	
  ?>
	
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8007= $donnees['A8007'];?>
        <?php echo $A8007;?>
        <?php
}
?>
	    </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 244px; top: 248px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
   <?php require ("../connect1.php") ; ?>
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='1' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='191'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				 "  $row[0]";
     		
		?>
    <?php
	$clubA4001=$row[0];
	
	
	?>
	 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA4001;
	}

	
	
  ?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002= $donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
?>
   </b></font></div> </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
if ($A8001+$A8002>0)
{	
	
	if ($A8001> $A8002)
	{
	$clubA4002=$clubA8001;
	}
	else
	{
	$clubA4002=$clubA8002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
     
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
?>
		
  </b></font></div>  </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 243px; top: 317px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
   <?php require ("../connect1.php") ; ?>
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='3' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='191'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
				    "  $row[0]";
     		
		?>
    <?php
	$clubA4003=$row[0];
	
	
	?>
	 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA4003;
	}

	
	
  ?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        
		<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db3");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4004= $donnees['A4004'];?>
        <?php echo $A4004;?>
        <?php
}
?>
  </b></font></div>  </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
if ($A8003+$A8004>0)
{	
	
	if ($A8003>$A8004)
	{
	$clubA4004=$clubA8003;
	}
	else
	{
	$clubA4004=$clubA8004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4004;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4003= $donnees['A4003'];?>
        <?php echo $A4003;?>
        <?php
}
?>
   </b></font></div> </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 244px; top: 435px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
   <?php require ("../connect1.php") ; ?>
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='5' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='191'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
		 <?php
	$clubA4005=$row[0];
	
	
	?>
	 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA4005;
	}

	
	
  ?>
	
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font>
<div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
      
	<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4006= $donnees['A4006'];?>
        <?php echo $A4006;?>
        <?php
}
?>
   </b></font></div> </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
if ($A8005+$A8006>0)
{	
	
	if ($A8005> $A8006)
	{
	$clubA4006=$clubA8005;
	}
	else
	{
	$clubA4006=$clubA8006;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4006;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php require ("../connect1.php") ; ?>
        <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4005= $donnees['A4005'];?>
        <?php echo $A4005;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 245px; top: 507px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
   <?php require ("../connect1.php") ; ?>
 <?
$query = "SELECT Phpmpy_clubs.nom, Phpmpy_clubs.id, Phpmpy_clubs.url_logo, Phpmpy_clmnt_graph.id_equipe, Phpmpy_equipes.id, Phpmpy_equipes.id_champ FROM Phpmpy_clubs, Phpmpy_clmnt_graph, Phpmpy_equipes WHERE Phpmpy_clmnt_graph.id_equipe=Phpmpy_clubs.id and Phpmpy_clmnt_graph.id_equipe=Phpmpy_equipes.id and Phpmpy_clmnt_graph.classement='7' and Phpmpy_clmnt_graph.fin='3'and Phpmpy_equipes.id_champ='191'";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                  
				    "  $row[0]";
     		
		?>
		 <?php
	$clubA4007=$row[0];
	

	?>
	 <?php 
	
	
	if ($test==3)
	{
	echo "6me poule 1";
	}
	else
	{
	echo $clubA4007;
	}

	
	
  ?>
    <?php
 
 }
mysql_close(); // Déconnexion de MySQL
       ?>
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4008= $donnees['A4008'];?>
        <?php echo $A4008;?>
        <?php
}
?>
 </b></font></div>   </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
if ($A8007+$A8008>0)
{	
	
	if ($A8007> $A8008)
	{
	$clubA4008=$clubA8007;
	}
	else
	{
	$clubA4008=$clubA8008;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4008;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4007= $donnees['A4007'];?>
        <?php echo $A4007;?>
        <?php
}
?>
   </b></font></div> </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 493px; top: 291px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
		<?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2002= $donnees['A2002'];?>
        <?php echo $A2002;?>
        <?php
}
?>
	</b></font></div>	
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A4003+$A4004>0)
{	
	
	if ($A4003> $A4004)
	{
	$clubA2002=$clubA4003;
	}
	else
	{
	$clubA2002=$clubA4004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       <?php require ("../connect1.php") ; ?>
 <?
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2001= $donnees['A2001'];?>
        <?php echo $A2001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A4001+$A4002>0)
{	
	
	if ($A4001> $A4002)
	{
	$clubA2001=$clubA4001;
	}
	else
	{
	$clubA2001=$clubA4002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2001;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 491px; top: 470px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
       
	 <?php require ("../connect1.php") ; ?>
<?php	 
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2004= $donnees['A2004'];?>
        <?php echo $A2004;?>
        <?php
}
?>
  </b></font></div>  </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A4007+$A4008>0)
{	
	
	if ($A4007> $A4008)
	{
	$clubA2004=$clubA4007;
	}
	else
	{
	$clubA2004=$clubA4008;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2004;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db3");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2003= $donnees['A2003'];?>
        <?php echo $A2003;?>
        <?php
}
?>
		
		
		</b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A4005+$A4006>0)
{	
	
	if ($A4005> $A4006)
	{
	$clubA2003=$clubA4005;
	}
	else
	{
	$clubA2003=$clubA4006;
	}
}
else
{
echo "";	
}	
	
	echo $clubA2003;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 740px; top: 365px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db3");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1002= $donnees['A1002'];?>
        <?php echo $A1002;?>
        <?php
}
?>
	   
	    </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:    url(../../phases_finales/unique3.jpg); layer-background-image:    url(../../phases_finales/unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b>
        <?php 
if ($A2003+$A2004>0)
{	
	
	if ($A2003> $A2004)
	{
	$clubA1002=$clubA2003;
	}
	else
	{
	$clubA1002=$clubA2004;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:    url(../../phases_finales/result2.jpg); layer-background-image:    url(../../phases_finales/result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09");
mysql_select_db("onepip-france-db3");
$reponse = mysql_query("SELECT * FROM Phpmpy_pf2011 WHERE id='200'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1001= $donnees['A1001'];?>
        <?php echo $A1001;?>
        <?php
}
?>
	    </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A2001+$A2002>0)
{	
	
	if ($A2001> $A2002)
	{
	$clubA1001=$clubA2001;
	}
	else
	{
	$clubA1001=$clubA2002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1001;
  ?>
    </b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 761px; top: 192px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 510px; top: 193px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 269px; top: 195px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Quarts de finale</b></font></div>
</div>
<div id="Layer2" style="position:absolute; width:1000px; height:20px; z-index:4; left: 0px; top: 165px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"><i><b>3me 
  S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 
  3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 
  3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie 3me S&eacute;rie </b></i></div>
   
	   
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 478px; top: 439px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 46px; top: 195px; background-image:    url(../../phases_finales/titre.jpg); layer-background-image:    url(../../phases_finales/titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Barrages</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:1px; height:177px; z-index:6; left: 728px; top: 315px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:1px; height:102px; z-index:6; left: 476px; top: 252px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer6" style="position:absolute; width:994px; height:55px; z-index:8; left: 1px; top: 610px"> 
  <table width="100%">
    <tr> 
      <td valign="top" height="3">___________________________________________________________________________________________________________________________</td>
    </tr>
    <tr> 
      <td height="85"> 
        <div align="center"> 
          <?php
    // On inclut le haut de la page
    
	include("../../pub1.php"); ?>
        </div>
      </td>
    </tr>
  </table>
</div>
<div id="Layer7" style="position:absolute; width:1000px; height:88px; z-index:13; left: -2px; top: 70px"> 
  <table width="100%" border="0" height="30">
    <tr valign="top" align="center"> 
      <td rowspan="2" bgcolor="#EAECEB" height="45" align="left" width="375" valign="top"> 
        <p align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          </font></b></font></b></font></b></font> 
          <?php
    // On inclut le haut de la page
    
	include("../../pub7.php"); ?>
          </b></font></p>
      </td>
      <td width="197" bgcolor="#EAECEB" height="29" align="left"> 
        <div align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          <?php $anneemoins = $annee-1;?>
          <?php $anneeplus = $annee+1;?>
          </font></b></font><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/page34serie.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="5" color="#000000">&lt;&lt;</font></a></font><font color="#000000" size="2"><font size="5" color="#EAECEB"></font></font></b></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnnne</font><font size="5"> 
          </font></font><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/page34serie.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#000000">&gt;&gt;</font></a></b></font></div>
      </td>
      <td width="375" bgcolor="#EAECEB" height="45" align="left" rowspan="2" valign="top"> 
        <div align="center"> 
          <p><font size="2" color="#FF0000"><b> 
            <?php
    // On inclut le haut de la page
    
	include("../../pub8.php"); ?>
            </b></font></p>
        </div>
      </td>
    </tr>
    <tr valign="top" align="center"> 
      <td bgcolor="#EAECEB" height="7" align="left"> 
        <div align="center"></div>
      </td>
    </tr>
    <tr valign="top" align="center"> 
      <td colspan="3" bgcolor="#006699" height="31"><font size="5"><b><font color="#FFCC00"> 
        <? echo "Finales territoriales du comité des Pyrénées $annee";?>
        </font></b></font></td>
    </tr>
  </table>
</div>
