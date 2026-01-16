
<?php $comite = $_GET['comite'];?>
<?php $id = $_POST['id'];?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<font face="Arial, Helvetica, sans-serif"><b><font size="5">Ajout de membres</font></b></font> 



<p>&nbsp;</p>
<form action="http://francefinalesrugby.franceserv.com/admin/mdp/page_ajouter2.php" method="POST">
  <p> N&deg; de Base de donn&eacute;es 
    <input type="text" name="bd" maxlength="1" />
    Repère comite 
    <input type="text" name="comite" maxlength="6" />
    <br>
    <br>
    Pseudo 
    <input type="text" name="pseudo" maxlength="20" />
    Mot de passe (crypt&eacute;) 
    <input type="text" name="mdp" maxlength="50" />
    Admin (1/0) 
    <input type="text" name="admin" maxlength="6" />
  </p>
  <p><font face="Arial, Helvetica, sans-serif"><br>
    1 Phpmpy<br>
    2 ---<br>
    3 br - f1 - fed2 - fed3GS - fed3NE - pr - pro -test<br>
    4 </font></p>
  <p> 
    <input type="submit" value="Valider" name="submit322" />
  </p>
		</form>
