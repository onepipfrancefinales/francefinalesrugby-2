<?php $comite = $_GET['comite'];?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="494" border="0">
  <tr>
    <td colspan="3"> 
    </td>
  </tr>
  <tr> 
    <td colspan="3"> 
      <div align="center"><font size="4"><b>Pour se d&eacute;sinscrire saississsez 
        votre m&eacute;l ci-dessous</b></font></div>
      <div align="center"> 
        <form action="http://francefinalesrugby.franceserv.com/copies_mel/inscription/desinscription2.php?comite=<?php echo $comite;?>" method="POST">
        <p align="center"> 
          <input type="text" name="adresse" />
          et cliquez 
          <input type="submit" value="ICI" name="submit322" />
      </form></div>
    </td>
  </tr>
  <tr> 
    <td rowspan="3">&nbsp; </td>
    <td width="240"> 
      <div align="center"></div>
    </td>
    <td rowspan="3">&nbsp; </td>
  </tr>
  <tr> 
    <td width="240"> 
      <div align="center"> 
        <?php    include("../../pub_carre.php");    ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="240"> 
      
    </td>
  </tr>
</table>



</body>
</html>
