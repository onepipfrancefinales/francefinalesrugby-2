<?php
if (isset($_REQUEST['t']) and $_REQUEST['t'] == "1") {
  
  echo "<table><tr><td class=\"bleu bold colorWhite center size3\">Identifiants erronés</td></tr></table>";
} else {
  echo "<table><tr><td class=\"bleu bold colorWhite center size3\">Veuillez renseigner tous les champs</td></tr></table>";
}
echo "<br />";
