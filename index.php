<?php

$content = file_get_contents('https://open.spotify.com');
$content = str_replace('</title>','</title><base href="https://open.spotify.com/" target="_top"/>', $content);
echo $content;

echo "

<style>
#hplogo{display:none;}
#pmocntr2{display:none;}
#lga{
	background-image:url(http://desk.cybrhome.com/widgets/about/logo.png);
	background-repeat:no-repeat;
	background-position:center;
	height:200px;
	}
</style>

";


?>
