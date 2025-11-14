<?php
$configFile = 'config.txt';

if (is_readable($configFile)) {
    $config = array();

    $configLines = file($configFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($configLines as $line) {
        $indexSeparated = explode("=", $line);
        
        if (count($indexSeparated) == 2) {
            $config[$indexSeparated[0]] = $indexSeparated[1];
        }
    }

    print_r($config);
}
?>