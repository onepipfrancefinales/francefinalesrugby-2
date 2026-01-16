
<?php 


if (isset($_GET['tableAConsulter'])) $tableAConsulter =$_GET['tableAConsulter']; else $tableAConsulter = "";


?>

<p>&ecirc;tes vous certains de vouloir vider la table : 
  <?php echo $tableAConsulter.''."<br />";?>
</p>
<form name="form1" method="POST" action="vider2.php?tableAConsulter=<?php echo $tableAConsulter;?>">
  <table width="18%" bordercolor="#FFFFFF">
    <tr> 
      <td width="50%"> 
        <div align="center"> 
          <input type="submit" name="reponse" value="Oui">
        </div>
      </td>
      <td width="50%"> 
        <div align="center"> 
          <input type="submit" name="reponse" value="non">
        </div>
      </td>
    </tr>
  </table>
</form>


<p> 
  
</p>
