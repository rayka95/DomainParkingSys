<?php

include('jdf.php');
	
	function refreshlist(){
		file_put_contents("todaylist.txt",null);
		$domainlist = @file("dlist.txt");
                $domainlist = array_unique($domainlist);
		file_put_contents("today.txt",jdate("Y/m/d"));
		$domaincount = count($domainlist);
		for($i=0 ;$i<20 ;$i++){
		$rdomain = $domainlist[mt_rand($i,$domaincount-1)];
		file_put_contents("todaylist.txt",$rdomain,FILE_APPEND);
		
	}
	
	}
	if(!(file_exists("today.txt"))){
	file_put_contents("today.txt",jdate("Y/m/d"));
	}
	if(!(file_exists("todaylist.txt"))){
	file_put_contents("todaylist.txt",jdate("Y/m/d"));
	refreshlist();
	}

		$dfile = @file("today.txt");
		$todaylist = @file("todaylist.txt");
		
		if ($dfile[0] != jdate("Y/m/d")){	
		refreshlist();
		}
	
?>
<html> 

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="theme-color" content="#A9C811"/> 
<meta name="msapplication-navbutton-color" content="#A9C811"> 
<meta name="apple-mobile-web-app-status-bar-style" content="#A9C811"> 
<title>GreenDomains.ir IR Domains for sale - دامنه های سبز - حراجی دامنه</title> 
<meta name="Description" content="GreenDomains.ir IR Domains for sale - دامنه های سبز - حراجی دامنه"> 
<meta name="Keywords" content="irdomain,greendomains,irtld,forsale,itarashe"> 

<link rel="stylesheet" href="css/style.css"> 
</script> 
</head>

<body> 

<header> <h1><a href="/" target="_self"> Green Domains For Sale | حراجی دامنه های سبز</a></h1>

<div class="topmenu"> 
<ul> 
<li class="currentpage"><a href="/">صفحه نخست</a></li>
<li><a href="#">خرید دامنه</a></li>
</ul> 
</div></header>

<section class="containter"> 



<div class="clearfix">
</div>

<div id="result"> 
<result>

لیست دامنه های حراجی گرین دامین امروز<red> <?php


 echo(jdate("Y/m/d")); ?> </red> 

<article>
<?php
$file = @file("todaylist.txt");
                $lines = count($file); 
                ini_set('max_execution_time', 3000);
                for($i=0;$i<$lines;$i++){
                    print_r("<p><a href=http://".$file[$i].">".($i+1)."- ".$file[$i]."</a>");
                }
?>

</article>

</result>

</div>

<a href="#" target="_self"> <button class="submit" value="order">خرید دامنه از حراجی</button>	</a>
<div class="clearfix">
</div></section>
 <footer> 

<div class="footerbox">

<p> Made in IRAN </p>
<blockquote>ساخت ایران
</blockquote> <a href="http://ITarashe.cloud" target="_blank" title="ITarashe | آی تراشه"><figure class="logo"></figure></a> 
</div></footer> 
</body>
</html>
