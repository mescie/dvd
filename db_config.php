<?php
$db = array (
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'dbname' => 'dvd_collectie'
);

if(!mysql_connect($db['host'], $db['user'], $db['pass']))
{
    trigger_error('Fout bij verbinden: '.mysql_error());
}
elseif(!mysql_select_db($db['dbname']))
{
    trigger_error('Fout bij selecteren database: '.mysql_error());
}
else
{
    $sql = "SET SESSION sql_mode = 'ANSI,ONLY_FULL_GROUP_BY'";
    if(!mysql_query($sql))
    {
        trigger_error('MySQL in ANSI niet mogelijk');
    }
}
?> 