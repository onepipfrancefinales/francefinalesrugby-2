<?php
/*
$php_divisions = "phppro_divisions";
$php_equipes = "phppro_equipes";
$php_clmnt_graph = "phppro_clmnt_graph";
$php_clubs = "phppro_clubs";
$division = "990120";

// nom division



require("../connect/connexion6.php");
//graphiqueEvolClassement ($phpLeague, $division, $bdd);
graphiqueEvolClassement("phppro", 990110, $bdd);
*/

function graphiqueEvolClassement($phpLeague, $division, $bdd)
{
  $php_divisions = $phpLeague . "_divisions";
  $php_equipes = $phpLeague . "_equipes";
  $php_clmnt_graph = $phpLeague . "_clmnt_graph";
  $php_clubs = $phpLeague . "_clubs";
  /*
$reponse = $bdd->query(" SELECT nom
						FROM $php_divisions
						WHERE id= '$division'
						");
while ($row = $reponse->fetch()) {
  $titre = $row[0];
}


echo "<br>";
echo "titre : " . $titre;
echo "<br>";
echo "<br>";
*/
  // -------   Déclaration des tableaux --------

  // tableau des id (equipes)
  $tabEquipes = array();
  // tableau des noms  (equipes)
  $tabNomEquipes = array();

  //Nombre d'équipes
  $reponse = $bdd->query(" SELECT COUNT(*)
						FROM $php_equipes
						WHERE id_champ = '$division'");
  $nbreEquipes = $reponse->fetch();
  $nbreEquipes = $nbreEquipes[0];

  //echo "nombre d'équipes : " . $nbreEquipes;
  //echo "<br>";

  //nombre de journées
  switch ($nbreEquipes) {
    case 5 || 6:
      $nbreJournees = 10;
      break;
    case 7 || 8:
      $nbreJournees = 14;
      break;
    case 9 || 10:
      $nbreJournees = 18;
      break;
    case 11 || 12:
      $nbreJournees = 22;
      break;
    case 13 || 14:
      $nbreJournees = 26;
      break;
    case 15 || 16:
      $nbreJournees = 30;
      break;
  }

  //echo "<br>";

  // Tableau des id des équipes
  $reponse = $bdd->query(" SELECT id
						FROM $php_equipes
						WHERE id_champ = '$division'");
  while ($row = $reponse->fetch()) {
    $tabEquipes[] = $row[0];
  }

  foreach ( $tabEquipes as $equipeId)
  {

  //  echo $equipeId;echo "<br>";
    if ( strlen($equipeId) > 7 )
      $equipeId2 = substr($equipeId,-7);
  //  echo $equipeId2;echo "<br>";
     array_push($tabEquipes,  $equipeId2);
  }

  /* initiatilisation des tableaux des journées pour chaque équipes*/

  for ($i = 1; $i <= $nbreEquipes[0]; $i++) {
    ${"equipe" . $i} = array();


  }

  // -------   Récupèration des données des différentes journées --------

  for ($i = 0; $i <= ($nbreEquipes - 1); $i++) {
    // echo "Equipe" . $i;
    // echo "<br>";
    $reponse = $bdd->query(" SELECT classement
						FROM $php_clmnt_graph
						WHERE id_equipe = '$tabEquipes[$i]'
            ORDER BY fin	ASC	");
    while ($row = $reponse->fetch()) {
      ${"equipe" . $i + 1}[] = $row[0];
    }
    //traitement de toutes les journées

    switch ($i) {
      case 0:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e1j" . $j} = $equipe1[$j - 1];
        }
        break;
      case 1:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e2j" . $j} = $equipe2[$j - 1];
        }
        break;
      case 2:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e3j" . $j} = $equipe3[$j - 1];
        }
        break;
      case 3:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e4j" . $j} = $equipe4[$j - 1];
        }
        break;
      case 4:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e5j" . $j} = $equipe5[$j - 1];
        }
        break;
      case 5:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e6j" . $j} = $equipe6[$j - 1];
        }
        break;
      case 6:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e7j" . $j} = $equipe7[$j - 1];
        }
        break;
      case 7:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e8j" . $j} = $equipe8[$j - 1];
        }
        break;
      case 8:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e9j" . $j} = $equipe9[$j - 1];
        }
        break;

      case 9:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e10j" . $j} = $equipe10[$j - 1];
        }
        break;
      case 10:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e11j" . $j} = $equipe11[$j - 1];
        }
        break;
      case 11:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e12j" . $j} = $equipe12[$j - 1];
        }
        break;
      case 12:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e13j" . $j} = $equipe13[$j - 1];
        }
        break;
      case 13:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e14j" . $j} = $equipe14[$j - 1];
        }
        break;

      case 14:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e15j" . $j} = $equipe15[$j - 1];
        }
        break;
      case 15:
        for ($j = 1; $j <= $nbreJournees; $j++) {
          ${"e16j" . $j} = $equipe16[$j - 1];
        }
        break;
    }
  }

  //  Tableau des noms des équipes avec son traitement des caractères particuliers (')
  foreach ($tabEquipes  as $equipe) {
    //echo $equipe;
    //echo "<br>";

    $reponse = $bdd->query(" SELECT nom
						FROM $php_clubs
						WHERE id = '$equipe'");

    while ($row = $reponse->fetch()) {
      $tabNomEquipes[] = $row[0];
    }
  }



  $traitementTabNomEquipe = array();
  foreach ($tabNomEquipes  as $nomEquipe) {
    $nomEquipe = str_replace("'", "\'", $nomEquipe);
    array_push($traitementTabNomEquipe,  $nomEquipe);
    // echo $nomEquipe; echo "<br>";

  }
  /*
foreach ($traitementTabNomEquipe  as $nomEquipe) {
  echo $nomEquipe;
  echo "<br>";
}
*/
?>

  <html>

  <head>
    <meta charset="utf-8" />
    <!-- Include the ECharts file you just downloaded -->
    <script src="
https://cdn.jsdelivr.net/npm/echarts@6.0.0/dist/echarts.min.js
"></script>
  </head>

  <body>
    <!-- Prepare a DOM with a defined width and height for ECharts -->

    <div id="main" style="width: 750px;height:500px;border-style: solid;border-color:#3B487F;" class="marginAuto"></div>


    <script type="text/javascript">
      var app = {};

      var chartDom = document.getElementById('main');
      var myChart = echarts.init(chartDom);
      var option;

      let x = <?php echo $nbreEquipes; ?>;
      switch (x) {
        case 6:
          journees = ['J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10'];
          names = ['Equipe1', 'Equipe2', 'Equipe3', 'Equipe4', 'Equipe5', 'Equipe6'];
          break;
        case 8:
          journees = ['J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14'];
          names = ['Equipe1', 'Equipe2', 'Equipe3', 'Equipe4', 'Equipe5', 'Equipe6', 'Equipe7', 'Equipe8'];
          break;
        case 10:
          journees = ['J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J15', 'J16', 'J17', 'J18'];
          names = ['Equipe1', 'Equipe2', 'Equipe3', 'Equipe4', 'Equipe5', 'Equipe6', 'Equipe7', 'Equipe8', 'Equipe9', 'Equipe10'];
          break;
        case 12:
          journees = ['J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J15', 'J16', 'J17', 'J18', 'J19', 'J20', 'J21', 'J22'];
          names = ['Equipe1', 'Equipe2', 'Equipe3', 'Equipe4', 'Equipe5', 'Equipe6', 'Equipe7', 'Equipe8', 'Equipe9', 'Equipe10', 'Equipe11', 'Equipe12'];
          break;
        case 14:
          journees = ['J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J15', 'J16', 'J17', 'J18', 'J19', 'J20', 'J21', 'J22', 'J23', 'J24', 'J25', 'J26', ];
          names = ['Equipe1', 'Equipe2', 'Equipe3', 'Equipe4', 'Equipe5', 'Equipe6', 'Equipe7', 'Equipe8', 'Equipe9', 'Equipe10', 'Equipe11', 'Equipe12', 'Equipe13', 'Equipe14'];
          break;
        case 16:
          journees = ['J1', 'J2', 'J3', 'J4', 'J5', 'J6', 'J7', 'J8', 'J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J15', 'J16', 'J17', 'J18', 'J19', 'J20', 'J21', 'J22', 'J23', 'J24', 'J25', 'J26', 'J27', 'J28', 'J29', 'J30'];
          names = ['Equipe1', 'Equipe2', 'Equipe3', 'Equipe4', 'Equipe5', 'Equipe6', 'Equipe7', 'Equipe8', 'Equipe9', 'Equipe10', 'Equipe11', 'Equipe12', 'Equipe13', 'Equipe14', 'Equipe15', 'Equipe16'];
          break;
      }

      option = {
        title: {
    text: 'Evolution des classements',
  },
       /*
  tooltip: {
          trigger: 'item'
        },
        grid: {
          left: 30,
          right: 110,
          bottom: 30,
          containLabel: true
        },
        */
        /*
        toolbox: {
          feature: {
            saveAsImage: {}
          }
        },
        */
        xAxis: {
          type: 'category',
          splitLine: {
            show: true
          },
          axisLabel: {
            margin: 10,
            fontSize: 14
          },
          boundaryGap: false,
          data: journees
        },
        yAxis: {
          type: 'value',
          axisLabel: {
            margin: 30,
            fontSize: 16,
            formatter: '#{value}'
          },
          inverse: true,
          interval: 1,
          min: 1,
          max: names.length
        },

        series: [{
            //Equipe 
            data: [<?php echo $e1j1 . "," . $e1j2 . "," . $e1j3 . ',' . $e1j4 . ',' . $e1j5 . ',' . $e1j6 . ',' . $e1j7 . ',' . $e1j8 . ',' . $e1j9 . ',' . $e1j10 . ',' .
                      $e1j11 . "," . $e1j12 . "," . $e1j13 . ',' . $e1j14 . ',' . $e1j15 . ',' . $e1j16 . ',' . $e1j17 . ',' . $e1j18 . ',' . $e1j19 . ',' . $e1j20 . ',' .
                      $e1j21 . "," . $e1j22 . "," . $e1j23 . ',' . $e1j24 . ',' . $e1j25 . ',' . $e1j26 . ',' . $e1j27 . ',' . $e1j28 . ',' . $e1j29 . ',' . $e1j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[0]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },

          {
            //Equipe 2
            data: [<?php echo $e2j1 . "," . $e2j2 . "," . $e2j3 . ',' . $e2j4 . ',' . $e2j5 . ',' . $e2j6 . ',' . $e2j7 . ',' . $e2j8 . ',' . $e2j9 . ',' . $e2j10 . ',' .
                      $e2j11 . "," . $e2j12 . "," . $e2j13 . ',' . $e2j14 . ',' . $e2j15 . ',' . $e2j16 . ',' . $e2j17 . ',' . $e2j18 . ',' . $e2j19 . ',' . $e2j20 . ',' .
                      $e2j21 . "," . $e2j22 . "," . $e2j23 . ',' . $e2j24 . ',' . $e2j25 . ',' . $e2j26 . ',' . $e2j27 . ',' . $e2j28 . ',' . $e2j29 . ',' . $e2j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[1]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 3
            data: [<?php echo $e3j1 . "," . $e3j2 . "," . $e3j3 . ',' . $e3j4 . ',' . $e3j5 . ',' . $e3j6 . ',' . $e3j7 . ',' . $e3j8 . ',' . $e3j9 . ',' . $e3j10 . ',' .
                      $e3j11 . "," . $e3j12 . "," . $e3j13 . ',' . $e3j14 . ',' . $e3j15 . ',' . $e3j16 . ',' . $e3j17 . ',' . $e3j18 . ',' . $e3j19 . ',' . $e3j20 . ',' .
                      $e3j21 . "," . $e3j22 . "," . $e3j23 . ',' . $e3j24 . ',' . $e3j25 . ',' . $e3j26 . ',' . $e3j27 . ',' . $e3j28 . ',' . $e3j29 . ',' . $e3j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[2]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 4
            data: [<?php echo $e4j1 . "," . $e4j2 . "," . $e4j3 . ',' . $e4j4 . ',' . $e4j5 . ',' . $e4j6 . ',' . $e4j7 . ',' . $e4j8 . ',' . $e4j9 . ',' . $e4j10 . ',' .
                      $e4j11 . "," . $e4j12 . "," . $e4j13 . ',' . $e4j14 . ',' . $e4j15 . ',' . $e4j16 . ',' . $e4j17 . ',' . $e4j18 . ',' . $e4j19 . ',' . $e4j20 . ',' .
                      $e4j21 . "," . $e4j22 . "," . $e4j23 . ',' . $e4j24 . ',' . $e4j25 . ',' . $e4j26 . ',' . $e4j27 . ',' . $e4j28 . ',' . $e4j29 . ',' . $e4j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[3]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 5
            data: [<?php echo $e5j1 . "," . $e5j2 . "," . $e5j3 . ',' . $e5j4 . ',' . $e5j5 . ',' . $e5j6 . ',' . $e5j7 . ',' . $e5j8 . ',' . $e5j9 . ',' . $e5j10 . ',' .
                      $e5j11 . "," . $e5j12 . "," . $e5j13 . ',' . $e5j14 . ',' . $e5j15 . ',' . $e5j16 . ',' . $e5j17 . ',' . $e5j18 . ',' . $e5j19 . ',' . $e5j20 . ',' .
                      $e5j21 . "," . $e5j22 . "," . $e5j23 . ',' . $e5j24 . ',' . $e5j25 . ',' . $e5j26 . ',' . $e5j27 . ',' . $e5j28 . ',' . $e5j29 . ',' . $e5j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[4]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 6
            data: [<?php echo $e6j1 . "," . $e6j2 . "," . $e6j3 . ',' . $e6j4 . ',' . $e6j5 . ',' . $e6j6 . ',' . $e6j7 . ',' . $e6j8 . ',' . $e6j9 . ',' . $e6j10 . ',' .
                      $e6j11 . "," . $e6j12 . "," . $e6j13 . ',' . $e6j14 . ',' . $e6j15 . ',' . $e6j16 . ',' . $e6j17 . ',' . $e6j18 . ',' . $e6j19 . ',' . $e6j20 . ',' .
                      $e6j21 . "," . $e6j22 . "," . $e6j23 . ',' . $e6j24 . ',' . $e6j25 . ',' . $e6j26 . ',' . $e6j27 . ',' . $e6j28 . ',' . $e6j29 . ',' . $e6j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[5]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 7
            data: [<?php echo $e7j1 . "," . $e7j2 . "," . $e7j3 . ',' . $e7j4 . ',' . $e7j5 . ',' . $e7j6 . ',' . $e7j7 . ',' . $e7j8 . ',' . $e7j9 . ',' . $e7j10 . ',' .
                      $e7j11 . "," . $e7j12 . "," . $e7j13 . ',' . $e7j14 . ',' . $e7j15 . ',' . $e7j16 . ',' . $e7j17 . ',' . $e7j18 . ',' . $e7j19 . ',' . $e7j20 . ',' .
                      $e7j21 . "," . $e7j22 . "," . $e7j23 . ',' . $e7j24 . ',' . $e7j25 . ',' . $e7j26 . ',' . $e7j27 . ',' . $e7j28 . ',' . $e7j29 . ',' . $e7j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[6]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 8
            data: [<?php echo   $e8j1 . "," . $e8j2 . "," . $e8j3 . ',' . $e8j4 . ',' . $e8j5 . ',' . $e8j6 . ',' . $e8j7 . ',' . $e8j8 . ',' . $e8j9 . ',' . $e8j10 . ',' .
                      $e8j11 . "," . $e8j12 . "," . $e8j13 . ',' . $e8j14 . ',' . $e8j15 . ',' . $e8j16 . ',' . $e8j17 . ',' . $e8j18 . ',' . $e8j19 . ',' . $e8j20 . ',' .
                      $e8j21 . "," . $e8j22 . "," . $e8j23 . ',' . $e8j24 . ',' . $e8j25 . ',' . $e8j26 . ',' . $e8j27 . ',' . $e8j28 . ',' . $e8j29 . ',' . $e8j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[7]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 9
            data: [<?php echo  $e9j1 . "," . $e9j2 . "," . $e9j3 . ',' . $e9j4 . ',' . $e9j5 . ',' . $e9j6 . ',' . $e9j7 . ',' . $e9j8 . ',' . $e9j9 . ',' . $e9j10 . ',' .
                      $e9j11 . "," . $e9j12 . "," . $e9j13 . ',' . $e9j14 . ',' . $e9j15 . ',' . $e9j16 . ',' . $e9j17 . ',' . $e9j18 . ',' . $e9j19 . ',' . $e9j20 . ',' .
                      $e9j21 . "," . $e9j22 . "," . $e9j23 . ',' . $e9j24 . ',' . $e9j25 . ',' . $e9j26 . ',' . $e9j27 . ',' . $e9j28 . ',' . $e9j29 . ',' . $e9j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[8]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 10
            data: [<?php echo $e10j1 . "," . $e10j2 . "," . $e10j3 . ',' . $e10j4 . ',' . $e10j5 . ',' . $e10j6 . ',' . $e10j7 . ',' . $e10j8 . ',' . $e10j9 . ',' . $e10j10 . ',' .
                      $e10j11 . "," . $e10j12 . "," . $e10j13 . ',' . $e10j14 . ',' . $e10j15 . ',' . $e10j16 . ',' . $e10j17 . ',' . $e10j18 . ',' . $e10j19 . ',' . $e10j20 . ',' .
                      $e10j21 . "," . $e10j22 . "," . $e10j23 . ',' . $e10j24 . ',' . $e10j25 . ',' . $e10j26 . ',' . $e10j27 . ',' . $e10j28 . ',' . $e10j29 . ',' . $e10j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[9]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 11
            data: [<?php echo $e11j1 . "," . $e11j2 . "," . $e11j3 . ',' . $e11j4 . ',' . $e11j5 . ',' . $e11j6 . ',' . $e11j7 . ',' . $e11j8 . ',' . $e11j9 . ',' . $e11j10 . ',' .
                      $e11j11 . "," . $e11j12 . "," . $e11j13 . ',' . $e11j14 . ',' . $e11j15 . ',' . $e11j16 . ',' . $e11j17 . ',' . $e11j18 . ',' . $e11j19 . ',' . $e11j20 . ',' .
                      $e11j21 . "," . $e11j22 . "," . $e11j23 . ',' . $e11j24 . ',' . $e11j25 . ',' . $e11j26 . ',' . $e11j27 . ',' . $e11j28 . ',' . $e11j29 . ',' . $e11j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[10]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 12
             data: [<?php echo $e12j1 . "," . $e12j2 . "," . $e12j3 . ',' . $e12j4 . ',' . $e12j5 . ',' . $e12j6 . ',' . $e12j7 . ',' . $e12j8 . ',' . $e12j9 . ',' . $e12j10 . ',' .
                      $e12j11 . "," . $e12j12 . "," . $e12j13 . ',' . $e12j14 . ',' . $e12j15 . ',' . $e12j16 . ',' . $e12j17 . ',' . $e12j18 . ',' . $e12j19 . ',' . $e12j20 . ',' .
                      $e12j21 . "," . $e12j22 . "," . $e12j23 . ',' . $e12j24 . ',' . $e12j25 . ',' . $e12j26 . ',' . $e12j27 . ',' . $e12j28 . ',' . $e12j29 . ',' . $e12j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[11]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 13
              data: [<?php echo $e13j1 . "," . $e13j2 . "," . $e13j3 . ',' . $e13j4 . ',' . $e13j5 . ',' . $e13j6 . ',' . $e13j7 . ',' . $e13j8 . ',' . $e13j9 . ',' . $e13j10 . ',' .
                      $e13j11 . "," . $e13j12 . "," . $e13j13 . ',' . $e13j14 . ',' . $e13j15 . ',' . $e13j16 . ',' . $e13j17 . ',' . $e13j18 . ',' . $e13j19 . ',' . $e13j20 . ',' .
                      $e13j21 . "," . $e13j22 . "," . $e13j23 . ',' . $e13j24 . ',' . $e13j25 . ',' . $e13j26 . ',' . $e13j27 . ',' . $e13j28 . ',' . $e13j29 . ',' . $e13j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[12]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 14
              data: [<?php echo $e14j1 . "," . $e14j2 . "," . $e14j3 . ',' . $e14j4 . ',' . $e14j5 . ',' . $e14j6 . ',' . $e14j7 . ',' . $e14j8 . ',' . $e14j9 . ',' . $e14j10 . ',' .
                      $e14j11 . "," . $e14j12 . "," . $e14j13 . ',' . $e14j14 . ',' . $e14j15 . ',' . $e14j16 . ',' . $e14j17 . ',' . $e14j18 . ',' . $e14j19 . ',' . $e14j20 . ',' .
                      $e14j21 . "," . $e14j22 . "," . $e14j23 . ',' . $e14j24 . ',' . $e14j25 . ',' . $e14j26 . ',' . $e14j27 . ',' . $e14j28 . ',' . $e14j29 . ',' . $e14j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[13]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 15
              data: [<?php echo $e15j1 . "," . $e15j2 . "," . $e15j3 . ',' . $e15j4 . ',' . $e15j5 . ',' . $e15j6 . ',' . $e15j7 . ',' . $e15j8 . ',' . $e15j9 . ',' . $e15j10 . ',' .
                      $e15j11 . "," . $e15j12 . "," . $e15j13 . ',' . $e15j14 . ',' . $e15j15 . ',' . $e15j16 . ',' . $e15j17 . ',' . $e15j18 . ',' . $e15j19 . ',' . $e15j20 . ',' .
                      $e15j21 . "," . $e15j22 . "," . $e15j23 . ',' . $e15j24 . ',' . $e15j25 . ',' . $e15j26 . ',' . $e15j27 . ',' . $e15j28 . ',' . $e15j29 . ',' . $e15j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[14]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          },
          {
            //Equipe 16
              data: [<?php echo $e16j1 . "," . $e16j2 . "," . $e16j3 . ',' . $e16j4 . ',' . $e16j5 . ',' . $e16j6 . ',' . $e16j7 . ',' . $e16j8 . ',' . $e16j9 . ',' . $e16j10 . ',' .
                      $e16j11 . "," . $e16j12 . "," . $e16j13 . ',' . $e16j14 . ',' . $e16j15 . ',' . $e16j16 . ',' . $e16j17 . ',' . $e16j18 . ',' . $e16j19 . ',' . $e16j20 . ',' .
                      $e16j21 . "," . $e16j22 . "," . $e16j23 . ',' . $e16j24 . ',' . $e16j25 . ',' . $e16j26 . ',' . $e16j27 . ',' . $e16j28 . ',' . $e16j29 . ',' . $e16j30; ?>],
            name: '<?php echo $traitementTabNomEquipe[15]; ?>',
            type: 'line',
            smooth: true,
            emphasis: {
              focus: 'series'
            },
            endLabel: {
              show: true,
              formatter: '{a}',
              distance: 20
            },
          }
        ]
      };


      option && myChart.setOption(option);

     
    </script>
  <?php
}
  ?>