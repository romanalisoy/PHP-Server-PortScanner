<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);

$host = '34.116.225.149';
//$ports = array(22, 5432, 27017, 7, 8000, 8080, 3000);
$ports = array(80);

foreach ($ports as $port)
{
    $connection = @fsockopen($host, $port, $errno, $errstr, 2);

    if (is_resource($connection))
    {
        echo '<h2>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.</h2>' . "\n";

        fclose($connection);
    }
    else
    {
        echo '<h2>' . $host . ':' . $port . ' is not responding.</h2>' . "\n";
    }
}
