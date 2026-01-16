
<?php if ( substr($champ, 3, 3)  < 230)
{
  ?>
<hr class="backgroundWhite" style="margin-top:0px; margin-bottom:0px; border-color:white;border-style:solid; border-width:0px;">
<hr style="margin-top:0px; margin-bottom:0px">
<hr class="backgroundWhite border-color:white" style="margin-top:0px; margin-bottom:0px; border-color:white">

<table width="90%" border="0" align="center" class="backgroundWhite" >
  <tr>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '170'; ?>">
              Hon<br />neur 
            </a>
          </li>
        </ul>
      </div>
    </td>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '180'; ?>">
               Prom<br />otion 
            </a>
          </li>
        </ul>
      </div>
    </td>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '190'; ?>">
              1re <br /> série
            </a>
          </li>
        </ul>
      </div>
    </td>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '200'; ?>">
            2me<br /> série 
            </a>
          </li>
        </ul>
      </div>
    </td>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '210'; ?>">
               3me<br /> série 
            </a>
          </li>
        </ul>
      </div>
    </td>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '220'; ?>">
              4me<br /> série
            </a>
          </li>
        </ul>
      </div>
    </td>
  </tr>
</table>
<hr />
<?php
}
  else
{
?>
<hr />
<table width="90%" border="0" align="center"  class="backgroundWhite">
  <tr>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?seniors=equipeDeux&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '270'; ?>">
          Réserve <br /> Honneur 
            </a>
          </li>
        </ul>
      </div>
    </td>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?seniors=equipeDeux&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '9180'; ?>">
          Réserve <br /> Promotion 
            </a>
          </li>
        </ul>
      </div>
    </td>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?seniors=equipeDeux&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '9190'; ?>">
          Réserve <br /> 1re série
            </a>
          </li>
        </ul>
      </div>
    </td>
    <td height="28">
      <div class="center size2 bold">
        <ul class="menu-demo2">
          <li><a href="../palmares/pagePalmTerr.php?seniors=equipeDeux&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>&champ=<?php echo substr($champ, 0, 3) . '9200'; ?>">
           Réserve <br />2me série 
            </a>
          </li>
        </ul>
      </div>
    </td>   
  </tr>
</table>

<?php
}
?>


