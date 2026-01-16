<?php

define('MOD', 'consult');

require('../config.php') ;
require('../function_consult.php');

include('../header.php');

ouverture();

?>
<div id="topbar">
	<div id="title">
		<h1>PHPLeague</h1>
	</div>
</div>

<div id="content">

<?php

if ($ACT_MENU == 1)
{
	include('index_menu.php');
}
else
{
	echo '	<div class="Large40P TblCenter Info TxtCenter"><p>Menu d&eacute;sactiv&eacute par l\'administrateur.</p></div>'."\n";
}

?>

</div>

<?php

include('../footer.php');

?>