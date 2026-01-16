<html>
    <head>
        <h2>test<sup>3title="hhhhhhh"</sup></h2>
        <style>
            #myDialog {
                border: 2px solid gray;
                border-radius: 40px;
            }
        </style>
    </head>
    <body>
      <?php $tabLigue=array(1,2,3); ?>
        <dialog id="myDialog">
        <?php    
        foreach ($tabLigue as $idLigue) {
echo $idLigue."<br>";

        }?>
        <p>Koor.fr Dialog demonstration</p>
            
            <form method="dialog">
                <button>Annuler</button>
            </form>
        </dialog>
        <button onclick="myDialog.showModal();">Open dialog box</button>
    </body>




  







<div class="titreEncadre"> Mise à jour des résultats</div>

<p class="bold size4 styleArial"><a href="../informations/majParSMS/pageOutil.php">

    Mettez à jour résultats et classements de vos équipes</a></p>

<!--    
<p class="bold size4 styleArial"><a href="../personnalisation/session2/index.php">
    (mise à jour possible a partir d'un PC ou d'un smartphone)<br>
  </a> </p>
-->
<br>
<div class="titreEncadre"> Calendrier de votre saison</div>

<p class="size4 center styleArial bold">
  Imprimer le calendrier de votre équipe<br>
  <span class="size3 center">(optimisé pour les poules de 10 clubs)</span>
</p>

<p class="texte"><a href="calendrier/pageCalendrier2.php">cliquez ici</a></p>
</div>

<div class="titreEncadre"> Compléter le fiche d'information votre club</div>
<form action="../consultation/pageclub00.php" method="GET">
  <fieldset class="fieldsetG">
    <legend>
      Palmarès par club
    </legend>
    <br>
    <input class="inputG" type="text" name="champion" title="Saisissez le nom  ou le code FFR de votre club">
    <br>
    <input class="inputG" type="submit" value="Valider">
  </fieldset>
</form>

<div class="titreEncadre"> Feuille de match</div>

<p class="size5 styleArial">
  <a href="feuilleMatch/connexion/page_FM.php">Réalisez vos feuilles de matchs <br>
    en moins de 2 minutes.</a><br>
  <span class="styleArial size6 bold">Testez de suite !!!</span>
</p>

<div>
  <a href="feuilleMatch/connexion/page_FM.php"><img src="feuilleMatch/images/enteteFFR.png" width="552" height="119"></a>

</div>

<style>
  .titreEncadre {
    font-size: 25px;
    width: 550px;
    font-weight: bold;
    border: 1px solid;
    background: #FFCC66;
    font-family: Arial, Helvetica, sans-serif;
    margin-bottom: 50px;
    margin-top: 50px;
    margin-left: auto;
    margin-right: auto;
  }







</style>