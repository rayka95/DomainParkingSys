<?php
$domain = str_replace("www.","",$_SERVER['SERVER_NAME']);

?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo($_SERVER['SERVER_NAME']); ?> is For Sale</title>
        <link href="tools/style.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="tools/jquery.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Josefin+Sans:600,700|Damion' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">

    </head>
    <body>
    <div class="black"></div>
    <div id="wrapper">
        <div id="header">
            <h1><?php echo($domain); ?></h1>
            <h2><strong class="sep-one"></strong>For Sale<strong class="sep-two"></strong></h2>
        </div>
        <div id="middle">
            <p>Contact Me <br>
                <a href="&#x6d;&#x61;&#105;&#108;&#x74;&#x6f;&#58;&#105;&#64;&#109;&#x68;&#97;&#115;&#97;&#x6e;&#105;&#x2e;&#x69;&#x72;<?php echo("?subject=Domain%20Trading%20".$domain);?>"> Send Request To Start ! </a>

                </span></p>
        </div>

    </div>
    </body>
    </html>


<?php
try {
    $pop=0 ; $nop=0 ; $new=0 ;
// staart analyzing !
    $pdirectory = "./PopListz/";
    $directory = "./DomainListz/";
    $filename= ($directory.$domain.".txt");
    $pfilename= ($pdirectory.$domain.".txt");
    if(isset($filename)){
        $count = file_get_contents($filename);
        if($count > 1000) {
            $pop =1;
        }
    }else{$new=1;}
    if(isset($pfilename)){
        $count = file_get_contents($pfilename);
        if($count < 1000) {
            $nop =1;
        }
    }else{$new=1;}

    if ($new == 1){
        $count = "1";
        file_put_contents($filename, $count);
    }
    if($pop == 1){


        $count = intval($count);
        $count++;
        $count = (string) $count;
        file_put_contents($pfilename,$count);
        if(isset($filename)){
            unlink($filename);
        }
    }
    if ($nop == 1 ){

        $count++;
        $count = (string) $count;
        file_put_contents($filename, $count);


    }
}
catch (exception $ex1)
{
    file_put_contents("errors.txt",$ex1."\r\n",FILE_APPEND);
}


?>
