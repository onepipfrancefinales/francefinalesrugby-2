<?php
/* 32me / 32meAR  Pas de 32me */
if (substr($type, 0, 3) == '964' or substr($type, 0, 3) == '764')
	require '32meAR.php';
elseif (substr($type, 0, 3) == '932' or substr($type, 0, 3) == '732')
	require '32me.php';

/*	16me / 16meAR / Pas de 16me*/
if (substr($type, 3, 2) == '32')
	require '16meAR.php';
elseif (substr($type, 3, 2) == '16')
	require '16me.php';

/*	8me / 8meAR / Pas de 8me */
if (substr($type, 5, 2) == '16')
	require '08meAR.php';
elseif (substr($type, 5, 2) == '08')
	require '08me.php';

/* quarts /quarts AR /Pas de Quarts*/
if (substr($type, 7, 2) == '08')
	require '04me_quartsAR.php';
elseif (substr($type, 7, 2) == '04')
	require '04me_quarts.php';

/* demi / demi AR / pas de demi*/
if (substr($type, 9, 2) == '04')
	require '02me_demiAR.php';
elseif (substr($type, 9, 2) == '02')
	require '02me_demi.php';

/* finale / finale AR */
if (substr($type, 9, 2) == '02') {
	require '01me_finale.php';
} else {
	//finale AR = 22
	require '01me_finaleAR.php';
}
