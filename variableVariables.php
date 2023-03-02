<?php

/* Set a variable variables */ 
$cmw = 'm1cmw';
$$cmw = 'm2cmw';

echo ${$cmw};

/* shows m2cmw */ 

/* Set prefix variable */ 
$mastercmw = 'm1, m2'; 
$prefixvar = 'master'; 

echo ${$prefixvar. 'cmw'};

/* shows m1, m2 */ 

?>
