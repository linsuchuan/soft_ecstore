<?php
echo 1;
mysql_connect('127.0.0.1','root','whzEQINFO') or die(mysql_error());

mysql_select_db('shop_eqinfo_software') or die(mysql_error());
$query = mysql_query('show databases') or die(mysql_error());
$r = mysql_fetch_assoc($query);
print_r($r);
