<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PhpLeague</title>
<meta name="generator" content="MultiAstuces.com" />
<style type="text/css" media="screen">
body{font-family:Arial,sans-serif;font-size:100%;background-color:#e1ddd9;margin:0;padding:0;}#Content{position:absolute;top:50%;left:50%;width:400px;height:200px;overflow:hidden;background-color:#fff;border:1px solid #000;text-align:center;margin:-100px 0 0 -200px;padding:1px;}#Content h1{font-size:1.4em;text-align:right;color:#fff;background-color:#464646;margin:0;padding:5px;}#Content h2{font-size:1.2em;color:#000;margin:20px 0 15px;padding:0;}#Content p{font-size:0.7em;color:#000;margin:15px 0 0;padding:0;}#Content a{text-decoration:none;color:#000;}#Sport span{font-size:1em;font-weight:700;margin:0;}#Sport span:first-child{text-transform:uppercase;}
</style>
<script type="text/javascript" src="./scripts/jquery-1.4.4.min.js"></script>
<script type="text/javascript">(function($){$.fn.extend({airport:function(array){var self=$(this);var chars=['a','b','c','d','e','f','g',' ','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','-','.'];var longest=0;var items=items2=array.length;function pad(a,b){return a+new Array(b-a.length+1).join(' ')}$(this).empty();while(items--)if(array[items].length>longest)longest=array[items].length;while(items2--)array[items2]=pad(array[items2],longest);spans=longest;while(spans--)$(this).prepend("<span class='c"+spans+"'></span>");function testChar(a,b,c,d){if(c>=array.length)setTimeout(function(){testChar(0,0,0,0)},1000);else if(d>=longest)setTimeout(function(){testChar(0,0,c+1,0)},1000);else{$(self).find('.c'+a).html((chars[b]==" ")?"&nbsp;":chars[b]);setTimeout(function(){if(b>chars.length)testChar(a+1,0,c,d+1);else if(chars[b]!=array[c].substring(d,d+1).toLowerCase())testChar(a,b+1,c,d);else testChar(a+1,0,c,d+1)},20)}}testChar(0,0,0,0)}})})(jQuery);$(document).ready(function(){$('#Content p').css('opacity',0).fadeTo(2000,1);$('#Sport').airport(['football','handball','hockey','rugby'])});</script>
</head>

<body>

<div id="Content">
	<h1>PHPLeague</h1>
	<h2>Application Web<br /><br />de gestion sportives et de pronostics</h2>
	<span id="Sport"></span>
	<p><a href="http://www.multiastuces.com">PHPLeague</a> &copy; 2001-<?php echo date('Y'); ?></p>
</div>

</body>

</html>