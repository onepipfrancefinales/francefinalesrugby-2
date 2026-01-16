<?php
$clubA3201 = 'Amiens (FL)';
$clubA3202 = 'Grand Quevilly (N)';
$clubA3203 = 'Montmorency (IDF)';
$clubA3204 = 'Montceau (BG)';
$clubA3205 = 'Orléans le Source (CE)';
$clubA3206 = 'Angers (PL)';
$clubA3207 = 'S.C.U.F (IDF)';
$clubA3208 = 'Sainte Florine (AU)';
$clubA3209 = 'Saint Pol (FL)';
$clubA3210 = 'Saint Dié (AL)';
$clubA3211 = 'Digoin (BG)';
$clubA3212 = 'Yerres IDF)';
$clubA3213 = 'Granchamps (BR)';
$clubA3214 = 'Pont Audemer (N)';
$clubA3215 = 'Soissons (FL)';
$clubA3216 = 'Nemours (IDF)';
$clubA3217 = 'Boucle de la Marne (IDF)';
$clubA3218 = 'La Chatre (CE)';
$clubA3219 = 'Tournus (BG)';
$clubA3220 = 'Cusset (AU)';
$clubA3221 = 'Arbois (FC)';
$clubA3222 = 'Saint Marcel Isle d Abeau (LY)';
$clubA3223 = 'RC Motterain (AP)';
$clubA3224 = 'Privas (DA)';
$clubA3225 = 'Entente Chartaine (CE)';
$clubA3226 = 'Le Puy (AU)';
$clubA3227 = 'Meximieux (LY)';
$clubA3228 = 'Romans (DA)';
$clubA3229 = 'Montrevel (LY)';
$clubA3230 = 'Sisteron (AP)';
$clubA3231 = 'Salon de Provence (PR)';
$clubA3232 = 'Saint Laurent du Var (CAZ)';
$clubA3233 = 'Olonzac (LD)';
$clubA3234 = 'Le Boulou (R)';
$clubA3235 = 'Valreas (PR)';
$clubA3236 = 'RC Matheysin (AP)';
$clubA3237 = 'Eyragues (PR)';
$clubA3238 = 'Rillieux la Pape DA)';
$clubA3239 = 'Avenir Bleu Blanc (LD)';
$clubA3240 = 'La Salvetat Saint Gilles (MPY)';
$clubA3241 = 'Saint Céré (LM)';
$clubA3242 = 'Laroque d Olmes (MPY)';
$clubA3243 = 'Saint Cyprien (PA)';
$clubA3244 = 'Marans (PCH)';
$clubA3245 = 'Saint Affrique (MPY)';
$clubA3246 = 'Adé (AB)';
$clubA3247 = 'Saint Simon (LM)';
$clubA3248 = 'Miramont (PA)';
$clubA3249 = 'Larressore (AB)';
$clubA3250 = 'Benejacq (BE)';
$clubA3251 = 'Parentis en Born (CA)';
$clubA3252 = 'St Georges les Baillargeaux (PCH)';
$clubA3253 = 'Castillonnes (PA)';
$clubA3254 = 'Saint Juery (MPY)';
$clubA3255 = 'Blaye (CA)';
$clubA3256 = 'Saint Pee sur Nivelle (CBL)';
$clubA3257 = 'Juillan (AB)';
$clubA3258 = 'Auterive (MPY)';
$clubA3259=  'Foix (MPY)';
$clubA3260=  'Jacou (LD)';
$clubA3261 = 'Maubourguet (AB)';
$clubA3262 = 'Sainte Foy la Grande (CA )';
$clubA3263 = 'Bretenoux (LM)';
$clubA3264 = 'Saintes (PCH)';



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
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 240px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3203;
  ?>
      - 
      <?php echo $clubA3204;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3203=$donnees['A3203'];echo $A3203;?>
          <?php
}
?>
          - 
          <?php $A3204=$donnees['A3204']; echo $A3204;?>
          
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3201;
  ?>
    - 
    <?php echo $clubA3202;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3201=$donnees['A3201'];echo $A3201;?>
        <?php
}
?>
        - 
        <?php $A3202=$donnees['A3202'];echo $A3202;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 280px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3207;
  ?>
      - 
      <?php echo $clubA3208;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3207=$donnees['A3207'];echo $A3207;?>
          <?php
}
?>
          - 
          <?php $A3208=$donnees['A3208'];echo $A3208;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3205;
  ?>
    - 
    <?php echo $clubA3206;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3205=$donnees['A3205'];echo $A3205;?>
        <?php
}
?>
        - 
        <?php $A3206=$donnees['A3206'];echo $A3206;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 320px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3211;
  ?>
      - 
      <?php echo $clubA3212;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3211=$donnees['A3211'];echo $A3211;?>
          <?php
}
?>
          - 
          <?php $A3212=$donnees['A3212'];echo $A3212;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3209;
  ?>
    - 
    <?php echo $clubA3210;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3209=$donnees['A3209'];echo $A3209;?>
        <?php
}
?>
        - 
        <?php $A3210=$donnees['A3210'];echo $A3210;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 360px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3215;
  ?>
      - 
      <?php echo $clubA3216;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3215=$donnees['A3215'];echo $A3215;?>
          <?php
}
?>
          - 
          <?php $A3216=$donnees['A3216']; echo $A3216;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3213;
  ?>
    - 
    <?php echo $clubA3214;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3213=$donnees['A3213'];echo $A3213;?>
        <?php
}
?>
        - 
        <?php $A3214=$donnees['A3214'];echo $A3214;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 400px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3219;
  ?>
      - 
      <?php echo $clubA3220;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3219=$donnees['A3219'];echo $A3219;?>
          <?php
}
?>
          - 
          <?php $A3220=$donnees['A3220'];echo $A3220;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3217;
  ?>
    - 
    <?php echo $clubA3218;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3217=$donnees['A3217'];echo $A3217;?>
        <?php
}
?>
        - 
        <?php $A3218=$donnees['A3218'];echo $A3218;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 440px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3223;
  ?>
      - 
      <?php echo $clubA3224;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3223=$donnees['A3223'];echo $A3223;?>
          <?php
}
?>
          - 
          <?php $A3224=$donnees['A3224'];echo $A3224;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3221;
  ?>
    - 
    <?php echo $clubA3222;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3221=$donnees['A3221'];echo $A3221;?>
        <?php
}
?>
        - 
        <?php $A3222=$donnees['A3222'];echo $A3222;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 480px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3227;
  ?>
      - 
      <?php echo $clubA3228;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3227=$donnees['A3227'];echo $A3227;?>
          <?php
}
?>
          - 
          <?php $A3228=$donnees['A3228'];echo $A3228;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3225;
  ?>
    - 
    <?php echo $clubA3226;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3225=$donnees['A3225'];echo $A3225;?>
        <?php
}
?>
        - 
        <?php $A3226=$donnees['A3226'];echo $A3226;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 520px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3231;
  ?>
      - 
      <?php echo $clubA3232;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3231=$donnees['A3231'];echo $A3231;?>
          <?php
}
?>
          - 
          <?php $A3232=$donnees['A3232'];echo $A3232;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3229;
  ?>
    - 
    <?php echo $clubA3230;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3229=$donnees['A3229'];echo $A3229;?>
        <?php
}
?>
        - 
        <?php $A3230=$donnees['A3230']; echo $A3230;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
-
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 560px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3235;
  ?>
      - 
      <?php echo $clubA3236;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3235=$donnees['A3235'];echo $A3235;?>
          <?php
}
?>
          - 
          <?php $A3236=$donnees['A3236'];echo $A3236;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3233;
  ?>
    - 
    <?php echo $clubA3234;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3233=$donnees['A3233'];echo $A3233;?>
        <?php
}
?>
        - 
        <?php $A3234=$donnees['A3234'];echo $A3234;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 600px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3239;
  ?>
      - 
      <?php echo $clubA3240;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3239=$donnees['A3239'];echo $A3239;?>
          <?php
}
?>
          - 
          <?php $A3240=$donnees['A3240'];echo $A3240;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3237;
  ?>
    - 
    <?php echo $clubA3238;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3237=$donnees['A3237'];echo $A3237;?>
        <?php
}
?>
        - 
        <?php $A3238=$donnees['A3238'];echo $A3238;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 640px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3243;
  ?>
      - 
      <?php echo $clubA3244;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3243=$donnees['A3243'];echo $A3243;?>
          <?php
}
?>
          - 
          <?php $A3244=$donnees['A3244'];echo $A3244;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3241;
  ?>
    - 
    <?php echo $clubA3242;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3241=$donnees['A3241'];echo $A3241;?>
        <?php
}
?>
        - 
        <?php $A3242=$donnees['A3242'];echo $A3242;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 680px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3247;
  ?>
      - 
      <?php echo $clubA3248;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3247=$donnees['A3247'];echo $A3247;?>
          <?php
}
?>
          - 
          <?php $A3248=$donnees['A3248'];echo $A3248;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3245;
  ?>
    - 
    <?php echo $clubA3246;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3245=$donnees['A3245'];echo $A3245;?>
        <?php
}
?>
        - 
        <?php $A3246=$donnees['A3246'];echo $A3246;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 720px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3251;
  ?>
      - 
      <?php echo $clubA3252;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3251=$donnees['A3251'];echo $A3251;?>
          <?php
}
?>
          - 
          <?php $A3252=$donnees['A3252'];echo $A3252;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3249;
  ?>
    - 
    <?php echo $clubA3250;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3249=$donnees['A3249'];echo $A3249;?>
        <?php
}
?>
        - 
        <?php $A3250=$donnees['A3250'];echo $A3250;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 760px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32.jpg); layer-background-image: url(../unique32.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3255;
  ?>
      - 
      <?php echo $clubA3256;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3255=$donnees['A3255'];echo $A3255;?>
          <?php
}
?>
          - 
          <?php $A3256=$donnees['A3256'];echo $A3256;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3253;
  ?>
    - 
    <?php echo $clubA3254;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdouble.jpg); layer-background-image: url(../resultdouble.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3253=$donnees['A3253'];echo $A3253;?>
        <?php
}
?>
        - 
        <?php $A3254=$donnees['A3254'];echo $A3254;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 20px; top: 800px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3259;
  ?>
      - 
      <?php echo $clubA3260;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3259=$donnees['A3259'];echo $A3259;?>
          <?php
}
?>
          - 
          <?php $A3260=$donnees['A3260'];echo $A3260;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3257;
  ?>
    - 
    <?php echo $clubA3258;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3257=$donnees['A3257'];echo $A3257;?>
        <?php
}
?>
        - 
        <?php $A3258=$donnees['A3258'];echo $A3258;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
<div id="Layer5" style="position:absolute; width:350px; height:20px; z-index:7; left: 19px; top: 840px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer6" style="position:absolute; width:350px; height:20px; z-index:8; left: 0px; top: 20px; background-image: url(../unique32B.jpg); layer-background-image: url(../unique32B.jpg); border: 1px none #000000"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php echo $clubA3263;
  ?>
      - 
      <?php echo $clubA3264;
  ?>
      </b></font> 
      <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
        <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
          <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
          <?php  $A3263=$donnees['A3263'];echo $A3263;?>
          <?php
}
?>
          - 
          <?php $A3264=$donnees['A3264'];echo $A3264;?>
          <?php
}
?>
          </b></font></div>
      </div>
      <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font></div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php echo $clubA3261;
  ?>
    - 
    <?php echo $clubA3262;
  ?>
    </b></font> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font> 
    <div id="Layer7" style="position:absolute; width:55px; height:20px; z-index:8; background-image: url(../resultdoubleB.jpg); layer-background-image: url(../resultdoubleB.jpg); border: 1px none #000000; left: 350px; top: 0px"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
{
?>
        <?php  $A3261=$donnees['A3261'];echo $A3261;?>
        <?php
}
?>
        - 
        <?php $A3262=$donnees['A3262'];echo $A3262;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    </b></font></div>
</div>
16
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 240px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1602=$donnees['A1602'];?>
        <?php echo $A1602;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3203+$A3204>0)
{		
		
		if ($A3203> $A3204)
	{
	$clubA1602=$clubA3203;
	}
	else
	{
	$clubA1602=$clubA3204;
	}
}
else
{
echo "";	
}		
		
		
		echo $clubA1602;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1601=$donnees['A1601'];?>
        <?php echo $A1601;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3201+$A3202>0)
{	
	
	if ($A3201> $A3202)
	{
	$clubA1601=$clubA3201;
	}
	else
	{
	$clubA1601=$clubA3202;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1601;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 280px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1604=$donnees['A1604'];?>
        <?php echo $A1604;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3207+$A3208>0)
{		
		
		if ($A3207> $A3208)
	{
	$clubA1604=$clubA3207;
	}
	else
	{
	$clubA1604=$clubA3208;
	}
}
else
{
echo "";	
}		
		
		
		echo $clubA1604;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1603=$donnees['A1603'];?>
        <?php echo $A1603;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3205+$A3206>0)
{	
	if ($A3205> $A3206)
	{
	$clubA1603=$clubA3205;
	}
	else
	{
	$clubA1603=$clubA3206;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1603;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 320px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1606=$donnees['A1606'];?>
        <?php echo $A1606;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3211+$A3212>0)
{		
		if ($A3211 > $A3212)
	{
	$clubA1606=$clubA3211;
	}
	else
	{
	$clubA1606=$clubA3212;
	}
}
else
{
echo "";	
}		
		
		echo $clubA1606;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1605=$donnees['A1605'];?>
        <?php echo $A1605;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3209+$A3210>0)
{	
	
	if ($A3209 > $A3210)
	{
	$clubA1605=$clubA3209;
	}
	else
	{
	$clubA1605=$clubA3210;
	}
}
else
{
echo "";	
}	
	echo $clubA1605;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 360px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1608=$donnees['A1608'];?>
        <?php echo $A1608;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php  
if ($A3215+$A3216>0)
{		
		if ($A3215 > $A3216)
	{
	$clubA1608=$clubA3215;
	}
	else
	{
	$clubA1608=$clubA3216;
	}
}
else
{
echo "";	
}		
		
		echo$clubA1608;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1607=$donnees['A1607'];?>
        <?php echo $A1607;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3213+$A3214>0)
{	
	
	if ($A3213 > $A3214)
	{
	$clubA1607=$clubA3213;
	}
	else
	{
	$clubA1607=$clubA3214;
	}
}
else
{
echo "";	
}	
	
	
	echo $clubA1607;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 459px; top: 400px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1610=$donnees['A1610'];?>
        <?php echo $A1610;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
if ($A3219+$A3220>0)
{		
		 if ($A3219 > $A3220)
	{
	$clubA1610=$clubA3219;
	}
	else
	{
	$clubA1610=$clubA3220;
	}
}
else
{
echo "";	
}		
		
		echo $clubA1610;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1609=$donnees['A1609'];?>
        <?php echo $A1609;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3217+$A3218>0)
{	
	if ($A3217 > $A3218)
	{
	$clubA1609=$clubA3217;
	}
	else
	{
	$clubA1609=$clubA3218;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1609;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 440px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1612=$donnees['A1612'];?>
        <?php echo $A1612;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3223+$A3224>0)
{		
		
		
		if ($A3223 > $A3224)
	{
	$clubA1612=$clubA3223;
	}
	else
	{
	$clubA1612=$clubA3224;
	}
}
else
{
echo "";	
}		
		echo $clubA1612;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1611=$donnees['A1611'];?>
        <?php echo $A1611;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3221+$A3222>0)
{	
	
	if ($A3221 > $A3222)
	{
	$clubA1611=$clubA3221;
	}
	else
	{
	$clubA1611=$clubA3222;
	}
}
else
{
echo "";	
}	
	echo $clubA1611;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 480px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1614=$donnees['A1614'];?>
        <?php echo $A1614;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
if ($A3227+$A3228>0)
{		
		
		 if ($A3227 > $A3228)
	{
	$clubA1614=$clubA3227;
	}
	else
	{
	$clubA1614=$clubA3228;
	}
}
else
{
echo "";	
}		
		
		echo $clubA1614;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1613=$donnees['A1613'];?>
        <?php echo $A1613;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3225+$A3226>0)
{	
	
	if ($A3225 > $A3226)
	{
	$clubA1613=$clubA3225;
	}
	else
	{
	$clubA1613=$clubA3226;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1613;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 520px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1616=$donnees['A1616'];?>
        <?php echo $A1616;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"> <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3231+$A3232>0)
{		
		
		if ($A3231 > $A3232)
	{
	$clubA1616=$clubA3231;
	}
	else
	{
	$clubA1616=$clubA3232;
	}
}
else
{
echo "";	
}		
		
		 echo $clubA1616;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1615=$donnees['A1615'];?>
        <?php echo $A1615;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3229+$A3230>0)
{	
	if ($A3229 > $A3230)
	{
	$clubA1615=$clubA3229;
	}
	else
	{
	$clubA1615=$clubA3230;
	}
}
else
{
echo "";	
}	
	echo $clubA1615;
  ?>
    </b></font></div>
</div>
- 
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 560px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1618=$donnees['A1618'];?>
        <?php echo $A1618;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3235+$A3236>0)
{		
		
		if ($A3235 > $A3236)
	{
	$clubA1618=$clubA3235;
	}
	else
	{
	$clubA1618=$clubA3236;
	}
}
else
{
echo "";	
}		
		
		 echo $clubA1618;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1617=$donnees['A1617'];?>
        <?php echo $A1617;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3233+$A3234>0)
{	
	
	if ($A3233 > $A3234)
	{
	$clubA1617=$clubA3233;
	}
	else
	{
	$clubA1617=$clubA3234;
	}
}
else
{
echo "";	
}	
	echo $clubA1617;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 459px; top: 600px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1620=$donnees['A1620'];?>
        <?php echo $A1620;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3239+$A3240>0)
{		
		
		if ($A3239> $A3240)
	{
	$clubA1620=$clubA3239;
	}
	else
	{
	$clubA1620=$clubA3240;
	}
}
else
{
echo "";	
}		
		echo $clubA1620;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1619=$donnees['A1619'];?>
        <?php echo $A1619;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php
if ($A3237+$A3238>0)
{	
	 if ($A3237> $A3288)
	{
	$clubA1619=$clubA3237;
	}
	else
	{
	$clubA1619=$clubA3238;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1619;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 640px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1622=$donnees['A1622'];?>
        <?php echo $A1622;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3243+$A3244>0)
{		
		if ($A3243 > $A3244)
	{
	$clubA1622=$clubA3243;
	}
	else
	{
	$clubA1622=$clubA3244;
	}
}
else
{
echo "";	
}		
		
		
		echo $clubA1622;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php  $A1621=$donnees['A1621'];?>
        <?php echo $A1621;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3241+$A3242>0)
{	
	if ($A3241 > $A3242)
	{
	$clubA1621=$clubA3241;
	}
	else
	{
	$clubA1621=$clubA3242;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1621;
  ?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 760px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1628=$donnees['A1628'];?>
        <?php echo $A1628;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3255+$A3256>0)
{		
		if ($A3255 > $A3256)
	{
	$clubA1628=$clubA3255;
	}
	else
	{
	$clubA1628=$clubA3256;
	}
		
}
else
{
echo "";	
}		
		
		echo $clubA1628;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1627=$donnees['A1627'];?>
        <?php echo $A1627;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3253+$A3254>0)
{	
	if ($A3253 > $A3254)
	{
	$clubA1627=$clubA3253;
	}
	else
	{
	$clubA1627=$clubA3254;
	}
}
else
{
echo "";	
}	
	
	echo $clubA1627;?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 720px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1626=$donnees['A1626'];?>
        <?php echo $A1626;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
if ($A3251+$A3252>0)
{		
		
		 if ($A3251 > $A3252)
	{
	$clubA1626=$clubA3251;
	}
	else
	{
	$clubA1626=$clubA3252;
	}
}
else
{
echo "";	
}		
		
		
		echo $clubA1626;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1625= $donnees['A1625'];?>
        <?php echo $A1625;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3249+$A3250>0)
{	
	
	if ($A3249 > $A3250)
	{
	$clubA1625=$clubA3249;
	}
	else
	{
	$clubA1625=$clubA3250;
	}
}
else
{
echo "";	
}	
	
	
	echo $clubA1625;?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 680px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1624=$donnees['A1624'];?>
        <?php echo $A1624;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3247+$A3248>0)
{		
		if ($A3247 > $A3248)
	{
	$clubA1624=$clubA3247;
	}
	else
	{
	$clubA1624=$clubA3248;
	}
}
else
{
echo "";	
}		
		
		
		echo $clubA1624;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1623=$donnees['A1623'];?>
        <?php echo $A1623;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3245+$A3246>0)
{	
	if ($A3245> $A3246)
	{
	$clubA1623=$clubA3245;
	}
	else
	{
	$clubA1623=$clubA3246;
	}
}
else
{
echo "";	
}	
	
	
	
	echo $clubA1623;?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 840px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1632=$donnees['A1632'];?>
        <?php echo $A1632;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3263+$A3264>0)
{		
		
		if ($A3263 > $A3264)
	{
	$clubA1632=$clubA3263;
	}
	else
	{
	$clubA1632=$clubA3264;
	}
}
else
{
echo "";	
}		
		
		echo $clubA1632;
  ?>
        
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1631=$donnees['A1631'];?>
        <?php echo $A1631;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3261+$A3262>0)
{	
	
	if ($A3261 > $A3262)
	{
	$clubA1631=$clubA3261;
	}
	else
	{
	$clubA1631=$clubA3262;
	}
}
else
{
echo "";	
}	
	
	
	 echo $clubA1631;?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 460px; top: 800px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1630=$donnees['A1630'];?>
        <?php echo $A1630?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique4.jpg); layer-background-image:  url(../unique4.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A3259+$A3260>0)
{		
		if ($A3259 > $A3260)
	{
	$clubA1630=$clubA3259;
	}
	else
	{
	$clubA1630=$clubA3260;
	}
}
else
{
echo "";	
}		
		
		
		
		echo $clubA1630;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result22.jpg); layer-background-image:  url(../result22.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1629= $donnees['A1629'];?>
        <?php echo $A1629;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A3257+$A3258>0)
{	
	if ($A3257 > $A3258)
	{
	$clubA1629=$clubA3257;
	}
	else
	{
	$clubA1629=$clubA3258;
	}
}
else
{
echo "";	
}	
	
	
	echo $clubA1629;?>
    </b></font></div>
</div>
8
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 260px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8002=$donnees['A8002'];?>
        <?php echo $A8002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A1603+$A1604>0)
{		
	
		if ($A1603> $A1604)
	{
	$clubA8002=$clubA1603;
	}
	else
	{
	$clubA8002=$clubA1604;
	}
}
else
{
echo "";	
}		
		
		
		echo $clubA8002;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

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
    <?php 
if ($A1601+$A1602>0)
{
		if ($A1601 > $A1602)
		{
		$clubA8001=$clubA1601;
		}
		else
		{
		$clubA8001=$clubA1602;
		}
}
else
{
echo "";	
}
	
	echo $clubA8001;?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 340px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8004=$donnees['A8004'];?>
        <?php echo $A8004;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php
if ($A1607+$A1608>0)
{		
		
		 if ($A1607> $A1608)
	{
	$clubA8004=$clubA1607;
	}
	else
	{
	$clubA8004=$clubA1608;
	}
}
else
{
echo "";	
}		
		echo $clubA8004;
  ?>
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

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
    <?php 
if ($A1605+$A1606>0)
{	
	
	if ($A1605> $A1606)
	{
	$clubA8003=$clubA1605;
	}
	else
	{
	$clubA8003=$clubA1606;
	}
}
else
{
echo "";	
}	
	echo $clubA8003;?>
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 420px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8006=$donnees['A8006'];?>
        <?php echo $A8006;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A1611+$A1612>0)
{
		if ($A1611 > $A1612)
		{
		$clubA8006=$clubA1611;
		}
		else
		{
		$clubA8006=$clubA1612;
		}
}
else
{
echo "";	
}
	
	echo $clubA8006;?> 
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

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
     <?php 
if ($A1609+$A1610>0)
{
		if ($A1609 > $A1610)
		{
		$clubA8005=$clubA1609;
		}
		else
		{
		$clubA8005=$clubA1610;
		}
}
else
{
echo "";	
}
	
	echo $clubA8005;?>
    
	
	</b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 500px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8008=$donnees['A8008'];?>
        <?php echo $A8008;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A1615+$A1616>0)
{
		if ($A1615 > $A1616)
		{
		$clubA8008=$clubA1615;
		}
		else
		{
		$clubA8008=$clubA1616;
		}
}
else
{
echo "";	
}
	
	echo $clubA8008;?> 
	    
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

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
     <?php 
if ($A1613+$A1614>0)
{
		if ($A1613 > $A1614)
		{
		$clubA8007=$clubA1613;
		}
		else
		{
		$clubA8007=$clubA1614;
		}
}
else
{
echo "";	
}
	
	echo $clubA8007;?>
	
    </b></font></div>
</div>
-
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 580px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8010=$donnees['A8010'];?>
        <?php echo $A8010;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php 
if ($A1619+$A1620>0)
{
		if ($A1619 > $A1620)
		{
		$clubA8010=$clubA1619;
		}
		else
		{
		$clubA8010=$clubA1620;
		}
}
else
{
echo "";	
}
	
	echo $clubA8010;?>    
		
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8009= $donnees['A8009'];?>
        <?php echo $A8009;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    
	  <?php 
if ($A1617+$A1618>0)
{
		if ($A1617 > $A1618)
		{
		$clubA8009=$clubA1617;
		}
		else
		{
		$clubA8009=$clubA1618;
		}
}
else
{
echo "";	
}
	
	echo $clubA8009;?>
	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 660px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8012=$donnees['A8012'];?>
        <?php echo $A8012;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A1623+$A1624>0)
{
		if ($A1623 > $A1624)
		{
		$clubA8012=$clubA1623;
		}
		else
		{
		$clubA8012=$clubA1624;
		}
}
else
{
echo "";	
}
	
	echo $clubA8012;?>  
  
  
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8011= $donnees['A8011'];?>
        <?php echo $A8011;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php 
if ($A1621+$A1622>0)
{
		if ($A1621 > $A1622)
		{
		$clubA8011=$clubA1621;
		}
		else
		{
		$clubA8011=$clubA1622;
		}
}
else
{
echo "";	
}
	
	echo $clubA8011;?>
	
	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 740px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8014=$donnees['A8014'];?>
        <?php echo $A8014;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
          <?php 
if ($A1627+$A1628>0)
{
		if ($A1627 > $A1628)
		{
		$clubA8014=$clubA1627;
		}
		else
		{
		$clubA8014=$clubA1628;
		}
}
else
{
echo "";	
}
	
	echo $clubA8014;?>
		
		
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8013= $donnees['A8013'];?>
        <?php echo $A8013;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
     <?php 
if ($A1625+$A1626>0)
{
		if ($A1625 > $A1626)
		{
		$clubA8013=$clubA1625;
		}
		else
		{
		$clubA8013=$clubA1626;
		}
}
else
{
echo "";	
}
	
	echo $clubA8013;?>
	
	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 720px; top: 820px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8016=$donnees['A8016'];?>
        <?php echo $A8016;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
         <?php 
if ($A1631+$A1632>0)
{
		if ($A1631 > $A1632)
		{
		$clubA8016=$clubA1631;
		}
		else
		{
		$clubA8016=$clubA1632;
		}
}
else
{
echo "";	
}
	
	echo $clubA8016;?>
  
  
        </b></font></div>
    </div>
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8015= $donnees['A8015'];?>
        <?php echo $A8015;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      <?php 
if ($A1629+$A1630>0)
{
		if ($A1629 > $A1630)
		{
		$clubA8015=$clubA1629;
		}
		else
		{
		$clubA8015=$clubA1630;
		}
}
else
{
echo "";	
}
	
	echo $clubA8015;?>
	
	
    </b></font></div>
</div>
4 
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 980px; top: 300px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4002=$donnees['A4002'];?>
        <?php echo $A4002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
         <?php 
if ($A8003+$A8004>0)
{	
	
	if ($A8003> $A8004)
	{
	$clubA4002=$clubA8003;
	}
	else
	{
	$clubA4002=$clubA8004;
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
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4001= $donnees['A4001'];?>
        <?php echo $A4001;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
  <?php 
if ($A8001+$A8002>0)
{	
	
	if ($A8001> $A8002)
	{
	$clubA4001=$clubA8001;
	}
	else
	{
	$clubA4001=$clubA8002;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4001;
  ?>
	
	
	
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 980px; top: 460px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4004=$donnees['A4004'];?>
        <?php echo $A4004;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
       <?php 
if ($A8007+$A8008>0)
{	
	
	if ($A8007> $A8008)
	{
	$clubA4004=$clubA8007;
	}
	else
	{
	$clubA4004=$clubA8008;
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
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4003= $donnees['A4003'];?>
        <?php echo $A4003;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
    <?php 
if ($A8005+$A8006>0)
{	
	
	if ($A8005> $A8006)
	{
	$clubA4003=$clubA8005;
	}
	else
	{
	$clubA4003=$clubA8006;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4003;
  ?>
	
	
    </b></font></div>
</div>
-
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 980px; top: 620px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4006=$donnees['A4006'];?>
        <?php echo $A4006;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
        <?php 
if ($A8011+$A8012>0)
{	
	
	if ($A8011> $A8012)
	{
	$clubA4006=$clubA8011;
	}
	else
	{
	$clubA4006=$clubA8012;
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
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

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
    <?php 
if ($A8009+$A8010>0)
{	
	
	if ($A8009> $A8010)
	{
	$clubA4005=$clubA8009;
	}
	else
	{
	$clubA4005=$clubA8010;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4005;
  ?>
   
   
    </b></font></div>
</div>
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 980px; top: 780px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4008=$donnees['A4008'];?>
        <?php echo $A4008;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
         <?php 
if ($A8015+$A8016>0)
{	
	
	if ($A8015> $A8016)
	{
	$clubA4008=$clubA8015;
	}
	else
	{
	$clubA4008=$clubA8016;
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
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A4007= $donnees['A4007'];?>
        <?php echo $A4007;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
     <?php 
if ($A8013+$A8014>0)
{	
	
	if ($A8013> $A8014)
	{
	$clubA4007=$clubA8013;
	}
	else
	{
	$clubA4007=$clubA8014;
	}
}
else
{
echo "";	
}	
	
	echo $clubA4007;
  ?>
	
	
    </b></font></div>
</div>
2
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 1240px; top: 380px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2002=$donnees['A2002'];?>
        <?php echo $A2002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
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
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

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
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 1239px; top: 700px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A2004=$donnees['A2004'];?>
        <?php echo $A2004;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
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
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

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
<div id="Layer1" style="position:absolute; width:200px; height:20px; z-index:3; left: 1500px; top: 540px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
  <div align="center"> 
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 21px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A1002=$donnees['A1002'];?>
        <?php echo $A1002;?>
        <?php
}
?>
        </b></font></div>
    </div>
    <div id="Layer9" style="position:absolute; width:200px; height:20px; z-index:2; left: 0px; top: 20px; background-image:  url(../unique3.jpg); layer-background-image:  url(../unique3.jpg); border: 1px none #000000"> 
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
    <div id="Layer10" style="position:absolute; width:30px; height:20px; z-index:3; left: 200px; top: 1px; background-image:  url(../result2.jpg); layer-background-image:  url(../result2.jpg); border: 1px none #000000"> 
      <div align="center"><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="3"><b> 
        <?php
mysql_connect("onepip.sql.free.fr", "onepip", "lavelan");
mysql_select_db("onepip");
$reponse = mysql_query("SELECT * FROM bdpf2009 WHERE id='50'");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php $A8001= $donnees['A1001'];?>
        <?php echo $A8001;?>
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
a
<div id="Layer4" style="position:absolute; width:2px; height:160px; z-index:6; left: 1214px; top: 320px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 580px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:320px; z-index:6; left: 1474px; top: 400px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 742px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 500px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 343px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 954px; top: 600px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 1020px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Quarts de finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 760px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>8me de finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 1520px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Finale</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 660px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 160px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>32me de finale</b></font></div>
</div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 1280px; top: 200px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>Demi finale</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 954px; top: 280px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:160px; z-index:6; left: 1214px; top: 642px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 264px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer3" style="position:absolute; width:160px; height:20px; z-index:5; left: 500px; top: 202px; background-image:  url(../titre.jpg); layer-background-image:  url(../titre.jpg); border: 1px none #000000"> 
  <div align="center"><font color="#FFFFFF"><b>16me de finale</b></font></div>
</div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 954px; top: 440px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:80px; z-index:6; left: 954px; top: 760px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 423px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer4" style="position:absolute; width:2px; height:40px; z-index:6; left: 694px; top: 820px; background-color: #FF0000; layer-background-color: #FF0000; border: 1px none #000000"></div>
<div id="Layer2" style="position:absolute; width:1820px; height:20px; z-index:4; left: -2px; top: 151px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"><i><b>Honneur 
  Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur 
  Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur 
  Honneur Honneur Honneur Honneur Honneur Honneur Honneur</b></i></div>
