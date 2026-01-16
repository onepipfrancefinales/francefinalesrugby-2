<?php

if (stristr($_SERVER['HTTP_USER_AGENT'], 'iPhone') || strpos($_SERVER['HTTP_USER_AGENT'], 'iPod') || strpos($_SERVER['HTTP_USER_AGENT'], 'iPad'))
{
	$AGENT = 'iphone';
	$STYLE = '../'.REP_THEME.'iphone/iphone.min.css';
	$BODY  = ' onload="window.scrollTo(0, 1)"';
}
else
{
	$AGENT = '';
	$STYLE = '../'.REP_THEME.MOD.'/stylesheet.css';
	$BODY  = '';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $lang; ?>" xml:lang="<?php echo $lang; ?>">

<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo CHARSET_HEADER; ?>" />
<?php

if ($AGENT == 'iphone')
{

?>
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="format-detection" content="telephone=no" />
<?php

}

?>
<title>PhpLeague</title>
<link type="text/css" rel="stylesheet" href="<?php echo $STYLE; ?>" media="screen" />
</head>

<body<?php echo $BODY; ?>>
