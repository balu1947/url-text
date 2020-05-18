<?php 
    
  $url = 'http://localhost:10080/wordpress/wp-admin/plugins.php?key1=value11&key2=value22&key3=value33'; 
 
  $url_components = parse_url($url); 
  
  parse_str($url_components['query'], $params); 
   
 $file=fopen("data.txt","a+");
 fwrite($file,"key1 :");
 fwrite($file,$params['key1']."   ");
 fwrite($file,"key2 :");
 fwrite($file,$params['key2']."   ");
 fwrite($file,"key3 :");
 fwrite($file,$params['key3']."\n");
 fclose($file);
echo"done"
  ?> 