<?php

$REP = isset($_REQUEST['rep']) ? $_REQUEST['rep'] : NULL;

if (move_uploaded_file($_FILES['file']['tmp_name'], '../images/'.$REP.'/'.basename($_FILES['file']['name'])))
{
	echo 'success';
}
else
{
	echo 'error';
}

?>