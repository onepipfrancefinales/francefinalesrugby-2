<?php
// OCCITANIE

function accesFed3($comite, $division, $annee)  {

echo " <div class= \"center styleArial size3 justifier\">"  ; 


if ($comite == "ab" && $division == 200170  && $annee== 2025)
{ echo "<span class=\"bold colorRed\">Accés Fédérale 3 :</span> Les clubs de <span class=\"bold\"> Millas, Saint-Juéry, Pouyastruc et Moissac </span> évolueront en Fédérale 3 la saison prochaine (1er de poule de la saison régulière).
    Les deux dernières places seront attribuées aux 2 équipes les  mieux classées à l’issue de la phase finale. "
    ;}
    else if ($comite == "ca" && $division == 190170 && $annee== 2025)
{ echo "<span class=\"bold colorRed\">Accés Fédérale 3 :</span> Les clubs de <span class=\"bold\">Saintes, Nontron,Sainte Foy la Grande, saint Sever et Arudy</span> évolueront en Fédérale 3 la saison prochaine (1er de poule de la saison régulière).
    Une dernière place sera attribuée a l' équipe la  mieux classée à l’issue de la phase finale. ";
    ;}

echo "</div>"   ; 
echo "<br>";
}




function accesReg1($comite, $division, $annee)  {

    echo " <div class= \"center styleArial size3 alignLeft\">"  ; 
if ($comite == "ab" && $division == 200180 && $annee == 2025)
{

echo "<span class=\"bold colorRed\">Info : </span>A l’issue des huitiemes, les équipes qualifiées seront classées de 1 à 8 en fonction du
classement général de la saison régulière pour élaborer un nouveau tableau";
echo "<br>";
echo "<span class=\"bold colorRed\">Accés Régionale 1 :</span> Les vainqueurs des 8me de finale évolueront en Régionale 1 la saison prochaine. ";
}

// NOUVELLE AQUITAINE

else if ($comite == "ca" && $division == 190170)
{ echo "";
    ;}
    echo "</div>"   ; 
    echo "<br>";

// AUVERGNE RHÔNE ALPES


}

function accesReg2($comite, $division, $annee)  {


    if ($comite == "ab" && $division == 200180 && $annee == 2025)
    {
    
    echo "A l’issue des huitiemes, les équipes qualifiées seront classées de 1 à 8 en fonction du
    classement général de la phase préliminaire pour éloborer un nouveau tableau.";
    }
    
    // NOUVELLE AQUITAINE
    
    else if ($comite == "ca" && $division == 190170)
    { echo "Accés Fédérale 3 : Les clubs de Saintes, Nontron,Sainte Foy la Grande, saint Sever et Arudy évolueront en Fédérale 3 la saison prochaine (1er de poule de la saison régulière)
        Une dernière place pour acceder à la fédérale 3 seré attribuée au l' équipe la  mieux classée à l’issue de la phase finale ";
        ;}
    
    
    // AUVERGNE RHÔNE ALPES
    
    
    }
?>