<?php

require('../config.php') ;
require('../data_connect.php') ;
require('../function_consult.php');

$page  = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
$limit = isset($_REQUEST['rows']) ? $_REQUEST['rows'] : NULL;
$sidx  = isset($_REQUEST['sidx']) ? $_REQUEST['sidx'] : NULL;
$sord  = isset($_REQUEST['sord']) ? $_REQUEST['sord'] : NULL;

function Strip($value)
{
	if(get_magic_quotes_gpc() != 0)
  	{
    	if(is_array($value))  
			if ( array_is_associative($value) )
			{
				foreach( $value as $k=>$v)
					$tmp_val[$k] = stripslashes($v);
				$value = $tmp_val; 
			}				
			else  
				for($j = 0; $j < sizeof($value); $j++)
        			$value[$j] = stripslashes($value[$j]);
		else
			$value = stripslashes($value);
	}
	return $value;
}
function array_is_associative ($array)
{
    if ( is_array($array) && ! empty($array) )
    {
        for ( $iterator = count($array) - 1; $iterator; $iterator-- )
        {
            if ( ! array_key_exists($iterator, $array) ) { return true; }
        }
        return ! array_key_exists(0, $array);
    }
    return false;
}

if (!function_exists('json_encode') OR version_compare(PHP_VERSION, '5.2.0', '<'))
{
	include('./scripts/json.php');

	$json = new Services_JSON();
}

ouverture();

if (!$sidx) { $sidx = 1; }

$wh = "";
$searchOn = Strip($_REQUEST['_search']);
if($searchOn=='true') {
	$sarr = Strip($_REQUEST);
	foreach( $sarr as $k=>$v) {
		switch ($k) {
			case 'id':
			case 'invdate':
			case 'name':
			case 'mail':
				$wh .= " WHERE ".$k." LIKE '".$v."%'";
				break;
			case 'amount':
			case 'tax':
			case 'id':
				$wh .= " WHERE ".$k." = ".$v;
				break;
		}
	}
}

$result = mysql_query('SELECT COUNT(*) AS count FROM phpl_membres'.$wh);
$row    = mysql_fetch_array($result, MYSQL_ASSOC);
$count  = $row['count'];

if( $count > 0 ) { $total_pages = ceil($count / $limit); } else { $total_pages = 0; }

if ($page > $total_pages) { $page = $total_pages; }

$start  = $limit * $page - $limit;
$SQL    = "SELECT id, nom, prenom, pseudo, mail FROM phpl_membres".$wh." ORDER BY $sidx $sord LIMIT $start , $limit";
$result = mysql_query($SQL);

$responce->page    = $page;
$responce->total   = $total_pages;
$responce->records = $count;

$i = 0;

while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	$responce->rows[$i]['id']   = $row['id'];
	$responce->rows[$i]['cell'] = array($row['id'], $row['pseudo'], $row['nom'], $row['prenom'], $row['mail']);

	$i++;
}

mysql_close();

if (!function_exists('json_encode') OR version_compare(PHP_VERSION, '5.2.0', '<'))
{
	echo $json->encode($responce);
}
else
{
	echo json_encode($responce);
}

?>